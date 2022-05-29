const menutabs=document.querySelector('.menu-tabs');
menutabs.addEventListener('click',(e)=>{
    if (e.target.classList.contains("menu-tab-item") && !e.target.classList.contains("active")) {
        const target=e.target.getAttribute("data-target");
        menutabs.querySelector(".active").classList.remove("active");
        e.target.classList.Add("active");
        const menusection =document.querySelector(".menu-section");
        menusection.querySelector(".menu-tab-content.active").classList.remove("active");
        menusection.querySelector(target).classList.add("active");
    }
});