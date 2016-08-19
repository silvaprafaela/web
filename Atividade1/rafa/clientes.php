<?php
require_once 'init.php';
 $PDO = db_connect();
 $sql_count = "SELECT COUNT(*) AS total FROM cliente ORDER BY nomeCliente ASC";
 
$sql = "SELECT idCliente, nomeCliente , dataCadastro , email FROM cliente ORDER BY nomeCliente ASC";
 
 $stmt_count = $PDO->prepare($sql_count);
 $stmt_count->execute();
 $total = $stmt_count->fetchColumn();
 
 $stmt= $PDO->prepare($sql);
 $stmt->execute();

?>
<! DOCTYPE html >
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Janets Cosméticos</title>
    <meta name="description" content="">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Fonts -->
      <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,700" rel="stylesheet" type="text/css">
      <link href="http://fonts.googleapis.com/css?family=Dosis:400,700" rel="stylesheet" type="text/css">
      <!-- Bootsrap -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <!-- Font awesome -->
      <link rel="stylesheet" href="assets/css/font-awesome.min.css">
      <!-- Owl carousel -->
      <link rel="stylesheet" href="assets/css/owl.carousel.css">
      <!-- Template main Css -->
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="estilo.css">

      	<!-- Modernizr -->
      	<script src="assets/js/modernizr-2.6.2.min.js"></script>
	  	<script type="text/javascript" src="jquery-2.1.1.min.js"></script>
	  	<script type="text/javascript" src="jquery.maskedinput.js"></script>
	  	<script src="ajax.js"></script>
		<link type="text/css" href="jquery-ui.css" rel="stylesheet">		
		<script type="text/javascript" src="jquery-ui.js"></script>		
		<script type="text/javascript" src="datepicker-pt-BR.js"></script>	
		<script type="text/javascript" src="validacliente.js"></script>
		<link type="text/css" href="rafalinda.css" rel="stylesheet">	
</head>

	<body>
	<div class="tudo">
    <header class="main-header">
      <nav class="navbar navbar-static-top">
        <div class="navbar-top"></div>
        <div class="navbar-main">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.html" contenteditable="true"><img src="assets/images/sadaka-logo.png" alt=""></a>
            </div>
            <div id="navbar" class="navbar-collapse collapse pull-right">
              <ul class="nav navbar-nav">
                <li>
                  <a class="is-active" href="http://localhost/rafa/index.html">HOME</a>
                </li>
                <li>
                  <a href="http://localhost/rafa/clientes.php">CLIENTES</a>
                </li>
 				<li>
                  <a href="http://localhost/rafa/fornecedores/fornecedores.php">FORNECEDORES</a>
                </li>
                
                <li>
                  <a href="http://localhost/rafa/sobre.html">SOBRE</a>
                </li>
              </ul>
            </div>
            <div <!--="" #navbar="" --=""></div>
            <!-- /.container -->
          </div>
          <!-- /.navbar-main -->
        </div>
      </nav>
 </head>
<div class="variavel">
			<h1>Cadastro de Clientes</h1>
			<p><a href="http://localhost/rafa/form-add.php">Adicionar Cliente</a></p>
			<p><a href="http://localhost/rafa/arquivo.php">Gerar Relatório de Clientes</a></p>
			<h2>Lista de Clientes</h2>
			<p>Total de Clientes: <?php echo $total ?></p>
				<?php if($total > 0): ?>
				<table width="100%" border="1"> 
					<thead>			
						<tr>
							<th>Id</th>
							<th>Nome</th>
							<th>Data de Cadastro</th>
							<th>Email</th>							
							<th>Ações</th>
						</tr>
					</thead>
				<tbody>
				<?php while($cliente = $stmt->fetch(PDO::FETCH_ASSOC)): ?>
				<tr>
					
					<td><?php echo $cliente['idCliente'] ?></td>
 					<td><?php echo $cliente['nomeCliente'] ?></td> 					
					<td><?php echo dateConvert($cliente['dataCadastro'])?></td>
					<td><?php echo $cliente['email'] ?></td>
					<td>
					<a href="http://localhost/rafa/form-edit.php?id=<?php echo $cliente['idCliente'];?>"> Editar</a>
					<a href="http://localhost/rafa/delete.php?id=<?php echo $cliente['idCliente'] ?>" onclick="return confirm('Tem certeza que deseja excluir?');"> Excluir </a>
					</td>
				</tr>
				 <?php endwhile; ?>
 				</tbody>
					</table>
 			<?php else: ?>
 		<p> Nenhum usuário registrado </p>
 		<?php endif; ?>
</div>
 <footer class="main-footer" id="desce">
      <div class="footer-main" >
        <div class="container">
          <div class="row text-left" id="tudo">
            <div class="col-md-3">
              <div class="footer-col">
                <h4 class="footer-title text-left">JANETS COSMÉTICOS&nbsp;</h4>
                <div class="footer-content">
                  <p>
                    <strong> JANETS </strong>
                    <p><strong>Experiência: </strong> Professora de Moda em Paris..</p>
                  <p><strong> Mestrado: </strong> Drag Queen.</p>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="footer-col">
                <h4 class="footer-title text-left">redes sociais</h4>
                <a href="https://www.facebook.com/marcelomussel?fref=ts"><i class="fa fa-5x fa-facebook-official pull-left"></i></a>
                <div class="footer-content">
                 <a href="https://www.facebook.com/janete.silva.545?fref=ts"><i class="fa fa-5x fa-fw fa-github"></i></a>
                </div>
              </div>
            </div>
            <div class="col-md-3">
              <div class="footer-col">
                <h4 class="footer-title text-left">entre em contato
                  <br>
                  <span class="title-under"></span>
                </h4>
                <div class="footer-content">
                  <div class="footer-form">
                    <div class="footer-form">
                      <form action="php/mail.php" class="ajax-form">
                        <div class="form-group">
                          <input type="text" name="nome" class="form-control" placeholder="Nome" required="">
                        </div>
                        <div class="form-group">
                          <input type="email" name="email" class="form-control" placeholder="Email" required="">
                        </div>
                        <div class="form-group">
                          <textarea name="mensagem" class="form-control" placeholder="Mensagem" required=""></textarea>
                        </div>
                        <div class="form-group alerts">
                          <div class="alert alert-success" role="alert"></div>
                          <div class="alert alert-danger" role="alert"></div>
                        </div>
                        <div class="form-group">
                          <button type="submit" class="btn btn-submit pull-right">Enviar mensagem</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
       <div class="footer-bottom">
        <div class="container text-right">Janets Cosméticos @ copyrights 2015 -
          <a href="https://www.facebook.com/janete.silva.545?fref=ts" target="_blank"> Escola de Moda Parisiense</a>
        </div>
      </div>
    </footer>
</div>
    <!-- main-footer -->
    <!-- Donate Modal -->
    <!-- /.modal -->
    <!-- Scripts==================================================- ->

    <!-- jQuery -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script>
      window.jQuery || document.write('<script src="assets/js/jquery-1.11.1.min.js"><\/script>')
    </script>
    <!-- Bootsrap javascript file -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- owl carouseljavascript file -->
    <script src="assets/js/owl.carousel.min.js"></script>
    <!-- Template main javascript -->
    <script src="assets/js/main.js"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.
    -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
                    function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
                    e=o.createElement(i);r=o.getElementsByTagName(i)[0];
                    e.src='//www.google-analytics.com/analytics.js';
                    r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
                    ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
  

</body>
</html>
 	</body>
 </html>
		
