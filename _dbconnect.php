<?php

// Script to connect to the database
$servername =  "localhost";
$username = "root";
$password = "";
$database = "idiscuss";

$conn = mysqli_connect($servername, $username, $password, $database);

if ($conn) {
?>
    <script>
        alert("Connection Successfull")
    </script>
<?php
} else {
?>
    <script>
        alert("NO Connection")
    </script>
<?php

}
?>