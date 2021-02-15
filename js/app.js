// // Traitememnt du formulaire de conatct
// var res_form = document.querySelector(".res-form");
// var form = document.querySelector("#contactForm");
// form.addEventListener("submit", function(e){
//     e.preventDefault();
//     var data = new FormData(form);
//     var xhr = new XMLHttpRequest();
//     var element_champs_error = document.querySelectorAll('.has-error');
//     console.log(element_champs_error);
//     for (let j = 0; j < element_champs_error.length; j++) {
//         element_champs_error[j].classList.remove('has-error');
//         var span = element_champs_error[j].querySelector('.alert-danger')
//         if(span){
//              span.parentNode.removeChild(span);
//         }
//     }
//     var element_champs_success = document.querySelectorAll('.has-success');
//     for (let j = 0; j < element_champs_success.length; j++) {
//         element_champs_success[j].classList.remove('has-success');
//         var span = element_champs_success[j].querySelector('.alert-success')
//         if(span){
//             span.parentNode.removeChild(span);
//         }
//     }
    
//     xhr.onreadystatechange = function () {
//        if(this.readyState == 4 && this.status == 200){
//             console.log(this.responseText);
//             var res  = JSON.parse(this.responseText);
//             if(res.success){
//                 console.log(res.success);
//                 var champs = form.querySelectorAll('textarea , input')
                
//                 var paragraphe = document.createElement('div');
                
//                 paragraphe.className = 'alert alert-success';
//                 paragraphe.innerHTML = 'Votre message a été bien envoyé .';
//                 res_form.classList.add('has-success');
//                 res_form.appendChild(paragraphe);
//                 for (let i = 0; i < champs.length; i++) {
//                     champs[i].value = "";
                    
//                 }
//             } else {
                
//                 var paragraphe = document.createElement('div');
                
//                 paragraphe.className = 'alert alert-danger';
//                 paragraphe.innerHTML = res.msg;
//                 res_form.parentNode.classList.add('has-error');
//                 res_form.appendChild(paragraphe);
                
//             }
//        } 
//         // else if(this.readyState == 4) {
//         //     alert('une erreur est survenue ...')
//         // }
//     };
//     xhr.open("POST", "/pages/traitementMessage.php", true);
//     // xhr.responseType = "json";
//     xhr.setRequestHeader("X-Requested-With", "xmlhttprequest")
//     xhr.send(data);
//     return false;
// });

// // Animation de la page contact
var controller = new ScrollMagic.Controller();
var tween1 = TweenMax.staggerFromTo(".info-contact", 0.7,
    {opacity:0, y:-100, ease:Power4.easeIn},
    {opacity:1, y:0, ease:Power4.easeIn}, 1
);
var tween2 = TweenMax.staggerFromTo(".form-group", 0.3,
    {opacity:0, y:-100, ease:Power4.easeIn},
    {opacity:1, y:0, ease:Power4.easeIn}, 0.5
);
var tween3 = TweenMax.staggerFromTo(".rs-js", 0.75,
    {opacity:0, x:-100, ease:Power4.easeIn},
    {opacity:1, x:0, ease:Power4.easeIn}, 0.8
);

var scene1 = new ScrollMagic.Scene({triggerElement: "#animate1", offset:-100})
                            .triggerHook(0.4)
                            // .addIndicators({name: "image 1", colorEnd: "red", indent:200})
                            .setTween(tween1)
                            .reverse(false)
                            .addTo(controller)
;
var scene2 = new ScrollMagic.Scene({triggerElement: "#contactForm", offset:-200})
                            .triggerHook(0.5)
                            // .addIndicators({name: "image 1", colorEnd: "red", indent:200})
                            .setTween(tween2)
                            .reverse(false)
                            .addTo(controller)
;
var scene3 = new ScrollMagic.Scene({triggerElement: "#animate3", offset:-500})
                            .triggerHook(0.6)
                            // .addIndicators({name: "image 1", colorEnd: "red", indent:200})
                            .setTween(tween3)
                            .reverse(false)
                            .addTo(controller)
;


// // Animation de la page propriete

var tween4 = TweenMax.staggerFromTo(".am-js", 0.75,
    {opacity:0, x:-100, ease:Power4.easeIn},
    {opacity:1, x:0, ease:Power4.easeIn}, 0.8
);
var scene4 = new ScrollMagic.Scene({triggerElement: "#animate4", offset:-300})
                            .triggerHook(0.7)
                            // .addIndicators({name: "image 1", colorEnd: "red", indent:200})
                            .setTween(tween4)
                            .reverse(false)
                            .addTo(controller)
;
var tween5 = TweenMax.staggerFromTo(".anm-js", 0.75,
    {opacity:0, y:-100, ease:Power4.easeIn},
    {opacity:1, y:0, ease:Power4.easeIn}, 0.8
);
var scene5 = new ScrollMagic.Scene({triggerElement: "#animate5", offset:-400})
                            .triggerHook(0.8)
                            // .addIndicators({name: "image 1", colorEnd: "red", indent:200})
                            .setTween(tween5)
                            .reverse(false)
                            .addTo(controller)
;

// // Animation de la page d'accueil
var tween6 = TweenMax.staggerFromTo(".qsn-js", 0.75,
    {opacity:0, y:-100, ease:Power4.easeIn},
    {opacity:1, y:0, ease:Power4.easeIn}, 0.8
);
var tween7 = TweenMax.staggerFromTo(".loc-img-js", 0.75,
    {opacity:0, x:-100, ease:Power4.easeIn},
    {opacity:1, x:0, ease:Power4.easeIn}, 0.9
);
var tween8 = TweenMax.staggerFromTo(".gerance-js", 0.8,
    {opacity:0, x:-100, ease:Power4.easeIn},
    {opacity:1, x:0, ease:Power4.easeIn}, 0.85
);var tween9 = TweenMax.staggerFromTo(".recouvrement-js", 0.9,
    {opacity:0, x:-100, ease:Power4.easeIn},
    {opacity:1, x:0, ease:Power4.easeIn}, 0.95
);var tween10 = TweenMax.staggerFromTo(".syndic-js", 0.75,
    {opacity:0, y:-100, ease:Power4.easeIn},
    {opacity:1, y:0, ease:Power4.easeIn}, 0.8
);
var scene6 = new ScrollMagic.Scene({triggerElement: "#animate6", offset:-650})
                            .triggerHook(0.9)
                            // .addIndicators({name: "image 1", colorEnd: "red", indent:200})
                            .setTween(tween6)
                            .reverse(false)
                            .addTo(controller)
;
var scene7 = new ScrollMagic.Scene({triggerElement: "#animate7", offset:-650})
                            .triggerHook(0.9)
                            // .addIndicators({name: "image 1", colorEnd: "red", indent:200})
                            .setTween(tween7)
                            .reverse(false)
                            .addTo(controller)
;
var scene8 = new ScrollMagic.Scene({triggerElement: "#animate8", offset:-650})
                            .triggerHook(0.9)
                            // .addIndicators({name: "image 1", colorEnd: "red", indent:200})
                            .setTween(tween8)
                            .reverse(false)
                            .addTo(controller)
;
var scene9 = new ScrollMagic.Scene({triggerElement: "#animate9", offset:-650})
                            .triggerHook(0.9)
                            // .addIndicators({name: "image 1", colorEnd: "red", indent:200})
                            .setTween(tween9)
                            .reverse(false)
                            .addTo(controller)
;
var scene10 = new ScrollMagic.Scene({triggerElement: "#animate10", offset:-650})
                            .triggerHook(0.9)
                            // .addIndicators({name: "image 1", colorEnd: "red", indent:200})
                            .setTween(tween10)
                            .reverse(false)
                            .addTo(controller)
;

// compteur 

let compteur = 0;
  $(window).scroll(function() {
    const top = $('.counter').offset().top-window.innerHeight;

    if(compteur == 0 && $(window).scrollTop() > top){
      $('.counter-value').each(function() {
        let $this = $(this),
        countTo = $this.attr('data-count');
        $({
          countNum: $this.text()
        }).animate({
          countNum: countTo
        },
        {
          duration: 10000,
          easing: 'swing',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
          }
        }); 
      });
      compteur = 1;
    }
  });