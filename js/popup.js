// PopUp
const form = document.querySelectorAll('.special-offers');
const formArray = [...form];
const overlay = document.getElementById('overlay');
const popup = document.querySelector(".postContainer");
let dopInfa = 0;

for (let index = 0; index < formArray.length; index++) {
    const element = formArray[index];
    element.addEventListener('click', function (event) {
      const ignore = element.querySelector('.product-button');
      if(event.target === ignore) return;
        overlay.style.display = 'block';

        const clonedDiv = element.cloneNode(true);

        clonedDiv.classList.remove("product-container-overlay");
        clonedDiv.classList.add("product-container-overlay-clone");
        popup.appendChild(clonedDiv);
        dopInfa = popup.querySelector('#hide');
        dopInfa.style.display = 'block';

    });
};

overlay.addEventListener('click', function (event) {
    if (event.target === overlay) {
        overlay.style.display = 'none';
        dopInfa.style.display = 'block';
        const deleteDiv = popup.querySelector(".product-container-overlay-clone");
        deleteDiv.remove();
    }
});