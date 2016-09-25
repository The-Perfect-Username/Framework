<?php

class Index extends Controller {
    
    function __construct() {
        parent::__construct();
    }
    
    public function index($params = false) {
        $this->view->render("index/index");
    }
    
    public function create($params = false) {
        $this->view->msg = $_POST['name'];
        $this->view->render("index/create");
    }
    
}