<?php

/*
 * Author  : Patrick Riel
 * Date    : 3/4/15
 */

function dbConnect($prm, $prm0, $prm1, $prm2, $prm3){
        $servername = "sfsuswe.com";
        $username   = "priel";
        $password   = "9213123dafdsfkjcsfdadsf";
        $dbname     = "student_priel";
        try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $stmt = $conn->prepare('INSERT INTO MYIMAGES(filename,description,orgpath,medpath,smlpath) VALUES(:filename,:description,:orgpath,:medpath,:smlpath)');
            $stmt->execute(array('filename'    => $prm,
				 'description' => $prm0,
				 'orgpath'     => $prm1,
			 	 'medpath'     => $prm2,
				 'smlpath'     => $prm3));
	    $stmt = null;
        }
        catch(PDOException $e){
            $_SESSION['sqlError'] = $e->getMessage();
	}
        $conn = null;
}
?>
