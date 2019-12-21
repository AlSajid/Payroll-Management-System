<!DOCTYPE HTML>
<html>

<head>
    <title>Payroll Management System</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        td,
        th {
            border-right: 1px dotted grey;
        }
    </style>
</head>

<body>
    <h3 class="w3-center">Modify Employee Record</h3>
    <hr class="w3-margin-left w3-margin-right">

    <?php
    $connect = mysqli_connect("localhost", "root", "", "PMS");

    if (!$connect)
        die("Cannot connect to database<br>Error: " . mysqli_connect_error());

    $sql = "SELECT * FROM employee WHERE code = " . $_GET['code'] . "";
    $result = $connect->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
    ?>


            <div class="w3-container w3-third w3-padding w3-margin w3-animate-left">
                <form action="edit.php" method="post" autocomplete="off">
                    <input class="w3-hide" name="code" value="<?php echo $row['code']  ?>">
                    <label>Name</label>
                    <input type="text" name="name" class="w3-input w3-border" value="<?php echo $row['name']  ?>"><br>
                    <br>
                    <label>Address</label>
                    <input type="text" name="address" class="w3-input w3-border" value="<?php echo $row['address']  ?>"><br>
                    <br>
                    <label>Phone Number</label>
                    <input type="tel" name="phone" class="w3-input w3-border" value="<?php echo $row['phone number']  ?>"><br>
                    <br>
                    <label>Joining Date</label>
                    <input type="date" name="joining" class="w3-input w3-border" value="<?php echo $row['joining date']  ?>"><br>
                    <br>
                    <label>Designation</label>
                    <input type="text" name="designation" class="w3-input w3-border" value="<?php echo $row['designation']  ?>"><br>
                    <br>
                    <label>Grade</label><br>
                    <select name="grade" class="w3-input" value="<?php echo $row['grade']  ?>">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                    </select>
                    <br>
                    <label>Loan</label>
                    <input type="number" name="loan" class="w3-input w3-border" value="<?php echo $row['loan']  ?>"><br>
                    <br>
                    <label>Basic Salary</label>
                    <input type="number" name="basic" class="w3-input w3-border" value="<?php echo $row['basic']  ?>"><br>
                    <br>
                    <label>House Allowance</label>
                    <input type="number" name="allowance" class="w3-input w3-border" value="<?php echo $row['house allowance']  ?>"><br>
                    <br>
                    <button type="Modify" class="w3-button w3-border w3-yellow">Submit</button>
                    <button type="button" onclick="location.href = 'index.php'" class="w3-button w3-red">Close</button>
                </form>
            </div>
    <?php
                                                                                        }
                                                                                    }
    ?>

</body>

</html>