<?php

require __DIR__."/vendor/autoload.php";

use src\dao\ContratoModel;
use src\dao\LeadModel;
use src\dao\UsuarioModel;

$contratoModel = new ContratoModel();
print_r($contratoModel);
echo "<br>";

$leadModel = new LeadModel();
print_r($leadModel);
echo "<br>";

$usuarioModel = new UsuarioModel();
print_r($usuarioModel);
echo "<br>";