const hBtn = document.querySelector('.h-btn');
let hOpen = false;
hBtn.addEventListener('click', () => {
  if(!hOpen) {
    hBtn.classList.add('open');
    hOpen = true;
  } else {
    hBtn.classList.remove('open');
    hOpen = false;
  }
});
