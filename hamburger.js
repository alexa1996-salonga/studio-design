// When button is CLICKED, nav will DISPLAY

const togButton = document.querySelector(".Hamburg-button")
const mainNav = document.querySelector(".navbar")


// adding css class to button and nav when clicked to make button disappear and nav appear
togButton.addEventListener("click", function () {
    console.log("Button is PRESSED!");

    togButton.classList.toggle("menuActive");
    mainNav.classList.toggle("navOn");
});

// Stations dropdown
const stationsToggle = document.querySelector("#stations-toggle");
const dropdownMenu = document.querySelector(".dropdown-content");

stationsToggle.addEventListener("click", function (e) {

    if (window.innerWidth < 971) {
        e.preventDefault();
        dropdownMenu.classList.toggle("show");
    }

});
