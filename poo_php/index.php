<?php

//include,require
//include 'greet.php'; 

//require envia un error en vez de un warning
require 'greet.php';
//Con require_once no da error si vuelvo a importar greet
require_once 'greet.php';

echo gree('Italo','Como estas...');