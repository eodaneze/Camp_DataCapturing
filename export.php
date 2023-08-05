<?php
 require_once('./includes/connection.php');

//  filter excel data

function filterData(&$str){ 
    $str = preg_replace("/\t/", "\\t", $str); 
    $str = preg_replace("/\r?\n/", "\\n", $str); 
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
}

// excel file name for download
$fileName = "SU_Afikpo_Zone-" . date('Ymd') . ".xls"; 
 
// column name
$fields = array('id', 'name', 'school_group', 'category', 'phone',  'pligrim_group', 'bs_class', 'indigene', 'hostel', 'gender');

// Display column names as first row 
$excelData = implode("\t", array_values($fields)) . "\n"; 

// fetch record from db
$sql = "SELECT * FROM campers ORDER BY name ASC";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
    // output each row of data
    $i=0;
    
    while($row = mysqli_fetch_assoc($result)){
     $i++;
     $name = $row['name'];
     $school_group = $row['school_group'];
     $category = $row['category'];
     $phone = $row['phone'];
     $non_indigenes = $row['non_indigenes'];
     $pligrim_group = $row['pligrim_group'];
      $bs_class = $row['bs_class'];
     $hostel = $row['hostel'];
    $gender = $row['gender'];
    $getIndigne = $non_indigenes ? "NO ( ${non_indigenes})": 'YES';
    $rowData = array($i, $name, $school_group, $category, $phone, $pligrim_group, $bs_class,$getIndigne, $hostel, $gender);
    array_walk($rowData, 'filterData'); 
    $excelData .= implode("\t", array_values($rowData)) . "\n"; 
  }
}else{
    ?><tr><td colspan="6">No registered camper now!!</td></tr><?php
}

// Headers for download 
header("Content-Type: application/vnd.ms-excel"); 
header("Content-Disposition: attachment; filename=\"$fileName\""); 
 
// Render excel data 
echo $excelData; 
 
exit;

?>