<?php
  // inclui classes necessárias
  spl_autoload_register(function ($class_name)
  {
    include 'html/'.$class_name.'.class.php';
  });

  $style = new TStyle('estilo_texto');
  $style->color = '#FF0000';
  $style->font_family = 'verdana';
  $style->font_size = '20pt';
  $style->font_weight = 'bold';
  $style->show();

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


  $texto = new TElement('p');
  $texto->align = 'center';
  $texto->add('Centro Federal de Educação Técnológica');
  $texto->class = 'estilo_texto';

  $body->add($texto);
  $html->show();
?>
