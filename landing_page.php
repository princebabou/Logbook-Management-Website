<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Industrial Attachment Logbook Management</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        
body {
    font-family: 'Poppins' ,sans-serif;
    margin: 0;
    padding: 0;
    line-height: 1.6;
    color: #333;
}

a {
    text-decoration: none;
    color: inherit;
}

ul {
    list-style: none;
    padding: 0;
}

img {
    max-width: 100%;
    height: auto;
}

header {
    background: #4CAF50;
    color: #fff;
    padding: 10px 0;
}

header .logo {
    display: flex;
    align-items: center;
    padding: 0 20px;
}

header .logo img {
    height: 40px;
    margin-right: 10px;
}

header nav {
    margin-top: 10px;
}

header nav ul {
    display: flex;
    justify-content: center;
}

header nav ul li {
    margin: 0 10px;
}

header nav ul li a {
    color: #fff;
    padding: 5px 10px;
    border-radius: 5px;
}

header nav ul li a:hover {
    background: #3e8e41;
}

.main-banner {
    background: url('banner.jpg') no-repeat center center/cover;
    color: #fff;
    text-align: center;
    padding: 100px 20px;
}

.main-banner h2 {
    font-size: 2.5em;
    margin: 0;
}

section {
    padding: 20px;
    margin: 20px 0;
}

.introduction {
    background: #f4f4f4;
    padding: 40px 20px;
    text-align: center;
}

.features, .how-it-works, .testimonials {
    background: #fff;
    padding: 40px 20px;
}

.features ul, .how-it-works ol {
    max-width: 600px;
    margin: 0 auto;
    padding: 0;
}

.features ul li, .how-it-works ol li {
    background: #f4f4f4;
    padding: 10px;
    margin: 10px 0;
    border-radius: 5px;
}

.testimonials blockquote {
    font-style: italic;
    margin: 20px 0;
    padding: 20px;
    background: #f4f4f4;
    border-left: 10px solid #4CAF50;
}

.call-to-action {
    background: #4CAF50;
    color: #fff;
    text-align: center;
    padding: 40px 20px;
}

.call-to-action button {
    background: #fff;
    color: #4CAF50;
    border: 0;
    padding: 10px 20px;
    font-size: 1.2em;
    border-radius: 5px;
    cursor: pointer;
}

.call-to-action button:hover {
    background: #f4f4f4;
}

footer {
    background: #333;
    color: #fff;
    text-align: center;
    padding: 20px 0;
}

footer .contact, footer .social-media, footer .quick-links {
    margin-bottom: 20px;
}

footer .social-media a {
    margin: 0 10px;
}

footer .quick-links a {
    color: #4CAF50;
}

footer .quick-links a:hover {
    text-decoration: underline;
}

@media (max-width: 768px) {
    header nav ul {
        flex-direction: column;
    }

    .main-banner {
        padding: 60px 20px;
    }

    .main-banner h2 {
        font-size: 2em;
    }

    .features ul, .how-it-works ol {
        padding: 0 20px;
    }

    .call-to-action {
        padding: 20px 20px;
    }
}

    </style>
</head>
<body>
    <header>
        <div class="logo">
            <h1>Rwanda Coding Academy</h1>
        </div>
        <nav>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#">Features</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="./signup.php">Sign Up</a></li>
                <li><a href="./login.php">Login</a></li>
            </ul>
        </nav>
    </header>

    <section class="main-banner">
        <h2>Welcome to the Industrial Attachment Logbook Management System of Rwanda Coding Academy</h2>
    </section>

    <section class="introduction">
        <h3>Streamline Your Scholastic Attachment Process</h3>
        <p>Managing and monitoring Industrial attachment logbooks has never been easier. Our system ensures seamless tracking, evaluation, and feedback for both students and supervisors at RCA.</p>
    </section>

    <section class="features">
        <h3>Key Features:</h3>
        <ul>
            <li>Student Logbook Submission</li>
            <li>Supervisor Monitoring</li>
            <li>Progress Tracking</li>
            <li>Notifications and Reminders</li>
            <li>Secure and Reliable</li>
        </ul>
    </section>

    <section class="how-it-works">
        <h3>How It Works:</h3>
        <ol>
            <li>Sign Up and Create Profile</li>
            <li>Logbook Entries</li>
            <li>Supervisor Review</li>
            <li>Progress Reports</li>
        </ol>
    </section>

    <section class="testimonials">
        <h3>What Our Users Say:</h3>
        <blockquote>"This platform has made managing industrial attachments so much easier and efficient." - ISHIMWE Mary, Student</blockquote>
        <blockquote>"The real-time feedback system is incredibly useful for providing timely guidance to students." - MUHIRE Jean d'Amour, Supervisor</blockquote>
    </section>

    <section class="call-to-action">
        <h3>Ready to Get Started?</h3>
        <button><a href="./signup.php">Sign Up</a> Today</button>
    </section>

    <footer>
        <div class="contact">
            <p>Address: Nyabihu, Rwanda</p>
            <p>Email: info@rca.com</p>
            <p>Phone: 0788245327</p>
        </div>
        <div class="quick-links">
            <a href="#">Privacy Policy</a>
            <a href="#">Terms of Service</a>
            <a href="#">FAQ</a>
        </div>
    </footer>
</body>
</html>
