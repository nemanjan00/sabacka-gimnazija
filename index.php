<?php
date_default_timezone_set('Europe/Belgrade');

//Dependencies
require('./vendor/autoload.php');

//Config
require("./include/config.php");

//Core
require("./include/resources.class.php");
require("./include/controller.class.php");
require("./include/view.class.php");
require("./include/app.class.php");

$app = new app();
