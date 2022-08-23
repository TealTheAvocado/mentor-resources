<?php


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <title>Contact Me</title>
</head>

<body>
    <div class="contact" id="contact">
            <h2>Contact Me</h2>
            <div class="container">
                <form action="webform.php" method="POST" class="form">
                    <div class="form-group">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="First Name Last Name" tabindex="1" required>
                    </div>
                    <div class="form-group">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="email@email.com" tabindex="2" required>
                    </div>
                    <div class="form-group">
                        <label for="subject" class="form-label">Subject</label>
                        <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" tabindex="3" required>
                    </div>
                    <div class="form-group">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter Message..."></textarea>
                    </div>
                    <button type="submit" class="contact-button">Send Message</button>
                </form>
            </div>      

        </div>
</body>