<?php
    
class View {
    
    function __construct() {
        
    }
    
    public function render($name) {
        require "./apps/views/header.php";
        require "./apps/views/$name.php";
        require "./apps/views/footer.php";
    }

}