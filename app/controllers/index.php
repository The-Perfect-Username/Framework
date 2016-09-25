<?php

class Index {
    
    function __construct() {
        
    }
    
    public function index($params = false) {
        echo "Hello world!";
    }
    
    public function create($params = false) {
        if ($params) {
            echo $params['id'] . "<br>";
        }
        echo "Hello from create!";
    }
    
}