$(function(){    
    var open = true;
    var windowSize = $(window)[0].innerWidth;
    var targetSizeMenu = (windowSize <= 400) ? 220 : 300;

    $(window).resize(function () {
        windowSize = $(window)[0].innerWidth;
        targetSizeMenu = (windowSize <= 400) ? 220 : 300;

        if(windowSize > 768){
            
            if(open == false){
                $('.content, header').css('left','0');
                $('.content, header').css('width', '100%');
                $(".center").css('max-width','1400px');
                $(".center").css('margin','0 auto');

            }else{
                if($('.menu').innerWidth() == 220){
                    $('.content, header').css('width', 'calc(100% - 220px)');
                    $('.content, header').css('left', '220px');                    
                }else{                    
                    $('.content, header').css('width', 'calc(100% - 300px)');
                    $('.content, header').css('left', '300px');
                }
                
            }            
            $('.menu > .menu-btn').css('display','none');
        }else{
            open = false;
            $('.menu > .menu-btn').css('display','block');
            $('.menu').css('.display','none');
            $('.menu').css('width','0');
            $('.content, header').css('left','0');
            $('.content, header').css('width', '100%');
            
            
        }
    });   
    
    
    if(windowSize <= 768){
        $('.menu > .menu-btn').css('display','block');
        open = false;
    }    
    $('.menu-btn').click(function(){        
        if(open == true){
            //se o menu tiver aberto.
            if(windowSize <= 768){
                $('.menu').animate({'width':0});
                
            }else{
                $('.menu').animate({'left':-300});
                $('.content, header').animate({'left':0});
                $('.content, header').css('width', '100%');
                $(".center").css('max-width','1400px');
                $(".center").css('margin','0 auto');                                
            }
            open = false;
        }else{
            //se o menu tiver fechado.
            if(windowSize <= 768){
                $('.menu').animate({'left': targetSizeMenu+'px'});
                $('.menu').css('z-index','999');
                $('.body').css('overflow','none');
            }else{
                $('.menu').animate({'left':'0'});
                $(".center").css('max-width','');
                $(".center").css('margin','0');
                $('.content, header').css('width', 'calc(100% - 300px)');
                $('.content, header').animate({'left': '300px'});
            }
            open = true;
        }
    });
    
});