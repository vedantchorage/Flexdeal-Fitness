<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fitness Equipment Shop | MaxPro Fitness</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Montserrat:wght@700;800&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --primary: #2b6cb0;
            --secondary: #3182ce;
            --accent: #4299e1;
            --dark: #2d3748;
            --light: #f7fafc;
            --gray: #718096;
            --light-gray: #e2e8f0;
            --success: #48bb78;
            --warning: #ed8936;
            --danger: #f56565;
            --border-radius: 12px;
            --box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
            --transition: all 0.3s ease;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: var(--dark);
            background-color: var(--light);
            line-height: 1.6;
        }


        /* Breadcrumb */
        .breadcrumb {
            padding: 1rem 5%;
            background: var(--light-gray);
            font-size: 0.9rem;
        }

        .breadcrumb a {
            color: var(--gray);
            text-decoration: none;
            transition: var(--transition);
        }

        .breadcrumb a:hover {
            color: var(--primary);
        }

        .breadcrumb span {
            margin: 0 0.5rem;
            color: var(--gray);
        }

        /* Product Detail Section */
        .product-detail {
            max-width: 1400px;
            margin: 3rem auto;
            padding: 0 5%;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 3rem;
        }

        .product-gallery {
            display: grid;
            grid-template-columns: 100px 1fr;
            gap: 1rem;
        }

        .thumbnail-container {
            display: flex;
            flex-direction: column;
            gap: 1rem;
        }

        .thumbnail {
            width: 100%;
            height: 80px;
            border: 1px solid var(--light-gray);
            border-radius: var(--border-radius);
            overflow: hidden;
            cursor: pointer;
            transition: var(--transition);
        }

        .thumbnail:hover {
            border-color: var(--primary);
        }

        .thumbnail img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .main-image {
            width: 100%;
            height: 500px;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--box-shadow);
            position: relative;
        }

        .main-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: var(--transition);
        }

        .zoom-icon {
            position: absolute;
            bottom: 1rem;
            right: 1rem;
            background: rgba(255, 255, 255, 0.8);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
        }

        .zoom-icon:hover {
            background: white;
            transform: scale(1.1);
        }

        .product-info {
            padding: 1rem;
        }

        .product-category {
            color: var(--primary);
            font-weight: 600;
            margin-bottom: 0.5rem;
            text-transform: uppercase;
            font-size: 0.9rem;
            letter-spacing: 1px;
        }

        .product-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 2.5rem;
            margin-bottom: 1rem;
            color: var(--dark);
        }

        .product-rating {
            display: flex;
            align-items: center;
            gap: 0.5rem;
            margin-bottom: 1.5rem;
        }

        .stars {
            color: var(--warning);
        }

        .review-count {
            color: var(--gray);
            font-size: 0.9rem;
        }

        .product-price {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1.5rem;
        }

        .current-price {
            font-size: 2rem;
            font-weight: 700;
            color: var(--primary);
        }

        .original-price {
            font-size: 1.2rem;
            color: var(--gray);
            text-decoration: line-through;
        }

        .discount {
            background: var(--danger);
            color: white;
            padding: 0.2rem 0.5rem;
            border-radius: 4px;
            font-size: 0.9rem;
            font-weight: 600;
        }

        .product-description {
            margin-bottom: 2rem;
            color: var(--gray);
            line-height: 1.7;
        }

        .features-list {
            margin-bottom: 2rem;
        }

        .features-list li {
            margin-bottom: 0.8rem;
            display: flex;
            align-items: flex-start;
            gap: 0.5rem;
        }

        .features-list i {
            color: var(--success);
            margin-top: 0.2rem;
        }

        .color-options {
            margin-bottom: 2rem;
        }

        .option-title {
            font-weight: 600;
            margin-bottom: 0.8rem;
        }

        .colors {
            display: flex;
            gap: 0.8rem;
        }

        .color {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            border: 2px solid transparent;
            cursor: pointer;
            transition: var(--transition);
        }

        .color:hover {
            transform: scale(1.1);
        }

        .color.selected {
            border-color: var(--primary);
        }

        .size-options {
            margin-bottom: 2rem;
        }

        .sizes {
            display: flex;
            gap: 0.8rem;
        }

        .size {
            padding: 0.5rem 1rem;
            border: 1px solid var(--light-gray);
            border-radius: 4px;
            cursor: pointer;
            transition: var(--transition);
        }

        .size:hover {
            border-color: var(--primary);
            color: var(--primary);
        }

        .size.selected {
            background: var(--primary);
            color: white;
            border-color: var(--primary);
        }

        .quantity-selector {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .quantity-btn {
            width: 40px;
            height: 40px;
            border: 1px solid var(--light-gray);
            background: white;
            border-radius: 4px;
            font-size: 1.2rem;
            cursor: pointer;
            transition: var(--transition);
        }

        .quantity-btn:hover {
            background: var(--light-gray);
        }

        .quantity-input {
            width: 60px;
            height: 40px;
            text-align: center;
            border: 1px solid var(--light-gray);
            border-radius: 4px;
            font-size: 1rem;
            font-weight: 600;
        }

        .action-buttons {
            display: flex;
            gap: 1rem;
            margin-bottom: 2rem;
        }

        .btn {
            padding: 0.8rem 2rem;
            border-radius: var(--border-radius);
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            border: none;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .btn-primary {
            background: var(--primary);
            color: white;
            box-shadow: 0 4px 6px rgba(43, 108, 176, 0.3);
        }

        .btn-primary:hover {
            background: var(--secondary);
            transform: translateY(-2px);
            box-shadow: 0 6px 10px rgba(43, 108, 176, 0.4);
        }

        .btn-outline {
            background: white;
            color: var(--primary);
            border: 1px solid var(--primary);
        }

        .btn-outline:hover {
            background: var(--light);
            transform: translateY(-2px);
        }

        .wishlist-btn {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background: white;
            border: 1px solid var(--light-gray);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
        }

        .wishlist-btn:hover {
            color: var(--danger);
            border-color: var(--danger);
        }

        .delivery-info {
            background: var(--light);
            border-radius: var(--border-radius);
            padding: 1.5rem;
            margin-bottom: 2rem;
        }

        .delivery-item {
            display: flex;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .delivery-item:last-child {
            margin-bottom: 0;
        }

        .delivery-icon {
            color: var(--success);
            font-size: 1.2rem;
        }

        .share-buttons {
            display: flex;
            gap: 1rem;
        }

        .share-btn {
            width: 40px;
            height: 40px;
            border-radius: 50%;
            background: var(--light);
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: var(--transition);
        }

        .share-btn:hover {
            transform: translateY(-3px);
        }

        .facebook {
            color: #3b5998;
        }

        .twitter {
            color: #1da1f2;
        }

        .pinterest {
            color: #e60023;
        }

        /* Product Tabs */
        .product-tabs {
            max-width: 1400px;
            margin: 0 auto 5rem;
            padding: 0 5%;
        }

        .tabs-header {
            display: flex;
            border-bottom: 1px solid var(--light-gray);
            margin-bottom: 2rem;
        }

        .tab-btn {
            padding: 1rem 2rem;
            background: none;
            border: none;
            border-bottom: 3px solid transparent;
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            position: relative;
            color: var(--gray);
        }

        .tab-btn.active {
            color: var(--primary);
            border-bottom-color: var(--primary);
        }

        .tab-content {
            display: none;
            animation: fadeIn 0.5s ease;
        }

        .tab-content.active {
            display: block;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .specifications-table {
            width: 100%;
            border-collapse: collapse;
        }

        .specifications-table tr:nth-child(even) {
            background: var(--light);
        }

        .specifications-table th,
        .specifications-table td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid var(--light-gray);
        }

        .specifications-table th {
            width: 30%;
            color: var(--gray);
        }

        /* Related Products */
        .related-products {
            max-width: 1400px;
            margin: 0 auto 5rem;
            padding: 0 5%;
        }

        .section-title {
            font-family: 'Montserrat', sans-serif;
            font-size: 2rem;
            margin-bottom: 2rem;
            position: relative;
            padding-bottom: 0.5rem;
        }

        .section-title::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 80px;
            height: 4px;
            background: var(--primary);
            border-radius: 2px;
        }

        .products-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 2rem;
        }

        .product-card {
            background: white;
            border-radius: var(--border-radius);
            overflow: hidden;
            box-shadow: var(--box-shadow);
            transition: var(--transition);
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
        }

        .product-badge {
            position: absolute;
            top: 1rem;
            left: 1rem;
            background: var(--danger);
            color: white;
            padding: 0.3rem 0.8rem;
            border-radius: 30px;
            font-size: 0.8rem;
            font-weight: 600;
            z-index: 2;
        }

        .product-image {
            height: 220px;
            width: 100%;
            overflow: hidden;
            display: flex;
            align-items: center;
            justify-content: center;
            background: var(--light);
            position: relative;
        }

        .product-image img {
            max-width: 80%;
            max-height: 80%;
            object-fit: contain;
            transition: var(--transition);
        }

        .product-card:hover .product-image img {
            transform: scale(1.05);
        }

        .product-info {
            padding: 1.5rem;
        }

        .product-name {
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--dark);
        }

        .product-price {
            font-size: 1.3rem;
            font-weight: 700;
            color: var(--primary);
            margin-bottom: 1rem;
        }

        .add-to-cart {
            width: 100%;
            padding: 0.8rem;
            background: var(--primary);
            color: white;
            border: none;
            border-radius: var(--border-radius);
            font-weight: 600;
            cursor: pointer;
            transition: var(--transition);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 0.5rem;
        }

        .add-to-cart:hover {
            background: var(--secondary);
        }

        /* Footer */


        /* Responsive Design */
        @media (max-width: 1200px) {
            .product-detail {
                grid-template-columns: 1fr;
            }

            .product-gallery {
                grid-template-columns: 80px 1fr;
            }

            .main-image {
                height: 400px;
            }
        }

        @media (max-width: 768px) {
            header {
                padding: 1rem 5%;
            }

            .header-container {
                flex-wrap: wrap;
            }

            .logo {
                font-size: 1.5rem;
            }

            nav {
                order: 3;
                width: 100%;
                margin-top: 1rem;
            }

            nav ul {
                justify-content: center;
                flex-wrap: wrap;
            }

            .product-gallery {
                grid-template-columns: 1fr;
            }

            .thumbnail-container {
                flex-direction: row;
                order: 2;
            }

            .thumbnail {
                height: 60px;
                width: 60px;
            }

            .main-image {
                height: 300px;
                order: 1;
            }

            .action-buttons {
                flex-direction: column;
            }

            .btn {
                width: 100%;
            }

            .tabs-header {
                overflow-x: auto;
                white-space: nowrap;
                padding-bottom: 0.5rem;
            }

            .tab-btn {
                padding: 0.8rem 1.5rem;
            }
        }

        @media (max-width: 576px) {
            .product-title {
                font-size: 1.8rem;
            }

            .current-price {
                font-size: 1.5rem;
            }

            .original-price {
                font-size: 1rem;
            }

            .section-title {
                font-size: 1.5rem;
            }

            .products-grid {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .product-detail {
                grid-template-columns: 1fr;
            }

            .product-gallery {
                grid-template-columns: 80px 1fr;
            }

            .thumbnail-container {
                flex-direction: row;
                order: 2;
            }

            .thumbnail {
                height: 60px;
                width: 60px;
            }
        }

        /* Quote Popup Styles */
        .quote-popup {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 1000;
        }

        .quote-content {
            background: white;
            width: 90%;
            max-width: 500px;
            border-radius: var(--border-radius);
            padding: 2rem;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
            animation: fadeIn 0.3s ease;
        }

        .quote-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 1.5rem;
        }

        .quote-header h3 {
            font-size: 1.5rem;
            color: var(--primary);
        }

        .close-quote {
            font-size: 1.8rem;
            cursor: pointer;
            color: var(--gray);
            transition: var(--transition);
        }

        .close-quote:hover {
            color: var(--danger);
        }

        .form-group {
            margin-bottom: 1.2rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: var(--dark);
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid var(--light-gray);
            border-radius: var(--border-radius);
            font-family: 'Poppins', sans-serif;
            transition: var(--transition);
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 0 0 3px rgba(43, 108, 176, 0.2);
        }

        .form-group textarea {
            min-height: 100px;
            resize: vertical;
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
                <a href="index.html"><i class="fas fa-dumbbell"></i> MaxPro Fitness</a>
            </div>
            <nav>
                <ul id="main-nav">
                    <li><a href="index.html" class="active">Home</a></li>
                     <li><a href="about.html">About Us</a></li>
                    <li>
                        <a href="equipment.html">Gym Equipment <i class="fas fa-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="equipment.html#treadmills"><i class="fas fa-running"></i> Treadmills</a></li>



                            <!-- Image box section -->
                            <li class="dropdown-image-box">
                                <img src="https://www.powermaxfitness.net/uploads/thumb/800_600_1742298768_product_18032025172248.jpg"
                                    alt="Premium Gym Equipment">
                                <div class="dropdown-image-content">

                                    <a href="equipment.html" class="btn">Shop Equipment</a>
                                </div>
                            </li>

                            <li><a href="equipment.html#ellipticals"><i class="fas fa-walking"></i> Ellipticals</a></li>
                            <li class="dropdown-image-box">
                                <img src="https://5.imimg.com/data5/YM/UI/MY-17243374/selection_014-500x500.png"
                                    alt="Premium Gym Equipment">
                                <div class="dropdown-image-content">

                                    <a href="equipment.html" class="btn">Shop Equipment</a>
                                </div>
                            </li>


                        </ul>
                    </li>
                    <li>
                        <a href="accessories.html">Accessories <i class="fas fa-chevron-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="accessories.html#dumbbells"><i class="fas fa-weight-hanging"></i> Dumbbells</a>
                            </li>
                            <li><a href="accessories.html#yoga"><i class="fas fa-spa"></i> Yoga Mats</a></li>
                            <li><a href="accessories.html#gloves"><i class="fas fa-hand-paper"></i> Workout Gloves</a>
                            </li>
                            <li><a href="accessories.html#bags"><i class="fas fa-shopping-bag"></i> Gym Bags</a></li>

                            <!-- Image box section for accessories -->
                            <!-- <li class="dropdown-image-box">
                                <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=400&w=600&ixlib=rb-1.2.1&q=80"
                                    alt="Fitness Accessories">
                                <div class="dropdown-image-content">

                                    <a href="accessories.html" class="btn">View Collection</a>
                                </div>
                            </li>
                            <li class="dropdown-image-box">
                                <img src="https://images.unsplash.com/photo-1571019613454-1cb2f99b2d8b?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=400&w=600&ixlib=rb-1.2.1&q=80"
                                    alt="Fitness Accessories">
                                <div class="dropdown-image-content">

                                    <a href="accessories.html" class="btn">View Collection</a> -->
                        </ul>
                    </li>
                   
                    <li><a href="shop.html">Shop</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    <div class="navbar-search">
     					<input type="text" id="navSearchInput" placeholder="Search Products..." oninput="searchProducts(this.value)">
     					<ul id="navSearchResults"></ul>
					</div>
                </ul>
                <div class="mobile-menu" id="mobile-menu">
                    <i class="fas fa-bars"></i>
                </div>
                <div class="cart-icon" id="cart-icon">
                    <i class="fas fa-shopping-cart"></i>
                    <span class="cart-count">0</span>
                </div>
            </nav>
        </div>
    </header>

    <!-- Breadcrumb Navigation -->
    <div class="breadcrumb">
        <div class="header-container">
            <a href="index.html">Home</a>
            <span>/</span>
            <a href="equipment.html">Gym Equipment</a>
            <span>/</span>
            <a href="#">Premium Treadmill</a>
        </div>
    </div>

    <!-- Product Detail Section -->
    <section class="product-detail">
        <div class="product-gallery">
            <div class="thumbnail-container">
                <div class="thumbnail">
                    <img src="https://welcarefitness.com/image/cache/catalog/T80Si%20MOTORIZED%20TREADMILL-1000x1000.jpg"
                        alt="Treadmill Thumbnail 1">
                </div>
                <div class="thumbnail">
                    <img src="https://welcarefitness.com/image/cache/catalog/T80Si%20MOTORIZED%20TREADMILL-1000x1000.jpg"
                        alt="Treadmill Thumbnail 2">
                </div>
                <div class="thumbnail">
                    <img src="https://welcarefitness.com/image/cache/catalog/WC%209999%20TREADMILL-1000x1000.jpg"
                        alt="Treadmill Thumbnail 3">
                </div>
                <div class="thumbnail">
                    <img src="https://welcarefitness.com/image/cache/catalog/WC9999%20TFT%20commercial%20treadmill-1000x1000.jpg"
                        alt="Treadmill Thumbnail 4">
                </div>
            </div>
            <div class="main-image">
                <img src="https://welcarefitness.com/image/cache/catalog/WC9966-1000x1000.jpg" alt="Premium Treadmill"
                    id="mainImage">
                <div class="zoom-icon">
                    <i class="fas fa-search-plus"></i>
                </div>
            </div>
        </div>

        <div class="product-info">
            <div class="product-category">Treadmills</div>
            <h1 class="product-title">Ezone TM-5000 Premium Treadmill</h1>
            <div class="product-rating">
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span class="review-count">(42 Reviews)</span>
            </div>
            <div class="product-price">
                <span class="current-price">₹54,999</span>
                <span class="original-price">₹64,999</span>
                <span class="discount">15% OFF</span>
            </div>
            <p class="product-description">
                The Ezone TM-5000 is a premium treadmill designed for serious runners and fitness enthusiasts. With a
                powerful 3.5HP motor, spacious running area, and advanced cushioning system, it provides a smooth and
                comfortable running experience that reduces joint impact.
            </p>
            <div class="features-list">
                <h3 class="option-title">Key Features:</h3>
                <ul>
                    <li><i class="fas fa-check"></i> 3.5HP DC motor with peak 5.0HP capacity</li>
                    <li><i class="fas fa-check"></i> 20" x 60" running surface with FlexDeck cushioning</li>
                    <li><i class="fas fa-check"></i> Speed range: 1-20 km/h with 1-touch controls</li>
                    <li><i class="fas fa-check"></i> 15 levels of power incline (automatic adjustment)</li>
                    <li><i class="fas fa-check"></i> 10" touchscreen display with Bluetooth connectivity</li>
                    <li><i class="fas fa-check"></i> 12 pre-set programs + 3 user-defined programs</li>
                    <li><i class="fas fa-check"></i> Max user weight: 150kg (330lbs)</li>
                </ul>
            </div>
            <div class="color-options">
                <h3 class="option-title">Color Options:</h3>
                <div class="colors">
                    <div class="color selected" style="background-color: #2c3e50;"></div>
                    <div class="color" style="background-color: #34495e;"></div>
                    <div class="color" style="background-color: #7f8c8d;"></div>
                </div>
            </div>
            <div class="quantity-selector">
                <h3 class="option-title">Quantity:</h3>
                <button class="quantity-btn minus">-</button>
                <input type="number" class="quantity-input" value="1" min="1">
                <button class="quantity-btn plus">+</button>
            </div>
            <div class="action-buttons">
                <button class="btn btn-primary">
                    <i class="fas fa-shopping-cart"></i> Get Quote
                </button>
                <!-- <button class="btn btn-outline">
                    <i class="fas fa-credit-card"></i> Buy Now
                </button> -->
            </div>
            <div class="wishlist-btn">
                <i class="far fa-heart"></i>
            </div>
            <div class="delivery-info">
                <div class="delivery-item">
                    <div class="delivery-icon">
                        <i class="fas fa-truck"></i>
                    </div>
                    <div>
                        <h4>Free Delivery</h4>
                        <p>Get free standard delivery on this item</p>
                    </div>
                </div>
                <div class="delivery-item">
                    <div class="delivery-icon">
                        <i class="fas fa-undo"></i>
                    </div>
                    <div>
                        <h4>30-Day Returns</h4>
                        <p>Easy returns within 30 days of purchase</p>
                    </div>
                </div>
                <div class="delivery-item">
                    <div class="delivery-icon">
                        <i class="fas fa-shield-alt"></i>
                    </div>
                    <div>
                        <h4>2-Year Warranty</h4>
                        <p>Manufacturer warranty on motor and parts</p>
                    </div>
                </div>
            </div>
            <div class="share-buttons">
                <span>Share:</span>
                <div class="share-btn facebook">
                    <i class="fab fa-facebook-f"></i>
                </div>
                <div class="share-btn twitter">
                    <i class="fab fa-twitter"></i>
                </div>
                <div class="share-btn pinterest">
                    <i class="fab fa-pinterest-p"></i>
                </div>
            </div>
        </div>
    </section>

    <!-- Product Tabs Section -->
    <section class="product-tabs">
        <div class="tabs-header">
            <button class="tab-btn active" data-tab="specifications">Specifications</button>
            <button class="tab-btn" data-tab="features">Features</button>
            <button class="tab-btn" data-tab="reviews">Reviews</button>
            <button class="tab-btn" data-tab="support">Support</button>
        </div>

        <div class="tab-content active" id="specifications">
            <table class="specifications-table">
                <tr>
                    <th>Motor</th>
                    <td>3.5HP DC (5.0HP peak) with continuous duty rating</td>
                </tr>
                <tr>
                    <th>Running Area</th>
                    <td>20" (W) x 60" (L) - Extra wide and long for comfortable running</td>
                </tr>
                <tr>
                    <th>Speed Range</th>
                    <td>1 - 20 km/h with 0.1 km/h increments</td>
                </tr>
                <tr>
                    <th>Incline</th>
                    <td>0% to 15% power incline with automatic adjustment</td>
                </tr>
                <tr>
                    <th>Display</th>
                    <td>10" full-color touchscreen with Bluetooth connectivity</td>
                </tr>
                <tr>
                    <th>Programs</th>
                    <td>12 pre-set programs + 3 user-defined programs</td>
                </tr>
                <tr>
                    <th>Heart Rate Monitoring</th>
                    <td>Wireless chest strap compatible, hand pulse sensors</td>
                </tr>
                <tr>
                    <th>Dimensions</th>
                    <td>85" L x 36" W x 58" H (Folded: 52" L x 36" W x 68" H)</td>
                </tr>
                <tr>
                    <th>Weight</th>
                    <td>125 kg (275 lbs)</td>
                </tr>
                <tr>
                    <th>Max User Weight</th>
                    <td>150 kg (330 lbs)</td>
                </tr>
                <tr>
                    <th>Warranty</th>
                    <td>2 years on motor and parts, 1 year labor</td>
                </tr>
            </table>
        </div>

        <div class="tab-content" id="features">
            <h3>Advanced Features</h3>
            <ul class="features-list">
                <li><i class="fas fa-check-circle"></i> <strong>FlexDeck Cushioning System</strong> - Reduces joint
                    impact by up to 40% compared to outdoor running</li>
                <li><i class="fas fa-check-circle"></i> <strong>QuickSpeed Controls</strong> - One-touch speed buttons
                    for instant pace changes</li>
                <li><i class="fas fa-check-circle"></i> <strong>Cooling Fans</strong> - Built-in dual fans with
                    adjustable speed</li>
                <li><i class="fas fa-check-circle"></i> <strong>Device Holder</strong> - Secure tablet/smartphone holder
                    with USB charging port</li>
                <li><i class="fas fa-check-circle"></i> <strong>Bluetooth Audio</strong> - Connect wireless headphones
                    or speakers</li>
                <li><i class="fas fa-check-circle"></i> <strong>Folding Design</strong> - Space-saving hydraulic folding
                    system with soft-drop mechanism</li>
                <li><i class="fas fa-check-circle"></i> <strong>Transport Wheels</strong> - Easy relocation with
                    heavy-duty wheels</li>
            </ul>

            <h3 style="margin-top: 2rem;">Included Accessories</h3>
            <ul class="features-list">
                <li><i class="fas fa-check-circle"></i> Wireless chest strap heart rate monitor</li>
                <li><i class="fas fa-check-circle"></i> Treadmill lubrication kit (4oz bottle + applicator)</li>
                <li><i class="fas fa-check-circle"></i> Assembly tools and hardware</li>
                <li><i class="fas fa-check-circle"></i> Owner's manual with maintenance guide</li>
            </ul>
        </div>

        <div class="tab-content" id="reviews">
            <div class="review">
                <div class="review-header">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    <h4>Excellent Commercial-Grade Treadmill</h4>
                    <p class="review-meta">By Rajesh K. on March 15, 2023</p>
                </div>
                <div class="review-body">
                    <p>I've been using this treadmill for 3 months now and it's absolutely worth the investment. The
                        motor is powerful and quiet, the cushioning makes a noticeable difference on my knees, and the
                        large running surface is perfect for my long strides. The touchscreen interface is intuitive and
                        the Bluetooth connectivity works flawlessly with my fitness apps.</p>
                </div>
            </div>

            <div class="review" style="margin-top: 2rem;">
                <div class="review-header">
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                    <h4>Great but Heavy</h4>
                    <p class="review-meta">By Priya M. on February 28, 2023</p>
                </div>
                <div class="review-body">
                    <p>The treadmill performs exceptionally well - stable, quiet, and packed with features. My only
                        complaint is that it's very heavy (as expected for its quality) and was challenging to move
                        upstairs during delivery. The assembly took about 2 hours with two people. Once set up though,
                        it's been perfect for my daily runs.</p>
                </div>
            </div>

            <button class="btn btn-outline" style="margin-top: 2rem;">
                <i class="fas fa-pen"></i> Write a Review
            </button>
        </div>

        <div class="tab-content" id="support">
            <h3>Product Support</h3>
            <div class="delivery-info" style="margin-top: 1rem;">
                <div class="delivery-item">
                    <div class="delivery-icon">
                        <i class="fas fa-question-circle"></i>
                    </div>
                    <div>
                        <h4>FAQs</h4>
                        <p>Find answers to common questions about setup, maintenance, and troubleshooting</p>
                    </div>
                </div>
                <div class="delivery-item">
                    <div class="delivery-icon">
                        <i class="fas fa-file-pdf"></i>
                    </div>
                    <div>
                        <h4>Download Manual</h4>
                        <p>Get the complete user manual and maintenance guide in PDF format</p>
                    </div>
                </div>
                <div class="delivery-item">
                    <div class="delivery-icon">
                        <i class="fas fa-headset"></i>
                    </div>
                    <div>
                        <h4>Contact Support</h4>
                        <p>Our customer service team is available 7 days a week</p>
                    </div>
                </div>
            </div>

            <h3 style="margin-top: 2rem;">Service Centers</h3>
            <p>We have authorized service centers in all major cities across India. <a href="#"
                    style="color: var(--primary);">Find your nearest service center</a>.</p>
        </div>
    </section>

    <!-- Related Products Section -->
    <!-- <section class="related-products">
        <h2 class="section-title">You May Also Like</h2>
        <div class="products-grid"> -->
    <!-- Product 1 -->
    <!-- <div class="product-card">
                <span class="product-badge">Best Seller</span>
                <div class="product-image">
                    <img src="https://www.welcareindia.com/images/ezone-elliptical.jpg" alt="Elliptical Cross Trainer">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Ezone EC-700 Elliptical</h3>
                    <div class="product-price">₹42,999</div>
                    <button class="add-to-cart">
                        <i class="fas fa-shopping-cart"></i> Add to Cart
                    </button>
                </div>
            </div>
             -->
    <!-- Product 2 -->
    <!-- <div class="product-card">
                <div class="product-image">
                    <img src="https://www.welcareindia.com/images/ezone-tm-3000.jpg" alt="Treadmill TM-3000">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Ezone TM-3000 Treadmill</h3>
                    <div class="product-price">₹34,999</div>
                    <button class="add-to-cart">
                        <i class="fas fa-shopping-cart"></i> Add to Cart
                    </button>
                </div>
            </div>
             -->
    <!-- Product 3 -->
    <!-- <div class="product-card">
                <span class="product-badge">New</span>
                <div class="product-image">
                    <img src="https://www.welcareindia.com/images/ezone-bike.jpg" alt="Exercise Bike">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Ezone SB-500 Spin Bike</h3>
                    <div class="product-price">₹28,999</div>
                    <button class="add-to-cart">
                        <i class="fas fa-shopping-cart"></i> Add to Cart
                    </button>
                </div>
            </div> -->

    <!-- Product 4 -->
    <!-- <div class="product-card">
                <div class="product-image">
                    <img src="https://www.welcareindia.com/images/ezone-elliptical-2.jpg" alt="Elliptical Trainer">
                </div>
                <div class="product-info">
                    <h3 class="product-name">Ezone EC-400 Elliptical</h3>
                    <div class="product-price">₹36,499</div>
                    <button class="add-to-cart">
                        <i class="fas fa-shopping-cart"></i> Add to Cart
                    </button>
                </div>
            </div>
        </div>
    </section> -->

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-container">
                <div class="footer-about">
                    <a href="index.html" class="footer-logo"><i class="fas fa-dumbbell"></i> MaxPro Fitness</a>
                    <p>We're dedicated to providing premium fitness equipment and accessories to help you achieve your
                        health and wellness goals.</p>
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
                        <li><a href="index.html">Home</a></li>
                        <li><a href="equipment.html">Gym Equipment</a></li>
                        <li><a href="accessories.html">Accessories</a></li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                    </ul>
                </div>
                <div class="footer-links">
                    <h3>Customer Service</h3>
                    <ul>
                        <li><a href="#">My Account</a></li>
                        <li><a href="#">Order Tracking</a></li>
                        <li><a href="#">Wishlist</a></li>
                        <li><a href="#">Shipping Policy</a></li>
                        <li><a href="#">Returns & Exchanges</a></li>
                    </ul>
                </div>
                <div class="footer-contact">
                    <h3>Contact Us</h3>
                    <div class="contact-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>123 Fitness Street, Mumbai, Maharashtra 400001, India</div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-phone-alt"></i>
                        <div>+91 9876543210<br>+91 9876543211</div>
                    </div>
                    <div class="contact-item">
                        <i class="fas fa-envelope"></i>
                        <div>sales@maxprofitness.in<br>support@maxprofitness.in</div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                &copy; 2023 MaxPro Fitness. All Rights Reserved.
            </div>
        </div>
    </footer>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Update your existing thumbnail click handler
            const thumbnails = document.querySelectorAll('.thumbnail');
            const mainImage = document.getElementById('mainImage');

            thumbnails.forEach(thumb => {
                thumb.addEventListener('click', function () {
                    const imgSrc = this.querySelector('img').src;
                    mainImage.src = imgSrc;

                    // Update active thumbnail
                    thumbnails.forEach(t => t.classList.remove('selected'));
                    this.classList.add('selected');
                });
            });
            // Color selection
            const colors = document.querySelectorAll('.color');
            colors.forEach(color => {
                color.addEventListener('click', function () {
                    colors.forEach(c => c.classList.remove('selected'));
                    this.classList.add('selected');
                });
            });

            // Quantity selector
            const minusBtn = document.querySelector('.quantity-btn.minus');
            const plusBtn = document.querySelector('.quantity-btn.plus');
            const quantityInput = document.querySelector('.quantity-input');

            minusBtn.addEventListener('click', function () {
                let value = parseInt(quantityInput.value);
                if (value > 1) {
                    quantityInput.value = value - 1;
                }
            });

            plusBtn.addEventListener('click', function () {
                let value = parseInt(quantityInput.value);
                quantityInput.value = value + 1;
            });

            // Tab functionality
            const tabBtns = document.querySelectorAll('.tab-btn');
            const tabContents = document.querySelectorAll('.tab-content');

            tabBtns.forEach(btn => {
                btn.addEventListener('click', function () {
                    const tabId = this.getAttribute('data-tab');

                    // Update active tab button
                    tabBtns.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');

                    // Show corresponding content
                    tabContents.forEach(content => {
                        content.classList.remove('active');
                        if (content.id === tabId) {
                            content.classList.add('active');
                        }
                    });
                });
            });

            // Add to cart animation
            const addToCartBtns = document.querySelectorAll('.add-to-cart');
            const cartCount = document.querySelector('.cart-count');

            addToCartBtns.forEach(btn => {
                btn.addEventListener('click', function () {
                    let count = parseInt(cartCount.textContent);
                    count++;
                    cartCount.textContent = count;

                    // Animation
                    this.innerHTML = '<i class="fas fa-check"></i> Added!';
                    this.style.backgroundColor = '#48bb78';

                    setTimeout(() => {
                        this.innerHTML = '<i class="fas fa-shopping-cart"></i> Add to Cart';
                        this.style.backgroundColor = '';
                    }, 2000);
                });
            });

            // Wishlist button
            const wishlistBtn = document.querySelector('.wishlist-btn');
            wishlistBtn.addEventListener('click', function () {
                const icon = this.querySelector('i');
                if (icon.classList.contains('far')) {
                    icon.classList.remove('far');
                    icon.classList.add('fas');
                    icon.style.color = '#f56565';
                } else {
                    icon.classList.remove('fas');
                    icon.classList.add('far');
                    icon.style.color = '';
                }
            });
        });


        // Add this to your existing JavaScript in shop.html
        document.addEventListener('DOMContentLoaded', function () {
            // Get product parameter from URL
            const urlParams = new URLSearchParams(window.location.search);
            const productParam = urlParams.get('product');

            // Define product data
            const products = {
                't80si': {
                    name: "T80Si COMMERCIAL TREADMILL",
                    category: "Commercial Treadmills",
                    price: "₹400,000",
                    originalPrice: "₹450,000",
                    discount: "11% OFF",
                    description: "The T80Si is a commercial-grade treadmill designed for heavy use in gyms and fitness centers. With a powerful 4.0HP motor and spacious running area, it provides a smooth and comfortable running experience.",
                    features: [
                        "4.0HP DC motor with peak 5.5HP capacity",
                        "22\" x 60\" running surface with ProDeck cushioning",
                        "Speed range: 1-22 km/h with quick-touch controls",
                        "15 levels of power incline (automatic adjustment)",
                        "12\" touchscreen display with WiFi connectivity",
                        "20 pre-set programs + 5 user-defined programs",
                        "Max user weight: 180kg (400lbs)"
                    ],
                    images: [
                        "https://welcarefitness.com/image/cache/catalog/T80Si%20MOTORIZED%20TREADMILL-1000x1000.jpg",
                        "https://welcarefitness.com/image/cache/catalog/T80Si%20MOTORIZED%20TREADMILL-1000x1000.jpg",
                        "https://welcarefitness.com/image/cache/catalog/WC%209999%20TREADMILL-1000x1000.jpg",
                        "https://welcarefitness.com/image/cache/catalog/WC9999%20TFT%20commercial%20treadmill-1000x1000.jpg"
                    ]
                },
                'wc9999': {
                    name: "WC9999 SMART TREADMILL",
                    category: "Smart Treadmills",
                    price: "₹400,000",
                    originalPrice: "₹480,000",
                    discount: "17% OFF",
                    description: "The WC9999 Smart Treadmill features advanced connectivity and interactive training programs for a personalized workout experience.",
                    features: [
                        "3.5HP DC motor with peak 5.0HP capacity",
                        "20\" x 60\" running surface with FlexDeck cushioning",
                        "10\" touchscreen with streaming capabilities",
                        "Bluetooth heart rate monitoring",
                        "Virtual running routes with Google Maps integration",
                        "Max user weight: 150kg (330lbs)"
                    ],
                    images: [
                        "https://welcarefitness.com/image/cache/catalog/WC%209999%20TREADMILL-1000x1000.jpg",
                        "https://welcarefitness.com/image/cache/catalog/WC9999%20TFT%20commercial%20treadmill-1000x1000.jpg",
                        "https://welcarefitness.com/image/cache/catalog/T80Si%20MOTORIZED%20TREADMILL-1000x1000.jpg",
                        "https://welcarefitness.com/image/cache/catalog/WC9966-1000x1000.jpg"
                    ]
                },


            };






            // If a product parameter exists, load that product
            if (productParam && products[productParam]) {
                const product = products[productParam];

                // Update product details
                document.querySelector('.product-category').textContent = product.category;
                document.querySelector('.product-title').textContent = product.name;
                document.querySelector('.current-price').textContent = product.price;
                document.querySelector('.original-price').textContent = product.originalPrice;
                document.querySelector('.discount').textContent = product.discount;
                document.querySelector('.product-description').textContent = product.description;

                // Update features list
                const featuresList = document.querySelector('.features-list ul');
                featuresList.innerHTML = '';
                product.features.forEach(feature => {
                    featuresList.innerHTML += `<li><i class="fas fa-check"></i> ${feature}</li>`;
                });

                // Update images
                const thumbnails = document.querySelectorAll('.thumbnail img');
                const mainImage = document.getElementById('mainImage');

                // Set main image
                mainImage.src = product.images[0];

                // Set thumbnails
                product.images.forEach((img, index) => {
                    if (thumbnails[index]) {
                        thumbnails[index].src = img;
                        thumbnails[index].alt = product.name + ' ' + (index + 1);
                    }
                });
            }

            // Rest of your existing JavaScript...
        });
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Product data - expand this with all your products
            const products = {
                't80si': {
                    name: "T80Si COMMERCIAL TREADMILL",
                    category: "Commercial Treadmills",
                    price: "₹400,000",
                    originalPrice: "₹450,000",
                    discount: "11% OFF",
                    description: "The T80Si is a commercial-grade treadmill designed for heavy use in gyms and fitness centers. With a powerful 4.0HP motor and spacious running area, it provides a smooth and comfortable running experience.",
                    features: [
                        "4.0HP DC motor with peak 5.5HP capacity",
                        "22\" x 60\" running surface with ProDeck cushioning",
                        "Speed range: 1-22 km/h with quick-touch controls",
                        "15 levels of power incline (automatic adjustment)",
                        "12\" touchscreen display with WiFi connectivity",
                        "20 pre-set programs + 5 user-defined programs",
                        "Max user weight: 180kg (400lbs)"
                    ],
                    images: [
                        "https://welcarefitness.com/image/cache/catalog/T80Si%20MOTORIZED%20TREADMILL-1000x1000.jpg",
                        "https://welcarefitness.com/image/cache/catalog/T80Si%20MOTORIZED%20TREADMILL-1000x1000.jpg",
                        "https://welcarefitness.com/image/cache/catalog/WC%209999%20TREADMILL-1000x1000.jpg",
                        "https://welcarefitness.com/image/cache/catalog/WC9999%20TFT%20commercial%20treadmill-1000x1000.jpg"
                    ],
                    specifications: [
                        { name: "Motor", value: "4.0HP DC (5.5HP peak) with continuous duty rating" },
                        { name: "Running Area", value: "22\" (W) x 60\" (L) - Extra wide and long for comfortable running" },
                        { name: "Speed Range", value: "1 - 22 km/h with 0.1 km/h increments" },
                        { name: "Incline", value: "0% to 15% power incline with automatic adjustment" },
                        { name: "Display", value: "12\" full-color touchscreen with WiFi connectivity" },
                        { name: "Programs", value: "20 pre-set programs + 5 user-defined programs" },
                        { name: "Dimensions", value: "88\" L x 38\" W x 60\" H (Folded: 54\" L x 38\" W x 70\" H)" },
                        { name: "Weight", value: "140 kg (308 lbs)" },
                        { name: "Max User Weight", value: "180 kg (400 lbs)" },
                        { name: "Warranty", value: "3 years on motor and parts, 2 years labor" }
                    ],
                    reviews: [
                        {
                            rating: 5,
                            author: "Rajesh K.",
                            date: "March 15, 2023",
                            title: "Excellent Commercial-Grade Treadmill",
                            content: "I've been using this treadmill for 3 months now and it's absolutely worth the investment. The motor is powerful and quiet, the cushioning makes a noticeable difference on my knees, and the large running surface is perfect for my long strides."
                        },
                        {
                            rating: 4,
                            author: "Priya M.",
                            date: "February 28, 2023",
                            title: "Great but Heavy",
                            content: "The treadmill performs exceptionally well - stable, quiet, and packed with features. My only complaint is that it's very heavy (as expected for its quality) and was challenging to move upstairs during delivery."
                        }
                    ]
                },
                'wc9999': {
                    name: "WC9999 SMART TREADMILL",
                    category: "Smart Treadmills",
                    price: "₹200,000",
                    originalPrice: "₹240,000",
                    discount: "17% OFF",
                    description: "The WC9999 Smart Treadmill features advanced connectivity and interactive training programs for a personalized workout experience with Google Maps integration.",
                    features: [
                        "3.5HP DC motor with peak 5.0HP capacity",
                        "20\" x 60\" running surface with FlexDeck cushioning",
                        "10\" touchscreen with streaming capabilities",
                        "Bluetooth heart rate monitoring",
                        "Virtual running routes with Google Maps integration",
                        "Max user weight: 150kg (330lbs)"
                    ],
                    images: [
                        "https://welcarefitness.com/image/cache/catalog/WC%209999%20TREADMILL-1000x1000.jpg",
                        "https://welcarefitness.com/image/cache/catalog/WC9999%20TFT%20commercial%20treadmill-1000x1000.jpg",
                        "https://welcarefitness.com/image/cache/catalog/T80Si%20MOTORIZED%20TREADMILL-1000x1000.jpg",
                        "https://welcarefitness.com/image/cache/catalog/WC9966-1000x1000.jpg"
                    ],
                    specifications: [
                        { name: "Motor", value: "3.5HP DC (5.0HP peak) with continuous duty rating" },
                        { name: "Running Area", value: "20\" (W) x 60\" (L) - Extra wide and long for comfortable running" },
                        { name: "Speed Range", value: "1 - 20 km/h with 0.1 km/h increments" },
                        { name: "Incline", value: "0% to 15% power incline with automatic adjustment" },
                        { name: "Display", value: "10\" full-color touchscreen with Bluetooth connectivity" },
                        { name: "Programs", value: "12 pre-set programs + 3 user-defined programs" },
                        { name: "Dimensions", value: "85\" L x 36\" W x 58\" H (Folded: 52\" L x 36\" W x 68\" H)" },
                        { name: "Weight", value: "125 kg (275 lbs)" },
                        { name: "Max User Weight", value: "150 kg (330 lbs)" },
                        { name: "Warranty", value: "2 years on motor and parts, 1 year labor" }
                    ],
                    reviews: [
                        {
                            rating: 5,
                            author: "Amit S.",
                            date: "April 5, 2023",
                            title: "Best Smart Treadmill Experience",
                            content: "The Google Maps integration is game-changing! I can run through virtual routes of my favorite places around the world. The display is crystal clear and the motor is surprisingly quiet."
                        },
                        {
                            rating: 4,
                            author: "Neha P.",
                            date: "March 22, 2023",
                            title: "Great Features, Easy Assembly",
                            content: "Setup was straightforward with the included instructions. The streaming capabilities work perfectly with my fitness apps. Only minor complaint is the fan could be stronger."
                        }
                    ]
                },
                'wc9966': {
                    name: "WC9966 MOTORIZED TREADMILL",
                    category: "Home Treadmills",
                    price: "₹50,000",
                    originalPrice: "₹65,000",
                    discount: "23% OFF",
                    description: "The WC9966 is a perfect home treadmill with a compact design that doesn't compromise on features. Ideal for walking and light jogging.",
                    features: [
                        "2.5HP DC motor with peak 3.5HP capacity",
                        "18\" x 50\" running surface with ComfortDeck cushioning",
                        "Speed range: 1-14 km/h with quick-touch controls",
                        "Manual incline adjustment (3 positions)",
                        "5\" LCD display with basic metrics",
                        "12 pre-set programs",
                        "Max user weight: 120kg (265lbs)"
                    ],
                    images: [
                        "https://welcarefitness.com/image/cache/catalog/WC9966-1000x1000.jpg",
                        "https://welcarefitness.com/image/cache/catalog/WC9966-1000x1000.jpg",
                        "https://welcarefitness.com/image/cache/catalog/WC%209999%20TREADMILL-1000x1000.jpg",
                        "https://welcarefitness.com/image/cache/catalog/WC9999%20TFT%20commercial%20treadmill-1000x1000.jpg"
                    ],
                    specifications: [
                        { name: "Motor", value: "2.5HP DC (3.5HP peak)" },
                        { name: "Running Area", value: "18\" (W) x 50\" (L)" },
                        { name: "Speed Range", value: "1 - 14 km/h" },
                        { name: "Incline", value: "Manual 3-position incline" },
                        { name: "Display", value: "5\" LCD with basic metrics" },
                        { name: "Programs", value: "12 pre-set programs" },
                        { name: "Dimensions", value: "70\" L x 32\" W x 54\" H (Folded: 42\" L x 32\" W x 62\" H)" },
                        { name: "Weight", value: "85 kg (187 lbs)" },
                        { name: "Max User Weight", value: "120 kg (265 lbs)" },
                        { name: "Warranty", value: "1 year on motor and parts" }
                    ],
                    reviews: [
                        {
                            rating: 4,
                            author: "Vikram J.",
                            date: "May 10, 2023",
                            title: "Great Value for Home Use",
                            content: "Perfect for my daily walks and occasional jogs. The compact size fits well in my apartment and the folding mechanism works smoothly."
                        },
                        {
                            rating: 5,
                            author: "Sunita R.",
                            date: "April 28, 2023",
                            title: "Excellent Beginner Treadmill",
                            content: "As someone new to home fitness, this treadmill has been perfect. Easy to use, doesn't take up too much space, and has all the basic features I need."
                        }
                    ]
                }
            };

            // Get product parameter from URL
            const urlParams = new URLSearchParams(window.location.search);
            const productParam = urlParams.get('product');

            // If a product parameter exists and it's in our products data, load that product
            if (productParam && products[productParam]) {
                const product = products[productParam];

                // Update breadcrumb
                document.querySelector('.breadcrumb a:last-child').textContent = product.name;

                // Update product details
                document.querySelector('.product-category').textContent = product.category;
                document.querySelector('.product-title').textContent = product.name;
                document.querySelector('.current-price').textContent = product.price;
                document.querySelector('.original-price').textContent = product.originalPrice;
                document.querySelector('.discount').textContent = product.discount;
                document.querySelector('.product-description').textContent = product.description;

                // Update features list
                const featuresList = document.querySelector('.features-list ul');
                featuresList.innerHTML = '';
                product.features.forEach(feature => {
                    featuresList.innerHTML += `<li><i class="fas fa-check"></i> ${feature}</li>`;
                });

                // Update images
                const thumbnails = document.querySelectorAll('.thumbnail img');
                const mainImage = document.getElementById('mainImage');

                // Set main image
                mainImage.src = product.images[0];
                mainImage.alt = product.name;

                // Set thumbnails
                product.images.forEach((img, index) => {
                    if (thumbnails[index]) {
                        thumbnails[index].src = img;
                        thumbnails[index].alt = `${product.name} ${index + 1}`;
                    }
                });

                // Update specifications tab
                const specsTable = document.querySelector('.specifications-table');
                specsTable.innerHTML = '';
                product.specifications.forEach(spec => {
                    specsTable.innerHTML += `
                    <tr>
                        <th>${spec.name}</th>
                        <td>${spec.value}</td>
                    </tr>
                `;
                });

                // Update reviews tab
                const reviewsTab = document.getElementById('reviews');
                reviewsTab.innerHTML = `
                <h3>Customer Reviews</h3>
                ${product.reviews.map(review => `
                    <div class="review" style="margin-bottom: 2rem;">
                        <div class="review-header">
                            <div class="stars">
                                ${'<i class="fas fa-star"></i>'.repeat(review.rating)}
                                ${review.rating % 1 !== 0 ? '<i class="fas fa-star-half-alt"></i>' : ''}
                                ${'<i class="far fa-star"></i>'.repeat(5 - Math.ceil(review.rating))}
                            </div>
                            <h4>${review.title}</h4>
                            <p class="review-meta">By ${review.author} on ${review.date}</p>
                        </div>
                        <div class="review-body">
                            <p>${review.content}</p>
                        </div>
                    </div>
                `).join('')}
                <button class="btn btn-outline" style="margin-top: 2rem;">
                    <i class="fas fa-pen"></i> Write a Review
                </button>
            `;
            }

            // Thumbnail click handler
            const thumbnails = document.querySelectorAll('.thumbnail');
            const mainImage = document.getElementById('mainImage');

            thumbnails.forEach(thumb => {
                thumb.addEventListener('click', function () {
                    const imgSrc = this.querySelector('img').src;
                    mainImage.src = imgSrc;

                    // Update active thumbnail
                    thumbnails.forEach(t => t.classList.remove('selected'));
                    this.classList.add('selected');
                });
            });

            // Color selection
            const colors = document.querySelectorAll('.color');
            colors.forEach(color => {
                color.addEventListener('click', function () {
                    colors.forEach(c => c.classList.remove('selected'));
                    this.classList.add('selected');
                });
            });

            // Quantity selector
            const minusBtn = document.querySelector('.quantity-btn.minus');
            const plusBtn = document.querySelector('.quantity-btn.plus');
            const quantityInput = document.querySelector('.quantity-input');

            minusBtn.addEventListener('click', function () {
                let value = parseInt(quantityInput.value);
                if (value > 1) {
                    quantityInput.value = value - 1;
                }
            });

            plusBtn.addEventListener('click', function () {
                let value = parseInt(quantityInput.value);
                quantityInput.value = value + 1;
            });

            // Tab functionality
            const tabBtns = document.querySelectorAll('.tab-btn');
            const tabContents = document.querySelectorAll('.tab-content');

            tabBtns.forEach(btn => {
                btn.addEventListener('click', function () {
                    const tabId = this.getAttribute('data-tab');

                    // Update active tab button
                    tabBtns.forEach(b => b.classList.remove('active'));
                    this.classList.add('active');

                    // Show corresponding content
                    tabContents.forEach(content => {
                        content.classList.remove('active');
                        if (content.id === tabId) {
                            content.classList.add('active');
                        }
                    });
                });
            });

            // Add to cart animation
            const addToCartBtn = document.querySelector('.btn-primary');
            const cartCount = document.querySelector('.cart-count');

            addToCartBtn.addEventListener('click', function () {
                let count = parseInt(cartCount.textContent);
                count++;
                cartCount.textContent = count;

                // Animation
                this.innerHTML = '<i class="fas fa-check"></i> Quote Requested!';
                this.style.backgroundColor = '#48bb78';

                setTimeout(() => {
                    this.innerHTML = '<i class="fas fa-shopping-cart"></i> Get Quote';
                    this.style.backgroundColor = '';
                }, 2000);
            });

            // Wishlist button
            const wishlistBtn = document.querySelector('.wishlist-btn');
            wishlistBtn.addEventListener('click', function () {
                const icon = this.querySelector('i');
                if (icon.classList.contains('far')) {
                    icon.classList.remove('far');
                    icon.classList.add('fas');
                    icon.style.color = '#f56565';
                } else {
                    icon.classList.remove('fas');
                    icon.classList.add('far');
                    icon.style.color = '';
                }
            });

            // Zoom functionality
            const zoomIcon = document.querySelector('.zoom-icon');
            zoomIcon.addEventListener('click', function () {
                const mainImage = document.getElementById('mainImage');
                if (mainImage.style.transform === 'scale(1.5)') {
                    mainImage.style.transform = 'scale(1)';
                    zoomIcon.innerHTML = '<i class="fas fa-search-plus"></i>';
                } else {
                    mainImage.style.transform = 'scale(1.5)';
                    zoomIcon.innerHTML = '<i class="fas fa-search-minus"></i>';
                }
            });
        });
    </script>

    <script>
        // Add this to your existing JavaScript in shop.html
        document.querySelector('.btn-primary').addEventListener('click', function (e) {
            e.preventDefault();

            // Get product details
            const productName = document.querySelector('.product-title').textContent;
            const productPrice = document.querySelector('.current-price').textContent;
            const quantity = document.querySelector('.quantity-input').value;

            // Create a form for quote request
            const quoteForm = `
        <div class="quote-popup" id="quote-popup" style="display: flex;">
            <div class="quote-content">
                <div class="quote-header">
                    <h3>Request Quote for ${productName}</h3>
                    <span class="close-quote">&times;</span>
                </div>
                <form id="quote-form">
                    <input type="hidden" name="product" value="${productName}">
                    <input type="hidden" name="price" value="${productPrice}">
                    <input type="hidden" name="quantity" value="${quantity}">
                    
                    <div class="form-group">
                        <label for="quote-name">Full Name</label>
                        <input type="text" id="quote-name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="quote-email">Email</label>
                        <input type="email" id="quote-email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="quote-phone">Phone Number</label>
                        <input type="tel" id="quote-phone" name="phone" required>
                    </div>
                    <div class="form-group">
                        <label for="quote-message">Additional Requirements</label>
                        <textarea id="quote-message" name="message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-paper-plane"></i> Submit Quote Request
                    </button>
                </form>
            </div>
        </div>
    `;

            // Add to body
            document.body.insertAdjacentHTML('beforeend', quoteForm);

            // Close button functionality
            document.querySelector('.close-quote').addEventListener('click', function () {
                document.getElementById('quote-popup').remove();
            });

            // Form submission
            // document.getElementById('quote-form').addEventListener('submit', function (e) {
            //     e.preventDefault();

            //     // Here you would normally send the data to your server
            //     // For demonstration, we'll just show an alert
            //     alert(`Thank you for your quote request! Our team will contact you shortly about ${productName}.`);

            //     // Remove the popup
            //     document.getElementById('quote-popup').remove();

            //     // Update cart count
            //     let count = parseInt(document.querySelector('.cart-count').textContent);
            //     document.querySelector('.cart-count').textContent = count + 1;
            // });
            document.getElementById('quote-form').addEventListener('submit', function (e) {
                e.preventDefault();

                const productName = document.querySelector('input[name="product"]').value;

                alert(`Thank you for your quote request! Our team will contact you shortly about ${productName}.`);

                const formData = new FormData(this);

                // ✅ Send email
                fetch('quote.php', {
                    method: 'POST',
                    body: formData
                })
                    .then(response => response.text())
                    .then(result => {
                        console.log("PHP response:", result);
                    })
                    .catch(error => {
                        console.error("Error submitting quote:", error);
                    });

                // ✅ Send to WhatsApp
                // Get the phone number from the form (user input)
                let userNumber = formData.get("phone").trim();

                // Add +91 if it's missing
                if (userNumber.length === 10 && !userNumber.startsWith("91")) {
                    userNumber = "91" + userNumber;
                }

                // Owner number (hardcoded)
                const ownerNumber = "919022608002";

                // Create encoded WhatsApp message
                const whatsappMessage = encodeURIComponent(
                    `🛒 *New Quote Request*\n` +
                    `Product: ${formData.get("product")}\n` +
                    `Price: ${formData.get("price")}\n` +
                    `Quantity: ${formData.get("quantity")}\n` +
                    `Name: ${formData.get("name")}\n` +
                    `Email: ${formData.get("email")}\n` +
                    `Phone: ${userNumber}\n` +
                    `Message: ${formData.get("message")}`
                );

                // ✅ Send to owner
                window.open(`https://wa.me/${ownerNumber}?text=${whatsappMessage}`, '_blank');

                // ✅ Send to user (with formatted number)
                window.open(`https://wa.me/${userNumber}?text=${whatsappMessage}`, '_blank');



                // ✅ Close popup
                document.getElementById('quote-popup').remove();

                // ✅ Update cart count
                let count = parseInt(document.querySelector('.cart-count').textContent);
                document.querySelector('.cart-count').textContent = count + 1;
            });


            // Close when clicking outside
            document.getElementById('quote-popup').addEventListener('click', function (e) {
                if (e.target === this) {
                    this.remove();
                }
            });
        });
    </script>


    <script>


        // Insert the form into the DOM
        document.body.insertAdjacentHTML('beforeend', quoteForm);

        // Add event listener for form submission
        document.getElementById('quote-form').addEventListener('submit', async function (e) {
            e.preventDefault();

            // Get form data
            const form = e.target;
            const formData = new FormData(form);

            // Client-side validation
            const name = formData.get('rutuja');
            const email = formData.get('rutujar499@gmail.com');
            const phone = formData.get('9370207431');

            if (!name || name.trim() === '') {
                alert('Please enter your full name');
                return;
            }

            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
                alert('Please enter a valid email address');
                return;
            }

            if (!/^\d{10,15}$/.test(phone)) {
                alert('Please enter a valid phone number (10-15 digits)');
                return;
            }

            // Show loading state
            const submitBtn = form.querySelector('button[type="submit"]');
            const originalBtnText = submitBtn.innerHTML;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Sending...';
            submitBtn.disabled = true;

            try {
                // Send data to server
                const response = await fetch('send_quote.php', {
                    method: 'POST',
                    body: formData
                });

                const result = await response.json();

                if (response.ok && result.success) {
                    alert('Quote request sent successfully! We will contact you soon.');
                    document.getElementById('quote-popup').style.display = 'none';
                    form.reset();
                } else {
                    alert(result.message || 'Failed to send quote request. Please try again.');
                }
            } catch (error) {
                console.error('Error:', error);
                alert('An error occurred. Please try again later.');
            } finally {
                // Reset button state
                submitBtn.innerHTML = originalBtnText;
                submitBtn.disabled = false;
            }
        });
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
</body>

</html>