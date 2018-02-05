<?php
/*
* Formate Date function
*/

function formatDate($date){
    return date('F j, Y, g:i a', strtotime($date));
}

?>