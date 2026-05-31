<?php

include 'db.php';

$id = intval($_GET['id']);

$sql    = "SELECT * FROM students WHERE id = $id";
$result = mysqli_query($conn, $sql);
$row    = mysqli_fetch_assoc($result);

if (isset($_POST['update'])) {

    $name   = mysqli_real_escape_string($conn, $_POST['name']);
    $email  = mysqli_real_escape_string($conn, $_POST['email']);
    $course = mysqli_real_escape_string($conn, $_POST['course']);
    $phone  = mysqli_real_escape_string($conn, $_POST['phone']);

    $updateQuery = "UPDATE students
                    SET name='$name', email='$email', course='$course', phone='$phone'
                    WHERE id=$id";

    $updateResult = mysqli_query($conn, $updateQuery);

    if ($updateResult) {
        echo "<script>
            alert('Student record updated successfully.');
            window.location.href = 'display.php';
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <div class="card p-4 shadow">
        <h2 class="text-center mb-4">Update Student Record</h2>

        <form method="POST">

            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name"
                    value="<?php echo htmlspecialchars($row['name']); ?>"
                    class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email"
                    value="<?php echo htmlspecialchars($row['email']); ?>"
                    class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Course</label>
                <input type="text" name="course"
                    value="<?php echo htmlspecialchars($row['course']); ?>"
                    class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Phone</label>
                <input type="text" name="phone"
                    value="<?php echo htmlspecialchars($row['phone']); ?>"
                    class="form-control" required>
            </div>

            <button type="submit" name="update" class="btn btn-primary w-100">Update Student</button>

        </form>

        <div class="text-center mt-3">
            <a href="display.php" class="btn btn-secondary">Back to Records</a>
        </div>
    </div>
</div>

</body>
</html>
