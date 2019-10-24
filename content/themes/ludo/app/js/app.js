import {
  jarallax,
  jarallaxElement,
  jarallaxVideo
} from 'jarallax';

jarallaxVideo();
jarallaxElement();

var app = {

  $banner: null,
  $body: null,
  $header: null,

  init: function() {
    console.log('init');

    app.$body = $('body');
    app.$header = $('.header');
    
    jarallax(document.querySelector('.banner'), {
      speed: 0.5
    });

    //Je vérifie que ma class call existe dans ma page pour ne pas faire bugguer mon script JS
    var call = document.querySelector('.call');

    if (call) {
      jarallax(document.querySelector('.call'), {
        speed: 0.5
      });
    }

    //J'ajoute un écouteur d'evenement au scroll sur ma fenetre pour mon titre principal
    window.addEventListener("scroll", app.handleDisplayTitle);


    // Je vais déposer un écouteur d'évènements sur mes élèments qui ont la classe "ui-button"
    // En gros, j'écoute le click sur mes boutons d'ouverture/fermeture du menu
    $('.menu-burger').on('click', app.handleToggleMenu);

    //Je sélectionne mes classes .post
    // var post = document.querySelectorAll('.post');

    // for(var i=0; i<post.length; i++) {
    //   //post[i].addEventListener("mouseover", function(evt) {
    //     post[i].addEventListener("mouseenter", app.handleScrollPost);
    //     //evt.currentTarget.classList.add('scroll');
    //     //evt.currentTarget.toggleClass('clicque');
    //     //console.log(evt);
    //   }//);
    
    //J'ajoute un écouteur d'évenement au scroll sur la fenetre
    window.addEventListener("scroll", app.handleSolidNavOrNot);
  },
  handleDisplayTitle: function(event) {
    console.log("scroll sur mon titre");

    //je cible mon titre principal
    var ludoteinte = document.querySelector('.pres').offsetTop;
    var nav = document.querySelector('main').offsetTop;
    var ludoheight = document.querySelector('.pres').offsetHeight;

    //J'aditionne la hauteur de mon element par rapport a ma fenetre + la hauteur de celui ci meme
    console.log(ludoteinte + ludoheight);

    console.log(nav);

    //J'aditionne la hauteur de mon élément par rapport a ma fenetre a sa hauteur meme et je compare a la hauteur de mon element main par rapport a ma fenetre

    //Si ceux ci aditionnés sont a une hauteur superieure ou égale :
    if((ludoteinte + ludoheight) >= nav ) {
      console.log("disparais petit titre");
      document.querySelector('.pres').style.opacity = "0";
      document.querySelector('.pres').style.transition = "1s";
      
      //Sinon :
    } else {
      document.querySelector('.pres').style.opacity = "1";
      //document.querySelector('.pres').style.transition = "3s";
    }
      
  },
  handleSolidNavOrNot: function(event) {
    //console.log("tu scrolles !");

    var nav = document.querySelector('main').offsetTop;
    var nav2 = document.querySelector('.header').offsetHeight;
    var solidnav = document.querySelector(".header");
    // console.log(window.pageYOffset);
    // console.log(nav);
    // console.log(nav2.offsetHeight);

    if ((window.pageYOffset + nav2) > nav) {
      //console.log("t'es en dessous des posts");
      solidnav.classList.add("solid");
    } else {
      //console.log("t'es au dessus");
      solidnav.classList.remove("solid");
    }
  },
  // handleScrollPost: function (evt) {

  //   // console.log(evt.currentTarget.offsetTop);
  //   // console.log(evt.currentTarget);
  //   evt.currentTarget.classList.add('scroll');
  // },
  // Ma clé (et donc ma méthode) est ici préfixé par "handle"
  // cela me permet de savoir que cette méthode est appelée suite à un déclenchement d'évènement
  handleToggleMenu: function(event) {

    console.log('handleToggleMenu');

    // Je demande au navigateur d'arreter l'évènement là tout de suite maintenant !!!
    // En gros, il ne change/recharge pas la page au click sur le lien !
    event.preventDefault();

    // J'applique sur mon élèment "toggleClass"
    // https://api.jquery.com/toggleclass/
    // Si la classe existe, elle est supprimée, sinon elle est ajoutée
    app.$body.toggleClass('menu-visible');
  }

};

$(app.init);
