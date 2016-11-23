<!DOCTYPE html >
<html lang ="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Pokemon GO</title>

        <?php
        echo meta(array('name' => 'viewport', 'content' => 'width=device-width, initial-scale=1.0')) .
        link_tag('assets/css/bootstrap.min.css') .
        link_tag('assets/css/bootstrap-responsive.min.css') .
        link_tag('assets/css/estilos.css');
        ?>
        <script src ="<?php echo base_url('assets/js/jquery-3.1.1.min.js'); ?>"></script>
                <script src ="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script >
        </head>
        <body>
        
        <div class="container">
        <div class ="masthead">
        <br><br><br><br><br><br>
        
        
        
        <h3>Bem Vindo</h3><br>
        <nav class="navbar navbar-default navbar-fixed-top">
        
        <ul class="nav navbar-nav">
        <li class="active"><a href="http://localhost/pokemon/index.php/Login"><h3>Pokemon <span class="label label-danger">GO</span></h3><br></a></li>
                
                </ul>
                </nav>
        
        </div>
        <div class="input-group">
        
        
        <fieldset>
        <!-- Form Name -->
        <legend>Entre</legend>
                <?php
                echo validation_errors();
                echo form_open(base_url('index.php/Login/fazer_login'), array('id' => 'form_login')) . form_input(array('id' => 'email', 'name' => 'email', 'Placeholder' => 'E-mail', 'value' => set_value('email'))) . form_password(array('id' => 'senha', 'name' => 'senha', 'Placeholder' => 'Senha')) . form_submit("btnLogin", "Efetuar Login ") . form_close();
                ?>
        </ div >
        </fieldset>
        <nav class="navbar navbar-default navbar-fixed-bottom">
        <div class="container">
        <div class ="alinhado-centro borda-base espaco-vertical">
        <div id="footer" class="borda-topo espaco-vertical">
        & copy;<?php echo date("Y"); ?>-Todos os direitos reservados.
                </div>
                </div>
        </div>
        </nav>
        
        </div>
        </body>
        </html>
