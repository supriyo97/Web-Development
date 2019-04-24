<?php

// ob_start();
session_start();
function msg(){
    if(isset($_SESSION["message"])){
        $output = "<div class = \"message\">";
        $output .= htmlentities($_SESSION["message"]);
        $output .= "</div>";
        $_SESSION["message"] = null;
        return $output;
    }
}

?>