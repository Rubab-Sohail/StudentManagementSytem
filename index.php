<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container mt-5">
    <div class="card shadow p-4">
        <h2 class="text-center mb-4">Student Registration Form</h2>

        <form action="insert.php" method="POST">

            <div class="mb-3">
                <label>Name</label>
                <input type="text" name="name" class="form-control" placeholder="Enter full name" required>
            </div>

            <div class="mb-3">
                <label>Email</label>
                <input type="email" name="email" class="form-control" placeholder="Enter email address" required>
            </div>

            <div class="mb-3">
                <label>Course</label>
                <input type="text" name="course" class="form-control" placeholder="Enter course name" required>
            </div>

            <div class="mb-3">
                <label>Phone</label>
                <input type="text" name="phone" class="form-control" placeholder="Enter phone number" required>
            </div>

            <button type="submit" name="submit" class="btn btn-primary w-100">Register Student</button>

        </form>
    </div>

    <div class="text-center mt-4">
        <a href="display.php" class="btn btn-success">View All Student Records</a>
    </div>
</div>

</body>
</html>
