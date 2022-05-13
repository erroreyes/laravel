const nextE1=document.querySelector(".next");
const imageContainerE1.querySelector(".image-slider");
const imgE1.querySelector("img");
const prevE1=document.querySelector(".prev");

prevE1.addEventListner("click",()
=>{
    currentImg--;
    clearTimeout(timeOut);
    uploadImg();
});
let currentImg=1;
let timeOut;
nextE1.addEventListner("click",()
=>{
    currentImg++;
    clearTimeout(timeOut);
    uploadImg();
});
uploadImg();
function uploadImg(){
    if (currentImg>imgE1.length) {
        currentImg=1;
    }
    elseif(currentImg<1){
        currentImg=imgE1.length;
    }
    imageContainerE1.style.transform=`translateX(-${(currentImg-1)*500}px)`;
    timeOut=setTimeout(() => {
        currentImg++;
        uploadImg();
    }, 3000);
}