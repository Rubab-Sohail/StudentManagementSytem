<?php

include 'db.php';

$id = intval($_GET['id']);

if ($id > 0) {
    $sql    = "DELETE FROM students WHERE id = $id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>
            alert('Student record deleted successfully.');
            window.location.href = 'display.php';
        </script>";
    } else {
        echo "<script>
            alert('Error: Could not delete record.');
            window.location.href = 'display.php';
        </script>";
    }
} else {
    echo "<script>
        alert('Invalid request.');
        window.location.href = 'display.php';
    </script>";
}

?>
