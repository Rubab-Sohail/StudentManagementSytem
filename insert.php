<?php

include 'db.php';

if (isset($_POST['submit'])) {

    $name   = mysqli_real_escape_string($conn, $_POST['name']);
    $email  = mysqli_real_escape_string($conn, $_POST['email']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);
    $phone  = mysqli_real_escape_string($conn, $_POST['phone']);

    $sql = "INSERT INTO students (name, email, course, phone)
            VALUES ('$name', '$email', '$course', '$phone')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>
            alert('Student record added successfully!');
            window.location.href = 'display.php';
        </script>";
    } else {
        echo "<script>
            alert('Error: Could not insert record.');
            window.location.href = 'index.php';
        </script>";
    }
}

?>
