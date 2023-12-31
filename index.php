<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/7f257b9379.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./css/style.css">
    <title>Travel Website</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
</head>
<body>
    <header class="header">
        <nav class="navbar">
            <div class="container">

                <h1 class="logo">N.T</h1>
                <ul class="nav-items">
                <li class="nav-item"><a href="./index.php">Home</a></li>
                <li class="nav-item"><a href="./about.php">Services</a></li>
                
           
                <li class="nav-item"><a href="./login.php">Sign Up / Login</a></li>
            </ul>

            </div>
        </nav>

        <div class="header-content">
            <h1 class="site-info main-heading">Nepal Tour And Travels</h1>
            <p class="site-desc">Heaven is a myth, Nepal is real.</p>
            <<a href="#explore" class="button-primary" id="explore-link">Explore Places</a>

        </div>
    </header>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            // Smooth scroll animation
            $("#explore-link").on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function() {
                        window.location.hash = hash;
                    });
                }
            });
        });
    </script>

    <section class="showcase" id="explore">
        <div class="container">
            <div class="row row1">
                <div class="img-box">
                <img src="./img/kathmandu.jpg" alt="kathmandu">

                </div>
                <div class="text-box">
                    <h2>Kathmandu, Nepal</h2>
                    <p>Kathmandu, the capital of Nepal, is a city of contrasts. It is a bustling metropolis with a rich history and culture, and it is also a gateway to the stunning Himalayas. Visitors to Kathmandu can explore ancient temples and palaces, wander through bustling markets, and hike to stunning viewpoints.</p>
                <p><a href="./about.php" class="button-secondary">More</a></p>
                </div>
            </div>
            <div class="row row2">
                <div class="img-box">
                    <img src="./img/pokhara.jpg" alt="pokhara">
                </div>
                <div class="text-box">
                    <h2>Pokhara, Nepal</h2>
                    <p>Pokhara, Nepal is a city of natural beauty and adventure. It is located in the foothills of the Himalayas, and is surrounded by stunning mountains, lakes, and rivers. Pokhara is a popular destination for trekking, mountaineering, whitewater rafting, and kayaking. It is also home to a number of cultural attractions, including temples, monasteries, and traditional villages.</p>
                <p><a href="./about.php" class="button-secondary">More</a></p>
                </div>
            </div>
            <br>
            <br>
            <br>
            <br> 
            <br>
            <br>
            <br>
            <div class="row row1">
                <div class="img-box">
                    <img src="./img/nn.jpg" alt="nn">
                </div>
                <div class="text-box">
                    <h2>Lumbini, Nepal</h2>
                    <p>Lumbini is the birthplace of Gautama Buddha, the founder of Buddhism. It is a UNESCO World Heritage Site and one of the holiest places in the world for Buddhists. The main attractions in Lumbini include the Mayadevi Temple, the Ashoka Pillar, and the Lumbini Garden.<p>
                    <a href="./about.php" class="button-secondary">More</a></p>
                </div>
                    
        </div>
        <div class="row row1">
            <div class="img-box">
                <img src="./img/chitwan.jpg" alt="Research Centre">
            </div>
            <div class="text-box">
                <h2>Chitwan, Nepal</h2>
                <p>Chitwan National park is surrounded by rivers and forests, and is home to a variety of plants and animals. Chitwan is a great place to experience the natural beauty of Nepal and to learn about the country's wildlife. It is home to a variety of wildlife, including rhinos, tigers, elephants, and deer. Chitwan is also a great place to go on jungle safaris, birdwatching, and hiking. </p>
            <p><a href="./about.php" class="button-secondary">More</a></p>
            </div>
                
    </div>
    <div class="row row2">
        <div class="img-box">
            <img src="./img/Bungee-Jumping-in-Pokhara (1).jpg" alt="Research Centre">
        </div>
                <div class="text-box">
                    <h2>Bhote Koshi, Nepal</h2>
                    <p>Bungee jumping activity found its first ever spot at the Bhote Koshi gorge in Nepal. And now it is one of the most famous spots for bungee jumping in the whole world. The gorge is located near Nepal-Tibet border and has a height of 160 meters. What makes it special is the fact that is the highest bungee jumping in Nepal as well as the world. <p>
                    <a href="./about.php" class="button-secondary">More</a></p>
                </div>
                     </div>
            
            
</div>
    </section>
    
    <section class="features">
        <div class="container">

            <div class="box-wrapper">
                <div class="box box-1">
                    <i class="fas fa-route fa-2x"></i>
                    <h2 class="md-heading">Adventurous</h2>
                    <p>Do you seek the thrill of discovering vast new environments? If you answered yes, Travel Next is the best way to plan your next epic adventure.</p>
                </div>
                <div class="box box-2">
                    <i class="fas fa-rupee-sign fa-2x"></i>
                    <h2 class="md-heading">Less Price</h2>
                    <p>Travelling is not a hobby, it is rather a way of life, a necessity in order to survive the everyday drudgery. Pay less and travel to dream wth Travel Next! Let's Go!</p'>
                </div>
                <div class="box box-3">
                    <i class="fas fa-snowboarding fa-2x"></i>
                    <h2 class="md-heading">Experience</h2>
                    <p>Ancient, wild and colourful India is a place to behold. Too vast and diverse to encapsulate in words, this country needs to be experienced with the senses. 
                    </p>
                </div>
    
            </div>

        </div>
    </section>
    <section class="contact-form">
        <div class="container-contact">
            <div class="form-wrapper">
                <div class="company-address">
                    <i class="fas fa-map-marker-alt fa-3x" style="color: #ee4758;"></i>
                    <h2>LOCATION</h2>
                    <p>10th floor, Chaya Center, Kathmandu</p>
                    <i class="fas fa-envelope fa-3x" style="color: #ee4758;"></i>
                    <h2>E-MAIL</h2>
                    <p>Nepaltourandtravels@domain.com</p>
                    <i class="fas fa-phone-square-alt fa-3x" style="color: #ee4758;"></i>
                    <h2>CALL</h2>
                    <p>+977-9841000000</p>

                    <img src="./img/office.jpg" alt="Company Image">
                </div>
                <form action="" class="form">
                    <h1>Contact Us</h1>
                    <p>Let us know your questions, suggestions and concerns by filling out the contact form below</p>

                    <div class="form-group">
                        <label for="username">Name</label>
                        <input type="text" name="" id="username" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Phone</label>
                        <input type="text" name="" id="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="" id="message" required></textarea>
                    </div>
                    <button type="submit" class="form-btn">Submit</button>
                </form>
            </div>
        </div>
    </section>

    <footer class="footer">
        <div class="social-media-links">
            <i class="fab fa-facebook fa-4x"></i>
            <i class="fab fa-twitter fa-4x"></i>
            <i class="fab fa-instagram fa-4x"></i>
        </div>
        <p>Nepal Tour And Travels &copy; 2023, All Rights Reserved</p>
    </footer>
</body>
</html>

