<!DOCTYPE html>
<html lang="th">
<head>
    	<meta charset="UTF-8">
        <title>Run for ตุ๊ตตู่</title>
<style>
* {
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
    background-color: #3399FF;
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
    float: left;
    width: 30%;
    height: 750px; /* only for demonstration, should be removed */
    background: #ccc;
    padding: 20px;
}
navv {
    float: left;
    width: 70%;
    height: 750px; /* only for demonstration, should be removed */
    background: #F5F5F5;
    padding: 20px;
}

/* Style the list inside the menu */
nav ul {
    list-style-type: none;
    padding: 0;
}

article {
    float: left;
    padding: 20px;
    width: 70%;
    background-color: #66CCFF;
    height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
    content: "";
    display: table;
    clear: both;
}

/* Style the footer */
footer {
    background-color: #3399FF;
    padding: 10px;
    text-align: center;
    color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
    nav, article {
        width: 100%;
        height: auto;
    }
}
</style>
</head>
<body>
<header>
  <h2>Run for ตุ๊ตตู่ กันเถอะ</h2>
</header>

<section>
  <nav>
    <ul>
	  <li><a href="test_index2.php">หน้าแรก</a></li>
      <li><a href="register.php">สมัคร Run</a></li>
      <li><a href="#">ตรวจสอบ BIB</a></li>
      <li><a href="#">ดูแผนที่ เส้นทางวิ่ง</a></li>
    </ul>
  </nav>
  <navv>

<p>

<form method="post" action="result.php">
  First name:<input type="text" name="firstname" value="">
   Last name:<input type="text" name="lastname" value="">
  <br>
<h2>Gender</h2>

  <input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other  
 
  <br>
 Age:<input type="text" name="age" value="">
  <br>  <br>
Address
<textarea name="address" style="width:300px; height:50px;">address.</textarea>
  <br>  <br>
Tel.:<input type="text" name="tel" value="">
 E-mail:<input type="text" name="email" value="">
  <br>
<h2>Run Categories</h2>

  <input type="radio" name="runcategories" value="Fun run 3.5 km" checked> Fun run 3.5 km
  <input type="radio" name="runcategories" value="Mini Marathon 10.5"> Mini Marathon 10.5
  <input type="radio" name="runcategories" value="Marathon 42.5"> Marathon 42.5  

  <br>
<h2>Size</h2>

  <input type="radio" name="size" value="s" checked> S<br>
  <input type="radio" name="size" value="m"> M<br>
 <input type="radio" name="size" value="l" checked> L<br>
  <input type="radio" name="size" value="xl"> XL<br>
  <input type="radio" name="size" value="l">XXL  

  <br>
Underlying disease:<input type="text" name="underlyingdisease" value="">
  <br><br>
  <input type="submit" value="Submit">
</form> 
<p>
  </navv>


<footer>
  <p>Footer</p>
</footer>

    </body>
</html>