$(function(){
    var open = true;

    var windowSize = $(window)[0].innerWidth;

    if(windowSize <= 768){
        open = false;        
    }

    $('.menu-btn').click(function(){
        if(open = true){
            //se o menu tiver aberto.
            $('.menu').animate({'width':0, 'padding':0});            
            $('.content, header').css('width', '100%');
            $('.content, header').animate({'left':0}, function(){
                open = false;
            });            
            
        }else{
            //se o menu tiver fechado.
            $('.menu').animate({'width':'300px', 'padding':'10px'});            
            $('.content, header').css('width', 'calc(100% - 300px)');
            $('.content, header').animate({'left':'300px'}, function(){
                open = true;
            });            
        }
    });
});