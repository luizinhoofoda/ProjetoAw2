<?php
  
session_start(); 
if(isset($_SESSION['username']) ){
    session_destroy();
    header("location:/index.php"); 
    exit();
}else{

    echo "Você não tem autorização para ver essa pagina<a href= '/'>home</a>";

}



?>