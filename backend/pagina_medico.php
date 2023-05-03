<?php
	//PEGAR INFOMAÇÕES DO MEDICO
	$sql = "SELECT m.*, a.area_medica AS area, h.nome AS hospital FROM tb_medicos m
	JOIN tb_area_medica a ON a.id = m.fk_am
	JOIN tb_hospital h ON h.id = m.fk_hospital
	ORDER BY m.id ASC";

	$queryMedico = mysqli_query($con, $sql);

		// PEGAR AS AREAS MEDICAS CADASTRADAS
	$sql = "SELECT * FROM tb_area_medica";
	$queryAreas = mysqli_query($con, $sql);

		// PEGAR OS HOSPITAIS CADASTRADOS
	$sql = "SELECT * FROM tb_hospital";
	$queryHospital = mysqli_query($con, $sql);
?>