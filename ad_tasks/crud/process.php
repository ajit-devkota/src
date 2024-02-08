
<?php

if (isset($_POST['submit'])){
    $first_name = $_POST['fname'];
    $last_name = $_POST['lname'];
    $city = $_POST['city'];
    $groupid = $_POST['groupid'];

    
    include 'db.php';

    
    $sql = "INSERT INTO studentsInfo (first_name, last_name, city, groupid)
            VALUES ('$first_name', '$last_name', '$city', '$groupid')";

    if ($conn->query($sql) === TRUE) {
       echo "Your data was recorded";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

  
    $conn->close();
}
?>
