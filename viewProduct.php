<?php
require 'db.php';

if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
    die("Invalid product ID.");
}

$productId = (int) $_GET['id'];

try {
    $stmt = $pdo->prepare("SELECT * FROM products WHERE id = ?");
    $stmt->execute([$productId]);
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$product) {
        die("Product not found.");
    }
} catch (PDOException $e) {
    die("Database error: " . $e->getMessage());
}

// Prepare image gallery
$imagePaths = [];

// Add image_url (live full URL)
if (!empty($product['image_url'])) {
    $imagePaths[] = $product['image_url'];
}

// Add image_paths (JSON array of relative paths)
if (!empty($product['image_paths'])) {
    $decoded = json_decode($product['image_paths'], true);
    if (is_array($decoded)) {
        foreach ($decoded as $path) {
            $imagePaths[] = 'admin/' . ltrim($path, '/');
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Product</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
       
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: url('https://images.unsplash.com/photo-1497366754035-f200968a6e72?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
            padding: 40px 20px;
            color: #333;
        }
        
        body::before {
            content: '';
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.7);
            backdrop-filter: blur(8px);
            z-index: -1;
        }
        

        .product-container {
            max-width: 800px;
            margin: auto;
            background: white;
            padding: 25px;
            border-radius: 8px;
            box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        }

        .product-container h2 {
            text-align: center;
            margin-bottom: 20px;
        }

        .product-info {
            margin: 10px 0;
        }

        .product-info strong {
            display: inline-block;
            width: 150px;
        }

        .back-button {
            display: inline-block;
            margin-top: 20px;
            color: #fff;
            background-color: #007bff;
            padding: 10px 15px;
            border-radius: 5px;
            text-decoration: none;
        }

        .back-button i {
            margin-right: 5px;
        }

        .product-gallery {
            margin-top: 15px;
        }

        .gallery-container {
            display: flex;
            gap: 15px;
            align-items: flex-start;
            margin-top: 10px;
        }

        .thumbnails {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .thumbnails img {
            width: 60px;
            height: 60px;
            object-fit: cover;
            border: 2px solid transparent;
            border-radius: 6px;
            cursor: pointer;
            transition: all 0.3s ease;
            position: relative;
        }

        .thumbnails img:hover {
            transform: scale(1.05);
        }

        .thumbnails img.active,
        .thumbnails img:hover {
            border-color: #007bff;
        }

        .main-image {
            position: relative;
            width: 300px;
            height: 300px;
            overflow: hidden;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.1);
        }

        .main-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: all 0.3s ease;
        }

        .main-image:hover img {
            filter: blur(2px) brightness(0.7);
            transform: scale(1.05);
        }

        .main-image:hover::after {
            content: "View Larger";
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            font-weight: bold;
            font-size: 1.2rem;
            text-shadow: 0 0 5px rgba(0,0,0,0.5);
            z-index: 2;
        }

        @media (max-width: 600px) {
            .gallery-container {
                flex-direction: column;
                align-items: center;
            }
            
            .thumbnails {
                flex-direction: row;
                order: 2;
                margin-top: 15px;
            }
            
            .main-image {
                width: 100%;
                height: auto;
                max-height: 300px;
            }
            
            .product-info strong {
                width: 100px;
            }
        }
    </style>
</head>
<body>

<div class="product-container">
    <h2>Product Details</h2>

    <div class="product-info"><strong>Name:</strong> <?= htmlspecialchars($product['product_name']) ?></div>
    <div class="product-info"><strong>Category:</strong> <?= htmlspecialchars($product['Categories']) ?></div>
    <div class="product-info"><strong>Price:</strong> ₹<?= htmlspecialchars($product['price']) ?></div>
    <div class="product-info"><strong>Description:</strong> <?= nl2br(htmlspecialchars($product['description'])) ?></div>

    <?php if (!empty($imagePaths)): ?>
        <div class="product-info product-gallery">
            <strong>Images:</strong>
            <div class="gallery-container">
                <div class="thumbnails">
                    <?php foreach ($imagePaths as $index => $img): ?>
                        <img src="<?= htmlspecialchars($img) ?>" class="thumb<?= $index === 0 ? ' active' : '' ?>" onclick="showImage(this, '<?= htmlspecialchars($img) ?>')">
                    <?php endforeach; ?>
                </div>
                <div class="main-image" onclick="openLightbox('<?= htmlspecialchars($imagePaths[0]) ?>')">
                    <img id="mainPreview" src="<?= htmlspecialchars($imagePaths[0]) ?>" alt="Main Image">
                </div>
            </div>
        </div>
    <?php endif; ?>

    <a href="index.php" class="back-button"><i class="fa fa-arrow-left"></i> Back</a>
</div>

<!-- Lightbox Modal -->
<div id="lightbox" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.8); z-index: 1000; justify-content: center; align-items: center;">
    <span style="position: absolute; top: 20px; right: 20px; color: white; font-size: 30px; cursor: pointer;" onclick="closeLightbox()">&times;</span>
    <img id="lightbox-img" style="max-width: 90%; max-height: 90%;">
</div>

<script>
function showImage(thumb, imgSrc) {
    document.getElementById("mainPreview").src = imgSrc;
    document.querySelectorAll(".thumb").forEach(img => img.classList.remove("active"));
    thumb.classList.add("active");
}

function openLightbox(imgSrc) {
    document.getElementById("lightbox-img").src = imgSrc;
    document.getElementById("lightbox").style.display = "flex";
}

function closeLightbox() {
    document.getElementById("lightbox").style.display = "none";
}

// Close lightbox when clicking outside the image
document.getElementById("lightbox").addEventListener("click", function(e) {
    if (e.target === this) {
        closeLightbox();
    }
});
</script>

</body>
</html>
