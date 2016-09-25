<?php

require "config/router.php";

$app = new Router();

$app->get("/", "Index#index");
$app->get("/create", "Index#create");
$app->get("/create/:id", "Index#create");

$app->checkURL();