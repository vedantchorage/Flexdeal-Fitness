<?php
require 'db.php';



?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlexDeal Fitness</title>
         <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
     <link rel="stylesheet" href="css/style.css">
 <style>

       /* ========== Responsive Design ========== */
        @media (max-width: 992px) {
            .header-container {
                flex-wrap: wrap;
                justify-content: space-between;
                padding: 0 1rem;
            }

            .mobile-menu {
                display: block;
                font-size: 1.5rem;
                cursor: pointer;
                color: #333;
            }

            #main-nav {
                position: absolute;
                top: 70px;
                left: 0;
                width: 100%;
                background: #fff;
                flex-direction: column;
                align-items: flex-start;
                max-height: 0;
                overflow: hidden;
                transition: max-height 0.4s ease;
                z-index: 999;
                box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            }

            #main-nav.active {
                max-height: 100vh;
            }

            #main-nav>li {
                width: 100%;
                padding: 10px 20px;
                border-bottom: 1px solid #eee;
            }

            .dropdown-menu,
            .mega-menu {
                position: static;
                display: none;
                background: #f9f9f9;
                padding: 10px;
                width: 100%;
                box-shadow: none;
            }

            #main-nav>li.active .dropdown-menu {
                display: block;
            }

            .search-box {
                width: 100%;
                margin-top: 10px;
            }

            .footer-container {
                flex-direction: column;
                gap: 2rem;
            }

            .footer-about,
            .footer-links,
            .footer-contact {
                margin-bottom: 30px;
            }
        }

        @media (max-width: 768px) {
            .feature-image {
                height: 180px;
            }

            .product-info {
                padding: 1rem;
            }

            .section-header h2 {
                font-size: 1.8rem;
            }

            .feature-card h3 {
                font-size: 1.1rem;
            }

            .quote-btn,
            .get-quote-btn {
                font-size: 0.9rem;
                padding: 10px;
            }

            .features-container {
                grid-template-columns: repeat(2, 1fr);
                gap: 1rem;
            }
        }

        @media (max-width: 576px) {
            .features-container {
                grid-template-columns: 1fr;
            }

            .feature-actions {
                flex-direction: column;
                gap: 0.8rem;
            }

            .quote-btn,
            .get-quote-btn {
                width: 100%;
                margin-right: 0;
            }

            .whatsapp-btn {
                width: 100%;
                justify-content: center;
            }

            .section-header h2 {
                font-size: 1.5rem;
            }

            .product-price {
                font-size: 1.2rem;
            }
        }
       
      /* Product Section Styles */



* {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .container {
        max-width: 1600px;
        margin: 0 auto;
        padding: 40px 20px;
    }

    .header {
        text-align: center;
        margin-bottom: 50px;
    }

    .header h1 {
        font-size: 2.8rem;
        color: #333;
        margin-bottom: 15px;
        font-weight: 700;
        letter-spacing: -0.5px;
    }



        .product-grid {
        display: grid;
        grid-template-columns: repeat(3, minmax(400px, 1fr));
        gap: 40px;
        justify-items: center;
    }

    .product-card {
        background: white;
        border-radius: 15px;
        overflow: hidden;
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        transition: all 0.4s cubic-bezier(0.175, 0.885, 0, 1);
        position: relative;
        width: 100%;
        max-width: 500px;
        height: 500px;
        display: flex;
        flex-direction: column;
    }

    .product-card:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    .image-container {
        height: 300px;
        overflow: hidden;
        position: relative;
    }

    .product-image {
        width: 100%;
        height: 100%;
        object-fit: fill;
        transition: transform 0.5s ease;
    }

    .product-card:hover .product-image {
        transform: scale(1.1);
    }

    .product-info {
        padding: 25px;
        text-align: center;
        flex-grow: 1;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .product-name {
        font-size: 1.4rem;
        color: #333;
        margin-bottom: 12px;
        font-weight: 700;
    }

    .product-price {
        color: #ff6b6b;
        font-weight: 700;
        font-size: 1.3rem;
        margin-top: 8px;
    }

    .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 300px;
        background: rgba(0, 0, 0, 0.6);
        display: flex;
        align-items: center;
        justify-content: center;
        opacity: 0;
        transition: all 0.3s ease;
    }

    .product-card:hover .overlay {
        opacity: 1;
    }

    .quick-view {
        padding: 12px 25px;
        background: white;
        color: #333;
        text-decoration: none;
        border-radius: 30px;
        font-weight: 600;
        transition: all 0.3s ease;
        font-size: 0.95rem;
    }

    .quick-view:hover {
        background: #ff6b6b;
        color: white;
        transform: scale(1.05);
    }

    /* Badge for new products */
    .product-badge {
        position: absolute;
        top: 20px;
        right: 20px;
        background: #ff6b6b;
        color: white;
        padding: 5px 12px;
        border-radius: 20px;
        font-size: 0.8rem;
        font-weight: 600;
        z-index: 2;
    }

    @media (max-width: 1400px) {
        .product-grid {
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
        }
    }

    @media (max-width: 768px) {
        .header h1 {
            font-size: 2.2rem;
        }
        
        .product-grid {
            grid-template-columns: 1fr;
            gap: 30px;
        }
        
        .product-card {
            height: auto;
            max-width: 400px;
        }
        
        .image-container {
            height: 250px;
        }
    }

    @media (max-width: 480px) {
        .container {
            padding: 30px 15px;
        }
        
        .header h1 {
            font-size: 1.8rem;
        }
        
        .view-all {
            padding: 10px 20px;
            font-size: 0.9rem;
        }
        
        .product-info {
            padding: 20px;
        }
        
        .product-name {
            font-size: 1.2rem;
        }
        
        .product-price {
            font-size: 1.1rem;
        }
    }

    .navbar-search {
            position: relative;
            display: inline-block;
            margin-left: 20px;
        }

        #navSearchInput {
            padding: 10px 15px;
            border: 2px solid #ccc;
            border-radius: 4px;
            font-size: 14px;
            width: 250px;
        }

        #navSearchResults {
            position: absolute;
            background-color: #fff;
            border: 2px solid #ccc;
            border-radius: 8px;              /* Rounded corners */
            list-style: none;
            padding: 8px 0;                  /* Inner vertical spacing */
            margin: 4px 0 0 0;
            z-index: 1000;
            width: 200%;                     /* Better for responsive */
            max-width: 400px;                /* Optional: limit width */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); /* Soft shadow */
            display: none;
            overflow: hidden;               /* Prevent overflow when rounded */
        }

        #navSearchResults li {
            display: flex;
            align-items: center;
            padding: 8px 12px;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        /* Image inside result item */
        #navSearchResults li img {
            width: 40px;
            height: 40px;
            object-fit: cover;
            border-radius: 4px;
            margin-right: 10px;
        }

        /* Hover effect */
        #navSearchResults li:hover {
            background-color: #f5f5f5;
        }
    
 </style>

</head>


<body>

   <!-- Header Section -->
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
                    <li><a href="gymfitness.php" class="active">GymFitness </i></a>
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
                      <li><a href="brands.php">Brands </i></a>
                    
                    <li><a href="accessories.php" >Accessories </i></a></li>
                    <li><a href="wellness.php">Wellness </i></a></li>
                   <li><a href="about.php" >About</a></li>
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
        <h1>Plate Loaded</h1>
        <!-- <a href="#" class="view-all">View All Products</a> -->
    </div>

    <div class="product-grid">
        <!-- Product 1 -->
       <div class="product-card">
    <div class="product-badge">Bestseller</div>
    <div class="image-container">
        <img src="https://welcarefitness.com/image/cache/catalog/FM019%20LINEAR%20LEG%20PRESS%20(45%20DEG)-1000x1000.jpg" alt="Firm Cyber" class="product-image">
        <div class="overlay">
            <a href="plateLoadedFirm.php" class="quick-view">Quick View</a>
        </div>
    </div>
    <div class="product-info">
        <h3 class="product-name">Firm </h3>
    </div>
</div>

        <!-- Product 2 -->
        <div class="product-card">
             <div class="product-badge">Bestseller</div>
            <div class="image-container">
                <img src="https://welcarefitness.com/image/cache/catalog/EL001-1000x1000.jpg" alt="Firm" class="product-image">
                <div class="overlay">
                    <a href="plateLoadedElitePro.php" class="quick-view">Quick View</a>
                </div>
            </div>
            <div class="product-info">
                <h3 class="product-name">Elite Pro</h3>
                <!-- <p class="product-price">$129.99</p> -->
            </div>
        </div>

        <!-- Product 3 -->
        <div class="product-card">
            <div class="product-badge">Bestseller</div>
            <div class="image-container">
                <img src="https://www.maxprofitness.in/cdn/shop/files/MPP-001ISO-LATERALBENCHPRESS_2048x2048.jpg?v=1722244680" alt="Smart Watch" class="product-image">
                <div class="overlay">
                    <a href="plateLoadedMaxpro.php" class="quick-view">Quick View</a>
                </div>
            </div>
            <div class="product-info">
                <h3 class="product-name">Maxpro</h3>
                <!-- <p class="product-price">$249.99</p> -->
            </div>
        </div>

        

        
    </div>
</div>
   




   

     <!-- Footer -->
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

        function handleQuickView(el) {
            const name = el.dataset.name;
            const price = el.dataset.price;
            const image = el.dataset.image;
            const description = el.dataset.description;
            const motor = el.dataset.motor;
            const speed = el.dataset.speed;
            const walking = el.dataset.walking;
            const display = el.dataset.display;
            const incline = el.dataset.incline;
            const programs = el.dataset.programs;
            const weight = el.dataset.weight;
            const features = el.dataset.features;
            const assembly = el.dataset.assembly;

            openModal(image, name, price, description, motor, speed, walking, display, incline, programs, weight, features, assembly);
        }

        function openModal(imageSrc, name, price, description, motor, speed, walkingarea, display, incline, programs, maxWeight, features, assembly) {
            document.getElementById('modalImage').src = imageSrc;
            document.getElementById('modalProductName').textContent = name;
            document.getElementById('modalProductPrice').textContent = price;
            document.getElementById('modalProductDescription').textContent = description;
            document.getElementById('modalProductMotor').textContent = motor;
            document.getElementById('modalProductSpeed').textContent = speed;
            document.getElementById('modalProductWalkingArea').textContent = walkingarea;
            document.getElementById('modalProductDisplay').textContent = display;
            document.getElementById('modalProductIncline').textContent = incline;
            document.getElementById('modalProductPrograms').textContent = programs;
            document.getElementById('modalProductWeight').textContent = maxWeight;
            document.getElementById('modalProductFeatures').textContent = features;
            document.getElementById('modalProductAssembly').textContent = assembly;

            document.getElementById('imageModal').style.display = 'block';
            document.body.style.overflow = 'hidden';
        }

        function closeModal() {
            document.getElementById('imageModal').style.display = 'none';
            document.body.style.overflow = 'auto';
        }

        window.onclick = function (event) {
            const modal = document.getElementById('imageModal');
            if (event.target === modal) {
                closeModal();
            }
        };
    </script>
 

 <script>
    let currentProduct = {};

    function openQuoteForm(productName, productPrice, productImage) {
        let imageUrl = '';

        try {
            // Try to parse if it's a JSON array (from image gallery)
            const images = JSON.parse(productImage);
            if (Array.isArray(images) && images.length > 0) {
                imageUrl = images[0]; // use first image
            } else {
                imageUrl = productImage;
            }
        } catch (e) {
            // Not JSON - treat as direct string
            imageUrl = productImage;
        }

        // If image is a relative path, convert it to full URL
        if (!/^https?:\/\//i.test(imageUrl)) {
            const origin = window.location.origin;
            imageUrl = origin + '/' + imageUrl.replace(/^\/+/, '');
        }

        // Save product details
        currentProduct = {
            name: productName,
            price: productPrice,
            image: imageUrl
        };

        // Populate form fields
        document.getElementById('quoteProductName').value = productName;
        document.getElementById('quoteProductPrice').value = productPrice;
        document.getElementById('quoteProductImage').value = imageUrl;

        // Show quote modal
        document.getElementById('quoteForm').style.display = 'block';
        document.getElementById('quoteSuccess').style.display = 'none';
        document.getElementById('quoteModal').style.display = 'block';
        document.body.style.overflow = 'hidden';
    }

    function closeQuoteModal() {
        document.getElementById('quoteModal').style.display = 'none';
        document.body.style.overflow = 'auto';
    }

 function submitQuoteForm(event) {
    event.preventDefault();

    // Show success UI immediately
    document.getElementById('quoteForm').style.display = 'none';
    document.getElementById('quoteSuccess').style.display = 'block';

    const formData = {
        productName: document.getElementById('quoteProductName').value,
        productPrice: document.getElementById('quoteProductPrice').value,
        productImage: document.getElementById('quoteProductImage').value,
        name: document.getElementById('quoteName').value,
        phone: document.getElementById('quotePhone').value,
        city: document.getElementById('quoteCity').value,
        message: document.getElementById('quoteMessage').value
    };

    // Clear form fields immediately (optional)
    document.getElementById('quoteForm').reset();

    // Send data in background
    fetch('quote.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(formData)
        })
        .then(response => response.text())
        .then(result => {
            console.log('Quote submitted:', result);
            // You can keep or remove this part now, since UI already updated
        })
        .catch(error => {
            console.error('Error submitting quote:', error);
            alert("Failed to submit quote. Please try again.");
        });
}
</script>
<script>
function searchProducts(query) {
    const resultsBox = document.getElementById("navSearchResults");

    if (query.trim().length < 1) {
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
                    li.style.display = 'flex';
                    li.style.alignItems = 'center';
                    li.style.cursor = 'pointer';
                    li.style.padding = '5px';

                    li.onclick = () => window.location.href = `viewProduct.php?id=${item.id}`;

                    const img = document.createElement('img');
                    img.src = item.image;
                    img.alt = item.name;
                    img.style.width = '100px';
                    img.style.height = '100px';
                    img.style.objectFit = 'cover';
                    img.style.marginRight = '10px';

                    const nameSpan = document.createElement('span');
                    nameSpan.textContent = item.name;

                    li.appendChild(img);
                    li.appendChild(nameSpan);
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