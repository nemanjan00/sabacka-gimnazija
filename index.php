<?php
date_default_timezone_set('Europe/Belgrade');

//Dependencies
require('./vendor/autoload.php');

//Config
require("./include/config.php");

//Core
require("./include/resources.class.php");
require("./include/page.class.php");
require("./include/app.class.php");
require("./include/controller.class.php");

$app = new app();

//print_r($_SERVER["REQUEST_URI"]);
