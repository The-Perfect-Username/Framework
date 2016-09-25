<?php

require "lib/View.php";
require "lib/Database.php";
require "lib/Controller.php";

require "config/router.php";
require "config/paths.php";

$app = new Router();

$app->get("/", "Index#index");
$app->get("/create", "Index#create");

$app->checkURL();