<?php
    include("connect.php");
    $c_id = isset($_GET['c_id']) ? $_GET['c_id'] : null;

    if ($c_id === null) {
        die("Customer ID is missing.");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Billing Summary</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <style>
        

        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        .billing-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            margin: auto;
            position: relative;
        }

        h1, h2 {
            color: #333;
        }

        .customer-info, .rental-details, .charges, .payment-info {
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 8px;
            text-align: left;
        }

        .total {
            font-weight: bold;
            background-color: #f9f9f9;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #0056b3;
        }

        .cancel-icon {
            position: absolute;
            top: 20px;
            right: 20px;
            font-size: 20px;
            color: #ff0000;
            cursor: pointer;
        }

        @media (max-width: 600px) {
            .billing-container {
                padding: 15px;
            }

            button {
                width: 100%;
                padding: 15px;
            }

            .cancel-icon {
                font-size: 18px;
            }
        }
    </style>
</head>
<body>

<div class="billing-container">

    <a href="home.php" class="cancel-icon" title="Cancel">
        <i class="fas fa-times-circle"></i>
    </a>
    <h1>RentRide</h1>
    
    <div class="customer-info">
        <h2>Customer Information</h2>
        <?php 
            $sql = "SELECT * FROM customer_register WHERE c_id = ?";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("i", $c_id);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($row = $result->fetch_assoc()) {
        ?>
            <p><strong>Customer Id : </strong> <?php echo $row['c_id']; ?></p>
            <p><strong>Name:</strong> <?php echo $row['c_name']; ?></p>
            <p><strong>Email:</strong> <?php echo $row['c_email']; ?></p>
            <p><strong>Phone:</strong> <?php echo $row['c_mobile']; ?></p>
        <?php 
            } else {
                echo "<p>Customer not found.</p>";
            }
        ?>
    </div>
    
    <div class="rental-details">
        <h2>Rental Details</h2>
        <?php
            $sql = "SELECT * FROM vechicels_booking WHERE c_id = ?";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("i", $c_id);
            $stmt->execute();
            $result = $stmt->get_result();

            while ($row = $result->fetch_assoc()) {
        ?>
            <p><strong>Booking Id:</strong> <?php echo $row['b_id']; ?></p>
            <p><strong>Name:</strong> <?php echo $row['b_name']; ?></p>
            <p><strong>Car Model:</strong> <?php echo $row['b_carName']; ?></p>
            <p><strong>Rental Period:</strong> <?php echo $row['b_fromDate']; ?> - <?php echo $row['b_ToDate']; ?></p>
        <?php } ?>
    </div>

    <div class="charges">
        <h2>Charges</h2>
        <?php 
            $sql = "SELECT 
                        b.b_id,
                        b.b_name,
                        b.b_carName,
                        b.b_totalDays,
                        p.p_amount,
                        v.v_price
                    FROM 
                        vechicels_booking AS b
                    JOIN 
                        vechicels_payment AS p ON b.b_id = p.b_id
                    JOIN 
                        vechicels_brand AS v ON b.v_id = v.v_id
                    WHERE 
                        b.c_id = ?";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("i", $c_id);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($row = $result->fetch_assoc()) {       
        ?>
            <table>
                <tr>
                    <th>Description</th>
                    <th>Amount</th>
                </tr>
                <tr>
                    <td>One Day Price</td>
                    <td><?php echo $row['v_price']; ?></td>
                </tr>
                <tr>
                    <td>Total Days</td>
                    <td><?php echo $row['b_totalDays']; ?></td>
                </tr>
                <tr class="total">
                    <td><strong>Total Amount Due</strong></td>
                    <td><strong><?php echo $row['p_amount']; ?></strong></td>
                </tr>
            </table>
        <?php } ?>
    </div>

    <div class="payment-info">
        <h2>Payment Information</h2>
        <?php 
            $sql = "SELECT * FROM vechicels_payment WHERE c_id = ?";
            $stmt = $con->prepare($sql);
            $stmt->bind_param("i", $c_id);
            $stmt->execute();
            $result = $stmt->get_result();

            while ($row = $result->fetch_assoc()) {
        ?>
            <p><strong>Payment Method:</strong> <?php echo $row['p_payMethod']; ?></p>
            <p><strong>Transaction ID:</strong> <?php echo $row['p_id']; ?></p>
        <?php } ?>
    </div>

    <button id="printButton">Print Bill</button>
</div>

<script>
    document.getElementById("printButton").onclick = function() {
        window.print();
    };
</script>
</body>
</html>
