<?php 

// Simple page redirect
function redirect($page){
header('location:'.BASEROOT.$page);
exit();
}