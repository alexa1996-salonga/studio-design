// When button is CLICKED, nav will DISPLAY

const togButton = document.querySelector(".Hamburg-button")
const mainNav = document.querySelector(".navbar")


// adding css class to button and nav when clicked to make button disappear and nav appear
togButton.addEventListener("click", function () {
    console.log("Button is PRESSED!");

    togButton.classList.toggle("menuActive");
    mainNav.classList.toggle("navOn");
})