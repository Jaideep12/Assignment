<html>
<head>
	 <meta name="viewport" content="width=device-width, initial-scale=1">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

     <style>
     body{
     }
     #demo4{
     	padding-top: 60px;
     }
     #demo5{
     	padding-top: 70px;

     }
     #demo9{
     	background-color: white;
     }
     body {
  background: #76b852; /* fallback for old browsers */
  background: -webkit-linear-gradient(right, #76b852, #8DC26F);
  background: -moz-linear-gradient(right, #76b852, #8DC26F);
  background: -o-linear-gradient(right, #76b852, #8DC26F);
  background: linear-gradient(to left, #76b852, #8DC26F);
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;      
}

     </style>

	<title>Comments</title>
	</head>
	<body>
		<div class="container">
			<h2><b>COMMENT SECTION</b></h2>
		</div>
		<div class="container" id="demo5">
			 <img src="0.jpg" class="img-rounded" alt="Note ban" width="500" height="350">
			</div>

		<div class="container" id="demo4">
			<form method="post">
				<div class="form-group">
					<label for="Name">Name:</label>
					<input type="text" id="demo2" name="names" class="form-control" placeholder="Enter your name" maxlength="200">
				</div>

				<div class="form-group">
					<label for="Comment">Comments:</label>
					<input type="text" id="demo" name="comments" class="form-control" placeholder="Write your comment...." maxlength="200">
				</div>
				<div class="form-group">
					<input type="Submit" name="comm" Value="Comment">
				</div>
		</form>
	</div>
	</body>
</html>

<?php
$host="localhost";
$host2="root";
$password="pict123";

$conn=mysql_connect($host,$host2,$password);
if($conn)
{
		$query="Create Database Intern";
		$exec=mysql_query($query,$conn);
		$query3="use Intern";
		$exec3=mysql_query($query3,$conn);
		$query2="Create table Comment(name varchar(100) NOT NULL,content varchar(200) NOT NULL,date_time datetime NOT NULL)";
		$exec2=mysql_query($query2,$conn);
if(isset($_POST['comm']))
{
	$nameofperson=$_POST['names'];
	$commentofperson=$_POST['comments'];
	$query4="Insert into Comment values('$nameofperson','$commentofperson',NOW())";
	$exec4=mysql_query($query4,$conn);
}

    $sql="Select * from Comment order by date_time desc";
	$query5=mysql_query($sql,$conn);
	echo"<div class='container'>
	<h3><b>Comments</b></h3>
	</div>";

	while($row=mysql_fetch_array($query5))
		echo "<div class='container'>
	          <form>
	          <div class='form-group' id='demo9'>
	          <label><b>$row[0]</b> COMMENTED:</label>
	          <br>
	          <label><b>COMMENT-$row[1]</b></label>
	          </div>
	          </form>
	          </div>";
	}
else
	{
		echo "Failed to establish a secure connection";
	}

?>