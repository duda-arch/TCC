<?php 

include @$pg = $_GET["pd"];
session_start();
$_SESSION['produtos'] = $jogo = [
            ["ID"=>1, "NOME"=>"Zé",   "PONTOS"=>11],
            ["ID"=>2, "NOME"=>"José", "PONTOS"=>4],
            ["ID"=>3, "NOME"=>"Zéca", "PONTOS"=>22]
        ];
print_r($jogo);

echo $jogo[$_GET['pd']]["NOME"];