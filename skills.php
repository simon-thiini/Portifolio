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
            max-width: 1200px;
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

        .skill {
            width: calc(33.33% - 20px);
            margin-bottom: 20px;
            text-align: left;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            background-color: #46E1E8;
            transition: background-color 0.3s, transform 0.3s;
        }

        .skill:hover {
            background-color: #fff;
            transform: scale(1.1); /* Bounce effect on hover */
        }

        .skill strong {
            font-weight: bold;
            color: #333;
        }

        @media (max-width: 768px) {
            .skill {
                width: calc(50% - 20px);
            }
        }

        @media (max-width: 576px) {
            .skill {
                width: calc(100% - 20px);
            }
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
                <p><strong>Technical Proficiency:</strong> Mastery of programming languages, data structures, algorithms, and software development tools to create robust and efficient solutions.</p>
            </div>
            <div class="skill">
                <p><strong>System Architecture and Deployment:</strong> Expertise in designing scalable architectures, managing databases, and deploying applications in cloud and containerized environments for optimal performance and reliability.</p>
            </div>
            <div class="skill">
                <p><strong>Problem-solving and Innovation:</strong> Strong analytical and creative thinking skills to identify, analyze, and solve complex problems with innovative solutions.</p>
            </div>
            <div class="skill">
                <p><strong>Collaborative Development:</strong> Effective communication, teamwork, and adaptability within Agile methodologies, fostering collaboration and delivering high-quality software products.</p>
            </div>
            <div class="skill">
                <p><strong>Testing and Quality Assurance:</strong> Proficient in writing automated tests, debugging, and ensuring code quality to maintain the stability and reliability of software applications.</p>
            </div>
            <div class="skill">
                <p><strong>Time Management and Adaptability:</strong> Efficiently manage time, prioritize tasks, and quickly adapt to changing project requirements and technological landscapes to meet deadlines and deliver exceptional results.</p>
            </div>
        </div>
        
        <div class="info">
            <div class="skill">
                <p><strong>Familiar Programming Languages:</strong> Java, Python, JavaScript, React, Ionic, C++, C#, Visual Basic, Graphic Design, SQL</p>
            </div>
            <div class="skill">
                <p><strong>Frameworks Worked With:</strong> Vue.js, Laravel, Spring Boot, Flutter, Node.js, Django, React Native</p>
            </div>
            <div class="skill">
                <p><strong>APIs Familiar With:</strong> RESTful, GraphQL, SOAP, OAuth, OpenAPI, Swagger</p>
            </div>
        </div>
    </div>
</body>

</html>
