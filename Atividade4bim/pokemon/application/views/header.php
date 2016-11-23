<div class="container">
    <div class ="masthead">



        <nav class="navbar navbar-default navbar-fixed-top">
            <ul class="nav navbar-nav">
                <li class="active"><a href="http://localhost/pokemon/index.php/Home"><h3>Pokemon <span class="label label-danger">GO</span></h3><br></a></li>

                <li><a href="http://localhost/pokemon/index.php/Cadastro">Cadastrar</a></li>
               

                <ul class="nav navbar-nav navbar-right">
                    <?php echo "<li><a>" . $this->session->userdata('usuario')->nome . " " . "</a></li>"
                    ?>
                    <li><a href="http://localhost/pokemon/index.php/Login/logout">Sair</a></li>
                </ul>

            </ul>
        </nav>
        <br><br><br><br><br><br>

    </div>
