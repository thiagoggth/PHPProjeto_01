function showEmailMessage(validator) {
    //Funcao de mensagens para a criação de estado.

    if (validator == false) {
        $.notify({
            //options
            message: "Mensagem Enviada com sucesso!"
        }, {
                //settings
                type: "success",
                allow_dismiss: false,
                placement: {
                    from: "top",
                    align: "right"
                },
                animate: {
                    enter: 'animated bounceInDown',
                    exit: 'animated fadeOutUp'
                },

            });
    } else {
        $.notify({
            //options
            message: "Erro ao enviar email"
        }, {
                //settings
                type: "danger",

                allow_dismiss: true,
                placement: {
                    from: "top",
                    align: "right"
                },
                animate: {
                    enter: 'animated bounceInDown',
                    exit: 'animated fadeOutUp'
                },
                delay: 3000,
                timer: 2000,

            });

    }
}


function showEmailMessageCuston(validator) {
    //Funcao de mensagens para a criação de estado.

    if (validator == false) {
        //variaveis com os elementos.  
        
        var mensageOk = '.mensagem-ok';
        var mensagemTotal = '<div class ="mensagem-ok bg-success"><p>Email cadastrado com sucesso!</p></div>';
        
        //função para aprensat a mensamgem de resposta!
        $(function(){
            var timer = 4000;
            //mostrando mensagem na tela e desaparesendo.
            
            $('body').append(mensagemTotal);
            
            //mostrando na tela e deseparesendo.
            $(mensageOk).fadeIn(2000);

            $(mensageOk).delay(timer);

            $(mensageOk).fadeOut(2000, function(){
                $(this).remove();
            });
            
        });
    } else {
        //variaveis com os elementos.  
        
        var mensageOk = '.mensagem-ok';
        var mensagemTotal = '<div class ="mensagem-ok bg-danger"><p>Erro ao enviar email</p></div>';
        
        //função para aprensat a mensamgem de resposta!
        $(function(){
            var timer = 4000;
            //mostrando mensagem na tela e desaparesendo.
            
            $('body').append(mensagemTotal);
            
            //mostrando na tela e deseparesendo.
            $(mensageOk).fadeIn(2000);

            $(mensageOk).delay(timer);

            $(mensageOk).fadeOut(2000, function(){
                $(this).remove();
            });
            
        });

    }
}

function showEmailMessageEmailRepit(){
    //variaveis com os elementos.  
    
    var mensageOk = '.mensagem-ok';
    var mensagemTotal = '<div class ="mensagem-ok bg-danger"><p>Este email ja esta cadastrado!</p></div>';
    
    //função para aprensat a mensamgem de resposta!
    $(function(){
        var timer = 4000;
        //mostrando mensagem na tela e desaparesendo.
        
        $('body').append(mensagemTotal);
        
        //mostrando na tela e deseparesendo.
        $(mensageOk).fadeIn(2000);

        $(mensageOk).delay(timer);

        $(mensageOk).fadeOut(2000, function(){
            $(this).remove();
        });

        
    });
}