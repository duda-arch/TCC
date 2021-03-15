<?php 
function limitarTexto($texto, $limite){
    $texto = substr($texto, 0, strrpos(substr($texto, 0, $limite), ' ')) . '...';
    return $texto;
}
session_start();
$_SESSION['produtos'] = $products_hipercalorico = [
			            ["ID"=>0, "nome_product"=>"Hipercalorico",
			             		  "valor"=>'R$50.00',
			             		  "descriçao"=>"Deus me aeus me aeus me aeus me aeus me aeus me aeus me aeus me aeus me aeus me aeus me aeus me aeus me aeus me aeus me aeus me aeus me aeus me aeus me aeus me aeus me aeus me ajude a namorar o Beto Carreira,",
			             		  "img"=>"creatina" ],

			            ["ID"=>1, "nome_product"=>"Hipercalorico ",
			            		  "valor"=>'R$50.00',
			            		  "descriçao"=>"Deus me ajude a namorar o Beto Carreira,",
			            		  "img"=>"creatina"  ],

			            ["ID"=>2, "nome_product"=>"Hipercaloricos", 
			            		  "valor"=>'R$50.00',
			            		  "descriçao"=>"Deus me ajude a namorar o Beto Carreira,",
			            		  "img"=>"creatina" ],

			            ["ID"=>3, "nome_product"=>"Creatina Darknes", 
			            		  "valor"=>'R$50.00',
			            		  "descriçao"=>"Deus me ajude a namorar o Beto Carreira,",
			            		   "img"=>"creatina" ],

			            ["ID"=>4, "nome_product"=>"Creatina Darknes", 
			            		  "valor"=>'R$50.00',
			            		  "descriçao"=>"Deus me ajude a namorar o Beto Carreira,",
			            		  "img"=>"creatina",],

			            ["ID"=>5, "nome_product"=>"Creatina Darknes", 
			            		  "valor"=>'R$50.00',
			            		  "descriçao"=>"Deus me ajude a namorar o Beto Carreira,",
			            		   "img"=>"creatina" ],

			            ["ID"=>6, "nome_product"=>"Creatina Darknes", 
			            		  "valor"=>'R$50.00',
			            		  "descriçao"=>"Deus me ajude a namorar o Beto Carreira,",
			            		   "img"=>"creatina" ],

			            ["ID"=>7, "nome_product"=>"Creatina Darknes", 
			            		  "valor"=>'R$50.00',
			            		  "descriçao"=>"Deus me ajude a namorar o Beto carreira",
			            		   "img"=>"creatina" ]
					 ];

?>