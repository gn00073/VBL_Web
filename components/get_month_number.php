<?php



function getMonth_Number($Month) {

switch ($Month) {
    case "Jan":
        $MonthNumber='01';
        break;
   case "Feb":
        $MonthNumber='02';
        break;
    case "Mar":
        $MonthNumber='03';
        break;
    case "Apr":
        $MonthNumber='04';
        break;
   case "May":
        $MonthNumber='05';
        break;
    case "Jun":
        $MonthNumber='06';
        break;
    case "Jul":
        $MonthNumber='07';
        break;
   case "Aug":
        $MonthNumber='08';
        break;
    case "Sep":
        $MonthNumber='09';
        break;
    case "Oct":
        $MonthNumber='10';
        break;
   case "Nov":
        $MonthNumber='11';
        break;
    case "Dec":
        $MonthNumber='12';
        break;		
	case "January":
        $MonthNumber='01';
        break;
   case "February":
        $MonthNumber='02';
        break;
    case "March":
        $MonthNumber='03';
        break;
    case "April":
        $MonthNumber='04';
        break;
   case "May":
        $MonthNumber='05';
        break;
    case "June":
        $MonthNumber='06';
        break;
    case "July":
        $MonthNumber='07';
        break;
   case "August":
        $MonthNumber='08';
        break;
    case "September":
        $MonthNumber='09';
        break;
    case "October":
        $MonthNumber='10';
        break;
   case "November":
        $MonthNumber='11';
        break;
    case "December":
        $MonthNumber='12';
        break;					
    default:
        echo "Some thing went wrong";
		
	
}
	$MonthNu = $MonthNumber;
		return $MonthNu;


}
//echo $MonthNumber;
//$MonthName="Dec";
//echo  $MNumber = getMonth_Number($MonthName);
?>