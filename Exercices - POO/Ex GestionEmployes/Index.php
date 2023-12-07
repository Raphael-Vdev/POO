<?php

require_once "Employes.class.php";
require_once "Boss.class.php";

$employe1 = new Employes("Marion","1500");
$boss1 = new Boss("Benoit","7000", [$employe1]);

$employe1->AfficherInfoEmployes();
$boss1->AfficherInfoEmployes();