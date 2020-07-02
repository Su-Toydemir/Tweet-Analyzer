

<html>
<body>
<?php
if (isset($_POST['submit'])) {
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
   
}
?>
<a href="http://localhost/webproject.php#home">Click here to go back to the home page.</a>
</body>
</html>