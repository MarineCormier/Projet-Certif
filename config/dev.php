<?php




const API_CG_URL = "https://www.cartegrisefactory.fr/api/getPrice";

$vehiculeTypes=["VP", "CTTE", "CL", "MTL, MTT1, MTT2, MTTE, MOTO", "TM", "CYCL", "QM","CAM","TCP", "TRR", "VASP", "REM, SREM", "RESP", "TRA, QUAD, MAGA"];

$db = new PDO('mysql:host=localhost;dbname=immatpro', 'root', 'facesimplon');


$db_server='localhost';
$db_name='immatpro';
$db_user='root';
$db_pwd='facesimplon';

$fraisdedossier = 29.90;

$vehiculeDepartement = $db->query('SELECT departement_code, departement_nom FROM departement');

$vehiculeDemarche = $db->query('SELECT idDemarche FROM demarche');
