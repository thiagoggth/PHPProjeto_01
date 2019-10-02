var mobile = $('.menu-mobile');
var menuMobile = $('.menu-mobile ul');

$(function(){
    $(mobile).click(function(){
        $(menuMobile).slideToggle();
    })
})
