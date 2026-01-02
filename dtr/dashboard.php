<?php
session_start();
include 'db.php';
if (!isset($_SESSION['user_id'])) { header("Location: login.php"); exit(); }

$uid = $_SESSION['user_id'];

// Handling Account Deletion
if (isset($_GET['delete'])) {
    $del_id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM users WHERE id=$del_id");
    if ($del_id == $uid) { session_destroy(); header("Location: login.php"); }
    else { header("Location: dashboard.php"); }
}

// Current User Info
$current_user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM users WHERE id=$uid"));

// Admin Search & Sort Logic
$search = $_GET['search'] ?? '';
$sort = $_GET['sort'] ?? 'full_name';
$order = $_GET['order'] ?? 'ASC';
$next_order = ($order == 'ASC') ? 'DESC' : 'ASC';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard | DTR System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary px-4">
    <a class="navbar-brand fw-bold" href="#">DTR System</a>
    <div class="ms-auto"><a href="logout.php" class="btn btn-light btn-sm">Logout</a></div>
</nav>

<div class="container mt-4">
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm p-4 text-center">
                <img src="uploads/<?= $current_user['profile_pic'] ?>" class="rounded-circle mx-auto mb-3" style="width:120px; height:120px; object-fit:cover;">
                <h4 class="mb-0"><?= $current_user['full_name'] ?></h4>
                <p class="text-muted"><?= ucfirst($current_user['user_type']) ?></p>
                <hr>
                <a href="?delete=<?= $uid ?>" class="btn btn-outline-danger btn-sm w-100" onclick="return confirm('Delete your account?')">Delete My Account</a>
            </div>
        </div>

        <div class="col-md-8">
            <?php if ($_SESSION['user_type'] == 'admin'): ?>
            <div class="card border-0 shadow-sm p-4">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5>User Management</h5>
                    <a href="add_user.php" class="btn btn-success btn-sm">+ Add New User</a>
                </div>
                
                <form method="GET" class="d-flex mb-3 gap-2">
                    <input type="text" name="search" class="form-control" placeholder="Search by name..." value="<?= $search ?>">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </form>

                <div class="table-responsive">
                    <table class="table table-hover align-middle">
                        <thead class="table-light">
                            <tr>
                                <th>Photo</th>
                                <th><a class="text-dark" href="?sort=full_name&order=<?= $next_order ?>">Name ↕</a></th>
                                <th><a class="text-dark" href="?sort=username&order=<?= $next_order ?>">User ↕</a></th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $sql = "SELECT * FROM users WHERE full_name LIKE '%$search%' ORDER BY $sort $order";
                            $res = mysqli_query($conn, $sql);
                            while($row = mysqli_fetch_assoc($res)):
                            ?>
                            <tr>
                                <td><img src="uploads/<?= $row['profile_pic'] ?>" class="rounded-circle" style="width:40px; height:40px; object-fit:cover;"></td>
                                <td><?= $row['full_name'] ?></td>
                                <td><?= $row['username'] ?></td>
                                <td><span class="badge bg-secondary"><?= $row['user_type'] ?></span></td>
                                <td><a href="?delete=<?= $row['id'] ?>" class="btn btn-sm btn-danger" onclick="return confirm('Delete this user?')">Delete</a></td>
                            </tr>
                            <?php endwhile; ?>
                        </tbody>
                    </table>
                </div>
            </div>
            <?php else: ?>
            <div class="alert alert-info border-0 shadow-sm">
                Welcome, <b><?= $current_user['full_name'] ?></b>! You are now logged into the DTR system as a Faculty member.
            </div>
            <?php endif; ?>
        </div>
    </div>
</div>
</body>
</html>