window.addEventListener("scroll", function() {
    var scrollPos = window.pageYOffset || document.documentElement.scrollTop || document.body.scrollTop;

    if (scrollPos > 1000) {
        document.querySelector(".scroll-to-top").classList.add("show");
    } else {
        document.querySelector(".scroll-to-top").classList.remove("show");
    }
});

document.querySelector(".scroll-to-top").addEventListener("click", function(e) {
    e.preventDefault();
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
});
