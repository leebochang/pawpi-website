<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of anotherpage
 *
 * @author leebc
 */
startsession();
if(isset($_POST['inputtext'])){

$searchquery = trim($_POST['inputtext']);

echo htmlentities($searchquery); // We don't want people to write malicious scripts here and have them printed and run on the page, wouldn't we? 
}

?>
