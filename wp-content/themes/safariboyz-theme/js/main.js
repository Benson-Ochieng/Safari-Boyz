// Back To Top Button
const toTop = document.getElementById("to-top");
toTop.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth",
  });
});

// Loader & animation
const animatedLogo = document.querySelector(".logo-text span");
const animatedLogoImg = document.querySelector(".logo img[alt='logo']");
const animatedLogoImg2 = document.querySelector(".logo img[alt='logo2']");
const loader = document.querySelector(".loader");

document.addEventListener("DOMContentLoaded", () => {
  document.body.style.overflow = "hidden";
  window.addEventListener("load", () => {
    loader.style.display = "none";
    if (loader.style.display === "none") {
      document.body.style.overflow = "auto";
      animatedLogo.style.animation = "control-width 1s steps(11) both";
      animatedLogoImg.style.animation = "rotate 0.5s linear";
      animatedLogoImg2.style.animation = "fade 0.5s linear";
    }
  });
});

// Fixed NavBar
const navBar = document.querySelector("nav");
if (window.innerWidth > 767) {
  window.addEventListener("scroll", () => {
    if (window.scrollY >= 50) {
      navBar.classList.add("fixed");
    } else {
      navBar.classList.remove("fixed");
    }
  });
}

// Header Menu Button In Responsive
const menuBtn = document.querySelector(".menu-btn");
const navLinks = document.querySelector(".nav-links");

menuBtn.addEventListener("click", () => {
  navLinks.classList.toggle("active");
  menuBtn.classList.toggle("active");
  if (menuBtn.classList.contains("active")) {
    menuBtn.innerHTML = `<i class="fa-solid fa-xmark"></i>`;
  } else {
    menuBtn.innerHTML = `<i class="fa-solid fa-bars"></i>`;
  }
});

// Header Slider Image
const slides = [...document.querySelectorAll(".home-page-img")];
const slidesNavi = [...document.querySelectorAll(".home-page-navi span")];
let currentSlide = 0;

slidesNavi.forEach((s) => {
  s.addEventListener("click", () => {
    currentSlide = slidesNavi.indexOf(s);
    slides[0].style.marginLeft = `-${currentSlide * 100}%`;
    slidesNavi.forEach((span) => {
      span.classList.remove("active");
    });
    s.classList.add("active");
  });
});

setInterval(() => {
  nextSlide();
  slidesNavi.forEach((span) => {
    span.classList.remove("active");
  });
  // slidesNavi[currentSlide].classList.add("active");
  slides[0].style.marginLeft = `-${currentSlide * 100}%`;
}, 4000);

function nextSlide() {
  if (currentSlide === slides.length - 1) {
    currentSlide = 0;
  } else {
    currentSlide += 1;
  }
}

const showMore = [...document.querySelectorAll(".show-activities")];
const activities = [...document.querySelectorAll(".activities")];
const activitiesArr = document.querySelectorAll(".activity");
const activitiesContainer = [
  ...document.querySelectorAll(".activities-cntainer"),
];
let showed = false;
console.log(activitiesContainer);

showMore.forEach((btn) => {
  btn.addEventListener("click", () => {
    if (!showed) {
      btn.innerText = "Show Less...";
      activitiesContainer[showMore.indexOf(btn)].style.height = `${
        activitiesContainer[showMore.indexOf(btn)].scrollHeight
      }px`;
    } else {
      btn.innerText = "Show More...";
      activitiesContainer[showMore.indexOf(btn)].style.height = `${
        activitiesContainer[showMore.indexOf(btn)].children[0].scrollHeight + 15
      }px`;
    }
    showed = !showed;
  });
});
window.addEventListener("load", () => {
  if (activitiesArr.length > 2) {
    activitiesContainer.forEach((ac) => {
      ac.style.height = `${ac.children[0].scrollHeight + 15}px`;
    });
  }
});
