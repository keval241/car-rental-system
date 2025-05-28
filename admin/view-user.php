<?php include'headder.php'; ?>
    <div class="container-xxl flex-grow-1 container-p-y ">
    <?php
    include 'connect.php';
    if(isset($_SESSION["alert"])){
        echo $_SESSION["alert"];
        unset($_SESSION["alert"]);
    }
$sql1 = "SELECT * FROM customer_register";
$result1 = mysqli_query($con, $sql1) or die("Query failed");
if(mysqli_num_rows($result1) > 0)
{
?>
    <div class="card">
                <h5 class="card-header">User Details</h5>
                <div class="table-responsive text-nowrap">
                  <table class="table text-center">
                    <thead>
                      <tr>
                        <th>Sr no.</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Mobile no.</th>
                        <th>Email</th>
                        <th>Actions</th>
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
                                <td><?php echo $row['c_name']; ?></td>
                                <td><?php echo $row['c_username']; ?></td>       
                                <td><?php echo $row['c_mobile']; ?></td>
                                <td><?php echo $row['c_email']; ?></td>
                                <td>
                                <a class="text-danger" href="delete-user.php?id=<?php echo $row['c_id']; ?>"
                                          ><i class="bx bx-trash me-1"></i></a
                                      >
                                </td>
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
                    <h4 class="text-center text-danger my-5">No users found</h4>
                  <?php
                }
            ?>
<?php include'footer.php';?>