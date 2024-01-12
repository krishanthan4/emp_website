<?php 

function dd($value){
echo "<pre>";
var_dump($value);
echo "</pre>";
// die();
}


function navRoute($uri=""){
    if(parse_url($_SERVER["REQUEST_URI"])["path"]=="/{$uri}"){
        ?>active<?php
                                        }
}
?>