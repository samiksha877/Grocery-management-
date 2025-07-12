<?php require 'dbcon.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Grocery Store | Privacy Policy</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Custom CSS -->
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f7f7f7;
        }
        .privacy-section {
            padding: 50px 20px;
            background-color: #ffffff;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            margin: 30px auto;
            max-width: 900px;
            border-radius: 10px;
        }
        .privacy-section h3 {
            text-align: center;
            font-size: 30px;
            font-weight: 700;
            margin-bottom: 40px;
            color: #333;
        }
        .privacy-item {
            margin-bottom: 30px;
        }
        .privacy-item h4 {
            font-size: 22px;
            color: #5cb85c;
            margin-bottom: 10px;
        }
        .privacy-item p {
            font-size: 15px;
            color: #555;
            line-height: 1.8;
        }
        @media (max-width: 768px) {
            .privacy-section {
                padding: 30px 15px;
            }
            .privacy-item h4 {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>

<?php include 'header.php'; ?>

<div class="w3l_banner_nav_right">
    <div class="privacy-section">
        <h3>Privacy Policy</h3>

        <div class="privacy-item">
            <h4><i class="glyphicon glyphicon-user"></i> Profile</h4>
            <p>We collect basic profile information to offer you a more personalized experience.
            This includes your name, email address, and preferences. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

        <div class="privacy-item">
            <h4><i class="glyphicon glyphicon-search"></i> Search</h4>
            <p>Search queries help us enhance your browsing experience by offering more relevant suggestions and faster results. All data is handled securely. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

        <div class="privacy-item">
            <h4><i class="glyphicon glyphicon-paste"></i> News Feed</h4>
            <p>Your interaction with the news feed helps us tailor the content displayed to you. It allows us to provide updates, offers, and relevant information based on your preferences. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

        <div class="privacy-item">
            <h4><i class="glyphicon glyphicon-qrcode"></i> Applications</h4>
            <p>Our applications may access necessary permissions only after your consent, and any collected data is used strictly to improve your experience with the services. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
</div>

<div class="clearfix"></div>

<?php include 'footer.php'; ?>

<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>
