<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Capturo</title>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Exo&family=Roboto:wght@300;400;500&display=swap" rel="stylesheet">
</head>
<body>
<section class="hero">
        <div class="navbar">
            <div class="container containernav">
                <div class="div1">
                <a href="index.php" class="brand"><img src="images/ROOKIE.png" alt="Website brand"></a>
                <nav role="navigation" class="nav-menu">
                    <a href="#" class="navlink mas">Portfolio</a>
                    <a href="#" class="navlink mas">About</a>
                    <a href="#" class="navlink mas">Services</a>
                    
                </nav>
                </div>
                <div class="contactmedia">
                    <a href="Login.php" class="but media accessbut">Book A Call</a>
                </div>
                <div class="nav-toggle" onclick="toggleNav()">&#9776;</div> <!-- Hamburger icon for mobile -->
            </div>
        </div>

        <div class="container">
            <div class="hero_content">
                <h1 class="white">Create your <span class="spanam">Amazing</span> photo gallery</h1>
                <p class="paraghero">Choose from a variety of specialists to photoshoot your project</p> 
                <div class="herobuttons">
                    <button class="but getstartedbutton"><a href="#">Book A Call</a></button>
                    <button class="but watchdemobutton"><a href="">Portfolio</a></button>
                </div>
            </div>
        </div>
    </section>
    
    <section class="secondsection">
        <div class="container1">
            <div class="flexbox">
                <div class="secondwebmaterial">
                    <h1 class="white2">PHOTO-TAKES FROM AGILE ANGLES</h1><span class="horizontalline"></span>
                    <p class="paragsecond">For any type of exhibition, business or private venture, ROOKIE
will handle your project with care.</p>
                </div>
                
                <button class="but learnmorebut"><a href="#">Let’s Talk</a></button>
                <button class="but learnmorebut"><a href="#">Find A Photographer</a></button>
            </div>
        </div>
    </section>


    <section class="thirdsection">
        <div class="container1">
          <div class="servicessection">
                <div class="servicediv">
                    <h1 class="services">Service we provide</h1> <p class="servicepar">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
                </div>
                <span class="horizontalline2"></span>
            </div>
            <div class="imagessection">
                <div class="image image1"><img src="images/nathan-dumlao-5BB_atDT4oA-unsplash 1.png" alt=""></div>
                <div class="image image2"><img src="images/sarah-dorweiler-Sy8dsVyiPgs-unsplash 1.png" alt=""></div>
                <div class="image image3"><img src="images/sunguk-kim-tIfrzHxhPYQ-unsplash 1.png" alt=""></div>
                <div class="image image4"><img src="images/yoann-boyer-VZSIm_cNAL8-unsplash 1.png" alt=""></div>
            </div>
        </div>
    </section>

    <section class="forthsection">
        <div class="container1">
          <div class="portfoliosection">
                <div class="porftoliodiv">
                    <h1 class="portfolio">Portfolio</h1><span class="horizontalline3"></span> <p class="portfoliopar">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor..</p>
                </div>
                
                <div class="categories">
                    <a href="#">All</a>
                    <a href="#">Nature</a>
                    <a href="#">Covers</a>
                    <a href="#">Travel</a>
                    <a href="#">Wedding</a>
                </div>
            </div>
            <div class="imagessection1">
                <div class="imagesec image1"><img src="images/Mask Group.png" alt=""></div>
                <div class="imagesec image2"><img src="images/Mask Group2.png" alt=""></div>
                <div class="imagesec image3"><img src="images/Mask Group3.png" alt=""></div>
                <div class="imagesec image4"><img src="images/Mask Group4.png" alt=""></div>
            </div>
        </div>
    </section>

    <section class="fifthsection">
        <div class="container">
            <div class="flex">
                <div class="mark mark1">
                    <h2 class="substitle">250+</h2>
                    <span class="spantext">Satisfied Clients</span>
                </div>
                <div class="mark mark2"> 
                    <h2 class="substitle">732</h2>
                    <span class="spantext">Photoshoots</span>
                </div>
                <div class="mark mark3">
                    <h2 class="substitle">18</h2>
                    <span class="spantext">Photographers</span>
                </div>
                <div class="mark mark4">
                    <h2 class="substitle">100+</h2>
                    <span class="spantext">Galleries</span>
                </div>       
            </div>
        </div>
    </section>

    <section class="sixthsection">
        <div class="container1">
            <div class="testimonials">
                <h1 class="testi">What they say about us</h1>
                <span class="horizontalline2"></span>
            </div>
            <div class="cards">
                <div class="card card1" style="border: 1px solid black; display: flex; justify-content: center; align-items: center;">
                    <div class="cardimage1"><img src="images/Bitmap1.png" alt=""></div><span class="horizontalline2"></span>
                    <div class="cardtext" >
                        <p class="cardparagraph">Capturo has something for everyone and it is nice to have the option of visiting a studio full of dedicates photographers.</p>
                    </div>
                </div>
            </div>
            
        </div>
    </section>
    <script>
        function toggleNav() {
            const nav = document.querySelector('nav');
            nav.classList.toggle('open'); // Toggle nav visibility
        }
    </script>
</body>
</html>