//Кнопка меню
let button = document.querySelector("#nav-icon3");
let element = document.querySelector("#head-nav");
button.addEventListener("click", function () {
  if (element.classList.contains("active")) {
    element.classList.add("animation-close");
    setTimeout(function () {
        element.classList.remove("active");
        element.classList.remove("animation-close");
      }, 200);
}
else {
    element.classList.add("active");
    element.classList.add("animation-open");
    setTimeout(function () {
        element.classList.remove("animation-open");
      }, 200);
}
});
$(document).ready(function () {
  $('#nav-icon3').click(function () {
    $(this).toggleClass('open');
  });
});

const mediaQuery = window.matchMedia('(min-width: 1280px)') 

if (mediaQuery.matches) {
    // Скрол страницы и изменение навигации.
const myElement = document.querySelector('.navigarion');

window.addEventListener('scroll', function () {
  // Получаем текущую позицию скролла от верха страницы
  const scrollPosition = window.scrollY;
  // Изменяем свойства объекта в зависимости от позиции скролла
  if (scrollPosition < 120) {
    const scrollValue = 120 - scrollPosition;
    myElement.style.marginTop = `${scrollValue}px`;
  } else {
    myElement.style.marginTop = `0`;
  }
});
}