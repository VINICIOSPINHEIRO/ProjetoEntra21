<?php
	require_once('include/paginas_restritas.php');
?>

<style type="text/css">
	area:focus {
		outline: none !important;	
	}
</style>

<!DOCTYPE html>
<html>
<head>
	<title>Consulta</title>
	<link rel="stylesheet" type="text/css" href="media/css/sobre.css">
	<link rel="stylesheet" type="text/css" href="media/css/media.css">
	<link rel="shortcut icon" type="image/x-icon" href="media/images/4232logo__.ico">
	<script src="include/3b47dd4ac9.js"></script>
	<!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
	<link rel="stylesheet" href="include/bootstrap.min.css">
</head>
<body>
	<!-- HEADER -->
	<?php require_once('include/header.php'); ?>

	<div class="shadow img_sobre" style="background-image: url('media/images/fundo.jpg');  min-height: 320px; min-width: 100%; background-size: 100%; background-position: center center; padding-top: 128px; margin-top: -184px; background-repeat: no-repeat;">
		<div class="text-center my-5"></div> 
	</div> 

	<div class="container">
		<h1 class="text-center" id="batata" style="margin-top: -110px !important;">Clique exatamente na região do desconforto</h1>
	</div>

	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col">	
					<div class="card" style="background-color: transparent; border: transparent;">
						<div class="card-body ml-5 mt-5">
							<div class="col-sm-6"> 

								<img src="media/images/musculos.png" usemap="#Map">
								<map name="Map" id="Map">
									<!-- cabeça -->
									<area alt="" title="" href="etapa1.php?area=cabeca" shape="poly" coords="166,32,177,33,186,38,192,43,196,51,198,58,198,66,197,71,197,76,201,74,203,78,203,83,202,89,200,93,198,96,193,95,191,99,192,102,191,107,190,112,190,116,168,130,144,120,142,102,141,95,137,95,133,90,131,82,131,76,138,64,138,55,140,48,145,42,151,36" />
									<!-- braço -->
									<area alt="" title="" href="etapa1.php?area=braco" shape="poly" coords="53,413,56,424,59,425,61,419,62,402,64,380,68,364,78,341,85,322,92,310,98,294,100,279,101,269,107,255,110,244,107,229,106,210,104,197,101,179,96,168,91,160,79,174,64,272,57,305,49,344,44,361,32,370,25,375,22,381,16,387,11,389,9,393,24,402,19,410,15,419,13,426,20,428,25,430,27,437,32,435,42,431,44,436,48,434" />
									<!-- outro braço -->
									<area alt="" title="" href="etapa1.php?area=braco" shape="poly" coords="331,389,317,377,307,367,297,361,292,347,286,332,285,315,282,294,278,272,270,252,267,234,263,219,262,204,262,188,258,169,248,157,237,164,236,178,235,198,233,210,234,224,233,242,235,251,239,270,243,291,253,318,263,338,269,353,272,367,273,378,275,386,276,393,277,400,277,408,277,416,278,422,283,424,289,422,290,427,292,431,295,433,299,433,305,427,307,430,309,434,313,434,320,424,322,426,326,424" />
									<!-- tronco -->
									<area alt="" title="" href="etapa1.php?area=tronco" shape="poly" coords="110,178,228,174,228,202,228,216,228,229,229,247,224,274,227,299,229,316,234,337,234,342,118,342" />
									<!-- perna -->
									<area alt="" title="" href="etapa1.php?area=perna" shape="poly" coords="118,347,172,395,173,456,169,483,165,541,164,564,166,608,162,648,166,686,166,715,162,723,128,723,122,585,112,452,108,405" />
									<!-- outra perna -->
									<area alt="" title="" href="etapa1.php?area=perna" shape="poly" coords="236,354,181,394,179,436,181,470,182,504,182,523,185,556,183,572,182,594,184,628,183,652,179,673,177,685,177,699,176,712,177,719,185,723,198,724,211,723,215,719,227,585,237,458,244,425,242,381" />
								</map>
							</div>
						</div>
					</div>
				</div>
				
				<div class="card" style="background-color: transparent; border: transparent;">
					<div class="card-body p-5 mr-5 mt-5 ">
						<div class="col-sm-6 ml-4">

							<img src="media/images/musculo_2.png" usemap="#parte_frontal" >
							<map name="parte_frontal" id="parte_frontal">
								<!-- cabeça -->
								<area alt="" title="" href="etapa1.php?area=cabeca" shape="poly" coords="149,102,152,98,152,87,150,74,150,66,146,67,142,59,141,50,141,45,145,45,145,39,146,29,147,21,152,15,158,9,164,5,173,3,181,3,188,5,194,8,200,13,203,19,206,26,207,36,207,45,210,44,212,49,212,53,211,57,208,65,202,70,202,77,200,81,198,84,199,89,198,94,199,99,202,101" />
								<!-- braço -->
								<area alt="" title="" href="etapa1.php?area=braco" shape="poly" coords="238,219,236,212,234,203,234,194,235,185,237,177,238,165,235,159,233,152,232,145,232,140,235,133,239,126,242,121,250,125,262,136,269,160,269,187,272,202,278,226,284,244,289,267,292,291,295,306,301,328,304,332,311,335,318,340,322,345,328,351,336,357,339,358,338,361,336,364,331,364,326,362,318,356,319,360,322,367,327,375,332,387,336,395,332,399,328,398,318,383,322,394,324,402,321,406,317,403,305,379,306,389,307,399,305,404,300,399,294,388,293,393,290,394,287,393" />
								<!-- outro braço -->
								<area alt="" title="" href="etapa1.php?area=braco" shape="poly" coords="119,216,120,200,117,182,116,168,116,158,111,142,105,139,98,132,89,142,85,158,85,178,83,195,79,214,76,230,70,248,65,265,64,283,61,308,56,327,52,336,37,344,32,354,24,359,18,363,19,368,27,368,33,367,34,371,31,376,27,385,23,393,21,400,25,403,30,402,38,392,35,401,35,408,39,411,53,382,53,391,52,402,53,407,57,408,65,391,66,398,71,397" />
								<!-- tronco -->
								<area alt="" title="" href="etapa1.php?area=tronco" shape="poly" coords="175,102,131,116,123,159,124,191,130,219,134,244,130,283,126,312,148,323,166,321,178,321,191,323,209,317,221,312,232,306,240,301,232,242,231,218,230,203,229,178,227,163,225,145,217,127,219,120,221,114" />
								<!-- perna -->
								<area alt="" title="" href="etapa1.php?area=perna" shape="poly" coords="191,368,209,356,229,349,240,344,249,339,252,378,251,408,246,435,239,458,235,484,233,511,236,533,233,566,226,599,218,633,216,655,213,669,219,677,224,684,221,691,211,690,202,693,192,693,188,692,185,690,187,412,187,394" />
								<!-- outra perna -->
								<area alt="" title="" href="etapa1.php?area=perna" shape="poly" coords="183,370,160,355,139,345,123,337,121,350,119,387,120,411,127,450,132,494,131,518,131,533,128,540,128,563,131,583,135,599,139,614,141,637,144,656,146,671,141,674,143,679,140,679,137,681,137,687,140,692,148,693,157,695,165,693,171,693,175,684" />
							</map>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- FOOTER -->
	<?php require_once('include/footer.php'); ?>

	<!-- BOOSTRAP -->
	<!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
	<script src="include/jquery-3.3.1.slim.min.js"></script>
	<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
	<script src="include/popper.min.js"></script>
	<!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script> -->
	<script src="include/bootstrap.min.js"></script>
</body>
</html>