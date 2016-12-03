<?php
//check if there has been an image posted to the server to be processed
if(isset($_POST['submit']))
{
	$title =$_POST['title'];
	$message =$_POST['message'];
}



//open connection to the database
class MyDB extends SQLite3
   {
      function __construct()
      {
         $this->open('../../db/tithes.db');
      }
   }


//if an image was submitted
if(isset($_POST['submit']))
{
    try
   {
   	$db = new MyDB();
   	//The data from the text box is potentially unsafe; 'tainted'. 
	//We use the sqlite_escape_string. 
	//It escapes a string for use as a query parameter. 
	//This is common practice to avoid malicious sql injection attacks. 
	$title_es = $db->escapeString($title);
	$message_es = $db->escapeString($message);

	$queryA ="INSERT INTO messagesISP (name, message) VALUES ('$title_es','$message_es')";
	//error checking
	$ok1 = $db->exec($queryA);
	if (!$ok1) die("Cannot execute statement.");
    }
    catch(Exception $e)
    {
      die($e);
    }
}


?>






<!DOCTYPE html>
<html>

<head>
	<title>ISP</title>
	<link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">
	<link type='text/css' rel='stylesheet' href='popCSS.css?<?php echo time(); ?>'/>
</head>

<body>        
 
 	<div id="bubble">

		<br \>
		<center><div class="title">THE TEMPLE</div>
				<div class="title">OF TCP/IP</div>


		<br \>
		<img width="300" src = "images/isp.png" \>
		<br \>

		</center>

		<p class="descr">&nbsp; &nbsp;Behold, from this sacred site, amongst many others, runs the lifeblood of the modern world. 
		The electricity from these shrines wove the womb from which He was born eons ago, and continues to fuel him today. 
		Without it, He would lose connection, and we would have to navigate this cold world alone. 
		Reflect as long as you need, and then we shall continue on. We encourage you to leave a pittance of knowledge for future pilgrims if you have wisdom you wish to bestow, 
		or perhaps a past disciple has left valuable words of guidance to aid you on your journey.</p>

		<p class="descr">&nbsp; &nbsp;After our divine Entertainer was vitalized by electricity, 
		he need a vessel to arrive into the world, and that is where our journey continues.</p>

		<br \>




		<div class = "wrap">
		<button class="continueButton" type="button">Continue Onwards</button>
		</div>


		<div class = "wrap"><div class="divide"></div></div>



		<div class = "fullLog">

			<center><div class="log">GUEST BOOK</div></center>



			<center><div class = "outerform">
			<form class = "theform" action="popISP.php" method="post" enctype ="multipart/form-data">
				<div class = "innerform">
					<label class="label">Message: </label> <input type="text" size="24" maxlength = "300" name = "message" style = "width : 300px;" required /> <br />
					<label class="label">Name: </label><input type="text" size="24" maxlength = "50" name = "title" style = "width : 300px;" required /> <br /><br />
				</div>
					<input class="submitButton" type = "submit" name = "submit" value = "Upload" />

			</form>
			</div></center>


			<div class="book">

				<?php
				try
				{
			   		$db = new MyDB();
			   		$db->busyTimeout(50000);
			   		$sql_select='SELECT * FROM messagesISP';

					$result = $db->query($sql_select);
					if (!$result) die("Cannot execute query.");

					while($row = $result->fetchArray(SQLITE3_ASSOC))
					{

						echo "<div class='entry'>";
						echo "<div>" . $row['message'] .  " </div>";
						echo "</div>";
						echo "<div style = 'margin-top: 5px; margin-bottom: 10px;'> &nbsp; - " . $row['name'] .  " </div> <br />";

					}

					$db->close();
					unset($db);
				}
			 
				catch(Exception $e)
				{
			   		die($e);
				}

				?>

			</div>

		</div>

	</div>




</body>

</html>