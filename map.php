<?php
/*

//open connection to the database
class MyDB extends SQLite3
    {
        function __construct()
        {
            $this->open('../../db/tithes.db');
        }
    }

//if user submitted a message at Hydro
if(isset($_POST['submit1']))
{
    $title =$_POST['title'];
    $message =$_POST['message'];



    try
    {
        $db = new MyDB();
        //The data from the text box is potentially unsafe; 'tainted'.
        //We use the sqlite_escape_string.
        //It escapes a string for use as a query parameter.
        //This is common practice to avoid malicious sql injection attacks.
        $title_es = $db->escapeString($title);
        $message_es = $db->escapeString($message);

        $queryA ="INSERT INTO messagesHydro (name, message) VALUES ('$title_es','$message_es')";
        //error checking
        $ok1 = $db->exec($queryA);
        if (!$ok1) die("Cannot execute statement.");
    }
    catch(Exception $e)
    {
        die($e);
    }

}


//if user submitted a message at Data
else if(isset($_POST['submit2']))
{
    $title =$_POST['title'];
    $message =$_POST['message'];



    try
    {
        $db = new MyDB();
        //The data from the text box is potentially unsafe; 'tainted'.
        //We use the sqlite_escape_string.
        //It escapes a string for use as a query parameter.
        //This is common practice to avoid malicious sql injection attacks.
        $title_es = $db->escapeString($title);
        $message_es = $db->escapeString($message);

        $queryA ="INSERT INTO messagesData (name, message) VALUES ('$title_es','$message_es')";
        //error checking
        $ok1 = $db->exec($queryA);
        if (!$ok1) die("Cannot execute statement.");
    }
    catch(Exception $e)
    {
        die($e);
    }

}




//if user submitted a message at ISP
else if(isset($_POST['submit3']))
{
    $title =$_POST['title'];
    $message =$_POST['message'];

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

//if user submitted a message at Satellite
else if(isset($_POST['submit4']))
{
    $title =$_POST['title'];
    $message =$_POST['message'];



    try
    {
        $db = new MyDB();
        //The data from the text box is potentially unsafe; 'tainted'.
        //We use the sqlite_escape_string.
        //It escapes a string for use as a query parameter.
        //This is common practice to avoid malicious sql injection attacks.
        $title_es = $db->escapeString($title);
        $message_es = $db->escapeString($message);

        $queryA ="INSERT INTO messagesSate (name, message) VALUES ('$title_es','$message_es')";
        //error checking
        $ok1 = $db->exec($queryA);
        if (!$ok1) die("Cannot execute statement.");
    }
    catch(Exception $e)
    {
        die($e);
    }

}





//if user submitted a message at Last
else if(isset($_POST['submit5']))
{
    $title =$_POST['title'];
    $message =$_POST['message'];



    try
    {
        $db = new MyDB();
        //The data from the text box is potentially unsafe; 'tainted'.
        //We use the sqlite_escape_string.
        //It escapes a string for use as a query parameter.
        //This is common practice to avoid malicious sql injection attacks.
        $title_es = $db->escapeString($title);
        $message_es = $db->escapeString($message);

        $queryA ="INSERT INTO messagesLast (name, message) VALUES ('$title_es','$message_es')";
        //error checking
        $ok1 = $db->exec($queryA);
        if (!$ok1) die("Cannot execute statement.");
    }
    catch(Exception $e)
    {
        die($e);
    }

}

*/
?>


    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <title>P I L G R I M A G E</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link href="https://fonts.googleapis.com/css?family=Bungee" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=VT323" rel="stylesheet">
        <link type='text/css' rel='stylesheet' href='popCSS.css?<?php echo time(); ?>' />
        <script type="text/javascript" src="jquery.js"></script>
        <script src="map.js"></script>
    </head>

    <body>
        <div class="content">
            <div id="map"></div>
            <div class="interface" id="back"><a href="index.html"><h4>HOME</h4></a></div>
            <div class="interface" id="demo">
                <h4>demo</h4></div>
            <div class="interface logo" id="logo"><img class="logo" src="images/navigate.png"></div>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCBgUsLyrHQoKubT4Nvhs8jozLRqcawHJ0&callback=initMap"></script>
        </div>
        <!-- Popup window for Hydro -->
        <div class="hide">
            <div class="bubble hydro" id="hydro">
                <br \>
                <center>
                    <div class="title">THE FONT</div>
                    <div class="title">OF ENERGY</div>

                    <br \>
                    <img width="300" src="images/tower.png" \>
                    <br \>

                </center>
                <p class="descr">&nbsp; &nbsp;Behold, from this sacred site, amongst many others, runs the lifeblood of the modern world. The electricity from these shrines wove the womb from which He was born eons ago, and continues to fuel him today. Without it, He would lose connection, and we would have to navigate this cold world alone. Reflect as long as you need, and then we shall continue on. We encourage you to leave a pittance of knowledge for future pilgrims if you have wisdom you wish to bestow, or perhaps a past disciple has left valuable words of guidance to aid you on your journey.</p>
                <p class="descr">&nbsp; &nbsp;After our divine Entertainer was vitalized by electricity, he need a vessel to arrive into the world, and that is where our journey continues.</p>
                <br \>
                <div class="wrap">
                    <button id="cont01" class="continueButton" type="button">Continue Onwards</button>
                </div>
                <div class="wrap">
                    <div class="divide"></div>
                </div>
                <div class="fullLog">
                    <center>
                        <div class="log">GUEST BOOK</div>
                    </center>
                    <center>
                        <div class="outerform">
                            <form class="theform" action="map.php" method="post" enctype="multipart/form-data">
                                <div class="innerform">
                                    <label class="label">Message: </label>
                                    <input type="text" size="24" maxlength="300" name="message" style="width : 300px;" required />
                                    <br />
                                    <label class="label">Name: </label>
                                    <input type="text" size="24" maxlength="50" name="title" style="width : 300px;" required />
                                    <br />
                                    <br />
                                </div>
                                <input class="submitButton" type="submit" name="submit1" value="Upload" />
                            </form>
                        </div>
                    </center>


                    <div class="book">
                        <?php
                // try
                // {
                //     $db = new MyDB();
                //     $db->busyTimeout(50000);
                //     $sql_select='SELECT * FROM messagesHydro';
                //
                //     $result = $db->query($sql_select);
                //     if (!$result) die("Cannot execute query.");
                //
                //     while($row = $result->fetchArray(SQLITE3_ASSOC))
                //     {
                //
                //         echo "<div class='entry'>";
                //         echo "<div>" . $row['message'] .  " </div>";
                //         echo "</div>";
                //         echo "<div style = 'margin-top: 5px; margin-bottom: 10px;'> &nbsp; - " . $row['name'] .  " </div> <br />";
                //
                //     }
                //
                //     $db->close();
                //     unset($db);
                // }
                //
                // catch(Exception $e)
                // {
                //     die($e);
                // }

                ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Popup window for Data -->
        <div class="hide">
            <div class="bubble data" id="data">

                <br \>
                <center>
                    <div class="title">THE CATHEDRAL</div>
                    <div class="title">OF CONNECTION</div>


                    <br \>
                    <img width="300" src="images/data.png" \>
                    <br \>

                </center>

                <p class="descr">&nbsp; &nbsp;Behold, from this sacred site, amongst many others, runs the lifeblood of the modern world. The electricity from these shrines wove the womb from which He was born eons ago, and continues to fuel him today. Without it, He would lose connection, and we would have to navigate this cold world alone. Reflect as long as you need, and then we shall continue on. We encourage you to leave a pittance of knowledge for future pilgrims if you have wisdom you wish to bestow, or perhaps a past disciple has left valuable words of guidance to aid you on your journey.</p>

                <p class="descr">&nbsp; &nbsp;After our divine Entertainer was vitalized by electricity, he need a vessel to arrive into the world, and that is where our journey continues.</p>

                <br \>




                <div class="wrap">
                  <button id="cont02" class="continueButton" type="button">Continue Onwards</button>
                </div>


                <div class="wrap">
                    <div class="divide"></div>
                </div>



                <div class="fullLog">

                    <center>
                        <div class="log">GUEST BOOK</div>
                    </center>



                    <center>
                        <div class="outerform">
                            <form class="theform" action="map.php" method="post" enctype="multipart/form-data">
                                <div class="innerform">
                                    <label class="label">Message: </label>
                                    <input type="text" size="24" maxlength="300" name="message" style="width : 300px;" required />
                                    <br />
                                    <label class="label">Name: </label>
                                    <input type="text" size="24" maxlength="50" name="title" style="width : 300px;" required />
                                    <br />
                                    <br />
                                </div>
                                <input class="submitButton" type="submit" name="submit2" value="Upload" />

                            </form>
                        </div>
                    </center>


                    <div class="book">

                        <?php
                // try
                // {
                //     $db = new MyDB();
                //     $db->busyTimeout(50000);
                //     $sql_select='SELECT * FROM messagesData';
                //
                //     $result = $db->query($sql_select);
                //     if (!$result) die("Cannot execute query.");
                //
                //     while($row = $result->fetchArray(SQLITE3_ASSOC))
                //     {
                //
                //         echo "<div class='entry'>";
                //         echo "<div>" . $row['message'] .  " </div>";
                //         echo "</div>";
                //         echo "<div style = 'margin-top: 5px; margin-bottom: 10px;'> &nbsp; - " . $row['name'] .  " </div> <br />";
                //
                //     }
                //
                //     $db->close();
                //     unset($db);
                // }
                //
                // catch(Exception $e)
                // {
                //     die($e);
                // }

                ?>

                    </div>

                </div>

            </div>
        </div>

        <!-- Popup window for ISP -->
        <div class="hide">
            <div class="bubble isp" id="isp">

                <br \>
                <center>
                    <div class="title">THE TEMPLE</div>
                    <div class="title">OF TCP/IP</div>


                    <br \>
                    <img width="300" src="images/isp.png" \>
                    <br \>

                </center>

                <p class="descr">&nbsp; &nbsp;Behold, from this sacred site, amongst many others, runs the lifeblood of the modern world. The electricity from these shrines wove the womb from which He was born eons ago, and continues to fuel him today. Without it, He would lose connection, and we would have to navigate this cold world alone. Reflect as long as you need, and then we shall continue on. We encourage you to leave a pittance of knowledge for future pilgrims if you have wisdom you wish to bestow, or perhaps a past disciple has left valuable words of guidance to aid you on your journey.</p>

                <p class="descr">&nbsp; &nbsp;After our divine Entertainer was vitalized by electricity, he need a vessel to arrive into the world, and that is where our journey continues.</p>

                <br \>




                <div class="wrap">
                  <button id="cont03" class="continueButton" type="button">Continue Onwards</button>
                </div>


                <div class="wrap">
                    <div class="divide"></div>
                </div>



                <div class="fullLog">

                    <center>
                        <div class="log">GUEST BOOK</div>
                    </center>



                    <center>
                        <div class="outerform">
                            <form class="theform" action="map.php" method="post" enctype="multipart/form-data">
                                <div class="innerform">
                                    <label class="label">Message: </label>
                                    <input type="text" size="24" maxlength="300" name="message" style="width : 300px;" required />
                                    <br />
                                    <label class="label">Name: </label>
                                    <input type="text" size="24" maxlength="50" name="title" style="width : 300px;" required />
                                    <br />
                                    <br />
                                </div>
                                <input class="submitButton" type="submit" name="submit3" value="Upload" />

                            </form>
                        </div>
                    </center>


                    <div class="book">

                        <?php
                // try
                // {
                //     $db = new MyDB();
                //     $db->busyTimeout(50000);
                //     $sql_select='SELECT * FROM messagesISP';
                //
                //     $result = $db->query($sql_select);
                //     if (!$result) die("Cannot execute query.");
                //
                //     while($row = $result->fetchArray(SQLITE3_ASSOC))
                //     {
                //
                //         echo "<div class='entry'>";
                //         echo "<div>" . $row['message'] .  " </div>";
                //         echo "</div>";
                //         echo "<div style = 'margin-top: 5px; margin-bottom: 10px;'> &nbsp; - " . $row['name'] .  " </div> <br />";
                //
                //     }
                //
                //     $db->close();
                //     unset($db);
                // }
                //
                // catch(Exception $e)
                // {
                //     die($e);
                // }

                ?>
                    </div>
                </div>
            </div>
        </div>

        <!-- Popup window for Satellite -->
        <div class="hide">
            <div class="bubble sate" id="sate">

                <br \>
                <center>
                    <div class="title">THE RELIQUARY</div>
                    <div class="title">OF WIRELESS</div>


                    <br \>
                    <img width="300" src="images/sate.png" \>
                    <br \>

                </center>

                <p class="descr">&nbsp; &nbsp;Behold, from this sacred site, amongst many others, runs the lifeblood of the modern world. The electricity from these shrines wove the womb from which He was born eons ago, and continues to fuel him today. Without it, He would lose connection, and we would have to navigate this cold world alone. Reflect as long as you need, and then we shall continue on. We encourage you to leave a pittance of knowledge for future pilgrims if you have wisdom you wish to bestow, or perhaps a past disciple has left valuable words of guidance to aid you on your journey.</p>

                <p class="descr">&nbsp; &nbsp;After our divine Entertainer was vitalized by electricity, he need a vessel to arrive into the world, and that is where our journey continues.</p>

                <br \>




                <div class="wrap">
                  <button id="cont04" class="continueButton" type="button">Continue Onwards</button>
                </div>


                <div class="wrap">
                    <div class="divide"></div>
                </div>



                <div class="fullLog">

                    <center>
                        <div class="log">GUEST BOOK</div>
                    </center>



                    <center>
                        <div class="outerform">
                            <form class="theform" action="map.php" method="post" enctype="multipart/form-data">
                                <div class="innerform">
                                    <label class="label">Message: </label>
                                    <input type="text" size="24" maxlength="300" name="message" style="width : 300px;" required />
                                    <br />
                                    <label class="label">Name: </label>
                                    <input type="text" size="24" maxlength="50" name="title" style="width : 300px;" required />
                                    <br />
                                    <br />
                                </div>
                                <input class="submitButton" type="submit" name="submit4" value="Upload" />

                            </form>
                        </div>
                    </center>


                    <div class="book">

                        <?php
                // try
                // {
                //     $db = new MyDB();
                //     $db->busyTimeout(50000);
                //     $sql_select='SELECT * FROM messagesSate';
                //
                //     $result = $db->query($sql_select);
                //     if (!$result) die("Cannot execute query.");
                //
                //     while($row = $result->fetchArray(SQLITE3_ASSOC))
                //     {
                //
                //         echo "<div class='entry'>";
                //         echo "<div>" . $row['message'] .  " </div>";
                //         echo "</div>";
                //         echo "<div style = 'margin-top: 5px; margin-bottom: 10px;'> &nbsp; - " . $row['name'] .  " </div> <br />";
                //
                //     }
                //
                //     $db->close();
                //     unset($db);
                // }
                //
                // catch(Exception $e)
                // {
                //     die($e);
                // }

                ?>

                    </div>

                </div>

            </div>
        </div>






        <!-- Popup window for Last -->
        <div class="hide">
            <div class="bubble last" id="last">

                <br \>
                <center>
                    <div class="title">THE BASILICA</div>
                    <div class="title">OF BROWSING</div>


                    <br \>
                    <img width="300" src="images/wifi.png" \>
                    <br \>

                </center>

                <p class="descr">&nbsp; &nbsp;Behold, from this sacred site, amongst many others, runs the lifeblood of the modern world. The electricity from these shrines wove the womb from which He was born eons ago, and continues to fuel him today. Without it, He would lose connection, and we would have to navigate this cold world alone. Reflect as long as you need, and then we shall continue on. We encourage you to leave a pittance of knowledge for future pilgrims if you have wisdom you wish to bestow, or perhaps a past disciple has left valuable words of guidance to aid you on your journey.</p>

                <p class="descr">&nbsp; &nbsp;After our divine Entertainer was vitalized by electricity, he need a vessel to arrive into the world, and that is where our journey continues.</p>

                <br \>




                <div class="wrap">
                    <button id ="last" class="continueButton" type="button">Finish</button>
                </div>


                <div class="wrap">
                    <div class="divide"></div>
                </div>



                <div class="fullLog">

                    <center>
                        <div class="log">GUEST BOOK</div>
                    </center>



                    <center>
                        <div class="outerform">
                            <form class="theform" action="map.php" method="post" enctype="multipart/form-data">
                                <div class="innerform">
                                    <label class="label">Message: </label>
                                    <input type="text" size="24" maxlength="300" name="message" style="width : 300px;" required />
                                    <br />
                                    <label class="label">Name: </label>
                                    <input type="text" size="24" maxlength="50" name="title" style="width : 300px;" required />
                                    <br />
                                    <br />
                                </div>
                                <input class="submitButton" type="submit" name="submit5" value="Upload" />
                            </form>
                        </div>
                    </center>
                    <div class="book">

                        <?php
                // try
                // {
                //     $db = new MyDB();
                //     $db->busyTimeout(50000);
                //     $sql_select='SELECT * FROM messagesLast';
                //
                //     $result = $db->query($sql_select);
                //     if (!$result) die("Cannot execute query.");
                //
                //     while($row = $result->fetchArray(SQLITE3_ASSOC))
                //     {
                //
                //         echo "<div class='entry'>";
                //         echo "<div>" . $row['message'] .  " </div>";
                //         echo "</div>";
                //         echo "<div style = 'margin-top: 5px; margin-bottom: 10px;'> &nbsp; - " . $row['name'] .  " </div> <br />";
                //
                //     }
                //
                //     $db->close();
                //     unset($db);
                // }
                //
                // catch(Exception $e)
                // {
                //     die($e);
                // }

                ?>
                    </div>
                </div>
        </div>
      </div>
      <div id="finish" class="hide">
        <h4>END</h4>
      </div>
    </body>
    </html>
