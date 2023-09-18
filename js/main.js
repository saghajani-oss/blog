const hamburgerNavBtn = document.querySelector("#open__nav-btn");
const closeNavBtn = document.querySelector("#close__nav-btn");
const hamburgerItems = document.querySelector(".hamburger__items");

// ============== OPEN HAMBURGER MENU ==============
function openNav() {
  hamburgerItems.style.display = "flex";
  hamburgerNavBtn.style.display = "none";
  closeNavBtn.style.display = "inline-block";
}
hamburgerNavBtn.addEventListener("click", openNav);

// ============== CLOSE HAMBURGER MENU ==============
function closeNav() {
  hamburgerItems.style.display = "none";
  closeNavBtn.style.display = "none";
  hamburgerNavBtn.style.display = "inline-block";
}
closeNavBtn.addEventListener("click", closeNav);

// ============== SIDEBAR BUTTON IN SMALL DEVICES ==============

const showSidebarBtn = document.querySelector("#show__sidebar-btn");
const hideSidebarBtn = document.querySelector("#close__sidebar-btn");
const sidebar = document.querySelector("aside");

// ============== SHOW SIDEBAR IN SMALL DEVICES ==============
function showSidebar() {
  sidebar.style.left = "0";
  showSidebarBtn.style.display = "none";
  hideSidebarBtn.style.display = "inline-block";
}
showSidebarBtn.addEventListener("click", showSidebar);

// ============== HIDE SIDEBAR IN SMALL DEVICES ==============
function closeSidebar() {
  sidebar.style.left = "-100%";
  hideSidebarBtn.style.display = "none";
  showSidebarBtn.style.display = "inline-block";
}
hideSidebarBtn.addEventListener("click", closeSidebar);
