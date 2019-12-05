<?php 
    $listaEmails = Painel::listaEmails();
?>
<div class="box-content w100">

    <h2><i class="fas fa-users"></i> Lista de e-mails cadastrados</h2>

    <div class ="table-responsive">

        <table class="table text-center table-dark">

            <thead>
                <tr>
                    <th>E-mails</th>
                    <th>Ação</th>            
                </tr>
                
            </thead>
            
            <tbody>
                <?php
                    $usersEmails = count($listaEmails);                
                    if($usersEmails != 0){                
                        foreach($listaEmails as $key => $value){
                ?>
                <tr id="delete_<?=$value['id']?>">
                    <td><?= $value['email'] ?></td>
                    <td><button class="btn btn-danger" onclick="deleteEmail(<?=$value['id']?>)"><i class="far fa-trash-alt"></i></button></td>
                </tr>          
                
                <?php } }else{ ?>
                    <tr>                
                        <td class="" colspan="2"><p>Nenhum email cadastrado!</p></td>
                    </tr>
                <?php } ?>
            </tbody>        
        </table><!--table-responsive-->
    </div>

</div><!--box-content-->