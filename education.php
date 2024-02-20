<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Education Achievements</title>
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
            animation: bounce 2s infinite alternate; /* Animation for the picture */
        }

        @keyframes bounce {
            0% {
                transform: translateY(0);
            }
            100% {
                transform: translateY(-20px);
            }
        }

        h1 {
            color: #333;
        }

        .info {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .education {
            width: calc(50% - 10px);
            /* 50% width with a small gap between columns */
            margin-bottom: 20px;
            text-align: left;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #46E1E8;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .education:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
             background-color: #fff;
        }

        .education strong {
            font-weight: bold;
            color: #333;
        }
    </style>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="container" style="background-color: #46E1E8;">
        <img id="profile-img" src="images/pic.png" alt="Profile Picture" class="profile-img">
        <h1>Education Achievements</h1>
        <div class="info">
            <div class="education">
                <p><strong>Degree in Information Technology:</strong> Graduated from South Eastern Kenya University in 2023.</p>
            </div>
            <div class="education">
                <p><strong>Cloud Computing Course (HCIA):</strong> Completed the Huawei Certified ICT Associate (HCIA) Cloud Computing course.</p>
            </div>
            <div class="education">
                <p><strong>DHIS Certificate:</strong> Obtained a certificate from the DHIS2 Academy at the University of Oslo.</p>
            </div>
            <div class="education">
                <p><strong>Ethical Hacking Course (In Progress):</strong> Currently pursuing the Ethical Hacking course from Kenyatta University.</p>
            </div>
            <div class="education">
                <p><strong>Learning Power BI:</strong> Currently learning Power BI for data visualization and analytics.</p>
            </div>
            <div class="education">
                <p><strong>Mastery of Programming Languages:</strong> Proficient in various programming languages including Java, Python, JavaScript, C++, and others.</p>
            </div>
        </div>
    </div>
</body>

</html>
