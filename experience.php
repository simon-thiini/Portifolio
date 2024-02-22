<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Experience</title>
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

        .experience {
            margin-top: 30px;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 20px;
        }

        .experience-item {
            width: calc(50% - 20px);
            /* Two items per row with a gap of 20px */
            padding: 20px;
            background-color: #46E1E8;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left;
            transition: background-color 0.3s, color 0.3s, box-shadow 0.3s; /* Added transition for smooth color and elevation change */
        }

        .experience-item:hover {
            background-color: #fff; /* Change background color on hover */
            color: #333; /* Change text color on hover */
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.5); /* Increase elevation on hover */
        }

        .experience-item h3 {
            color: #333;
        }

        .experience-item p {
            color: #666;
        }
    </style>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="container">
        <img id="profile-img" src="images/pic.png" alt="Profile Picture" class="profile-img">
        <h1>Experience</h1>
        <div class="experience">
            <div class="experience-item">
                <h3>Software Developer</h3>
                <p>Gold In Data</p>
                <ul>
                    <li>Collaborating with developers, designers, and system administrators in software development.</li>
                    <li>Analyzing end-users' requirements and translating them into software specifications.</li>
                    <li>Debugging, troubleshooting, and resolving software defects and issues.</li>
                    <li>Utilizing version control systems to manage and track changes to the source code.</li>
                    <li>Writing and executing tests to ensure code quality.</li>
                    <li>Implementing security best practices.</li>
                    <li>Deploying software applications to production environments.</li>
                </ul>
            </div>
            <div class="experience-item">
                <h3>ICT Technician</h3>
                <p>County Government of Laikipia</p>
                <ul>
                    <li>Network administration and troubleshooting.</li>
                    <li>Worked on software development projects using Java and Visual Basic.</li>
                    <li>Conducted research on new technologies to enhance IT systems.</li>
                    <li>Repaired and maintained software and hardware.</li>
                    <li>Trained staff on technology use.</li>
                    <li>Data entry, analysis, and report writing.</li>
                </ul>
            </div>
            <div class="experience-item">
                <h3>Freelancer</h3>
                <p>Self-employed</p>
                <ul>
                    <li>Independently managing diverse projects as a Full Stack Developer, employing a broad spectrum of programming languages, such as Java, Python, Visual Basic, C++, C#, Ruby, and PHP.</li>
                    <li>Proficiently developing desktop and mobile applications, showcasing expertise in HTML, CSS, JavaScript, jQuery, and other front-end languages.</li>
                    <li>Implementing server-side logic using technologies like Node.js, Django, and Flask.</li>
                    <li>Collaborating closely with clients to thoroughly analyze project requirements, ensuring effective communication throughout the development process.</li>
                    <li>Conducting code reviews, debugging, and optimizing existing systems to enhance performance and user experience.</li>
                    <li>Staying updated with industry trends, incorporating best practices for delivering high-quality and scalable software solutions within specified timelines.</li>
                </ul>
            </div>
            <div class="experience-item">
                <h3>Part-time Instructor</h3>
                <p>Self-employed</p>
                <ul>
                    <li>Part-time training on software development.</li>
                    <li>Mentored individuals in becoming proficient software developers.</li>
                    <li>This makes me a good leader and good in training others.</li>

                </ul>
            </div>
        </div>
    </div>
</body>

</html>
