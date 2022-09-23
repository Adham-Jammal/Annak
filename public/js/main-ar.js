let preloader = document.getElementById("preloader");
if (preloader) {
    window.addEventListener("load", () => {
        preloader.style.transition = '.5s';
        preloader.style.opacity = '0';
        preloader.style.visibility = 'hidden';
        });
}

window.addEventListener("load", () => {
    x = document.querySelectorAll('.links a')
    for( let i = 0 ; i < x.length  ; i++){
        x[i].addEventListener('click' , () => {
            document.querySelector('.burger').click()
        })
    }
    AOS.init({
        duration: 1000,
        easing: "ease-in-out",
        once: true,
        mirror: false,
    });
});

let scrollTopButton = document.getElementById("scroll_top");
window.onscroll = () => {
    if (scrollY >= 430) {
        scrollTopButton.style = "left: 10px;transform: rotate(0deg);";
    } else {
        scrollTopButton.style = "left: -60px;";
    }
};
scrollTopButton.onclick = function () {
    window.scrollTo({
        top: 0,
        behavior: "smooth",
    });
};

$(".preview-carousel").owlCarousel({
    margin : 10,
    loop: true,
    rtl : true,
    autoplay: true,
    autoplaySpeed: 1000,
    autoplayTimeout: 6000,
    dots: true,
    smartSpeed: 1000,
    lazyLoad: true,
    center: true,
    autoplayHoverPause:true,
    responsive:{
        0:{
            items:1,
        },
        768:{
            items:5,
        },
    }
  });
// MAil
let sendBtn = document.getElementById("send")
sendBtn.addEventListener("click" , (e) =>{
    e.preventDefault();
    Email.send({
        Host : "smtp.elasticemail.com",
        Username : "sms@ank-app.sa",
        Password : "27C139715F3B8A039C12A81124368171F5E7",
        To : "sms@ank-app.sa",
        From : "sms@ank-app.sa",
        Subject : "This is the subject",
        Body : "And this is the body"
    }).then(
      message => alert(message)
    );
})

