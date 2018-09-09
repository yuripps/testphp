<!DOCTYPE html>
<html lang="en">
<head>
  <title>BIB for ตุ๊ตตู่</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Basic Table</h2>
  <p>The .table class adds basic styling (light padding and horizontal dividers) to a table:</p>            
  <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Email</th>
      </tr>
    </thead>
	<tbody>
<?php
include("connec/mysql.php");


$sql = "select * from myuserprofile";
$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) > 0){
	while($row = mysqli_fetch_assoc($result)){
		?>
<tbody>
	<tr>
	<td><?php echo $row["userid"];?></td>
	<td><?php echo $row["firstname"];?></td>
	<td><?php echo $row["lastname"];?></td>
	<td><?php echo $row["gender"];?></td>
	<td><?php echo $row["age"];?></td>
	<td><?php echo $row["address"];?></td>
	<td><?php echo $row["tel"];?></td>
	<td><?php echo $row["email"];?></td>
	<td><?php echo $row["size"];?></td>
	<td><?php echo $row["underlyingdisease"];?></td>
	</tr>
<?php
	}
} else {
	echo "0 result";
}
?>
	</tbody>
	
	</table>
</div>

</body>
</html>
