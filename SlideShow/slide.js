var image = document.querySelector(".slide-show").children;

var numberImage = image.length;

var btnPrev = document.querySelector("#prev");

var btnNext = document.querySelector("#next");
var number = document.querySelector("#number");
var index = 0;

btnNext.onclick = function () {
  showImage("next");
};

btnPrev.onclick = function () {
  showImage("prev");
};

const showImage = (button) => {
  if (button == "next") {
    index++;
    if (index == numberImage) {
      index = 0;
    }
    number.innerHTML = index + 1;
  } else {
    index--;
    if (index < 0) {
      index = numberImage - 1;
    }
    number.innerHTML = index + 1;
  }

  for (let i = 0; i < numberImage; i++) {
    image[i].classList.remove("show");
  }
  image[index].classList.add("show");
};
