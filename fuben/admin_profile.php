<?php
include('db_connection.php');
session_start();
$is_admin = $_SESSION['is_admin'] ?? 0;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rainydaylab - Admin Profile</title>
    <link rel="stylesheet" href="#.css">
</head>
<body>
    <header>
        <div class="logo">
            <img src="images/logo.png" alt="Rainyday Logo" width="120" height="40">
            <span>Rainyday</span>
        </div>
        <div class="search-box">
            <input type="text" placeholder="find anything">
            <button class="search-button">Search</button>
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Movies</a></li>
                <li><a href="#">History</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Profile</a></li>
            </ul>
        </nav>
        <div class="user-actions">
            <button>Login</button>
        </div>
    </header>

    <main class="profile-page">
        <div class="profile-header">
            <div class="profile-pic">
                <img src="images/profile-pic.png" alt="Admin Profile Picture">
            </div>
            <div class="profile-info">
                <h1><?php echo $_SESSION['username']; ?></h1>
                <p><?php echo $_SESSION['useremail']; ?></p>
                <button class="logout-button">Log Out</button>
                <?php if ($is_admin): ?>
                    <button class="upload-button">Upload Video</button>
                <?php endif; ?>
            </div>
        </div>
        <div class="profile-details">
            <h2>History</h2>
            <p>------------------------</p>
            <h2>Payment Detail</h2>
            <p>------------------------</p>
        </div>
    </main>

    <footer>
        <p>&copy; 2136 StreamLab</p>
    </footer>
</body>
</html>
