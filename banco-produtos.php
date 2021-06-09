<?php
session_start();
$_SESSION['produtos'] = $products = [
			            ["ID"=>0, "nome_product"=>"Creatina Blackskull",
			             		  "valor"=>'R$59.90',
			             		  "descriçao"=>"A Black Skull USA é uma marca de suplementos alimentares com foco em atletas de alta performance. Nossa sede no Brasil está alocada em Embu das Artes – SP, com mais de 12.000 m² de área construída, com alta capacidade produtiva. Nossos produtos trabalham com as melhores matérias-primas do mercado e tem como principal característica maior concentração de insumos, que proporcionam níveis de pureza mais altos e por consequência otimizam a qualidade de nossos produtos.",
			             		  "img"=>"creatinaBlackSkull" ],

			            ["ID"=>1, "nome_product"=>"Creatina Max ",
			            		  "valor"=>'R$55.45',
			            		  "descriçao"=>"A Creatina - Max Titanium é um produto da Max Titanium, marca que conquistou o Prêmio de Excelência Revista Suplementação 2009 na categoria Marca Revelação. A Max Titanium é uma linha de produtos da Supley Laboratório, empresa nacional localizada em Matão/SP, especializada na fabricação de suplementos alimentares.",
			            		  "img"=>"creatinaMax"  ],

			            ["ID"=>2, "nome_product"=>"Creatina Integralmedica",
			            		  "valor"=>'R$66.56',
			            		  "descriçao"=>"		A Creatina Hardcore Reload oferece o aumento desses estoques, oferecendo benefício terapêutico, prevenindo depleção de ATP, estimulando a síntese de proteína ou reduzindo sua degradação.",
			            		  "img"=>"creatinaIntegral" ],

			            ["ID"=>3, "nome_product"=>"Creatina Darkness",
			            		  "valor"=>'R$66.56',
			            		  "descriçao"=>"Creatine darkness é indicado para atletas como um eficiente auxiliar de performance nos exercícios, espedialmente os de alta intensidade.",
			            		   "img"=>"creatinaDarkness" ],

			            ["ID"=>4, "nome_product"=>"Creatina Probiotica",
			            		  "valor"=>'R$50.00',
			            		  "descriçao"=>"	A Probiótica é o resultado de 30 anos de um processo contínuo de pesquisa e inovação em colaboração com nutricionistas, médicos, treinadores e atletas.",
			            		  "img"=>"creatinaProbiotica",],

			            ["ID"=>5, "nome_product"=>"Creatina Monohydrate ",
			            		  "valor"=>'R$99.89',
			            		  "descriçao"=>"CREATINA MONOHYDRATE da Ultimate Nutrition  é um aminoácido que contribui para o ciclo de geração de energia, também permite que organismo leve mais água e nutrientes para os músculos o que resulta em mais força, resistência e ganho de massa muscular.",
			            		   "img"=>"creatinaMonohydrate" ],

			            ["ID"=>6, "nome_product"=>"Creatina Universal",
			            		  "valor"=>'R$68.00',
			            		  "descriçao"=>"Universal é ideal para desenvolver um treino sólido e proporcionar ganhos consistentes. A Creatine® contém apenas a mais pura creatina disponível no mercado, para absorção rápida e resultados garantidos.",
			            		   "img"=>"creatinaUniversal" ],

			            ["ID"=>7, "nome_product"=>"Creatina Decanoic",
			            		  "valor"=>'R$50.00',
			            		  "descriçao"=>"Creatina monohidratada (melhora a solubilidade) Decanoic 3.0: Creatina + MCT +Polyethylene Glycol. Delivery Hyperdrive: acelerador de nutrientes farmacêuticos. ",
			            		   "img"=>"creatinaDecanoic" ],

			            		   //PAGINA HIPERCALORICO 

						["ID"=>8, "nome_product"=>"Mass Beef",
			             		  "valor"=>'R$188.78',
			             		  "descriçao"=>"é um Hipercalorico sem Lactose em Curitiba desenvolvido com o objetivo de fornecer uma complementação alimentar calórica, com excelente fonte proteica.",
			             		  "img"=>"hipercaloricoMassbeef" ],

			            ["ID"=>9, "nome_product"=>"Super Gainers ",
			            		  "valor"=>'R$50.00',
			            		  "descriçao"=>"	SUPER GAINERS é composto por 3g de creatina na porção, que auxilia no aumento do desempenho físico durante exercícios repetidos de curta duração e alta intensidade, proporcionando melhoria na performance.",
			            		  "img"=>"hipercaloricoSupergainers" ],

			            ["ID"=>10, "nome_product"=>"Sinister Mass",
			            		  "valor"=>'R$50.00',
			            		  "descriçao"=>"SINISTER MASS da Integralmédica traz uma combinação inteligente de duas proteínas de alto valor biológico (whey protein concentrate, whey protein isolate), um carboidrato de energia rápida (maltodextrina) e outro de liberação gradual (waxy maize)",
			            		  "img"=>"hipercaloricoSinistermass" ],

			            ["ID"=>11, "nome_product"=>"MASS TITANIUM 17500",
			            		  "valor"=>'R$60.40',
			            		  "descriçao"=>"	Mass Titanium 17500 contém, em sua fórmula exclusiva, quatro tipos de proteínas com alto valor biológico: WHEY PROTEIN ISOLADO, WHEY PROTEIN CONCENTRADO, COLÁGENO E ALBUMINA. Esses ingredientes garantem um grande avanço na suplementação, já que são as principais substâncias do crescimento muscular.",
			            		   "img"=>"hipercaloricoMassTitanium" ],

			            ["ID"=>12, "nome_product"=>"HI MASS Leader Nutrition",
			            		  "valor"=>'R$50.00',
			            		  "descriçao"=>"	HI-MASS PRIME 15000  é o suplemento hipercalórico desenvolvido para pessoas que precisam ganhar peso (massa muscular). É formulado com Whey Protein, uma proteína nobre de alto valor biológico e de rápida absorção.",
			            		  "img"=>"hipercaloricoHimass",],

			            ["ID"=>13, "nome_product"=>"HIPER MASS 19000",
			            		  "valor"=>'R$66.56',
			            		  "descriçao"=>"	composto por blend proteico que oferece 19g de proteína de alto valor biológico na dose. Hiper Mass 19000 Atlhetica Nutrition foi desenvolvido para quem tem como objetivo o ganho de peso e massa muscular.",
			            		   "img"=>"hipercaloricoHipermass" ],

			            ["ID"=>14, "nome_product"=>"MASSA NITRO",
			            		  "valor"=>'R$60.50',
			            		  "descriçao"=>" É um suplemento especialmente desenvolvido com uma combinação de proteínas concentrada e isolada do soro do leite, clara de ovo (albumina), proteína isolada de soja e caseinato, resultando em um perfil de aminoácidos de elevada digestibilidade.",
			            		   "img"=>"hipercaloricoMassanitro" ],

			            ["ID"=>15, "nome_product"=>"Mass Gainer",
			            		  "valor"=>'R$90.00',
			            		  "descriçao"=>"O Mass Gainer® da linha Caveira Preta Series® é o novo suplemento da Black Skull USA™, contendo ingredientes de qualidade que promovem o ganho e a construção muscular, oferecendo mais energia e força.",
			            		   "img"=>"hipercaloricoMassgainer" ],
			            		   //PAGINA TERMOGENICOS
			            		   ["ID"=>0, "nome_product"=>"Thermo Abdomen",
			             		  "valor"=>'R$49.90',
			             		  "descriçao"=>"o THERMO ABDOMEN propõe maior disposição física e mental gerando mais energia para treinos intensos, favorecendo a metabolização da gordura corporal.",
			             		  "img"=>"termogenicoThermoabdomen" ],

			            ["ID"=>16, "nome_product"=>"Lipo 6 Black ",
			            		  "valor"=>'R$50.00',
			            		  "descriçao"=>"auxilia no aumento da disponibilidade de ácidos graxos livres para os músculos, o que faz com que seu corpo passe a utilizar sua gordura como fonte de energia, maximizando o emagrecimento.",
			            		  "img"=>"termogenicoLipoblack"  ],

			            ["ID"=>17, "nome_product"=>"Control Night Dux",
			            		  "valor"=>'R$55.45',
			            		  "descriçao"=>"é um complexo inovador especificamente desenvolvido para uso noturno, feito com ingredientes únicos que agem durante o sono, sem interferir em sua qualidade.",
			            		  "img"=>"termogenicoControlnight" ],

			            ["ID"=>18, "nome_product"=>"icone Darknes",
			            		  "valor"=>'R$133.23',
			            		  "descriçao"=>"Swarm Extreme Energizer é um TERMOGÊNICO composto por CAFEÍNA anidra, taurina, L-tirosina e CITRUS AURANTIUM (laranja amarga) que tem por objetivo acelerar o metabolismo e consequentemente aumetar a queima de gorduras.",
			            		   "img"=>"termogenicoStacker2" ],

			            ["ID"=>19, "nome_product"=>"Nutrata Pump",
			            		  "valor"=>'R$59.90',
			            		  "descriçao"=>"foi desenvolvido especialmente para aumentar o nível de energia e melhorar o desempenho durante a atividade física. Ele traz em sua fórmula 420mg de cafeína anidra por cápsula, que acelera substancialmente o metabolismo, proporcionando aumento da disposição física e retardo da fadiga.",
			            		  "img"=>"termogenicoNutratapump",],

			            ["ID"=>20, "nome_product"=>"Ultimate Fire Black",
			            		  "valor"=>'R$40.00',
			            		  "descriçao"=>"O Ultimate Fire Black - Max Titanium foi desenvolvido especialmente para aumentar o seu nível de energia e melhorar a sua performance durante os treinos. Ultimate Fire Black traz em sua fórmula 400 mg de cafeína pura, que acelera substancialmente o metabolismo, ajudando na queima calórica e produzindo maior disposição.",
			            		   "img"=>"termogenicoFireblack" ],

			            ["ID"=>21, "nome_product"=>"Sineflex",
			            		  "valor"=>'R$66.90',
			            		  "descriçao"=>"é um produto desenvolvido para aumentar a atividade metabólica do organismo, promovendo uma intensa queima de gordura corporal e ajudando a atingir o objetivo da perda de peso. A fórmula de Sineflex conta com substâncias termogênicas, que potencializam o trabalho do metabolismo e ajudam a melhorar a digestão e a atividade gastrointestinal como um todo.",
			            		   "img"=>"termogenicoSineflex" ],

			            ["ID"=>22, "nome_product"=>"Sineflex Hardcore",
			            		  "valor"=>'R$77.77',
			            		  "descriçao"=>"é um termogênico inovador 2X MAIS POTENTE com a tecnologia PURE BOCKER, um blend exclusivo da Power Supplements que queima e bloqueia a gordura. Aliado ao fator Dynamic Focus, estimulante que acelera o metabolismo, criando uma termogênese que derrete a gordura e age sinergicamente com o blend Pure Blocker.",
			            		   "img"=>"termogenicoSineflexhardcore" ],
			            		  //PAGINA WHEY
			           	["ID"=>23, "nome_product"=>"Whey Gold Standard",
			             		  "valor"=>'R$300.00',
			             		  "descriçao"=>"A GOLD STANDART Optimum é considerada a melhor Whey do mundo, sendo a mais vendida nos EUA nos ultimos 10 anos. Esta proteína é extraída do soro do leite e não possui lactose.",
			             		  "img"=>"wheyGold" ],

			            ["ID"=>24, "nome_product"=>"Dark Whey",
			            		  "valor"=>'R$139.90',
			            		  "descriçao"=>"A linha Darkness da Integralmedica traz uma gama de produtos formulados com os ativos primordiais e as altas concentrações exigidas por esses atletas, que buscam hipertrofia em níveis máximos.",
			            		  "img"=>"wheyDark"  ],

			            ["ID"=>25, "nome_product"=>"Whey Concentrado Integralmedica",
			            		  "valor"=>'R$100.00',
			            		  "descriçao"=>"Esse tipo de proteína é excelente para o pós treino, melhorando o rendimento e a performance muscular e atuando na prevenção do catabolismo.",
			            		  "img"=>"wheyIntegral" ],

			            ["ID"=>26, "nome_product"=>"100% Whey Muscle Definition",
			            		  "valor"=>'R$122.50',
			            		  "descriçao"=>"É um produto proteico diferenciado construído a partir da Whey protein concentrada, Isolado e hidrolisado , filtrada por SpiroFuse Reverse Osmosis Filtration (SRO), uma tecnologia patenteada na produção das proteínas mais puras do mercado.",
			            		   "img"=>"wheyMd" ],

			            ["ID"=>27, "nome_product"=>"Hi-Whey Protein ",
			            		  "valor"=>'R$144.30',
			            		  "descriçao"=>"é formulado com a proteína concentrada do soro de leite que proporciona um excelente perfil de aminoácidos, fonte de BCAA, glutamina e aminoácidos essenciais.",
			            		  "img"=>"wheyHiwhey",],

			            ["ID"=>28, "nome_product"=>"Best Whey",
			            		  "valor"=>'R$155.40',
			            		  "descriçao"=>"tem qualidade e sabor superiores a qualquer coexistente. Surpreenda-se com estes deliciosos sabores, Feito especialmente para o publico mais exigente.  Best Whey tem excelente dissolução, além disso, fornece naturalmente aos músculos aminoácidos da cadeia ramificada (BCAA).",
			            		   "img"=>"wheyBest" ],

			            ["ID"=>29, "nome_product"=>"Creatina Darknes",
			            		  "valor"=>'R$50.00',
			            		  "descriçao"=>" é um suplemento proteico para atletas que não abrem mão do sabor, muito menos dos benefícios do puro whey protein. Em uma combinação de aromas incríveis com as melhores proteínas do soro do leite (WPC, WPI e WPH) - sendo a concentrada uma proteína não desnaturada, ou seja, extraída sem processos térmicos",
			            		   "img"=>"wheyElemento" ],

			            ["ID"=>30, "nome_product"=>"Whey Black Skull 4HD",
			            		  "valor"=>'R$150.00',
			            		  "descriçao"=>" é um suplemento alimentar formulado com whey protein concentrado e whey protein isolado microfiltrado com exclusiva tecnologia chamada SpiroFuse Reverse Osmosis Filtration.",
			            		   "img"=>"whey4hd" ]
					 ];
					
?>