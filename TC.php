<?php require 'dbcon.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Terms of Use | Grocery Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Bootstrap (optional) -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .terms-section {
            width: 900px;
            margin: 50px 20px 50px auto; /* Push right */
            background-color: #fff;
            padding: 40px 25px;
            box-shadow: 0 0 12px rgba(0,0,0,0.08);
            border-radius: 10px;
            text-align: left;
        }

        .terms-section h3 {
            font-size: 30px;
            color: #2c3e50;
            margin-bottom: 40px;
            font-weight: 700;
        }

        .terms-section h4 {
            font-size: 22px;
            color: #2980b9;
            margin-top: 30px;
            margin-bottom: 10px;
        }

        .terms-section h5 {
            font-size: 18px;
            color: #27ae60;
            margin-top: 20px;
            margin-bottom: 8px;
        }

        .terms-section p {
            font-size: 15px;
            line-height: 1.7;
            color: #555;
        }

        @media (max-width: 768px) {
            .terms-section {
                width: auto;
                margin: 20px 10px;
                padding: 25px 15px;
            }

            .terms-section h3 {
                font-size: 24px;
            }

            .terms-section h4 {
                font-size: 20px;
            }

            .terms-section h5 {
                font-size: 17px;
            }
        }
    </style>
</head>
<body>

<?php include 'header.php'; ?>

<div class="terms-section">
    <h3>Terms of Use</h3>

    <h4>1. Introduction</h4>
    <p>Welcome to our Grocery Store platform. By accessing or using our website, you agree to comply with and be bound by these Terms of Use. Please read them carefully before using the services.</p>

    <h5>1.1 Use of Services</h5>
    <p>You agree to use our services only for lawful purposes. Any misuse, fraudulent activity, or interference with the site's functionality is strictly prohibited.</p>

    <h5>1.2 Account Responsibility</h5>
    <p>Users are responsible for maintaining the confidentiality of their account credentials and for all activities that occur under their account.</p>

    <h5>1.3 Content Ownership</h5>
    <p>All content including logos, graphics, and text is the property of the Grocery Store unless otherwise stated, and may not be copied or used without permission.</p>

    <h5>1.4 Changes to Terms</h5>
    <p>We reserve the right to update these Terms of Use at any time. Users will be notified of changes through the website or email.</p>

    <h5>1.5 Termination</h5>
    <p>We may terminate or suspend your account if you violate any terms or policies. All decisions are final and at our discretion.</p>
</div>

<div class="clearfix"></div>

<?php include 'footer.php'; ?>

<!-- Optional Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>
