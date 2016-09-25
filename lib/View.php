<?php
    
class View {
    
    function __construct() {
        
    }
    
    public function render($name) {
        require "./app/views/header.php";
        require "./app/views/$name.php";
        require "./app/views/footer.php";
    }

}