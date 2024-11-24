const dropdownContent = document.querySelector(".dropdown__content-responsive");
const sidebarLi = document.querySelector(".dropdown-responsive");

sidebarLi.addEventListener("click", openDropdown);

function openDropdown() {
  dropdownContent.style.display = "block";
}

//
const dropdownContent2 = document.querySelector(
  ".dropdown__content-responsive-2"
);
const sidebarLi2 = document.querySelector(".dropdown-responsive-2");

sidebarLi2.addEventListener("click", openDropdown2);

function openDropdown2() {
  dropdownContent2.style.display = "block";
}

// CLOSE AND OPEN MENU
function closeMenu() {
  sidebar.style.display = "none";
}

function showSidebar() {
  sidebar.style.display = "block";
}

const sidebar = document.querySelector(".sidebar");
const hamburgerMenu = document.querySelector(".hamburger-menu");
hamburgerMenu.addEventListener("click", showSidebar);
const xMenu = document.querySelector(".icon-x");
xMenu.addEventListener("click", closeMenu);
