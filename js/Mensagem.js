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
        var mensagem = 'section.mensagem-ok';
        var mensagemContainer = 'section.mensagem-ok .container';
        
        //função para aprensat a mensamgem de resposta!
        $(function(){
            $(mensagemContainer).append('<p>Email Cadastrado com sucesso! a</p>');
            //mostrando mensagem na tela e desaparesendo.
            
            //mostrando na tela e deseparesendo.
            $(mensagem).fadeIn(2000, function(){
                setInterval(function(){
                    $(mensagem).fadeOut(2000);
                }, 4000)
            });
        });
    } else {
        //variaveis com os elementos.
        var mensagem = 'section.mensagem-ok';
        var mensagemContainer = 'section.mensagem-ok .container';
        
        //função para aprensat a mensamgem de resposta!
        $(function(){
            //estilo da mensagem de erro.
            $(mensagem).css('background','#D3474A');
            
            $(mensagemContainer).append('<p>Erro ao cadastrar email! a</p>');
            //mostrando mensagem na tela e desaparesendo.
            
            //mostrando na tela e deseparesendo.
            $(mensagem).fadeIn(2000, function(){
                setInterval(function(){
                    $(mensagem).fadeOut(2000);
                }, 4000)
            });
        });

    }
}