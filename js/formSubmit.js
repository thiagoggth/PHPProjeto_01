$(function(){
    
    $('form').submit(function(){
        var form = $(this);
        $.ajax({
            beforeSend:function(){
                $('.overlay-loading').fadeIn();
            },
            url:include_path+'ajax/formularios.php',
            method:'post',
            dataType:'json',
            data:form.serialize()           
        }).done(function(data){
            if(data.repitEmail){                
                $('.overlay-loading').fadeOut();
                $('form input[type=email]').prop('value', '');
                showEmailMessageEmailRepit();                
            }else{
                if(data.resposta){                    
                    $('.overlay-loading').fadeOut();
                    $('form input[type=email]').prop('value', '');
                    showEmailMessageCuston(false);
                }else{
                    $('.overlay-loading').fadeOut();
                    showEmailMessageCuston(true);
                }
            }
            
        });
        return false;
    });
    
});