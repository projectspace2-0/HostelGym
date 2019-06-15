<?php
@$page=base64_decode($_GET['p']);


switch($page)
{
	
	case 'edit':include('includes/edit.php');
	break;
	case 'sms':include('includes/sms.php');
	break;
	case 'holidays':include('includes/holidays.php');
	break;
	case 'addholidays':include('includes/addholidays.php');
	break;
	case 'today_absent':include('includes/absent.php');
	break;
	case 'trainers_log':include('includes/trainers_log.php');
	break;
	
	case 'today_present':include('includes/present.php');
	break;
	case 'getreports':include('includes/getreports.php');
	break;

	case 'payments':include('includes/newpayment.php');
	break;
	case 'custom':include('includes/custom.php');
	break;	
	case 'students':include('includes/students.php');
	break;
	case 'trainers':include('includes/trainers.php');
	break;
	case 'bulkupload':include('includes/bulkupload.php');
	break;
	case 'registration':include('includes/registration.php');
	break;
	case 'trainers_registration':include('includes/trainers_registration.php');
	break;
	case 'dues':include('includes/dues.php');
	break;
	case 'trainers_attendance':include('includes/trainers_attendance.php');
	break;
	case 'attendance':include('includes/attendance.php');
	break;

	default:include('includes/home.php');
}



?>