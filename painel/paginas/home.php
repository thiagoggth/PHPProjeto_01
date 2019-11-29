<?php
    $usuariosOnline = Painel::listarUsuariosOnline();
?>
<div class="box-content">

    <h2><i class="fas fa-home"></i> Painel de controle - <?=NOME_EMPRESA?></h2>

    <div class="wraper-info">

        <div class="w30 single-wraper bg-warning">
                <h2>Usuarios online</h2> 
                <p>
                    <?php
                       echo count($usuariosOnline);
                    ?>
                </p>                       
        </div>
        
        <div class="w30 single-wraper bg-danger">
            <h2>Total de visitas</h2>
        </div>

        <div class="w30 single-wraper bg-success">
            <h2>Visitas hoje</h2>
            <p>Ut cupidatat exercitation officia ex id. Laboris aliquip incididunt qui proident commodo. Duis aliqua excepteur eiusmod commodo. Minim do laboris reprehenderit pariatur labore officia occaecat exercitation irure pariatur. Ullamco esse aute magna anim nostrud.</p>
        </div>

    </div><!--whraper-info-->

</div><!--box-content-->

<div class="box-content w100">

    <h2><i class="fas fa-users"></i> Usuarios online</h2>

    <table class="table text-center">

        <thead>
            <th>IP</th>
            <th>Ultima ação</th>            
        </thead>
        
        <tbody>
            <?php
                foreach($usuariosOnline as $key => $value){
            ?>
            <tr>
                <td><?= $value['ip'] ?></td>
                <td><?= date('d/m/y H:m:s', strtotime($value['ultima_acao'])) ?></td>
            </tr>          
            
            <?php } ?>
        </tbody>        
    </table><!--table-responsive-->

</div><!--box-content-->