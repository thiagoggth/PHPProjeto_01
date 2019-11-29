<?php
    $usuariosOnline = Painel::listarUsuariosOnline();
    $totalVisitas = Painel::pegarVisitasTotais();
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
            <p><?=$totalVisitas['visitasTotal']?></p>
        </div>

        <div class="w30 single-wraper bg-success">
            <h2>Visitas hoje</h2>
            <p><?=$totalVisitas['visitasHoje']?></p>
        </div>

    </div><!--whraper-info-->

</div><!--box-content-->

<div class="box-content w100">

    <h2><i class="fas fa-users"></i> Usuarios online</h2>

    <div class ="table-responsive">

        <table class="table text-center table-striped table-dark">

            <thead>
                <tr>
                    <th class="w50">IP</th>
                    <th class="w50">Ultima ação</th>            
                </tr>
                
            </thead>
            
            <tbody>
                <?php
                    $users = count($usuariosOnline);                
                    if($users != 0){                
                        foreach($usuariosOnline as $key => $value){
                ?>
                <tr>
                    <td><?= $value['ip'] ?></td>
                    <td><?= date('d/m/y H:m:s', strtotime($value['ultima_acao'])) ?></td>
                </tr>          
                
                <?php } }else{ ?>
                    <tr>                
                        <td class="" colspan="2"><p>Nenhum usuario online!</p></td>
                    </tr>
                <?php } ?>
            </tbody>        
        </table><!--table-responsive-->
    </div>

</div><!--box-content-->