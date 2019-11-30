<?php

require 'classes.php';

$programador = new Programador("Diego", "JavaScript");
echo $programador->getNome();

#constante
echo $programador::ESPECIE;
