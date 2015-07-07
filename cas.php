<?php
	$OR_PHPCAS_REJECT_URL = "http://recherche.campuseiffel.fr/pagederejet.php";
	$OR_PHPCAS_CATEGORY_ALLOWED = 'staff'; // Autorise uniquement les membres du groupe "staff".
	require_once("simple_auth_cas.php");
	$user = phpCAS::getUser();

	$infoldap = new OR_INFOLDAP($user);
	$prenom=$infoldap->getFirstname();
	$nom=$infoldap->getSurname();
	$email=$infoldap->getMail();
	$sex=$infoldap->getSex();
	$entites=$infoldap->getEntity();
	$entite=key($entites); // "ece", "itpariseiffel", "ifg", "esce" => 2, "ebs", "laureate", "ciece", "prepatech"
	$uid=$infoldap->getUID(); //cas_id
