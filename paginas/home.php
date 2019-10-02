<link href="../css/style.css">

<section class="banner">
  <div class="bg"></div>
  <div class="container">
    <h2>Deixe seu melhor e-mail</h2>
      
      <?php
        if(isset($_POST['acao'])){
            //enviei o formulario.
            
            if($_POST['email'] != ''){
                $email = $_POST['email'];
                if(filter_var($email, FILTER_VALIDATE_EMAIL)){
                    //TUDO CERTO É UM EMAIL.
                    
                    //Enviando confirmação de cadastro para usuario.
                    $mailMensage= new Email("smtp.gmail.com", 'thiagoggth30@gmail.com', 'animesz16', 'Thiago');
                    $mailMensage->addAdress($email, "Thiago");
                    $info = array('subject'=>'Confirmação de cadastro','body'=>"Bem vindo, seu e-mail: $email foi cadastrado com sucesso");
                    $mailMensage->formatarEmail($info);
                    $mailMensage->enviarEmail();
                    
                    //Enviando para mim mesmo novo email cadastrado.
                    $mailMensage->addAdress("thiagoggth30@gmail.com", "Thiago");
                    $info = array('subject'=>'Novo email cadastrado','body'=>"email: $email foi cadastrado!");
                    $mailMensage->formatarEmail($info);
                    $mailMensage->enviarEmail();
                }else{
                    //email nao e vailido
                    echo '<script>alert("email nao e valido")</script>';
                }
            }else{
                echo '<script>alert("erro!")</script>';
            }
            
        }
      
      ?>
      
    <form method="post">
      <input type="email" name="email" placeholder="E-mail..." required>
      <br>
      <input type="submit" value="Cadastar!" name="acao">
    </form>
  </div>
  <!--container--> 
  
</section>
<!--banner-->

<section class="diferenciais">
    
    <div class="container">
        
        <div class="row  d-flex">
            
            <div class="col-sm card-single d-flex">
                
                <div class="card">
                    
                    <div class="card-img-top">
                        <i class="fab fa-500px"></i> 
                    </div><!--card-img-top-->
          
                    <div class="card-body">
                        <h5 class="card-title">Loren Ipson</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="" class="btn btn-primary">Saiba mais!</a> 
                    </div><!--card-body--> 
          
                </div><!--card-->
        
            </div><!--card-singel-->
            
            <div class="col-sm card-single d-flex">
                
                <div class="card">
                    
                    <div class="card-img-top">
                        <i class="fab fa-accusoft"></i>
                    </div><!--card-img-top-->
          
                    <div class="card-body">
                        <h5 class="card-title">Loren Ipson</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        <a href="" class="btn btn-primary">Saiba mais!</a> 
                    </div><!--card-body--> 
          
                </div><!--card-->
        
            </div><!--card-singel-->
            
            <div class="col-sm card-single d-flex">
                
                <div class="card">
                    
                    <div class="card-img-top">
                        <i class="fab fa-accessible-icon"></i> 
                    </div><!--card-img-top-->
          
                    <div class="card-body">
                        <h5 class="card-title">Loren Ipson</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In vehicula dui ac lorem fringilla rhoncus. Proin non massa vitae neque venenatis interdum. Cras auctor rutrum leo, sed vulputate orci suscipit id. Integer in ligula sapien.</p>
                        <a href="" class="btn btn-primary">Saiba mais!</a> 
                    </div><!--card-body--> 
          
                </div><!--card-->
        
            </div><!--card-singel-->
            
        </div><!--row--> 
            
    </div><!--container-->
    
</section><!--diferenciais-->