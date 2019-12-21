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
  <h1 class="w3-center">Payroll Management System</h1>
  <hr class="w3-margin-left w3-margin-right">

  <button onclick="document.getElementById('add').style.display='block'" class="w3-button w3-green w3-margin w3-padding">Add New Employee</button>
  <br><br><br>
  <div id="add" class="w3-animate-left w3-padding w3-margin" style="display:none">
    <div class="w3-container w3-third ">
      <form action="insert.php" method="post" autocomplete="off">
        <label>Name</label>
        <input type="text" name="name" class="w3-input w3-border"><br>
        <br>
        <label>Address</label>
        <input type="text" name="address" class="w3-input w3-border"><br>
        <br>
        <label>Phone Number</label>
        <input type="tel" name="phone" class="w3-input w3-border"><br>
        <br>
        <label>Joining Date</label>
        <input type="date" name="joining" class="w3-input w3-border"><br>
        <br>
        <label>Designation</label>
        <input type="text" name="designation" class="w3-input w3-border"><br>
        <br>
        <label>Grade</label><br>
        <select name="grade" class="w3-input">
          <option value="A">A</option>
          <option value="B">B</option>
          <option value="C">C</option>
          <option value="D">D</option>
          <option value="E">E</option>
        </select>
        <br>
        <label>Loan</label>
        <input type="number" name="loan" class="w3-input w3-border"><br>
        <br>
        <label>Basic Salary</label>
        <input type="number" name="basic" class="w3-input w3-border"><br>
        <br>
        <label>House Allowance</label>
        <input type="number" name="allowance" class="w3-input w3-border"><br>
        <br>
        <button type="submit" class="w3-button w3-border w3-green">Submit</button>
        <button type="button" onclick="document.getElementById('add').style.display='none'" class="w3-button w3-red">Close</button>
      </form>
    </div>
  </div>
  <div>
    <table class="w3-table w3-striped w3-border w3-bordered w3-centered w3-hoverable w3-table-all" id="record">
      <tr>
        <th>Name</th>
        <th>Address</th>
        <th>Phone number</th>
        <th>Joining date</th>
        <th>Designation</th>
        <th>Grade</th>
        <th>Loan</th>
        <th>Basic</th>
        <th>House Allowance</th>
        <th colspan="3">Action</th>
      </tr>
      <?php
      $connect = mysqli_connect("localhost", "root", "", "PMS");

      if (!$connect) 
        die("Cannot connect to database<br>Error: " . mysqli_connect_error());

      $sql = "SELECT * FROM employee";
      $result = $connect->query($sql);

      if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
          echo "<tr> <td>" . $row["name"] . "</td><td>" . $row["address"] . "</td><td>" . $row["phone number"] . "</td><td>" . $row["joining date"] . "</td><td>" . $row["designation"] . "</td><td>" . $row["grade"] . " </td><td>" . $row["loan"] . "</td><td>" . $row["basic"] . "</td><td>" . $row["house allowance"] . "</td>";
          echo "<td class='w3-blue'><a href='slip.php?code=" . $row["code"] . "'>Pay</a></td><td class='w3-yellow'><a href='modify.php?code=" . $row["code"] . "'>Modify</a></td><td class='w3-red'><a href='delete.php?code=" . $row["code"] . "'>Delete</a></td></tr>";
        }
      }

      ?>
    </table>
  </div>
</body>

</html>