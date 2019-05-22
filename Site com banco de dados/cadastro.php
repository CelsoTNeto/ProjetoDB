<?php
$login= $_POST['login'];
$senha= md5 ( $_POST['senha']);
$connect=mysql_connect('localhost','root','');
$db = mysql_select_db('db_empresa');
$query_select= "SELECT login from usuarios WHERE login = '$login' ";
$select=mysql_query($query_select,$connect);
$array=mysql_fetch_array($select);
$logarray=$array ['login'];