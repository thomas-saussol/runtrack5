<?php
php   if (!defined('BASEPATH')) exit ('Aucun accès direct au script autorisé');

class Main étend CI_Controller {

	function __construct()
	{
		parent:: __construct();

		$ this -> load -> database();

    }

	index de fonction publique(){

		echo "<h1> Bienvenue dans le monde de Codeigniter </h1>"; // Juste un exemple pour s'assurer que nous entrons dans la fonction
        die ();
    }
}
?>
