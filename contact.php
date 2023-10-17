<!DOCTYPE html>
<html lang="en">
<link>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jessie McCanlas - UX Design Portfolio</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="script.js"></script>
</head>
<body>
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
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-lg-6">
                <h1>Contact me</h1>
                <p>Quisque pulvinar dignissim tortor sit amet rutrum. Integer rutrum eros ligula, in
                    eleifend erat rutrum nec. Phasellus convallis erat eros, malesuada condimentum
                    odio mollis non. Aliquam ullamcorper turpis non arcu feugiat pharetra sit amet nec
                    neque. Curabitur massa nulla, ultrices ac euismod sit amet, posuere at quam.
                    Nullam quis vestibulum neque. In quis mauris quis ligula dictum sagittis eget sit
                    amet neque. 
                </p>
                <p>Nunc urna elit, posuere eget nisi at, porttitor pharetra nunc. Nullam non massa sed
                    augue sagittis sagittis eu in arcu. Integer vulputate quam non hendrerit tincidunt.
                </p>
            </div>
            <div class="col-sm-12 col-lg-6">
                <h2>Send me a message</h2>
                <div class="form-group row">
                    <label for="name" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-12">
                        <input type="text" name="name" id="name" class="form-control" placeholder="Jane Doe" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="email" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-12">
                            <input type="email" name="email" id="email" class="form-control" placeholder="user@email.com" />
                        </div>
                </div>
                <div class="form-group row">
                    <label for="text" class="col-sm-2 col-form-label">Subject</label>
                    <div class="col-sm-12">
                         <input type="text" name="text" id="text" class="form-control" placeholder="Reason to connect" />
                    </div>
                </div>
                <div class="form-group row">
                    <label for="text" class="col-sm-2 col-form-label">Message</label>
                    <div class="col-sm-12">
                        <textarea name="comments" class="form-control" placeholder="Message" maxlength="200"></textarea>
                    </div>
                </div>
                <input class="btn btn-primary"
                type="submit" name="submit" id="submit"value="Send Message"/>
                            
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