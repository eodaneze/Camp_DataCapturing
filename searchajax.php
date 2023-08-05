<?php
  require_once('./includes/connection.php');
  
  function sanitize_input($input) {
    global $conn;
    return mysqli_real_escape_string($conn, trim($input));
}
$searchTerm = isset($_POST['search']) ? sanitize_input($_POST['search']) : '';

  $sql = "SELECT * FROM campers WHERE name LIKE '%$searchTerm%'";
  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result) > 0){

    while($row = mysqli_fetch_assoc($result)){
      $name = $row['name'];
      $school_group = $row['school_group'];
      $category = $row['category'];
      $non_indigenes = $row['non_indigenes'];
      $pligrim_group = $row['pligrim_group'];
      $bs_class = $row['bs_class'];
      $hostel = $row['hostel'];
      $gender = $row['gender'];
       $element = "
              <tr>
              <th>".$row['id']."</th>
              <td>".$name."</td>
              <td>".$school_group."</td>
              <td>".$category."</td>
              <td>".$non_indigenes."</td>
              <td>".$pligrim_group."</td>
              <td>".$bs_class."</td>
              <td>".$hostel."</td>
              <td>".$gender."</td>
          </tr>
       
       ";
       echo $element;
    }
  }else{
     echo "No users found.";
  }

  ?>
