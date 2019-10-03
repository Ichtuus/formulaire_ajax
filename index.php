<?php

require_once "assets/nad_form_func.php";
require_once "assets/valitron-master/src/Valitron/Validator.php";
require_once "views/form.php";


spl_autoload_register(function ($nameClass){
    require_once "assets/$nameClass.php";
});
