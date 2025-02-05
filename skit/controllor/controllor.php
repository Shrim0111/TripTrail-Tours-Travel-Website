<?php 
include('../config/config.php');


//  form //

if(isset($_REQUEST['signup'])) {

	$fname = $_REQUEST['fname'];
	$lname = $_REQUEST['lname'];
	$contact= $_REQUEST['contact'];
	$email = $_REQUEST['email'];
	$pnumber = $_REQUEST['pnumber'];
	$pname = $_REQUEST['pname'];
	$pdate = $_REQUEST['pdate'];
	$ldate = $_REQUEST['ldate'];
	

	if(empty($fname) && empty($lname) && empty($contact) && empty($email)  && empty($pnumber) && empty($pname) && empty($pdate)&& empty($ldate)){
		$_SESSION['error'] = "Please fill the blank field";
		header("location:".$siteurl."/demoform.php");
	}else {
		$sql  = "INSERT INTO demo_form_(id_fname,id_lname ,id_contact ,id_email, id_pnumber,id_pname, id_pdate,id_ldate,) VALUES('$fname', '$lname','$contact' ,'$email',  '$pnumber','$pname' ,'$pdate','$ldate')";

		if(mysqli_query($conn, $sql)) {
			echo " Your Request recorded Successfully";
		}else {
			 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}	

}