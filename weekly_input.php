<!DOCTYPE html>
<head>
<script src="jquery_lib.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $("#div1").load("echo.php");
    });
});
</script>
<link rel="stylesheet" type="text/css" href="style1.css">
</head>
<body>
<ul>
  <li><a href="weekly_input.php">Input</a></li>
  <li><a href="table.php">Live Budget</a></li>
  <li><a href="">A Link</a></li>
  <li><a href="">Another Link</a></li>
</ul>
<div class="spent">
  <table>
    <th>
      Text
    </th>
    <th>
      Field
    </th>
    <th>
      deadspace
    </th>
    <tr>
<form name="frm" method="POST" action=""><td>
  Weekly Budget:</td>
 <td><input type="text" name="week" id="week" value="" /><br></td>
 <td>
   <div id="div1">echo</div>
</td>
 </tr>

 <tr>
   <td>
 Monday Spent:</td>
 <td>
 <input type="text" name="monday" id="monday" value="" /><br></td>
 <td></td>
 </tr>
 <tr><td>
 Tuesday Spent:</td>
 <td>
 <input type="text" name="tuesday" id="tuesday" value=""/><br></td>
 <td></td></tr>
 <tr><td>
 Wednesday Spent:</td>
 <td>
 <input type="text" name ="wednesday" id = "wednesday" value =""/><br>
 </td><td></td></tr>
 <tr><td>
 Thursday Spent:</td>
 <td>
 <input type="text" name="thursday" id = "thursday" value=""/><br></td>
 <td></td></tr>
 <tr><td>
 Friday Spent:</td>
 <td>
 <input type="text" name="friday" id="friday" value=""/><br></td>
 <td></td></tr>
 <tr><td>
 Saturday Spent:</td>
 <td>
 <input  type="text" name="saturday" id="saturday" value="" /><br></td>
 <td></td></tr>
 <tr><td>
 Sunday Spent:</td>
 <td>
 <input type="text" name="sunday" id="sunday" value="" /><br></td>
 <td></td></tr>
 <tr><td></td>
   <td>
 <input class="submit" type="submit" name="Update" id="update" value="Update" /><br>
 </td>
 <td></td></tr>
</form>
</div>
<script src="post_budget.js"></script>





</body>
