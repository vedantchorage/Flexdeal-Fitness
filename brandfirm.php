<?php
require 'db.php';

// Query for BenchAndRack products
$firmQuery = "SELECT * FROM products WHERE product_name like 'FM%'";
$firmResult = $pdo->query($firmQuery);
$firmProduct = $firmResult->fetchAll(PDO::FETCH_ASSOC);

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

<style>
     /* Responsive Enhancements */
        @media (max-width: 992px) {
            .header-container {
                flex-wrap: wrap;
                padding: 0 1rem;
                justify-content: space-between;
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
                border-bottom: 1px solid #eee;
                padding: 10px 20px;
            }

            .dropdown-menu,
            .mega-menu {
                position: static;
                background: #f9f9f9;
                width: 100%;
                box-shadow: none;
                display: none;
                padding: 10px 0;
            }

            #main-nav>li.active .dropdown-menu {
                display: block;
            }

            .search-box {
                width: 100%;
                margin-top: 10px;
            }

            .products-container {
                flex-direction: column;
                padding: 0;
            }

            .product-column {
                flex: 1 1 100%;
                max-width: 100%;
                margin-bottom: 2rem;
            }

            .footer-container {
                flex-direction: column;
                gap: 2rem;
            }
        }

        @media (max-width: 576px) {
            .product-image {
                height: 200px;
            }

            .product-info h3 {
                font-size: 1rem;
                height: auto;
            }

            .get-quote-btn {
                font-size: 0.85rem;
                padding: 10px 12px;
            }

            .action-icons a {
                width: 36px;
                height: 36px;
                font-size: 0.9rem;
            }

            .footer-about,
            .footer-links,
            .footer-contact {
                margin-bottom: 30px;
            }

            .section-header h2 {
                font-size: 1.5rem;
            }

            .section-header p {
                font-size: 0.95rem;
            }
        }

        /* Product Section Styles */
        .product-section {
            padding: 4rem 1rem;
            max-width: 1400px;
            margin: 0 auto;
            background: linear-gradient(to bottom, #f9f9f9 0%, #ffffff 100%);
        }

        .section-header {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-header h2 {
            font-size: 2.5rem;
            color: #2c3e50;
            margin-bottom: 0.5rem;
            font-weight: 800;
            position: relative;
            display: inline-block;
            padding-bottom: 15px;
        }

        .section-header h2:after {
            content: '';
            position: absolute;
            width: 80px;
            height: 4px;
            background: linear-gradient(90deg, #3498db, #e74c3c);
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            border-radius: 2px;
        }

        .section-header p {
            color: #7f8c8d;
            font-size: 1.15rem;
            max-width: 700px;
            margin: 0 auto;
            line-height: 1.6;
        }

        /* Products Container */
        .products-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
            padding: 20px;
            max-width: 1400px;
            margin: 0 auto;
        }

        /* Product Card */
        .product-card {
            background: #fff;
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
            transition: all 0.4s cubic-bezier(0.175, 0.885, 0.32, 1.275);
            position: relative;
            animation: fadeInUp 0.6s ease forwards;
            opacity: 0;
            transform: translateY(20px);
            border: 1px solid rgba(0, 0, 0, 0.05);
        }

        /* Animation Delay for Each Card */
        .product-card:nth-child(1) {
            animation-delay: 0.1s;
        }

        .product-card:nth-child(2) {
            animation-delay: 0.2s;
        }

        .product-card:nth-child(3) {
            animation-delay: 0.3s;
        }

        .product-card:nth-child(4) {
            animation-delay: 0.4s;
        }

        @keyframes fadeInUp {
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .product-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.12);
        }

        /* Product Badge */
        .product-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            background: linear-gradient(135deg, #ff6b6b, #e74c3c);
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: bold;
            z-index: 2;
            box-shadow: 0 3px 10px rgba(231, 76, 60, 0.3);
        }

        /* Product Image */
        .product-image {
            position: relative;
            height: 280px;
            overflow: hidden;
            cursor: pointer;
        }

        .product-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.5s ease;
        }

        .product-card:hover .product-image img {
            transform: scale(1.08);
        }

        .quick-view {
            position: absolute;
            bottom: -50px;
            left: 0;
            width: 100%;
            background: rgba(0, 0, 0, 0.8);
            color: white;
            text-align: center;
            padding: 12px;
            transition: all 0.3s ease;
            font-weight: 600;
            backdrop-filter: blur(5px);
        }

        .product-image:hover .quick-view {
            bottom: 0;
        }

        /* Product Info */
        .product-info {
            padding: 22px;
            position: relative;
        }

        .product-category {
            display: block;
            font-size: 13px;
            color: #666;
            margin-bottom: 5px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 500;
        }

        .product-info h3 {
            font-size: 1.1rem;
            margin: 8px 0 12px;
            color: #333;
            font-weight: 700;
            min-height: 44px;
            line-height: 1.4;
            transition: color 0.3s ease;
            white-space: nowrap;
            /* Prevent wrapping */
            overflow: visible;
            /* Allow overflow */
            text-overflow: clip;
            /* Don't show ellipsis */
            max-width: 100%;
            /* Use full width */
        }


        .product-card:hover .product-info h3 {
            color: #3498db;
        }

        .product-meta {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 15px;
        }

        .product-rating {
            color: #ffc107;
            font-size: 14px;
            display: flex;
            align-items: center;
        }

        .rating-count {
            color: #666;
            margin-left: 5px;
            font-size: 13px;
        }

        .product-stock {
            font-size: 12px;
            font-weight: bold;
            padding: 3px 8px;
            border-radius: 12px;
        }

        .in-stock {
            background-color: rgba(40, 167, 69, 0.15);
            color: #28a745;
        }

        .out-of-stock {
            background-color: rgba(220, 53, 69, 0.15);
            color: #dc3545;
        }

        /* Product Price */
        .product-price {
            margin: 18px 0;
            display: flex;
            align-items: center;
            flex-wrap: wrap;
        }

        .current-price {
            font-size: 1.4rem;
            font-weight: 800;
            color: #2c3e50;
            margin-right: 10px;
        }

        .original-price {
            font-size: 1rem;
            color: #999;
            text-decoration: line-through;
        }

        .discount-badge {
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
            color: #d63031;
            padding: 4px 10px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: bold;
            margin-left: 10px;
        }

        /* Product Actions */
        .product-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            gap: 10px;
        }

        .get-quote-btn {
            background: linear-gradient(135deg, #3498db, #2980b9);
            color: white;
            padding: 12px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            flex-grow: 1;
            text-align: center;
            box-shadow: 0 4px 15px rgba(52, 152, 219, 0.3);
            border: none;
            cursor: pointer;
            font-size: 14px;
        }

        .get-quote-btn:hover {
            background: linear-gradient(135deg, #2980b9, #3498db);
            transform: translateY(-3px);
            box-shadow: 0 7px 20px rgba(52, 152, 219, 0.4);
        }

        .action-icons {
            display: flex;
            gap: 8px;
        }

        .whatsapp-btn,
        .wishlist-btn {
            width: 42px;
            height: 42px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
            text-decoration: none;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .whatsapp-btn {
            background: linear-gradient(135deg, #25D366, #128C7E);
        }

        .whatsapp-btn:hover {
            transform: scale(1.1) rotate(5deg);
            box-shadow: 0 6px 15px rgba(37, 211, 102, 0.3);
        }

        .wishlist-btn {
            background: linear-gradient(135deg, #ff9a9e, #fad0c4);
            color: #d63031;
        }

        .wishlist-btn:hover {
            transform: scale(1.1);
            box-shadow: 0 6px 15px rgba(255, 154, 158, 0.3);
        }

        /* Responsive Design */
        @media (max-width: 1200px) {
            .products-container {
                grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            }
        }

        @media (max-width: 992px) {
            .products-container {
                grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
                gap: 25px;
            }

            .product-image {
                height: 240px;
            }

            .section-header h2 {
                font-size: 2.2rem;
            }
        }

        @media (max-width: 768px) {
            .products-container {
                grid-template-columns: repeat(auto-fill, minmax(220px, 1fr));
                gap: 20px;
            }

            .product-info h3 {
                font-size: 1rem;
                min-height: auto;
            }

            .current-price {
                font-size: 1.2rem;
            }

            .get-quote-btn {
                padding: 10px 15px;
                font-size: 13px;
            }
        }

        @media (max-width: 576px) {
            .products-container {
                grid-template-columns: repeat(2, 1fr);
                gap: 15px;
            }

            .section-header h2 {
                font-size: 1.8rem;
            }

            .product-image {
                height: 200px;
            }
        }

      @media (max-width: 400px) {
    .products-container {
        grid-template-columns: 1fr;
    }

    .product-actions {
        flex-direction: row;
        gap: 8px;
        align-items: center;
    }

    .get-quote-btn {
        flex: 1;
        width: auto;
        margin-bottom: 0;
        padding: 10px 12px;
        font-size: 13px;
    }

    .action-icons {
        display: flex;
        align-items: center;
        justify-content: flex-end;
        gap: 6px;
    }

    .action-icons a {
        width: 40px;
        height: 40px;
        font-size: 0.9rem;
    }
}


        
        /* Modal Styles */
        
        /* Modal Base - Prevent page scrolling */
        body.modal-open {
        overflow: hidden;
        position: fixed;
        width: 100%;
        }

        #imageModal {
        pointer-events: auto;
        display: none;
        position: fixed; 
        top: 0; 
        left: 0;
        width: 100%; 
        height: 100%;
        overflow: auto; /* Changed from overflow-y to overflow */
        background: rgba(0, 0, 0, 0.85);
        z-index: 1050;
        backdrop-filter: blur(8px);
        }

        /* Close Button */
        #imageModal .close {
        position: fixed; /* Changed from absolute to fixed */
        top: 15px; 
        right: 25px;
        font-size: 32px;
        color: white;
        cursor: pointer;
        transition: transform 0.2s;
        z-index: 1051;
        }

        #imageModal .close:hover {
        transform: scale(1.2);
        }

        /* Modal Content - Made bigger */
        #imageModal .modal-content {
        margin: 30px auto;
        background: white;
        padding: 30px;
        width: 95%;
        max-width: 1400px; /* Increased from 1200px */
        min-height: 90vh; /* Added minimum height */
        border-radius: 14px;
        box-shadow: 0 10px 35px rgba(0,0,0,0.25);
        }

        /* Row 1 Layout */
        #imageModal .modal-content .row1 {
        display: flex;
        gap: 40px;
        margin-bottom: 35px;
        flex-wrap: wrap;
        min-height: 70vh; /* Added minimum height */
        }

        /* Left Column */
        #imageModal .modal-content .left-column {
        flex: 1 1 500px; /* Increased from 400px */
        min-width: 0;
        }

        /* Image Container */
        #imageModal .image-container {
        display: flex;
        flex-direction: column;
        gap: 15px;
        height: 100%;
        }

        /* Main Image - Made bigger */
        #imageModal #modalMainImage {
        width: 100%;
        max-height: 600px; /* Increased from 450px */
        object-fit: contain;
        border: 1px solid #eee;
        border-radius: 10px;
        background: #f9f9f9;
        box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        /* Thumbnails */
        #imageModal #modalImageGallery {
        display: flex;
        gap: 12px;
        overflow-x: auto;
        padding-bottom: 8px;
        }

        #imageModal #modalImageGallery img {
        width: 90px; /* Increased from 80px */
        height: 90px; /* Increased from 80px */
        object-fit: cover;
        border-radius: 6px;
        cursor: pointer;
        border: 2px solid transparent;
        transition: all 0.2s;
        }

        #imageModal #modalImageGallery img:hover,
        #imageModal #modalImageGallery img.active {
        border-color: #007b00;
        transform: scale(1.05);
        }

        /* Right Column */
        #imageModal .modal-content .right-column {
        flex: 1 1 400px; /* Increased from 350px */
        min-width: 0;
        }

        #imageModal .modal-content h2 {
        font-size: 28px; /* Increased from 24px */
        margin-bottom: 15px; /* Increased from 10px */
        color: #222;
        }

        #imageModal .modal-content h4 {
        color: #007b00;
        margin-bottom: 20px; /* Increased from 15px */
        font-size: 22px; /* Increased from 19px */
        }

        #imageModal .modal-content p {
        font-size: 16.5px; /* Increased from 15.5px */
        color: #444;
        line-height: 1.7; /* Increased from 1.65 */
        margin-bottom: 12px; /* Increased from 8px */
        }

        /* Full Specs */
        #imageModal .modal-content .specs {
        border-top: 1px solid #eee;
        padding-top: 30px; /* Increased from 25px */
        margin-top: 25px; /* Increased from 20px */
        }

        #imageModal .modal-content .specs h5 {
        font-size: 22px; /* Increased from 19px */
        margin-bottom: 20px; /* Increased from 15px */
        color: #333;
        }

        /* Responsive Adjustments */
        @media (max-width: 992px) {
        #imageModal .modal-content {
            width: 97%; /* Increased from 95% */
            padding: 25px; /* Increased from 20px */
        }
        
        #imageModal .modal-content .row1 {
            gap: 35px; /* Increased from 30px */
        }
        }

        @media (max-width: 768px) {
        #imageModal .modal-content {
            margin: 20px auto; /* Changed from 40px */
            width: 98%; /* Increased from 97% */
        }
        
        #imageModal .modal-content .row1 {
            flex-direction: column;
            gap: 30px; /* Increased from 25px */
        }
        
        #imageModal #modalMainImage {
            max-height: 500px; /* Increased from 400px */
        }
        
        #imageModal .close {
            top: 10px;
            right: 20px; /* Increased from 15px */
            font-size: 30px; /* Increased from 28px */
        }
        }

        @media (max-width: 576px) {
        #imageModal .modal-content {
            padding: 20px; /* Increased from 15px */
        }
        
        #imageModal #modalMainImage {
            max-height: 400px; /* Increased from 350px */
        }
        
        #imageModal #modalImageGallery img {
            width: 80px; /* Increased from 70px */
            height: 80px; /* Increased from 70px */
        }
        }





        /* Quote Form Modal Styles */
        #quoteModal {
        pointer-events: auto;
        }
        /* .quote-modal {
            display: none;
            position: fixed;
            z-index: 1001 !important;;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            overflow: auto;
        } */

        .quote-modal .quote-modal-content {
            background-color: #fefefe;
            margin: 5% auto;
            padding: 30px;
            border-radius: 10px;
            width: 90%;
            max-width: 600px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            position: relative;
            z-index: 1110 !important;
        }

        .quote-close {
            position: absolute;
            top: 15px;
            right: 25px;
            color: #aaa;
            font-size: 28px;
            font-weight: bold;
            cursor: pointer;
        }

        .quote-close:hover {
            color: #e74c3c;
        }

        .quote-form h3 {
            margin-top: 0;
            color: #2c3e50;
            font-size: 1.5rem;
            text-align: center;
            margin-bottom: 1.5rem;
        }

        .quote-form .form-group {
            margin-bottom: 1.5rem;
        }

        .quote-form label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: #2c3e50;
        }

        .quote-form input,
        .quote-form textarea,
        .quote-form select {
            width: 100%;
            padding: 12px;
            border: 1px solid #ddd;
            border-radius: 6px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        .quote-form input:focus,
        .quote-form textarea:focus,
        .quote-form select:focus {
            border-color: #0943a1;
            outline: none;
        }

        .quote-form textarea {
            height: 120px;
            resize: vertical;
        }

        .quote-submit-btn {
            background: #0943a1;
            color: white;
            border: none;
            padding: 12px 20px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 1rem;
            font-weight: 600;
            width: 100%;
            transition: all 0.3s ease;
        }

        .quote-submit-btn:hover {
            background: #07307d;
        }

        .quote-success {
            display: none;
            text-align: center;
            padding: 20px;
        }

        .quote-success i {
            color: #2ecc71;
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .quote-success h3 {
            color: #2ecc71;
            margin-bottom: 1rem;
        }

        /* Cart Sidebar Styles */
        .cart-sidebar {
            position: fixed;
            top: 0;
            right: -400px;
            width: 400px;
            height: 100%;
            background: #fff;
            box-shadow: -5px 0 15px rgba(0, 0, 0, 0.1);
            transition: right 0.3s ease;
            z-index: 1002;
            overflow-y: auto;
        }

        .cart-sidebar.active {
            right: 0;
        }

        .cart-header {
            padding: 20px;
            border-bottom: 1px solid #eee;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .cart-header h3 {
            margin: 0;
            color: #2c3e50;
        }

        .cart-close {
            font-size: 1.5rem;
            cursor: pointer;
            color: #95a5a6;
        }

        .cart-close:hover {
            color: #e74c3c;
        }

        .cart-items {
            padding: 20px;
        }

        .cart-item {
            display: flex;
            margin-bottom: 20px;
            padding-bottom: 20px;
            border-bottom: 1px solid #eee;
        }

        .cart-item-img {
            width: 80px;
            height: 80px;
            object-fit: contain;
            margin-right: 15px;
            border: 1px solid #eee;
            border-radius: 5px;
        }

        .cart-item-details {
            flex: 1;
        }

        .cart-item-title {
            font-weight: 600;
            margin-bottom: 5px;
            color: #2c3e50;
        }

        .cart-item-price {
            color: #e74c3c;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .cart-item-remove {
            color: #95a5a6;
            font-size: 0.9rem;
            cursor: pointer;
        }

        .cart-item-remove:hover {
            color: #e74c3c;
        }

        .cart-total {
            padding: 20px;
            border-top: 1px solid #eee;
            text-align: right;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .cart-actions {
            padding: 0 20px 20px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .cart-checkout-btn,
        .cart-view-btn {
            padding: 12px;
            border-radius: 6px;
            font-weight: 600;
            text-align: center;
            cursor: pointer;
        }

        .cart-checkout-btn {
            background: #e74c3c;
            color: white;
            border: none;
        }

        .cart-view-btn {
            background: #f8f9fa;
            color: #2c3e50;
            border: 1px solid #ddd;
            text-decoration: none;
        }

        .cart-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 1001;
            display: none;
        }

        .cart-overlay.active {
            display: block;
        }

        /* Responsive Styles */
        @media (max-width: 1200px) {
            .products-container {
                flex-wrap: wrap;
            }

            .product-column {
                flex: 1 1 calc(50% - 1rem);
            }
        }

        @media (max-width: 768px) {
            .section-header h2 {
                font-size: 1.8rem;
            }

            .section-header p {
                font-size: 1rem;
            }

            .product-info h3 {
                font-size: 1.05rem;
                height: 3.6em;
            }

            .current-price {
                font-size: 1.2rem;
            }

            .product-column {
                flex: 1 1 100%;
            }

            .quote-modal-content {
                margin: 10% auto;
                width: 95%;
            }

            .cart-sidebar {
                width: 90%;
                right: -90%;
            }
        }

        @media (max-width: 576px) {
            .product-image {
                height: 220px;
            }

            .quote-modal-content {
                padding: 20px 15px;
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

    <!-- Bench and Rack -->
   
  <section class="product-section">
        <div class="section-header">
            <h2>Firm</h2>
            <!-- <p>Experience professional-grade running performance in the comfort of your home with our premium treadmill
                collection</p> -->
        </div> 

        <div class="products-container">
            <?php foreach ($firmProduct as $product): ?>
            <?php
                $imageArray = json_decode($product['image_paths'] ?? '', true);
                $imageArray = is_array($imageArray) ? $imageArray : [];

                // Check if image_url is set and NOT already in image_paths by filename
                $imageUrl = $product['image_url'] ?? '';
                $imageUrlFilename = basename(parse_url($imageUrl, PHP_URL_PATH));

                // If image_url is a valid URL and not already present, add it to the front
                if (!empty($imageUrl) && filter_var($imageUrl, FILTER_VALIDATE_URL)) {
                    $alreadyExists = false;
                    foreach ($imageArray as $img) {
                        if (basename($img) === $imageUrlFilename) {
                            $alreadyExists = true;
                            break;
                        }
                    }

                if (!empty($imageUrl) && !$alreadyExists) {
                        array_unshift($imageArray, $imageUrl);
                    }
                }

                // Map to actual paths
                $imageArrayWithPath = array_map(function ($img) {
                    return preg_match('/^https?:\/\//i', $img) ? $img : 'admin/' . ltrim($img, '/');
                }, $imageArray);

                // For HTML data attribute and main preview
                $allImagesJson = htmlspecialchars(json_encode($imageArrayWithPath), ENT_QUOTES, 'UTF-8');
                $mainImage = $imageArrayWithPath[0] ?? 'admin/placeholder.jpg';
            ?>
            <div class="product-card">
                <div class="product-badge">Best Seller</div> 
               
                <div class="product-image" data-images="<?= $allImagesJson ?>"
                    data-name="<?= htmlspecialchars($product['product_name'], ENT_QUOTES) ?>"
                    data-price="<?= htmlspecialchars($product['price'], ENT_QUOTES) ?>"
                    data-description="<?= htmlspecialchars(preg_replace('/\\s+/', ' ', $product['description']), ENT_QUOTES) ?>"
                    data-motor="<?= htmlspecialchars($product['Motor'], ENT_QUOTES) ?>"
                    data-speed="<?= htmlspecialchars($product['SpeedRange'], ENT_QUOTES) ?>"
                    data-walking="<?= htmlspecialchars($product['WalkingArea'], ENT_QUOTES) ?>"
                    data-display="<?= htmlspecialchars($product['DisplayReading'], ENT_QUOTES) ?>"
                    data-incline="<?= htmlspecialchars($product['Incline'], ENT_QUOTES) ?>"
                    data-programs="<?= htmlspecialchars($product['Programs'], ENT_QUOTES) ?>"
                    data-weight="<?= htmlspecialchars($product['MaxUserWeight'], ENT_QUOTES) ?>"
                    data-features="<?= htmlspecialchars($product['Features'], ENT_QUOTES) ?>"
                    data-assembly="<?= htmlspecialchars($product['Assemblyarea'], ENT_QUOTES) ?>"
                    onclick="handleQuickView(this)">

                    <img src="<?= htmlspecialchars($mainImage, ENT_QUOTES) ?>"
                        alt="<?= htmlspecialchars($product['product_name'], ENT_QUOTES) ?>">
                    <div class="quick-view">Quick View</div>
                </div>


                <div class="product-info">
                    <span class="product-category">Firm</span>
                    <h3>
                        <?= htmlspecialchars($product['product_name']) ?>
                    </h3>
                    <!-- <div class="product-meta">
                        <div class="product-rating">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                            <span class="rating-count">(24)</span>
                        </div>
                        <div class="product-stock in-stock">In Stock</div>
                    </div> -->
                    <div class="product-price">
                        <!-- <span class="current-price">₹
                            <?= number_format($product['price']) ?>
                        </span> -->
                        <!-- <span class="original-price">Rs.32,900.00</span>
                            <span class="discount-badge">15% OFF</span> -->
                    </div>
                    <div class="product-actions">
                        <a href="#" class="get-quote-btn" onclick="openQuoteForm('<?= htmlspecialchars($product['product_name']) ?>', 
                '₹<?= number_format($product['price']) ?>', 
                '<?= $allImagesJson ?>')">Get
                            Quote</a>
                        <div class="action-icons">
                             <a href="https://wa.me/917776090461?text=*Enquiry%20for%20<?= urlencode($product['product_name']) ?>*%0A%0A
            *Product%20Code:*%20<?= urlencode($product['product_code']) ?>%0A
            *Price:*%20₹<?= urlencode(number_format($product['price'])) ?>%0A%0A
            *Please%20provide%20below%20details:*%0A
            -%20Your%20Name%0A
            -%20Contact%20Number%0A
            -%20Delivery%20Address%0A
            -%20Quantity%20Required%0A
            -%20Any%20specific%20requirements%0A%0A
            *Thank%20you!*"
            class="whatsapp-btn" title="Contact on WhatsApp">
            <i class="fab fa-whatsapp"></i>
        </a>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
    </section>


    <!-- Image Modal -->
      <div id="imageModal" style="
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  overflow-y: auto;
  background: rgba(0,0,0,0.7);
  z-index: 1050;
">

  <span class="close" onclick="closeModal()"
        style="position: absolute; top: 10px; right: 20px; font-size: 30px; color: white; cursor: pointer;">
        &times;
  </span>

  <div class="modal-content"
       style="margin: 50px auto; background: white; padding: 20px;
              width: 95%; max-width: 1100px; border-radius: 8px; box-shadow: 0 8px 30px rgba(0,0,0,0.1);">

    <!-- Modal Inner Row -->
    <div style="display: flex; flex-wrap: wrap; gap: 30px; margin-bottom: 30px;">

      <!-- Left Column: Image + Thumbnails -->
      <div style="flex: 1 1 350px; display: flex;">
        <!-- Thumbnails -->
        <div style="width: 60px; overflow-y: auto; margin-right: 10px;">
          <div id="modalImageGallery" style="display: flex; flex-direction: column; gap: 10px;">
            <!-- Thumbnails inserted via JS -->
          </div>
        </div>

        <!-- Main Image -->
        <div style="flex: 1;">
          <img id="modalMainImage" src="" alt="Product Image"
               style="width: 100%; max-height: 400px; object-fit: contain; border: 1px solid #ccc; border-radius: 6px;">
        </div>
      </div>

      <!-- Right Column: Info -->
      <div style="flex: 1 1 450px; display: flex; flex-direction: column; justify-content: space-between;">
        <div>
          <h2 id="modalProductName" style="margin-bottom: 10px; font-size: 24px; color: #222;"></h2>
          <div id="modalStarRating" style="color: #f5a623; margin-bottom: 10px;">★★★★☆</div>
          <h4 id="modalProductPrice" style="color: #008000; margin-bottom: 15px; font-size: 20px;"></h4>

          <div style="margin-top: 15px; font-size: 14px; color: #444;">
            <p><strong>Motor:</strong> <span id="modalProductMotor"></span></p>
            <p><strong>Speed Range:</strong> <span id="modalProductSpeed"></span></p>
            <p><strong>Walking Area:</strong> <span id="modalProductWalkingArea"></span></p>
          </div>

          <div style="border-top: 1px solid #ddd; padding-top: 20px; font-size: 14px; color: #444;">
            <h5 style="margin-bottom: 15px; font-size: 16px; color: #222;">Full Specifications</h5>
            <p><strong>Display:</strong> <span id="modalProductDisplay"></span></p>
            <p><strong>Incline:</strong> <span id="modalProductIncline"></span></p>
            <p><strong>Programs:</strong> <span id="modalProductPrograms"></span></p>
            <p><strong>Max User Weight:</strong> <span id="modalProductWeight"></span></p>
            <p><strong>Features:</strong> <span id="modalProductFeatures"></span></p>
            <p><strong>Assembly Area:</strong> <span id="modalProductAssembly"></span></p>
          </div>
        </div>

        <div style="margin-top: 20px; display: flex; gap: 10px; flex-wrap: wrap;">
            <!-- <button onclick="openQuoteFromImageModal()" style="padding: 10px 20px; background: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;">
                Get Quote
            </button> -->
            <button onclick="openQuoteFromImageModal()" 
        style="padding: 10px 20px; background: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;">
            Get Quote
          </button>
          <a href="https://wa.me/917776090461?text=*Enquiry%20for%20<?= urlencode($product['product_name']) ?>*%0A%0A
            *Product%20Code:*%20<?= urlencode($product['product_code']) ?>%0A
            *Price:*%20₹<?= urlencode(number_format($product['price'])) ?>%0A%0A
            *Please%20provide%20below%20details:*%0A
            -%20Your%20Name%0A
            -%20Contact%20Number%0A
            -%20Delivery%20Address%0A
            -%20Quantity%20Required%0A
            -%20Any%20specific%20requirements%0A%0A
            *Thank%20you!*"
             style="padding: 10px 20px; background: #25D366; color: white; border: none; border-radius: 5px; text-decoration: none;">
             WhatsApp
          </a>
        </div>
      </div>
    </div>

    <!-- Bottom Section: Description -->
    <div style="margin-top: 10px;">
      <p id="modalProductDescription" style="font-size: 14px; color: #555; line-height: 1.5; margin-bottom: 0;"></p>
    </div>

  </div> <!-- /.modal-content -->
</div> <!-- /#imageModal -->


    <!-- Quote Form Modal -->
<div id="quoteModal" class="quote-modal"
    style="
  display: none;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: rgba(0,0,0,0.8);
  z-index: 9999;
">

        <div class="quote-modal-content" style="position: relative; z-index: 10000;">
            <span class="quote-close" onclick="closeQuoteModal()">&times;</span>
            <form id="quoteForm" class="quote-form" onsubmit="submitQuoteForm(event)">
                <h3>Request a Quote</h3>
                <input type="hidden" id="quoteProductName" name="productName">
                <input type="hidden" id="quoteProductPrice" name="productPrice">
                <input type="hidden" id="quoteProductImage" name="productImage">

                <div class="form-group">
                    <label for="quoteName">Full Name*</label>
                    <input type="text" id="quoteName" name="name" required>
                </div>

                <!-- <div class="form-group">
                    <label for="quoteEmail">Email</label>
                    <input type="email" id="quoteEmail" name="email" required>
                </div> -->

                <div class="form-group">
                    <label for="quotePhone">Phone Number*</label>
                    <input type="tel" id="quotePhone" name="phone" required>
                </div>

                <div class="form-group">
                    <label for="quoteCity">City*</label>
                    <input type="text" id="quoteCity" name="city" required>
                </div>

                <div class="form-group">
                    <label for="quoteMessage">Additional Information</label>
                    <textarea id="quoteMessage" name="message"
                        placeholder="Any specific requirements or questions..."></textarea>
                </div>

                <button type="submit" class="quote-submit-btn">Submit Request</button>
            </form>

            <div id="quoteSuccess" class="quote-success" style="display: none;">
                <i class="fas fa-check-circle" style="font-size: 36px; color: green;"></i>
                <h3>Thank You!</h3>
                <p>Your quote request has been submitted successfully.</p>
                <p>We'll contact you shortly with more details.</p>
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

        let images = [];
        try {
            images = JSON.parse(el.dataset.images || '[]');
        } catch (e) {
            console.warn('Invalid images JSON:', el.dataset.images);
            images = [];
        }

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

        openModal(images, name, price, description, motor, speed, walking, display, incline, programs, weight, features,
            assembly);
    }

    function openModal(images, name, price, description, motor, speed, walkingarea, display, incline, programs,
        maxWeight, features, assembly) {
        const modalImageContainer = document.getElementById('modalImageGallery');
        modalImageContainer.innerHTML = '';

        images.forEach((img, i) => {
            const thumb = document.createElement('img');
            thumb.src = img;
            thumb.style.width = '50px';
            thumb.style.height = '50px';
            thumb.style.objectFit = 'cover';
            thumb.style.border = '1px solid #ccc';
            thumb.style.borderRadius = '4px';
            thumb.style.cursor = 'pointer';
            thumb.onclick = () => {
                document.getElementById('modalMainImage').src = img;
            };
            modalImageContainer.appendChild(thumb);
        });

        // Main preview
        document.getElementById('modalMainImage').src = images[0] || '';

        // Text content
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

    window.onclick = function(event) {
        const modal = document.getElementById('imageModal');
        if (event.target === modal) {
            closeModal();
        }
    };
    </script>

<script>
function openQuoteFromImageModal() {
  const productName = document.getElementById("modalProductName").textContent.trim();
  const productPrice = document.getElementById("modalProductPrice").textContent.trim();
  const productImage = document.getElementById("modalMainImage").src;

  document.getElementById("quoteProductName").value = productName;
  document.getElementById("quoteProductPrice").value = productPrice;
  document.getElementById("quoteProductImage").value = productImage;

  // Show the quote modal
  const quoteModal = document.getElementById("quoteModal");
  quoteModal.style.display = "block";

  // Optional: disable scroll behind
  document.body.style.overflow = "hidden";
}
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