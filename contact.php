<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Me</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-qjT2mPpvDYZP2v0mtkHw25KoTCpZi72NAii4I0DbQzD+0F6fAFN0OxN74F7jZcdt5xGmScb2DgIVgDWFw8FEig=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            animation: bounce 2s infinite alternate;
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

        .contact-info {
            margin-bottom: 20px;
            text-align: left;
        }

        .contact-info p {
            margin-bottom: 10px;
        }

        .contact-info p strong {
            font-weight: bold;
            color: #007bff;
        }

        .social-links {
            margin-top: 20px;
        }

        .social-links a {
            font-size: 24px;
            margin-right: 10px;
            color: #fff;
        }
    </style>
</head>

<body>
    <?php include 'navbar.php'; ?>
    <div class="container">
        <img src="images/pic.png" alt="Profile Picture" class="profile-img">
        <h1>Contact Me</h1>
        <div class="contact-info">
            <h5>Contact Info:</h5>
            <p><i class="fas fa-envelope"></i> Email: <a href="mailto:4stech.ssss@gmail.com"
                    target="_blank" rel="noopener noreferrer">wathutasimon2019@gmail.com</a></p>
            <p><i class="fas fa-phone"></i> Call: <a href="tel:+254700635387">+254 700 635 387</a></p>
            <p><i class="fas fa-map-marker-alt"></i> Location: Nanyuki, Kenya</p>
        </div>
        <div class="social-links">
            <a href="#" target="_blank"><i class="fab fa-github"></i>github</a>
            <a href="#" target="_blank"><i class="fab fa-linkedin"></i>linkedin</a>
            <a href="#" target="_blank"><i class="fas fa-briefcase"></i> Indeed</a>
        </div>
    </div>
</body>

</html>
