<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
    <nav class="navbar">
    <div class="nav-container">
        <ul class="nav-links">
            <li><a href="#">Home</a></li>
            <li><a href="#">Event</a></li>
            <li><a href="#">Payment</a></li>
            <li><a href="#">Reminder</a></li>
        </ul>
        
        <div class="nav-login">
            <span class="user-email"><?= htmlspecialchars($_SESSION['email']) ?></span>
            <a href="logout.php" class="btn-logout">Logout</a>
        </div>
    </div>
</nav>
    </header>

    <main>
        <section class="dashboard-content">
            <h1>Welcome to Your Dashboard</h1>
            <p>Manage your events, payments, and reminders easily.</p>
            
            <section class="dashboard-grid">
                <article class="dashboard-card">
                    <h2>Upcoming Events</h2>
                    <p>No upcoming events</p>
                </article>
                
                <article class="dashboard-card">
                    <h2>Recent Payments</h2>
                    <p>No recent payments</p>
                </article>
                
                <article class="dashboard-card">
                    <h2>Reminders</h2>
                    <ul>
                        <li>Complete profile information</li>
                        <li>Verify email address</li>
                        <li>Update payment method</li>
                    </ul>
                </article>
            </section>
        </section>
    </main>

    <footer>
        <p>&copy; 2025 Event Management System. All rights reserved.</p>
    </footer>
</body>
</html>
