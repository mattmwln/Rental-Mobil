window.onscroll = function() { 
    var navbar = document.getElementById("myNavbar");
    if (window.pageYOffset > 0) {
        navbar.classList.add("sticky-navbar");
    } else {
        navbar.classList.remove("sticky-navbar");
    }
};
