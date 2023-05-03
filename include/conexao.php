<?php

	CONST HOST = "127.0.0.1";
	CONST USER = "root";
	CONST PASS = "";
	CONST DB = "faqhospi_master";
$con = mysqli_connect(HOST, USER, PASS, DB);

if (!$con) {
	die("ERRO: Não foi possível conectar ao banco de dados ->" . mysqli_connect_erro());
}



?>