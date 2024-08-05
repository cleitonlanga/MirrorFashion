let banners = ["img/destaque-home.png", "img/destaque-home-2.png"];
let bannerActual = 0;

function trocarBanner(){
    bannerActual = (bannerActual+1) % banners.length
    document.querySelector(".destaque img").src = banners[bannerActual]
}

setInterval(trocarBanner, 4000)