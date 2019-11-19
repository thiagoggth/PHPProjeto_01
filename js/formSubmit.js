$(function(){
    
    $('form').submit(function(){
        var form = $(this);
        $.ajax({
            url:include_path+'ajax/formularios.php',
            method:'post',
            dataType:'json',
            data:form.serialize()           
        }).done(function(data){
            if(data.sucesso){
                showEmailMessageCuston(false);
            }else{
                showEmailMessageCuston(true);
            }
        });           
        return false;
    });
    
});