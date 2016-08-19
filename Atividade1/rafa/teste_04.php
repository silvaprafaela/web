<?php
  // inclui classes necessárias
  spl_autoload_register(function ($class_name)
  {
    include 'html/'.$class_name.'.class.php';
  });

  
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

  // *********************************************************
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
  $body->bgcolor = '#ffffdd';
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
  $cabecalho->bgcolor = '#a0a0a0';
  //adiciona células
  $cabecalho->addCell('Código');
  $cabecalho->addCell('Nome');
  $cabecalho->addCell('E-Mail');
  $cabecalho->addCell('Salário');

  $i = 0;
  $total = 0;
  //percorre os dados
  foreach($dados as $pessoa)
  {
    // verifica qual cor utilizará para o fundo
    $bgcolor = ($i % 2) == 0 ? '#d0d0d0' : '#ffffff';
    // adiciona uma linha para os dados
    $linha = $tabela->addRow();
    $linha->bgcolor = $bgcolor;
    // adiciona as células
    $linha->addCell($pessoa[0]);
    $linha->addCell($pessoa[1]);
    $linha->addCell($pessoa[2]);
    $x = $linha->addCell($pessoa[3]);
    $x->align = 'right';

    $total += $pessoa[3];
    $i++;
  }
  //instancia uma linha para o totalizador
  $linha = $tabela->addRow();
  //adiciona células
  $celula = $linha->addCell('Total');
  $celula->colspan = 3;
  $celula = $linha->addCell($total);
  $celula->bgcolor = '#a0a0a0';
  $celula->align = 'right';

  // exibe a tabela
  //$tabela->show();
  $body->add($tabela);
  $html->show();
?>
