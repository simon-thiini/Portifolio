<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skills</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #46E1E8;
        }

        .container {
            max-width: 900px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .profile-img {
            border-radius: 50%;
            width: 250px;
            height: 250px;
            object-fit: cover;
            margin-bottom: 20px;
        }

        h1 {
            color: #333;
        }

        .info {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .skill {
            width: calc(50% - 10px);
            /* 50% width with a small gap between columns */
            margin-bottom: 20px;
            text-align: left;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #f9f9f9;
        }

        .skill strong {
            font-weight: bold;
            color: #007bff;
        }
    </style>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="container" style="background-color: #46E1E8;">
        <img src="images/pic.png" alt="Profile Picture" class="profile-img">
        <h1>Skills</h1>
        <div class="info">
            <div class="skill">
                <p><strong>Skill 1:</strong> Description of skill 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="skill">
                <p><strong>Skill 2:</strong> Description of skill 2. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div class="skill">
                <p><strong>Skill 3:</strong> Description of skill 3. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <div class="skill">
                <p><strong>Skill 4:</strong> Description of skill 4. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>
    </div>
</body>

</html>