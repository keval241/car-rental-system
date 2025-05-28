<?php include'headder.php'; ?>
    <div class="container-xxl flex-grow-1 container-p-y ">
    <?php
    include 'connect.php';
    if(isset($_SESSION["alert"])){
        echo $_SESSION["alert"];
        unset($_SESSION["alert"]);
    }
$sql1 = "SELECT 
    c.c_id,
    c.c_name,
    c.c_userName,
    c.c_mobile,
    c.c_email,
    v.v_id,
    v.v_carname,
    v.v_carno,
    v.v_brand,
    v.v_price,
    v.v_fuel,
    v.v_seat,
    v.v_image,
    v.v_aircondition,
    v.v_description,
    r.r_id,
    r.r_message,
    r.r_rate
FROM 
    customer_register AS c
JOIN 
    vechicels_review AS r ON c.c_id = r.c_id  
JOIN 
    vechicels_brand AS v ON r.v_id = v.v_id;   
";
$result1 = mysqli_query($con, $sql1) or die("Query failed");
if(mysqli_num_rows($result1) > 0)
{
?>
    <div class="card">
                <h5 class="card-header">Review Details</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table text-center">
                    <thead>
                      <tr>
                        <th>Sr no.</th>
                        <th>Car Name</th>
                        <th>User Name</th>
                        <th>Car Image</th>
                        <th>Message</th>
                        <th>Rating</th>
                        <!-- <th>Actions</th> -->
                      </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                      <?php
                            $i=1;
                            while ($row = mysqli_fetch_assoc($result1)) 
                            {
                        ?>
                            <tr>
                                <th scope="row"><?php echo $i; ?></th>
                                <td><?php echo $row['v_carname']; ?></td>
                                <td><?php echo $row['c_name']; ?></td>  
                                <td><img src="<?php echo 'uploads/'.$row['v_image']; ?>" width="100"></td>   
                                <td><?php echo $row['r_message']; ?></td>
                                <td><?php echo $row['r_rate']; ?></td>
                                
                                
                            </tr>
                        <?php
                            $i++;
                            }
                        ?>
                    </tbody>
                  </table>
                </div>
              </div>
              </div>
              <?php
                } else {
                  ?>
                    <h4 class="text-center text-danger my-5">No Review found</h4>
                  <?php
                }
            ?>
<?php include'footer.php';?>