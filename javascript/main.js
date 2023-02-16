const openMenu = document.querySelector(".open-menu");
const closeMenu = document.querySelector(".close-menu");
const navbarUl = document.querySelector(".navbar ul");

const openMenuControl = () => {
    openMenu.style.display = "none";
    closeMenu.style.display= "block";
    navbarUl.style.display = "block";
}

const closeMenuControl = () => {
    closeMenu.style.display = "none";
    openMenu.style.display = "block";
    navbarUl.style.display = "none";
}

openMenu.addEventListener("click", () => {
    openMenuControl();
});

closeMenu.addEventListener("click", () => {
    closeMenuControl();
})