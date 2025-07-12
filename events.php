<?php
// events.php - User-facing event viewer only
include 'dbcon.php';

$search = "";
if (isset($_GET['search'])) {
    $search = trim($_GET['search']);
    $stmt = $conn->prepare("SELECT * FROM events WHERE title LIKE ? OR description LIKE ? ORDER BY event_date ASC");
    $searchTerm = "%$search%";
    $stmt->bind_param("ss", $searchTerm, $searchTerm);
} else {
    $stmt = $conn->prepare("SELECT * FROM events ORDER BY event_date ASC");
}

$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events - Grocery Store</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #f9f9f9;
            margin: 0;
            padding: 0;
        }

        .top-nav {
            background-color: #27ae60;
            overflow: hidden;
            padding: 0 20px;
            display: flex;
            align-items: center;
            height: 50px;
        }

        .top-nav a {
            color: white;
            text-decoration: none;
            padding: 14px 20px;
            font-weight: bold;
            transition: background 0.3s;
        }

        .top-nav a:hover {
            background-color: #219150;
            border-radius: 5px;
        }

        .top-nav a.active {
            background-color: #1e874b;
            border-radius: 5px;
        }

        .container {
            width: 90%;
            max-width: 1000px;
            margin: 40px auto;
            padding: 20px;
            background: white;
            border-radius: 10px;
            box-sizing: border-box;
        }

        .search-box {
            margin-bottom: 20px;
            text-align: center;
        }

        .search-box input[type="text"] {
            width: 100%;
            max-width: 500px;
            padding: 10px;
            font-size: 16px;
            box-sizing: border-box;
        }

        .search-box button {
            width: 100%;
            max-width: 150px;
            padding: 10px;
            font-size: 16px;
            background: #27ae60;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 10px;
        }

        .event {
            border-left: 5px solid #27ae60;
            background: #ecf0f1;
            margin-bottom: 20px;
            padding: 15px 20px;
            border-radius: 5px;
        }

        .event h3 {
            margin: 0;
        }

        .event p {
            color: #555;
        }

        .event-date {
            font-size: 14px;
            color: #888;
        }

        .floating-home-btn {
            position: fixed;
            bottom: 20px;
            left: 20px;
            background-color: #27ae60;
            color: white;
            padding: 10px 16px;
            border-radius: 30px;
            text-decoration: none;
            font-weight: bold;
            box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            transition: background 0.3s;
        }

        .floating-home-btn:hover {
            background-color: #1e874b;
        }

        @media screen and (max-width: 600px) {
            .top-nav {
                flex-direction: column;
                height: auto;
                padding: 10px 0;
            }

            .top-nav a {
                padding: 10px;
                text-align: center;
                width: 100%;
            }

            .event {
                padding: 10px;
            }

            .floating-home-btn {
                bottom: 10px;
                left: 10px;
                padding: 8px 12px;
                font-size: 14px;
            }
        }
    </style>
</head>
<body>

<div class="top-nav">
    <a href="index.php">🏠 Home</a>
    <a href="events.php" class="active">📅 Events</a>
</div>

<div class="container">
    <form method="GET" class="search-box">
        <input type="text" name="search" placeholder="Search events..." value="<?= htmlspecialchars($search) ?>">
        <button type="submit">Search</button>
    </form>

    <?php while ($row = $result->fetch_assoc()): ?>
        <div class="event">
            <h3><?= htmlspecialchars($row['title']) ?></h3>
            <p><?= htmlspecialchars($row['description']) ?></p>
            <div class="event-date">Date: <?= htmlspecialchars($row['event_date']) ?></div>
        </div>
    <?php endwhile; ?>

    <?php if ($result->num_rows === 0): ?>
        <p>No events found.</p>
    <?php endif; ?>
</div>

<a href="index.php" class="floating-home-btn">← Back to Home</a>

</body>
</html>
