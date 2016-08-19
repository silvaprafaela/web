<?php
  /*
   * função __autoload()
   * Carrega uma classe quando ela é necessária,
   * ou seja, quando é instanciada pela primeira vez.
  */
  spl_autoload_register(function ($class_name)
  {
    include 'html/'.$class_name.'.class.php';
  });

   include 'ado/TConnection.class.php';
   include 'funcoes.php';

  // define a consulta SQL
  $sql = "SELECT idCliente, nomeCliente, dataCadastro, email FROM cliente";
  try
  {
    // abre a conexão com a base BD_CEFETMG
    $conn = TConnection::open('config/my_config.ini');
    // executa a instrução SQL
    $result = $conn->query($sql);
    
// corrigir caracteres
  $html = new TElement('html');
  $html->lang = 'pt-br';
  //instancia seção head
  $head = new TElement('head');
  $html->add($head); //adiciona ao html
  $meta = new TElement('meta');
  $meta->charset = 'utf-8';
  $head->add($meta);

  $body = new TElement('body');
  $body->bgcolor = '#DCDCDC';
  $html->add($body);

  // *********************************************************
  //instancia objeto-tabela
  $tabela = new TTable;
  //define algumas propriedades
  $tabela->width = 600;
  $tabela->border = 1;
  //instancia uma linha para o cabeçalho
  $cabecalho = $tabela->addRow();
  //define a cor de fundo
  $cabecalho->bgcolor = '#3299CC';
  //adiciona células
  $cabecalho->addCell('Id Cliente');
  $cabecalho->addCell('Nome');
  $cabecalho->addCell('Data do Cadastro');
  $cabecalho->addCell('Email');


$i = 0;
    while($row = $result->fetch(PDO::FETCH_ASSOC)) // Exibe todos os registros
    {
      
$bgcolor = '#ffffff';
    // adiciona uma linha para os dados
    $linha = $tabela->addRow();
    $linha->bgcolor = $bgcolor;
    // adiciona as células
    $linha->addCell($row['idCliente']);
    $linha->addCell($row["nomeCliente"]);
    $linha->addCell(dateConvert($row["dataCadastro"]));
    $linha->addCell($row["email"]);   
   
    $i++;

    }
$body->add($tabela);
  $html->show();
    //fecha a conexão
    $conn = null;
  } catch (Exception $e) {
    // exibe a mensagem de erro
    print "Erro! " . $e->getMessage() . "<br/>";
  }
?>
