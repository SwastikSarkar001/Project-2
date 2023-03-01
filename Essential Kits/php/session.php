<?php
	session_start();

	function check_session() {
        if(!isset($_SESSION['user'])) {
			header('location:../About/About.php');
		}
    }

	function st_start($ret,string $role) {
		if ($role == "student") {    // 1 for student
			$_SESSION['role'] = $role;
			$_SESSION['user'] = $ret['Card_No'];
			$_SESSION['name'] = $ret['Name'];
			$_SESSION['group'] = $ret['Group'];
		}
		else {
			$_SESSION['role'] = $role;
			$_SESSION['name'] = $ret['Name'];
			$_SESSION['user'] = $ret['Username'];
		}
		if(isset($_SESSION['user']))
		header('location:../Dashboard/Dashboard.php');
	}
?>