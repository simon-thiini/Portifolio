<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
    <title>Portfolio</title>
    <style>
        /* CSS for styling */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 5px;
            text-align: center;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .profile-img {
            border-radius: 60%;
            width: 500px; /* Increased image size */
            height: 500px; /* Increased image size */
            object-fit: cover;
            margin-right: 40px; /* Increased margin */
            border: 5px solid #333; /* Added border */
        }

        .text {
            text-align: left;
            max-width: 550px; /* Adjust as needed */
            margin-left: 20px; /* Increased margin */
            animation: elevateText 0.5s ease-in; /* Added animation */
        }

        @keyframes elevateText {
            from {
                transform: translateY(0);
            }

            to {
                transform: translateY(-3px);
            }
        }

        .text strong {
            font-weight: bold; /* Make text bold */
        }

        .text p {
            margin: 10px 0; /* Adjusted margin */
        }

        .name {
            font-size: 24px;
            font-weight: bold;
            color: #333;
            padding: 1px;
            background-color: #46E1E8; /* Added background color */
            border-radius: 20px; /* Added border radius */
        }

        .info {
            text-align: left;
            margin-top: 20px;
        }

        .info p {
            margin: 5px 0;
        }
    </style>
</head>

<body style="background-color: #46E1E8;">
    <?php include 'navbar.php'; ?>
    <div class="container">

        <?php
        // Your name and image path
        $name = "SIMON WATHUTA THIINI";
        $imagePath = "images/pic.png";
        // Additional information
        $course = "BSC. INFORMATION TECHNOLOGY";
        $yearOfGraduation = 2023;
        $school = "South Eastern Kenya University";
        $location = "Nanyuki, Kenya";
        ?>
        <!-- Display your picture to the right and your name to the left -->
        <img src="<?php echo $imagePath; ?>" alt="Profile Picture" class="profile-img">
        <div class="info">
            <div class="name"><?php echo $name; ?></div>
            <p class="text">Course: <strong><?php echo $course; ?></strong></p>
            <p class="text">Year of Graduation: <strong><?php echo $yearOfGraduation; ?></strong></p>
            <p class="text">School: <strong><?php echo $school; ?></strong></p>
            <p class="text">Location: <strong><?php echo $location; ?></strong></p>
        </div>
    </div>

</body>

</html>
