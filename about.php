<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Me</title>
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
            background-color: #46E1E8;
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

        .job {
            width: calc(50% - 10px);
            /* 50% width with a small gap between columns */
            margin-bottom: 20px;
            text-align: left;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #46E1E8;
        }
        .job:hover{
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
             background-color: #fff;
        }

        .job strong {
            font-weight: bold;
            color: #333;
        }
    </style>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="container">
        <img src="images/pic.png" alt="Profile Picture" class="profile-img">
        <h1>About Me</h1>
        <p>I'm a passionate software engineer with expertise in building robust and scalable web applications. I enjoy solving complex problems and creating innovative solutions that make a positive impact.</p>
        <h2>Favorable Jobs</h2>
        <div class="info">
            <div class="job">
                <p><strong>Software Developer:</strong> Skilled in developing software applications using various programming languages and frameworks.</p>
            </div>
            <div class="job">
                <p><strong>Systems Analyst:</strong> Capable of analyzing business requirements and designing information systems to meet organizational needs.</p>
            </div>
            <div class="job">
                <p><strong>Network Administrator:</strong> Proficient in managing and maintaining computer networks to ensure smooth operation and security.</p>
            </div>
            <div class="job">
                <p><strong>Database Administrator:</strong> Experienced in designing, implementing, and managing databases for efficient data storage and retrieval.</p>
            </div>
        </div>
        <h2>Areas of Work</h2>
        <p>With a degree in Information Technology,  can work in various sectors including:</p>
        <ul>
            <li>Software Development</li>
            <li>Information Systems Management</li>
            <li>Network Administration</li>
            <li>Database Management</li>
            <li>Cybersecurity</li>
            <li>Web Development</li>
            <li>Cloud Computing</li>
            <li>IT Consulting</li>
            <li>Project Management</li>
        </ul>
    </div>
</body>

</html>
