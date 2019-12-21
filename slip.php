<!DOCTYPE HTML>
<html>

<head>
    <title>Payment Slip</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
    <h1 class="w3-center">Payment Slip</h1>
    <hr class="w3-margin-left w3-margin-right">

    <div class="w3-half w3-margin w3-padding">
        <table class="w3-table" id="record">

            <?php
            $connect = mysqli_connect("localhost", "root", "", "PMS");

            if (!$connect)
                die("Cannot connect to database<br>Error: " . mysqli_connect_error());

            $sql = "SELECT * FROM employee  WHERE code = " . $_GET['code'] . "";
            $result = $connect->query($sql);

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {

            ?>
                    <tr>
                        <td>Name</td>
                        <td><?php echo  $row["name"] ?></td>
                    </tr>
                    <tr>
                        <td>Address</th>
                        <td><?php echo  $row["address"] ?></td>
                    </tr>
                    <tr>
                        <td>Phone number</td>
                        <td><?php echo  $row["phone number"] ?></td>
                    </tr>
                    <tr>
                        <td>Joining date</td>
                        <td><?php echo  $row["joining date"] ?></td>
                    </tr>
                    <tr>
                        <td>Designation</td>
                        <td><?php echo  $row["designation"] ?></td>
                    </tr>
                    <tr>
                        <td>Grade</td>
                        <td><?php echo  $row["grade"] ?></td>
                    </tr>
                    <tr>
                        <td>Payment Date</td>
                        <td><?php echo  date("d M Y") ?></td>
                    </tr>
                    <tr>
                        <td><br>
                        <td>
                    </tr>
                    <tr>
                        <td>Loan</td>
                        <td><?php echo  $row["loan"] ?></td>
                    </tr>
                    <tr>
                        <td>Basic</td>
                        <td><?php echo  $row["basic"] ?></td>
                    </tr>

                    <tr>
                        <td>House Allowance</td>
                        <td><?php echo  $row["house allowance"] ?></td>
                    </tr>
                    <tr style="border-top: 1px dotted grey !important">
                        <td>Total</td>
                        <td><?php echo $total = $row["basic"] + $row["house allowance"] + $row["loan"] ?></td>
                    </tr>
            <?php
                        }
                    }

            ?>
        </table>
    </div>

    <script type="text/javascript">
        print();
    </script>
</body>

</html>