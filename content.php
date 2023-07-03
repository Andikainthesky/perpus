<?php
@$page=$_GET['page'];
@$aksi=$_GET['actions'];
if(empty ($page)){
    require 'beranda_buku.php';
}else{

    $file="views/".$page."_".$aksi.".php";
    if (file_exists($file)){
        require "views/".$page."_".$aksi.".php";
    }else{
        require 'beranda_buku.php';
    }
}
