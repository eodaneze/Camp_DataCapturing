<?php
 require_once('./includes/connection.php');
 require_once('./header.php');

 $sql = "SELECT * FROM campers ORDER BY name ASC";
 $result = mysqli_query($conn, $sql);

?>
<div class="container">
     <div class="table-responsive">
        <a href="./export.php" class="btn btn-success" title="Click to export">Export</a>
         <table class="table bordered">
             <thead>

                <tr>
                        <th>S/N</th>
                        <th>Name</th>
                        <th>School Group</th>
                        <th>Category</th>
                        <th>Phone</th>
                        <th>Pligrim group</th>
                        <th>Bible Study Class</th>
                        <th>Hostel</th>
                        <th>Gender</th>
                </tr>
             </thead>
             <tbody>
                  <?php

                        if(mysqli_num_rows($result) > 0){
                            $i = 0;
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
                                ?>
                                        <tr>
                                            <td><a href=""><?=$i?></a></td>
                                            <td><?=$name?></td>
                                            <td><?= $school_group ? $school_group : 'NIL'?></td>
                                            <td><?=$category?></td>
                                            <td><?=$phone?></td>
                                            <td><?=$pligrim_group ? $pligrim_group :  $non_indigenes?></td>
                                            <td><?=$bs_class?></td>
                                            <td><?=$hostel?></td>
                                            <td><?=$gender?></td>
                                        </tr>
                                <?php
                            }
                        }else{
                           ?><tr><td colspan="6">No registered camper now!!</td></tr><?php
                        }
                    ?>
             </tbody>
         </table>
     </div>
</div>