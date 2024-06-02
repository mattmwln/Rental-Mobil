<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['id']) || !isset($_SESSION['user_name'])) {
    header("Location: index.php");
    exit();
}

// Check if the delete account form is submitted
if (isset($_POST['confirm_delete'])) {
    include "db_conn.php";
    
    $id = $_SESSION['id'];

    // Delete user record from the database
    $sql = "DELETE FROM users WHERE id='$id'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        // Logout the user and redirect to index page
        session_unset();
        session_destroy();
        header("Location: home.php?success=Your account has been deleted successfully");
        exit();
    } else {
        header("Location: delete-account.php?error=Failed to delete account");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Account</title>
    <link rel="stylesheet" type="text/css" href="./assets/style2.css">
</head>
<body>
    <form action="delete-account.php" method="post">
        <h2>Delete Account</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

        <p>Are you sure you want to delete your account? This action cannot be undone.</p>
        
        <button type="submit" name="confirm_delete">Yes, Delete My Account</button>
        <a href="home.php" class="ca">Cancel</a>
    </form>

</body>
</html>
