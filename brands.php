<?php
require 'db.php';

// Query for Brands_Reebok products
$reebokQuery = "SELECT * FROM products WHERE LOWER(type) = 'Brand'";
$reebokResult = $pdo->query($reebokQuery);
$reebokProduct = $reebokResult->fetchAll(PDO::FETCH_ASSOC);


function clean_js_string($text) {
    // Replace newlines and excessive whitespace with a space
    $text = preg_replace('/\s+/', ' ', $text);
    return json_encode($text);
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlexDeal Fitness</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    
    <style>

   /* ========== Responsive Design ========== */
              /* ----- Mobile Navbar Responsive Toggle ----- */
@media (max-width: 991px) {
  .header-container {
    flex-wrap: wrap;
    justify-content: space-between;
    padding: 0 1rem;
  }

  .mobile-menu {
    display: block;
    font-size: 1.5rem;
    color: #333;
    cursor: pointer;
  }

  nav #main-nav {
    position: fixed;
    top: 70px;
    left: 0;
    width: 100%;
    max-height: 0;
    background: #fff;
    overflow: hidden;
    flex-direction: column;
    align-items: flex-start;
    transition: max-height 0.4s ease;
    z-index: 999;
    padding: 0 1rem;
  }

  nav #main-nav.active {
    max-height: 100vh;
    overflow-y: auto;
    padding: 1rem;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
  }

  nav #main-nav > li {
    width: 100%;
    border-bottom: 1px solid #eee;
    padding: 10px 0;
  }

  .dropdown-menu,
  .mega-menu {
    display: none;
    position: static;
    background: #f8f8f8;
    box-shadow: none;
  }

  #main-nav > li.active .dropdown-menu,
  #main-nav > li.active .mega-menu {
    display: block;
    padding: 10px 0;
  }

  .search-box {
    width: 100%;
    margin-top: 1rem;
  }
}

/* ----- Hero and About Section Adjustments ----- */
@media (max-width: 768px) {
  .hero h1 {
    font-size: 2.5rem;
  }

  .hero p {
    font-size: 1.1rem;
  }

  .about-section {
    flex-direction: column !important;
    text-align: center;
  }

  .about-image {
    margin-top: 20px;
  }

  .about-text h2 {
    font-size: 2rem;
  }
}

/* ----- Further Optimization for Small Devices ----- */
@media (max-width: 576px) {
  .feature-card {
    width: 100%;
  }

  .consultation-title {
    font-size: 1.8rem;
  }

  .consultation-subtitle {
    font-size: 1rem;
  }

  .platform-link {
    width: 80px;
  }

  .platform-logo {
    width: 40px;
    height: 40px;
  }

  .consultation-cta {
    font-size: 1rem;
    padding: 10px 20px;
  }
}    

         

        .header {
            text-align: center;
            padding: 50px;
            margin-bottom: 50px;
            overflow: hidden;
        }

        .header h1 {
            font-size: 2.8rem;
            color: #333;
            
            margin-bottom: 15px;
            font-weight: 700;
            letter-spacing: -0.5px;
            position: relative;
            display: inline-block;
            animation: slideInFromBottom 1s ease-out both;
        }

        /* Animated underline effect */
        .header h1::after {
            content: '';
            position: absolute;
            width: 0;
            height: 4px;
            background: linear-gradient(90deg, #ff6b6b, #4ecdc4);
            bottom: -8px;
            left: 0;
            border-radius: 2px;
            animation: expandLine 1s ease-out 0.5s forwards;
        }

        .header p {
            color: #666;
            font-size: 1rem;
            opacity: 0;
            transform: translateY(20px);
            animation: fadeInUp 0.8s ease-out 0.7s forwards;
        }

        /* Keyframe animations */
        @keyframes slideInFromBottom {
            0% {
                transform: translateY(100px);
                opacity: 0;
            }
            100% {
                transform: translateY(0);
                opacity: 1;
            }
        }

        @keyframes expandLine {
            0% {
                width: 0;
                left: 50%;
            }
            100% {
                width: 100%;
                left: 0;
            }
        }

        @keyframes fadeInUp {
            0% {
                opacity: 0;
                transform: translateY(20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Optional: Add a subtle pulse effect on hover */
        .header h1:hover {
            animation: pulse 1s ease infinite alternate;
        }

        @keyframes pulse {
            0% {
                transform: scale(1);
            }
            100% {
                transform: scale(1.02);
                text-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            }
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .header h1 {
                font-size: 2.2rem;
                animation: slideInFromBottom 0.8s ease-out both;
            }
            
            .header h1::after {
                height: 3px;
                bottom: -6px;
            }
            
            .header p {
                font-size: 0.9rem;
                animation: fadeInUp 0.7s ease-out 0.6s forwards;
            }
        }

        @media (max-width: 576px) {
            .header h1 {
                font-size: 1.8rem;
            }
        }

        .slider-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
            position: relative;
        }

        .slider-header {
            text-align: center;
            margin-bottom: 30px;
        }

        .slider-header h2 {
            font-size: 2.2rem;
            color: #333;
            margin-bottom: 10px;
            position: relative;
            display: inline-block;
        }

        .slider-header h2:after {
            content: '';
            position: absolute;
            width: 60%;
            height: 3px;
            background: linear-gradient(90deg, #ff6b6b, #4ecdc4);
            bottom: -10px;
            left: 20%;
            border-radius: 3px;
        }

        .slider-header p {
            color: #666;
            font-size: 1rem;
        }

        .product-slider {
            position: relative;
            overflow: hidden;
            padding: 20px 0;
        }

        .product-grid {
            display: flex;
            transition: transform 0.5s ease;
            gap: 20px;
            padding: 10px 0;
        }

        .product-card {
            flex: 0 0 calc(33.333% - 20px);
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            position: relative;
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .product-badge {
            position: absolute;
            top: 10px;
            left: 10px;
            background: linear-gradient(45deg, #ff6b6b, #ff8e8e);
            color: white;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.7rem;
            font-weight: bold;
            z-index: 2;
        }

        .image-container {
            position: relative;
            width: 100%;
            height: 200px;
            overflow: hidden;
        }

        .product-image {
            width: 100%;
            height: 100%;
            object-fit: contain;
            padding: 20px;
            transition: transform 0.5s ease;
        }

        .product-card:hover .product-image {
            transform: scale(1.05);
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0;
            transition: opacity 0.3s ease;
        }

        .product-card:hover .overlay {
            opacity: 1;
        }

        .quick-view {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            background: linear-gradient(45deg, #4ecdc4, #88d8b0);
            border-radius: 30px;
            font-weight: bold;
            font-size: 0.9rem;
            transition: transform 0.3s ease;
        }

        .quick-view:hover {
            transform: scale(1.05);
        }

        .product-info {
            padding: 15px;
            text-align: center;
        }

        .product-name {
            color: #333;
            font-size: 1.2rem;
            margin-bottom: 5px;
        }

        .product-price {
            color: #ff6b6b;
            font-weight: bold;
            font-size: 1.1rem;
        }

        .slider-nav {
            display: flex;
            justify-content: center;
            margin-top: 30px;
        }

        .slider-dot {
            width: 12px;
            height: 12px;
            background: #ddd;
            border-radius: 50%;
            margin: 0 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        .slider-dot.active {
            background: #4ecdc4;
        }

        .slider-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            width: 40px;
            height: 40px;
            background: white;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            cursor: pointer;
            z-index: 10;
            transition: background 0.3s ease;
        }

        .slider-arrow:hover {
            background: #4ecdc4;
            color: white;
        }

        .slider-arrow.prev {
            left: 0;
        }

        .slider-arrow.next {
            right: 0;
        }

        @media (max-width: 992px) {
            .product-card {
                flex: 0 0 calc(50% - 20px);
            }
        }

        @media (max-width: 576px) {
            .product-card {
                flex: 0 0 100%;
            }
            
            .slider-arrow {
                width: 30px;
                height: 30px;
                font-size: 0.8rem;
            }
        }
    </style>

</head>

<body>
   <header id="main-header">
        <div class="container header-container">
            <div class="logo">
                <a href="index.php"><i class="fas fa-dumbbell"></i> <span>FlexDeal</span></a>
            </div>
            <nav>
                <ul id="main-nav">
                    <li><a href="index.php" >HomeFitness </i></a>
                        <ul class="dropdown-menu mega-menu">
                            <li>
                                <h4>Home Fitness Categories</h4>
                                <ul>
                                    <li><a href="hometreadmills.php"><i class="fas fa-running"></i> Treadmills</a></li>
                                    <li><a href="homeEllipticals.php"><i class="fas fa-walking"></i> Ellipticals</a>
                                    </li>
                                    <li><a href="homeExercise.php"><i class="fas fa-bicycle"></i> Exercise Bikes</a>
                                    </li>
                                    <li><a href="strength.php"><i class="fas fa-dumbbell"></i> Strength and Benches</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-image-box">
                                <img src="https://files.idyllic.app/files/static/3084905" alt="Home Fitness Equipment">
                                <div class="dropdown-image-content">
                                    <h4>Home Gym Solutions</h4>
                                    <a href="index.php" class="btn">View All</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li><a href="gymfitness.php">GymFitness </i></a>
                        <ul class="dropdown-menu mega-menu">
                            <li>
                                <h4>Commercial Equipment</h4>
                                <ul>
                                    <li><a href="gymtreadmills.php"><i class="fas fa-running"></i> Treadmills</a></li>
                                    <li><a href="gymEllipticals.php"><i class="fas fa-walking"></i> Ellipticals</a>
                                    </li>
                                    <li><a href="gymExercise.php"><i class="fas fa-bicycle"></i> Exercise Bikes</a>
                                    </li>
                                    <li><a href="rowers.php"><i class="fas fa-water"></i> Rowers</a></li>
                                     <li><a href="stairclimber.php"><i class="fas fa-water"></i> Stair Climbers</a></li>
                                    <li><a href="pinloaded.php"><i class="fas fa-weight"></i> Pin Loaded</a></li>
                                    <li><a href="plateloaded.php"><i class="fas fa-weight"></i> Plate Loaded</a></li>
                                    <li><a href="benches.php"><i class="fas fa-weight"></i> Benches and Rack</a></li>
                                    <!-- <li><a href="dumbells.html"><i class="fas fa-weight"></i> Dumbells</a></li> -->
                                </ul>
                            </li>
                            <li class="dropdown-image-box">
                                <img src="https://img.freepik.com/free-photo/gym-with-indoor-cycling-equipment_23-2149270210.jpg?uid=R202996531&ga=GA1.1.1448600281.1749010097&semt=ais_hybrid&w=740" alt="Commercial Gym Equipment">
                                <div class="dropdown-image-content">
                                    <h4>Professional Grade</h4>
                                    <a href="gymfitness.php" class="btn">View All</a>
                                </div>
                            </li>
                        </ul>
                    </li>
                      <li><a href="brands.php" class="active">Brands </i></a>
                    
                    <li><a href="accessories.php" >Accessories </i></a></li>
                    <li><a href="wellness.php">Wellness </i></a></li>
                   <li><a href="about.php">About</a></li>
                        <!-- <ul class="dropdown-menu">
                            <li><a href="brands.html#reebok"><i class="fas fa-tag"></i> Reebok</a></li>
                            <li><a href="brands.html#welcare"><i class="fas fa-tag"></i> Welcare</a></li>
                            <li><a href="brands.html#firm"><i class="fas fa-tag"></i> Firm</a></li>
                            <li><a href="brands.html#accunique"><i class="fas fa-tag"></i> Accunique</a></li>
                            <li><a href="brands.html#accunique"><i class="fas fa-tag"></i> Proiorn</a></li>
                            <li><a href="brands.html#accunique"><i class="fas fa-tag"></i> Flexdeal</a></li>
                        </ul> -->
                    </li>
                    <li><a href="contact.php">Contact</a></li>
                    <div class="navbar-search">
                        <input type="text" id="navSearchInput" placeholder="Search Products..." oninput="searchProducts(this.value)">
                        <ul id="navSearchResults"></ul>
                    </div>
                </ul>
            </nav>
            <div class="nav-actions">
                <!-- <div class="search-box">
                    <input type="text" placeholder="Search products...">
                    <button><i class="fas fa-search"></i></button>
                </div>
                <div class="cart-icon" id="cart-icon">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="cart-count">3</span>
                </div> -->
                <div class="mobile-menu" id="mobile-menu">
                    <i class="fas fa-bars"></i>
                </div>
            </div> 
        </div>
    </header>


<div class="container">
        <div class="header">
            <h1>Our Premium Brands</h1>
            <p>Discover our best-selling brands with exceptional quality</p>
        </div>
       
        <div class="slider-container">
            <div class="product-slider">
                <div class="slider-arrow prev"><i class="fas fa-chevron-left"></i></div>
                <div class="slider-arrow next"><i class="fas fa-chevron-right"></i></div>
                
                <div class="product-grid">
                    <!-- Product 1 -->
                    <div class="product-card">
                        <div class="product-badge">Bestseller</div>
                        <div class="image-container">
                            <img src="https://welcarefitness.com/image/cache/catalog/manufacture/180/180x180%20Reebok-180x180.png" alt="Reebok" class="product-image">
                            <div class="overlay">
                                <a href="reebok.php" class="quick-view">Quick View</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">Reebok</h3>
                        </div>
                    </div>

                    <!-- Product 2 -->
                    <div class="product-card">
                        <div class="product-badge">Bestseller</div>
                        <div class="image-container">
                            <img src="https://welcarefitness.com/image/catalog/logo/logo-black.png" alt="Welcare" class="product-image">
                            <div class="overlay">
                                <a href="welcare.php" class="quick-view">Quick View</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">Welcare</h3>
                        </div>
                    </div>

                    <!-- Product 3 -->
                    <div class="product-card">
                        <div class="product-badge">Bestseller</div>
                        <div class="image-container">
                            <img src="https://welcarefitness.com/image/cache/catalog/manufacture/180/180x180%20FIRM-180x180.png" alt="Firm" class="product-image">
                            <div class="overlay">
                                <a href="brandfirm.php" class="quick-view">Quick View</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">Firm</h3>
                        </div>
                    </div>

                    <!-- Product 4 -->
                    <div class="product-card">
                        <div class="product-badge">Bestseller</div>
                        <div class="image-container">
                            <img src="https://welcarefitness.com/image/cache/catalog/manufacture/180/180x180%20Accuiq-180x180.png" alt="Accuniq" class="product-image">
                            <div class="overlay">
                                <a href="accuniq.php" class="quick-view">Quick View</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">Accuniq</h3>
                        </div>
                    </div>

                    <!-- Product 5 -->
                    <div class="product-card">
                        <div class="product-badge">Bestseller</div>
                        <div class="image-container">
                            <img src="https://welcarefitness.com/image/cache/catalog/manufacture/180/180x180%20Proiron-180x180.png" alt="Proiron" class="product-image">
                            <div class="overlay">
                                <a href="proiron.php" class="quick-view">Quick View</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">Proiron</h3>
                        </div>
                    </div>

                    <!-- Product 6 -->
                    <div class="product-card">
                        <div class="product-badge">Bestseller</div>
                        <div class="image-container">
                            <img src="https://welcarefitness.com/image/cache/catalog/manufacture/180/180x180%20Kaesun-180x180.png" alt="Kaesun" class="product-image">
                            <div class="overlay">
                                <a href="keisun.php" class="quick-view">Quick View</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <h3 class="product-name">Kaesun</h3>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="slider-nav">
                <div class="slider-dot active"></div>
                <div class="slider-dot"></div>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const productGrid = document.querySelector('.product-grid');
            const products = document.querySelectorAll('.product-card');
            const dots = document.querySelectorAll('.slider-dot');
            const prevBtn = document.querySelector('.prev');
            const nextBtn = document.querySelector('.next');
            
            let currentIndex = 0;
            let autoSlideInterval;
            const slideDuration = 5000; // 5 seconds
            
            function getProductsPerSlide() {
                return window.innerWidth < 576 ? 1 : window.innerWidth < 992 ? 2 : 3;
            }
            
            function getTotalSlides() {
                return Math.ceil(products.length / getProductsPerSlide());
            }
            
            // Update dots based on total slides
            function updateDots() {
                const totalSlides = getTotalSlides();
                dots.forEach((dot, index) => {
                    dot.style.display = index < totalSlides ? 'block' : 'none';
                    dot.classList.toggle('active', index === currentIndex);
                });
            }
            
            // Update slider position
            function updateSlider() {
                const productsPerSlide = getProductsPerSlide();
                const offset = -currentIndex * 100;
                productGrid.style.transform = `translateX(${offset}%)`;
                updateDots();
            }
            
            // Next slide
            function nextSlide() {
                currentIndex = (currentIndex + 1) % getTotalSlides();
                updateSlider();
                resetAutoSlide();
            }
            
            // Previous slide
            function prevSlide() {
                currentIndex = (currentIndex - 1 + getTotalSlides()) % getTotalSlides();
                updateSlider();
                resetAutoSlide();
            }
            
            // Dot navigation
            function setupDotNavigation() {
                dots.forEach((dot, index) => {
                    dot.addEventListener('click', function() {
                        currentIndex = index;
                        updateSlider();
                        resetAutoSlide();
                    });
                });
            }
            
            // Auto slide functionality
            function startAutoSlide() {
                autoSlideInterval = setInterval(nextSlide, slideDuration);
            }
            
            function resetAutoSlide() {
                clearInterval(autoSlideInterval);
                startAutoSlide();
            }
            
            // Pause auto slide on hover
            function setupHoverPause() {
                const slider = document.querySelector('.product-slider');
                slider.addEventListener('mouseenter', () => clearInterval(autoSlideInterval));
                slider.addEventListener('mouseleave', startAutoSlide);
            }
            
            // Handle window resize
            function setupResizeHandler() {
                window.addEventListener('resize', function() {
                    currentIndex = 0; // Reset to first slide on resize
                    updateSlider();
                });
            }
            
            // Initialize
            prevBtn.addEventListener('click', prevSlide);
            nextBtn.addEventListener('click', nextSlide);
            setupDotNavigation();
            updateDots();
            startAutoSlide();
            setupHoverPause();
            setupResizeHandler();
        });
    </script>
 





   
    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-about">
                    <a href="index.php" class="footer-logo"><i class="fas fa-dumbbell"></i> FlexDeal</a>
                    <p>We're dedicated to providing premium fitness equipment and accessories to help you
                        achieve your health and wellness goals.</p>
                    <div class="social-links">
                       <a href="https://www.facebook.com/share/1Yt1FHYEiY/"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://www.instagram.com/flexdeal_fitness/"><i class="fab fa-instagram"></i></a>
                         <a href="#"><i class="fab fa-twitter"></i></a> 
                        <a href="https://youtube.com/@flexdealfitness?si=zRc_VhNylrBo-BK7"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="footer-links">
                    <h3>Quick Links</h3>
                    <ul>
                        <li><a href="index.php">HomeFitness</a></li>
                        <li><a href="gymfitness.php">GymFitness</a></li>
                        <li><a href="accessories.php">Accessories</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <h3>Contact Us</h3>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>Inside 93 Avenu Mall
Shop no. 111 First floor,
 Solapur Road, Near FATIMA NAGAR JUNCTION, Opposite CROMA, Wanowrie, Pune, Maharashtra 411022</div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone-alt"></i>
                        <div>+919322582246 <br>+917776090461 <br>+917030100740</div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>flexdealfitness@gmail.com</div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                &copy; 2025 FlexDeal Fitness. All Rights Reserved. Design by AB Software Solution
            </div>
        </div>
    </footer>




<script>
function searchProducts(query) {
    const resultsBox = document.getElementById("navSearchResults");
    
    if (query.trim().length < 1 ) {
        resultsBox.innerHTML = '';
        resultsBox.style.display = "none";
        return;
    }

    fetch(`search_backend.php?q=${encodeURIComponent(query)}`)
        .then(response => {
            if (!response.ok) throw new Error("Network response was not ok");
            return response.json();
        })
        .then(data => {
            resultsBox.innerHTML = '';
            if (data.length > 0) {
                data.forEach(item => {
                    const li = document.createElement('li');
                    li.textContent = item.name;
                    li.onclick = () => window.location.href = `viewProduct.php?id=${item.id}`;
                    resultsBox.appendChild(li);
                });
                resultsBox.style.display = 'block';
            } else {
                resultsBox.innerHTML = '<li>No products found</li>';
                resultsBox.style.display = 'block';
            }
        })
        .catch(error => {
            console.error("Fetch error:", error);
            resultsBox.innerHTML = '<li>Error loading results</li>';
            resultsBox.style.display = 'block';
        });
}
document.addEventListener('click', function (event) {
    const input = document.getElementById("navSearchInput");
    const resultsBox = document.getElementById("navSearchResults");

    // If the click is outside the input and the result list, hide the result list
    if (!input.contains(event.target) && !resultsBox.contains(event.target)) {
        resultsBox.innerHTML = '';
        resultsBox.style.display = 'none';
    }
});

</script>



<script>
const mobileMenu = document.getElementById('mobile-menu');
const mainNav = document.getElementById('main-nav');
const navItems = document.querySelectorAll('#main-nav > li');

mobileMenu.addEventListener('click', () => {
    mainNav.classList.toggle('active');
});

// For dropdowns on mobile
navItems.forEach(item => {
    const link = item.querySelector('a');
    const dropdown = item.querySelector('.dropdown-menu');
    if (dropdown) {
        link.addEventListener('click', (e) => {
            if (window.innerWidth <= 992) {
                e.preventDefault(); // prevent navigation

                // Toggle active state on current item
                const isActive = item.classList.contains('active');

                // Close all other dropdowns
                navItems.forEach(otherItem => otherItem.classList.remove('active'));

                // If it wasn't active, open it
                if (!isActive) {
                    item.classList.add('active');
                }
            }
        });
    }
});

// Allow inner links inside dropdowns to be clickable
document.querySelectorAll('#main-nav .dropdown-menu a').forEach(link => {
    link.addEventListener('click', (e) => {
        if (window.innerWidth <= 992) {
            e.stopPropagation(); // prevent closing dropdown
            // Optional: close menu after click
            mainNav.classList.remove('active');
            navItems.forEach(item => item.classList.remove('active'));
        }
    });
});

// Close menu when clicking outside
document.addEventListener('click', (e) => {
    if (window.innerWidth <= 992) {
        if (!mainNav.contains(e.target) && !mobileMenu.contains(e.target)) {
            mainNav.classList.remove('active');
            navItems.forEach(item => item.classList.remove('active'));
        }
    }
});
</script>

</body>

</html>