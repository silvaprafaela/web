<?php
  /*
   * função __autoload()
   * Carrega uma classe quando ela é necessária,
   * ou seja, quando é instanciada pela primeira vez.
  */
  spl_autoload_register(function ($class_name)
  {
    include 'ado/'.$class_name.'.class.php';
  });

  // define a consulta SQL
  $sql = "SELECT idCliente, nomeCliente, dataCadastro, email FROM cliente";
  try
  {
    // abre a conexão com a base BD-CEFETMG
    $conn = TConnection::open('config/my_config.ini');
    // executa a instrução SQL
    $result = $conn->query($sql);
    
    while($row = $result->fetch(PDO::FETCH_ASSOC)) // Exibe todos os registros
    {
      echo $row['idCliente'] . ' - ' .$row['nomeCliente'] . ' - ' . $row['dataCadastro'] . ' - ' . $row['email'] . '<br>';
    }
    //fecha a conexão
    $conn = null;
  } catch (Exception $e) {
    // exibe a mensagem de erro
    print "Erro! " . $e->getMessage() . "<br/>";
  }
?>
