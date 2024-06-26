<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant | EatRun</title>
    <link rel="icon" href="./images/eat_run_logo.png">
    <link rel="stylesheet" href="restaurant-sample.css">
    <link rel="stylesheet" href="style3.css">
</head>
<body>

    <div class="banner">
        <div class="navbar">
            <img src="images/eat_run_logo.png" alt="">
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="restaurant.php">Restaurant</a></li>
                <li><a href="">Services</a></li>
                <li><a href="">Contact</a></li>
            </ul>

            <div class="search-engine">
                <form action="">  
                        <input type="search" placeholder="Search" class="form-input">
                            <button type="submit" class="search-button">
                                <i class="fa-solid fa-search"></i>
                            </button>   
                </form>

                <div class="icons">
                <a href="" class="notification-bell">
                    <i class="fa-solid fa-bell"></i>
                </a>
                <a href="" class="user-icon">
                    <i class="fa-solid fa-user"></i>
                </a>
            </div>
            </div>

        </div>
    </div>

    <section class="home-section">
        <div class="text-content">
            <h3>Restaurant</h3>
            <p>Discover top Restaurant and Specials in Town</p>
        </div>

        <div class="slider-container">
          <button class="nav-btn prev-btn" onclick="prevSlide()">Previous</button>
          <button class="nav-btn next-btn" onclick="nextSlide()">Next</button>

          <div class="slider-content">
            <div class="slide">
              <div class=".slider-border-img-design">
                <img src="./images/Ala-Eh-Eatery.jpeg" alt="Image 1">
                <button class="see-restaurant-button" onclick="openAlaEh()">Ala Eh Eatery</button>
              </div>
            </div>

            <div class="slide">
              <div class=".slider-border-img-design">
              <img src="./images/Ailyn's-Restaurant.jpg" alt="Image 2">
              <button class="see-restaurant-button">Ailyn's Restaurant</button>
             </div>
            </div>

            <div class="slide">
              <img src="./images/Alcaide's-Grilled-Burger.jpg" alt="Image 3">
              <button class="see-restaurant-button">Alcaide's Grilled Burger & More</button>
            </div>

            <div class="slide">
              <img src="./images/Nap's RestoBar.jpg" alt="Image 3">
              <button class="see-restaurant-button">Nap's Restobar</button>
            </div>
            
          </div>
        </div>

        <div id="ala-eh-Popup" class="popup">
          <div class="popup-content">
            <span class="close"  id="closePopupBtn"onclick="meClose()">&times;</span>
            <img src="./images/Ala-Eh-Eatery.jpeg" alt="Image 1" style="width: 90%">
            <h2>Ala Eh Eatery</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus repellendus animi, laboriosam quam ipsam molestiae. Quis, ea quos impedit ullam illo laborum. Distinctio quae recusandae nisi totam officiis suscipit ad?</p>
            <button type="submit">See Products</button>
        </div>
        </div>
        
        <div id="ailyns-Popup" class="popup">
          <div class="popup-content">
            <button class="close" id="closePopupBtn" onclick="meClose()">&times;</button>
            <h2>Ailyn's Restaurant</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus, commodi fugit aut eveniet rem exercitationem incidunt quod distinctio nam. Omnis exercitationem ab quas quaerat sed eum aliquam rem fugiat magnam?</p>
          </div>
        </div>

        <div id="alcaides-Popup" class="popup">
          <div class="popup-content">
            <button class="close" id="closePopupBtn" onclick="meClose()">&times;</button>
            <h2>Alcaide's Grilled Burger & More</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus, commodi fugit aut eveniet rem exercitationem incidunt quod distinctio nam. Omnis exercitationem ab quas quaerat sed eum aliquam rem fugiat magnam?</p>
          </div>
        </div>

        <div id="naps-Popup" class="popup">
          <div class="popup-content">
            <button class="close" id="closePopupBtn" onclick="meClose()">&times;</button>
            <h2>Nap's Restobar</h2>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Doloribus, commodi fugit aut eveniet rem exercitationem incidunt quod distinctio nam. Omnis exercitationem ab quas quaerat sed eum aliquam rem fugiat magnam?</p>
          </div>
        </div>
        

        <script src="restaurant.js"></script>
        </head>
        <body>
        
        
