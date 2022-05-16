const nextE1 = document.querySelector(".next");
const imageContainerE1 = document.querySelector(".image-container");
const imgE1 = document.querySelectorAll("img");
// console.log(imgE1);
const prevE1 = document.querySelector(".prev");

prevE1.addEventListener("click", () => {
    currentImg--;
    clearTimeout(timeOut);
    uploadImg();
});
let currentImg = 1;
let timeOut;
nextE1.addEventListener("click", () => {
    currentImg++;
    clearTimeout(timeOut);
    uploadImg();
});
uploadImg();
function uploadImg() {
    if (currentImg > imgE1.length) {
        currentImg = 1;
    }
    else if (currentImg < 1) {
        currentImg = imgE1.length;
    }
    imageContainerE1.style.transform = `translateX(-${(currentImg - 1) * 550}px)`;
    timeOut = setTimeout(() => {
        currentImg++;
        uploadImg();
    }, 3000);
};