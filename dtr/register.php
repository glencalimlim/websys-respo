<?php
include 'db.php';

if (isset($_POST['register'])) {
    $full_name = mysqli_real_escape_string($conn, $_POST['full_name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $user_type = $_POST['user_type'];

    // Image Upload
    $target_dir = "uploads/";
    $file_name = time() . "_" . basename($_FILES["profile_pic"]["name"]);
    $target_file = $target_dir . $file_name;

    if (move_uploaded_file($_FILES["profile_pic"]["tmp_name"], $target_file)) {
        $sql = "INSERT INTO users (full_name, username, password, user_type, profile_pic) 
                VALUES ('$full_name', '$username', '$password', '$user_type', '$file_name')";
        if (mysqli_query($conn, $sql)) {
            header("Location: login.php?success=Account Created");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DTR System - Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow border-0 p-4">
                <h3 class="text-center fw-bold mb-4">Register</h3>
                <form method="POST" enctype="multipart/form-data">
                    <div class="mb-3"><input type="text" name="full_name" class="form-control" placeholder="Full Name" required></div>
                    <div class="mb-3"><input type="text" name="username" class="form-control" placeholder="Username" required></div>
                    <div class="mb-3"><input type="password" name="password" class="form-control" placeholder="Password" required></div>
                    <div class="mb-3">
                        <select name="user_type" class="form-select">
                            <option value="faculty">Faculty</option>
                            <option value="admin">Admin</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label small">Profile Picture</label>
                        <input type="file" name="profile_pic" class="form-control" accept="image/*" required>
                    </div>
                    <button type="submit" name="register" class="btn btn-primary w-100">Register</button>
                    <p class="text-center mt-3">Back to <a href="login.php">Login</a></p>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>