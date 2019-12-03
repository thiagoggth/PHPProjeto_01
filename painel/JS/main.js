

$(function(){
    var open = true;
    
    var windowSize = $(window)[0].innerWidth;
    var targetSizeMenu = (windowSize <= 400) ? 220 : 300;
    
    if(windowSize <= 768){
        open = false;           
    }

    
    $('.menu-btn').click(function(){
        if(open == true){            
            if(windowSize <= 768){
                $('.menu').animate({'width':0});                
                $('.menu > .menu-btn').css('display','none');                
            }else{                
                //se o menu tiver aberto.
                $('.menu').animate({'width':0});
                $('.content, header').animate({'left':0});
                $('.content, header').css('width', '100%');
                $(".center").css('max-width','1400px');
                $(".center").css('margin','0 auto');
            }
            open = false;
        }else{
            if(windowSize <= 768){                
                $('.menu').animate({'width': targetSizeMenu+'px'});                
                $('.menu').css('z-index','999');
                $('.menu > .menu-btn').css('display','block');
                
                
            }else{
                //se o menu tiver fechado.
                $('.menu').animate({'width':'300px'});
                $(".center").css('max-width','');
                $(".center").css('margin','0');
                $('.content, header').css('width', 'calc(100% - 300px)');
                $('.content, header').animate({'left': '300px'});
            }
            open = true;
        }
    });
});