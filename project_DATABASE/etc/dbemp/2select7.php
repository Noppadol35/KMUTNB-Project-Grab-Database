<?php /* *** No Copyright for Education (Free to Use and Edit) *** * /
PHP 7.1.1 | MySQL 5.7.17 | phpMyAdmin 4.6.6 | by appserv-win32-8.6.0.exe
Created by Mr.Earn SURIYACHAY | ComSci | KMUTNB | Bangkok | Apr 2018 */ ?>
<html>

<head></head>

<body>
  <?php
  require('connect.php');
  // JOINT 2 TABLE
  $sql = '
  SELECT EmployeeID, Name, Salary, DepartmentName 
  FROM employee, department 
  WHERE Salary > 20000 
  AND employee.DepartmentID = department.DepartmentID;
  ';

  $objQuery = mysqli_query($conn, $sql) or die("Error Query [" . $sql . "]");
  ?>
  <table border="1">
    <tr>
      <th width="50">
        <div align="center">No</div>
      </th>
      <th width="100">
        <div align="center">EmployeeID</div>
      </th>
      <th width="100">
        <div align="center">Name</div>
      </th>
      <th width="100">
        <div align="center">Salary</div>
      </th>
      <th width="100">
        <div align="center">DepartmentName</div>
      </th>
    </tr>
    <?php
    $i = 1;
    while ($objResult = mysqli_fetch_array($objQuery)) {
    ?>
      <tr>
        <td>
          <div align="center"><?php echo $i; ?></div>
        </td>
        <td><?php echo $objResult["EmployeeID"]; ?></td>
        <td><?php echo $objResult["Name"]; ?></td>
        <td><?php echo $objResult["Salary"]; ?></td>
        <td><?php echo $objResult["DepartmentName"]; ?></td>
      </tr>
    <?php
      $i++;
    }
    ?>
  </table>
  <?php
  mysqli_close($conn); // ปิดฐานข้อมูล
  echo "<br><br>";
  echo "--- END ---";
  ?>
</body>

</html>