<?php

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$comment = $_POST['comment'];

$message = "Confirmation:\n\n";
$message .= "Name: $name\n";
$message .= "Email: $email\n";
$message .= "Phone: $phone\n";
$message .= "Subject: $subject \n";
$message .= "Comment: $comment\n";

$to = "mccanlasj@gmail.com"; 
$subject = "From Portfolio Inquiry";
$headers = "From: $email";
mail($to, $subject, $message, $headers);

$required_fields = array('name', 'email', 'subject', 'comment');

$missing_fields = array();

foreach ($required_fields as $field) {
    if (empty($_POST[$field])) {
        $missing_fields[] = $field;
    }
}

// Check if there are any missing fields
if (!empty($missing_fields)) {
    // Display an error message listing the missing fields
    echo 'Please fill in the following required fields: ' . implode(', ', $missing_fields);
} else {
    // All required fields are present, proceed with form processing
    // ...
}

?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="keywords" content="HTML Template">
        <meta name="description" content="Jessie McCanlas - 1001753383| HTML Template">
        <meta name="author" content="Jessie McCanlas">

        <link rel="stylesheet" href="css/style.css">
	<title>Thank You!</title>
</head>

<div class="container">
        <div class="row">
            <div class="col-sm-12">
                <nav class="navbar">
                    <a class="navbar-brand" href="index.html">Navbar</a>
                    <button class="navbar-toggler" type="button" data-target="#navigation">
                        <span class="fa-solid fa-bars"></span>
                    </button>
    
                    <div class="navigation collapse" id="navigation">
                        <ul class="navbar-nav">
                            <li>
                                <a href="index.html">Home </a>
                            </li>
                            <li>
                                <a href="about-me.html">About me</a>
                            </li>
                            <li>
                                <a href="projects.html">Projects</a>
                            </li>
                            <li class="active">
                                <a href="contact.html">Contact <span class="sr-only">(current)</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
            <hr>
<body>

	<div class="container">
        <div class="row">
            <div class="col-sm-12">
            <h2>Thank You!</h2>

            <?php 
                            if ($name && $email && $phone) {
                                echo "Thank you for reaching out, $name! I appreciate your inquiry and will reach out to you sonn. I have also sent a confirmation email to $email.";
                            } else {
                                echo "Thank you for reaching out! I appreciate your inquiry and will reach out to you soon.";
                            }
                            ?>

<ul>
    <li><strong>Name:</strong> <?php echo $_POST['name']; ?></li>
    <li><strong>Email:</strong> <?php echo $_POST['email']; ?></li>
    <li><strong>Phone Number:</strong> <?php echo $_POST['phone']; ?></li>
    <li><strong>Subject:</strong> <?php echo $_POST['subject']; ?></li>
    <li><strong>Comments:</strong> <?php echo $_POST['comment']; ?></li>
</ul>
<a href="index.html" class="btn btn-primary">Home</a>

            </div>
        </div>
    </div>
    <footer>
        <div class="container-fluid company-details">
            <div class="row">
                <div class="col-md-9 col-lg-6">
                    <h3>Jessie McCanlas</h3>
                    <p>Full-time college student looking to start a career in UX/ UI Design to create inclusive experiences through research, design, and empathy. Capable of prototyping, graphic design, front-end web development, and marketing.</p>
                </div>
                <div class="col-md-3 col-lg-2">
                    <h4>Menu</h4>
                    <ul class="unstyled footer-nav">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about-me.html">About me</a></li>
                        <li><a href="projects.html">Projects</a></li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-12 col-lg-4">
                    <h4>Get in Touch:</h4>
                    <a href="mailto:mccanlas@gmail.com">mccanlasj@gmail.com</a>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <div class="row">
                    
                    <div class="col-md-8">
                        <p>Copyright &copy; 2023 Jessie McCanlas. All Rights Reserved.</p>
                    </div>
                    <div class="col-md-4">
                        <ul class="inline social-media">
                            <!-- <li><a href="#" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li> -->
                            <li><a href="#" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
                            <li><a href="https://www.linkedin.com/in/jessie-mccanlas-b84538205/" target="_blank"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            <!-- <li><a href="#" target="_blank"><i class="fa-brands fa-youtube"></i></a></li> -->
                            <!-- <li><a href="#" target="_blank"><i class="fa-solid fa-phone"></i></a></li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>
        
        

        <div id="windowSize"></div>

        <script src="js/app.js"></script>
    </body>
</html>