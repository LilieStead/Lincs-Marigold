// Creates function to reveal content on a page when a user scrolls
function reveal() {
    var reveals = document.querySelectorAll(".fade");
    for (var i = 0; i < reveals.length; i++) {
        var windowHeight = window.innerHeight;
        var elementTop = reveals[i].getBoundingClientRect().top;
        var elementVisible = 150;
        if (elementTop < windowHeight - elementVisible) {
            // if element is visible then add the id appear
            reveals[i].classList.add("appear");
        } else{
            // delete the appear id from the element 
            reveals[i].classList.remove("appear");
        }
    }
    
}
// function will detect when user scrolls 
window.addEventListener("scroll", reveal);