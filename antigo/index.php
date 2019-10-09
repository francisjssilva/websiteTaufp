<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<?php include("system/config.php"); ?>
<html><head>
<meta name="keywords" content="taufp, tuna, academica, universidade, fernando, pessoa">
<meta name="description" content="TAUFP - Tuna Académica da Universidade Fernando Pessoa">
<meta name="author" content="TAUFP - Tuna Académica da Universidade Fernando Pessoa">
<meta name="language" content="pt">
<meta http-equiv="Content-Type" content="text/html; charset=utf8">
<title>Tuna Académica da UFP</title>
<script language="JavaScript" src="menu.js" type="text/JavaScript"></script>
<!--[if gte IE 5.5]>
<script language="JavaScript" src="menu.js" type="text/JavaScript"></script>
<![endif]-->
<!-- css style -->
<link rel="stylesheet" href="style.css" type="text/css">
<link rel="icon" href="taufp.ico" type="image/x-icon">
</head>
<body>
<div id="global">    
		<div id="top">
			<div id="introblok">
				<a href="index.php"><div id="logo"></div></a>
				<!-- EOF logo -->
				<div id="intro">
				  <div class="headerimage"></div><!-- EOF headerimage -->
				</div><!-- EOF intro -->
			  <div class="cleaner"></div>
			</div><!-- EOF introblok -->
			<div class="cleaner"></div>
		</div><!-- EOF top -->
	<div class="cleaner"></div>
	<div id="center">
		<div id="center2">
			<div id="menu">
			
			
<div id="MenuVertical">
<?php include("system/menu.php"); ?>
</div>

				<div id="menubottom"></div>
				<div class="cleaner"></div>
			</div><!-- EOF menu -->
			
			<div id="rechterkant">
				<div id="inhoud">
				<br/>						
 					<div class="tekst">							
                        <?php
                        
                        if (!isset($_GET['url'])) {
		include ("content/inicio.php");
	}
	else {
		$url = trim($_GET['url']);
        $pages = array (
			"inicio" => "inicio",
			"agenda" => "agenda",
			"areaprivada" => "areaprivada",
			"comoentrar" => "comoentrar",
			"contactos" => "contactos",
			"convivios" => "convivios",
			"discografia" => "discografia",
			"estruturainterna" => "estruturainterna",
			"fotografias" => "fotografias",
			"historial" => "historial",
			"invictas" => "invictas",
			"links" => "links",
			"merchandise" => "merchandise",
			"merchandiseoutros" => "merchandiseoutros",
			"musicaseletras" => "musicaseletras",
			"noticias" => "noticias",
			"outros" => "outros",
			"passagens" => "passagens",
			"politicaprivacidade" => "politicaprivacidade",
			"tunos" => "tunos",
			"tunosfundadores" => "tunosfundadores",
			"viagens" => "viagens",
			"videos" => "videos",
			
			   		"Adeus" => "Adeus", 
        "Agarro-me_a_este Fado" => "Agarro-me_a_este Fado", 
		"Dedicado_a_ti" => "Dedicado_a_ti", 
		"Despeco-me_com_saudade" => "Despeco-me_com_saudade", 
		"Donzelas_e_as_estrelas" => "Donzelas_e_as_estrelas", 
		"Espelho_da_Alma" => "Espelho_da_Alma", 
		"Fado_Pessoano" => "Fado_Pessoano", 
		"Feiticeira" => "Feiticeira", 
		"Finalista" => "Finalista", 
		"Giestas" => "Giestas", 
		"Lavrador_Doutor" => "Lavrador_Doutor", 
		"Magoa" => "Magoa", 
		"Menina_dos_Olhos_Negros" => "Menina_dos_Olhos_Negros", 
		"Nao_Sei_Ainda" => "Nao_Sei_Ainda", 
		"Naquele_Luar" => "Naquele_Luar", 
		"O_27_na_Lua" => "O_27_na_Lua", 
		"Passa_a_Tuna" => "Passa_a_Tuna", 
		"Pilinha" => "Pilinha", 
		"Portogal" => "Portogal", 
		"Portugal_Mix" => "Portugal_Mix", 
		"Pra_sempre_Tuno" => "Pra_sempre_Tuno", 
		"Rabelos" => "Rabelos", 
		"Saudades_Tuas" => "Saudades_Tuas", 
		"Sino_da_Minha_Aldeia" => "Sino_da_Minha_Aldeia", 
		"Sonho_do_Mar" => "Sonho_do_Mar", 
		"Tarantela" => "Tarantela", 
		"Valerio" => "Valerio", 
        "Voces_Sabem_La" => "Voces_Sabem_La",
        
               "demo_Adeus" => "demo_Adeus", 
		"demo_Dedicado_a_ti" => "demo_Dedicado_a_ti", 
		"demo_Donzelas_e_as_Estrelas" => "demo_Donzelas_e_as_Estrelas", 
		"demo_Espelho_da_Alma" => "demo_Espelho_da_Alma", 
		"demo_Fado_Pessoano" => "demo_Fado_Pessoano", 
		"demo_Feiticeira" => "demo_Feiticeira", 
		"demo_Finalista" => "demo_Finalista", 
		"demo_Giestas" => "demo_Giestas", 
		"demo_Instrumental" => "demo_Instrumental", 
		"demo_Lavrador_Doutor" => "demo_Lavrador_Doutor", 
		"demo_Naquele_Luar" => "demo_Naquele_Luar", 
		"demo_Passa_a_Tuna" => "demo_Passa_a_Tuna", 
		"demo_Pilinha" => "demo_Pilinha", 
		"demo_Portogal" => "demo_Portogal", 
		"demo_Portugal_Mix" => "demo_Portugal_Mix", 
		"demo_Rabelos" => "demo_Rabelos", 
		"demo_Saudades_Tuas" => "demo_Saudades_Tuas", 
		"demo_Sino_da_Minha_Aldeia" => "demo_Sino_da_Minha_Aldeia", 
		"demo_Sonho_do_Mar" => "demo_Sonho_do_Mar", 
		"demo_Tarantela" => "demo_Tarantela", 
		"demo_Trovas_e_Lendas" => "demo_Trovas_e_Lendas",
        "demo_Valerio" => "demo_Valerio",
        
        "TAUFPbest09" => "TAUFPbest09",
        "TAUFP09" => "TAUFP09"
		);
		
		// MODULE CONTENT
        if (trim ($pages[$url]) 
        && ($url == "agenda") 
        || ($url == "agenda") 
		|| ($url == "areaprivada") 
		|| ($url == "comoentrar") 
		|| ($url == "contactos") 
		|| ($url == "convivios") 
		|| ($url == "discografia") 
		|| ($url == "estruturainterna") 
		|| ($url == "estruturainterna") 
		|| ($url == "fotografias") 
		|| ($url == "historial") 
		|| ($url == "invictas") 
		|| ($url == "links") 
		|| ($url == "merchandise") 
		|| ($url == "merchandiseoutros") 
		|| ($url == "musicaseletras") 
		|| ($url == "noticias") 
		|| ($url == "outros") 
		|| ($url == "passagens") 
		|| ($url == "politicaprivacidade") 
		|| ($url == "tunos") 
		|| ($url == "tunosfundadores") 
		|| ($url == "viagens") 
		|| ($url == "videos") 
        
        && file_exists("content/".$pages[$url].".php")) {
            include ("content/".$pages[$url].".php"); return;
        }


		
		// MODULE LETRAS
        if (trim ($pages[$url]) 
        && ($url == "Adeus") 
        || ($url == "Agarro-me_a_este Fado") 
		|| ($url == "Dedicado_a_ti") 
		|| ($url == "Despeco-me_com_saudade") 
		|| ($url == "Donzelas_e_as_estrelas") 
		|| ($url == "Espelho_da_Alma") 
		|| ($url == "Fado_Pessoano") 
		|| ($url == "Feiticeira") 
		|| ($url == "Finalista") 
		|| ($url == "Giestas") 
		|| ($url == "Lavrador_Doutor") 
		|| ($url == "Magoa") 
		|| ($url == "Menina_dos_Olhos_Negros") 
		|| ($url == "Nao_Sei_Ainda") 
		|| ($url == "Naquele_Luar") 
		|| ($url == "O_27_na_Lua") 
		|| ($url == "Passa_a_Tuna") 
		|| ($url == "Pilinha") 
		|| ($url == "Portogal") 
		|| ($url == "Portugal_Mix") 
		|| ($url == "Pra_sempre_Tuno") 
		|| ($url == "Rabelos") 
		|| ($url == "Saudades_Tuas") 
		|| ($url == "Sino_da_Minha_Aldeia") 
		|| ($url == "Sonho_do_Mar") 
		|| ($url == "Tarantela") 
		|| ($url == "Valerio") 
        || ($url == "Voces_Sabem_La") 
        
        && file_exists("letras/".$pages[$url].".php")) {
            include ("letras/".$pages[$url].".php"); return;
        }

		// MODULE MP3
        if (trim ($pages[$url]) 
        && ($url == "demo_Adeus") 
		|| ($url == "demo_Dedicado_a_ti") 
		|| ($url == "demo_Donzelas_e_as_Estrelas") 
		|| ($url == "demo_Espelho_da_Alma") 
		|| ($url == "demo_Fado_Pessoano") 
		|| ($url == "demo_Feiticeira") 
		|| ($url == "demo_Finalista") 
		|| ($url == "demo_Giestas") 
		|| ($url == "demo_Instrumental") 
		|| ($url == "demo_Lavrador_Doutor") 
		|| ($url == "demo_Naquele_Luar") 
		|| ($url == "demo_Passa_a_Tuna") 
		|| ($url == "demo_Pilinha") 
		|| ($url == "demo_Portogal") 
		|| ($url == "demo_Portugal_Mix") 
		|| ($url == "demo_Rabelos") 
		|| ($url == "demo_Saudades_Tuas") 
		|| ($url == "demo_Sino_da_Minha_Aldeia") 
		|| ($url == "demo_Sonho_do_Mar") 
		|| ($url == "demo_Tarantela") 
		|| ($url == "demo_Trovas_e_Lendas") 
        || ($url == "demo_Valerio") 
        
        && file_exists("mp3/".$pages[$url].".mp3")) {
            //include ("mp3/".$pages[$url].".mp3"); return;
            $endereco = "mp3/".$pages[$url].".mp3";
             header("Refresh: 1; url=$endereco");  								
        } elseif (trim ($pages[$url]) && file_exists($pages[$url].".php")) {
	    	include ($pages[$url].".php"); return;
        }
        else {
	    	echo "<span style='color: #F00;'>Lamentamos, mas a p�gina n�o foi encontrada.</span>";
       	}
    }
    
    /*
						if (!$p) {
					 		$p = $startpage;
 							if (file_exists("$open1/$p.php") && !preg_match ('/\.\./', $p)) {
	  							include("$open1/$p.php");
	 						} else {
 								echo $errormsg1;
			 				}
 						}

						if ($o == "$open1") {
 							if (file_exists("$open1/$p.php") && !preg_match ('/\.\./', $p)) {
	 							$print = 1;
 								echo "<a href='$open1/$p.php' target='_blank'>" . $img_print . "</a><br>";
  								include("$open1/$p.php");
 							} else {
 								echo $errormsg2;
 							}
						}

						if ($o == "$open2") {
 							if (file_exists("$open2/$p.php") && !preg_match ('/\.\./', $p)) {
	 							$print = 1;
 								echo "<a href='$open2/$p.php' target='_blank'>" . $img_print . "</a><br>";
  								include("$open2/$p.php");
 							} else {
 								echo $errormsg2;
 							}
						}
						
						if ($o == "$open3") {
 							if (file_exists("$open3/$p.php") && !preg_match ('/\.\./', $p)) {
	 							$print = 1;
 								echo "<a href='$open3/$p.php' target='_blank'>" . $img_print . "</a><br>";
  								include("$open3/$p.php");
 							} else {
 								echo $errormsg3;
 							}
						}
						
						if ($o == "$open4") {
 							if (file_exists("$open4/$p.mp3") && !preg_match ('/\.\./', $p)) {
	 							$mp3 = "$open4/$p.mp3";
	 							header("Refresh: 1; url=$mp3");
 								echo "<b>$p.pdf</b> (" . filesize($mp3) . " bytes)<br><br><font color=#FF0000>Se o download do ficheiro n�o iniciar automaticamente, <a href=$a>clique aqui</a>.</font><br><br><br><a href=javascript:history.go(-1)>Voltar � p�gina anterior</a>";
  								include("$open4/$p.mp3");
 							} else {
 								echo $errormsg4;
 							}
						}
						*/
						?> 
					</div><!-- EOF tekst -->	
					<div class="cleaner"></div>							
				</div><!-- EOF inhoud -->
			</div><!-- EOF rechterkant -->
		</div><!-- EOF center2 -->
	</div><!-- EOF center -->
		<div class="ondercleaner"></div>
</div> <!-- EOF global -->	
	<div id="footer">� 2008-2009 Tuna Académica da Universidade Fernando Pessoa. Todos os direitos reservados. <a href=index.php?o=content&p=contactos>Contactos</a> &#149; <a href=index.php?o=content&p=politicaprivacidade>Pol�tica de Privacidade</a></div><!-- EOF footer -->
    Plataforma desenvolvida por <a href="http://btfproject.com" target="blank">Butterfly Project</a>

<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-6986458-1");
pageTracker._trackPageview();
} catch(err) {}</script>

</body>
</html>
