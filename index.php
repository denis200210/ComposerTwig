<?php
require_once 'vendor\autoload.php';

Vendor\Autoloader::register();

$loader = new Twig\Loader\Filesistem('templates');
$twig=new Twig\Environment($loader);
$template=$twig->loadTemplate('index.twig');
$title ="jgjflkgjlkfj";

$menu=array(
  array('title'=>'Маргарита','price'=>'350'),
  array('title'=>'4 сыра','price'=>'450'),
  array('title'=>'Грибная','price'=>'250'),
  array('title'=>'Пепперони','price'=>'450'),
  array('title'=>'Римская','price'=>'550'),
);
echo $template->render('nav.twig',array('menu'=>$menu));

?>
