<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="style1.css">

</head>

<?php
$mysqli = new mysqli("localhost", "root", "password", "db");

/* check connection */
if ($mysqli->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
}

$query = "SELECT * FROM `week_budget` WHERE 1";
$result = $mysqli->query($query);

/* numeric array */
$row = $result->fetch_array(MYSQLI_NUM);
$week = $row[0];
      /* free result set */
    $result->close();
//SPENT
$query = "SELECT budget from budget";
$result = $mysqli->query($query);
$row = mysqli_fetch_all($result, MYSQLI_ASSOC);
$rows1 = json_encode ($row);


$book = json_decode ($rows1, true);
$mon = $book[0]['budget'];
$tue = $book[1]['budget'];
$wed = $book[2]['budget'];
$thu = $book[3]['budget'];
$fri = $book[4]['budget'];
$sat = $book[5]['budget'];
$sun = $book[6]['budget'];
//Budget

//Monday
$monb = round($week/7, 2);
//Tuesday
$tueb = round(($week - $mon)/6, 2);
//Wednesday
$wedb = round(($week - $mon - $tue)/5, 2);
//Thursday
$thub = round(($week - $mon - $tue - $wed)/4, 2);
//Friday
$frib = round(($week - $mon - $tue - $wed - $thu)/3, 2);
//Saturday
$satb = round(($week - $mon - $tue - $wed - $thu - $fri)/2, 2);
//Sunday
$sunb = round(($week - $mon - $tue - $wed - $thu - $fri - $sat), 2);

//Saved or Deficit
$saved = round(($week - $mon - $tue - $wed - $thu - $fri - $sat - $sun), 2);
?>
<body class="dan">
  <ul>
    <li><a href="weekly_input.php">Input</a></li>
    <li><a href="table.php">Live Budget</a></li>
    <li><a href="">A Link</a></li>
    <li><a href="">Another Link</a></li>
  </ul>
<div class = "budget">


  <table class="output">
    <th>
      <?php
      echo "Weekly Budget = £$week"
      ?>
    </th>
    <th>
    </th>
    <th>
      <?php
      echo "Saved = £$saved"
      ?>
    </th>
    <th>
    </th>
<tr>

<td>
<?php
//Monday
  echo "Monday Budget:"?>
</td>
<td><?php echo "£ $monb"
?>

</td>
<td>
  <?php
  $spent = 0;
  echo "Monday Spent:" ?>
</td>
<td>
<?php
echo " £$mon";
?>

  </td>
  </tr>
  <tr>
    <td>
<?php
//Tuesday
echo "Tuesday Budget:"?>
</td>
<td>
  <?php echo "£ $tueb"
  ?>
</td>
<td>
  <?php
echo "Tuesday Spent:";
?>
</td>
<td>
  <?php
  echo "£ $tue"
  ?>
</td>
</tr>
<tr>
<td>
<?php
//Wednesday
echo "Wednesday Budget:"?>
</td>
<td>
  <?php echo "£ $wedb"
  ?>
</td>
<td>
<?php
$spent = 0;
echo "Wednesday Spent:";
?>
</td>
<td>
  <?php
  echo "£ $wed";
  ?>
</td>
</tr>
<tr>
<td>
<?php
//Thursday
echo "Thursday Budget:"
?>
</td>
<td>
  <?php echo "£ $thub"
  ?>
</td>
<td>
<?php
$spent = 0;
echo "Thursday Spent:";?>
</td>
<td>
  <?php
  echo "£ $thu";
  ?></tr>
<tr>
</td>
<td>
<?php
//Friday
echo "Friday Budget:" ?>
</td>
<td>
  <?php echo "£ $frib"
  ?>
</td>
<td>
<?php
echo "Friday Spent:";?>
</td>
<td>
  <?php
  echo "£ $fri";
  ?>
</td>
</tr>
<tr>
<td>
  <?php
//Saturday
echo "Saturday Budget:"?>
</td>
<td>
  <?php echo "£ $satb"
  ?>
</td>
<td>
<?php
echo "Saturday Spent:";?>
</td>
<td>
  <?php
  echo "£ $sat";
  ?>
</td>
</tr>
<tr>
<td>
  <?php
//Sunday
echo "Sunday Budget:";?>
</td>
<td>
  <?php echo "£ $sunb"
  ?>
</td>
<td>
<?php
$spent = 0;
echo "Sunday Spent:";?>
</td>
<td>
<p>  <?php
  echo "£ $sun";
  ?>
</p>
</td>
</tr>
</table>
</div>
</body>
</html>
