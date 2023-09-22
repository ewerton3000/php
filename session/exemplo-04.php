<?php
session_id('qf0tb79la2lumh8oj21ttu7m70');
require_once("config.php");
//A função session_regenerate_id ela gera novamente uma id de sessão!
session_regenerate_id();
echo session_id();
var_dump($_SESSION);