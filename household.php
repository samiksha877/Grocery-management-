<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Grocery Store – Household Products</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    /* Reset & base styles */
    * {
      box-sizing: border-box;
      margin: 0; padding: 0;
    }
    body {
      font-family: 'Inter', sans-serif;
      line-height: 1.6;
      color: #333;
      background-color: #fafafa;
    }
    a { color: #0275d8; text-decoration: none; }
    a:hover { text-decoration: underline; }

    /* Header & banner */
    .banner {
      background-color: #fff;
      padding: 2rem;
      text-align: center;
      border-bottom: 1px solid #e0e0e0;
    }
    .banner h3 {
      font-size: 1.75rem;
      color: #555;
    }

    /* Section titles */
    .products-section h2 {
      margin: 2rem;
      font-size: 1.5rem;
      color: #444;
      text-align: center;
    }

    /* Grid layout */
    .products-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(210px, 1fr));
      gap: 1.5rem;
      padding: 0 1.5rem 2rem;
    }

    /* Individual product card */
    .product-card {
      background-color: #fff;
      border-radius: 8px;
      overflow: hidden;
      box-shadow: 0 2px 8px rgba(0,0,0,0.05);
      display: flex;
      flex-direction: column;
      text-align: center;
    }
    .product-card img {
      width: 100%;
      height: auto;
      object-fit: cover;
    }
    .product-card h4 {
      font-size: 1rem;
      margin: 1rem 0 0.5rem;
      padding: 0 0.5rem;
    }
    .price {
      margin-bottom: 1rem;
    }
    .price .current {
      font-size: 1.2rem;
      font-weight: bold;
      color: #1a8e4c;
    }
    .price .original {
      margin-left: 0.5rem;
      color: #888;
      text-decoration: line-through;
    }

    /* Buttons */
    .btn {
      margin: 0 1rem 1rem;
      padding: 0.6rem 1.2rem;
      background-color: #0275d8;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      transition: background-color 0.2s ease;
    }
    .btn:hover {
      background-color: #025aa5;
    }

    /* Responsive tweaks */
    @media (max-width: 480px) {
      .banner h3 { font-size: 1.4rem; }
      .products-section h2 { font-size: 1.3rem; }
    }
  </style>
</head>
<body>

<?php include 'header.php'; ?>

<section class="products-section">
  <div class="banner">
    <h3>Best Deals for New Products</h3>
  </div>

  <h2>Household Products</h2>

  <div class="products-grid">
    <?php
    $products = [
      ["image" => "images/17.png", "name" => "Dishwash Gel, Lemon (1.5 L)", "price" => "50.00", "original" => "60.00"],
      ["image" => "images/18.png", "name" => "Dish Wash Bar (200 gm)", "price" => "20.00", "original" => "30.00"],
      ["image" => "images/19.png", "name" => "Air Freshener (50 gm)", "price" => "10.00", "original" => "12.00", "link" => "single.php"],
      ["image" => "images/20.png", "name" => "Toilet Cleaner Expert (1 L)", "price" => "10.00", "original" => "12.00"],
      ["image" => "images/vim.jpg", "name" => "Vim Dishwash Bar", "price" => "10.00", "original" => "12.00"],
      ["image" => "images/wa.jpg", "name" => "Wheel", "price" => "10.00", "original" => "20.00"],
      ["image" => "images/expert.jpg", "name" => "Xepert Dish Wash Bar", "price" => "20.00", "original" => "10.00"],
      ["image" => "images/na.jpg", "name" => "Nirma Advance", "price" => "6.00", "original" => "10.00"],
      ["image" => "images/gadosoap.jpg", "name" => "Ghadi Soap", "price" => "7.00", "original" => "9.00"],
    ];

    foreach ($products as $product):
      $link = $product['link'] ?? '#';
      $discount = number_format(floatval($product['original']) - floatval($product['price']), 2);
    ?>
    <div class="product-card">
      <a href="<?= $link ?>">
        <img src="<?= $product['image'] ?>" alt="<?= htmlspecialchars($product['name']) ?>">
      </a>
      <h4><?= htmlspecialchars($product['name']) ?></h4>
      <div class="price">
        <span class="current">₹<?= $product['price'] ?></span>
        <span class="original">₹<?= $product['original'] ?></span>
      </div>
      <form method="post" action="#">
        <input type="hidden" name="item_name" value="<?= htmlspecialchars($product['name']) ?>">
        <input type="hidden" name="amount" value="<?= $product['price'] ?>">
        <input type="hidden" name="discount_amount" value="<?= $discount ?>">
        <input type="hidden" name="currency_code" value="INR">
        <button type="submit" class="btn">Add to Cart</button>
      </form>
    </div>
    <?php endforeach; ?>
  </div>
</section>

<?php include 'footer.php'; ?>

</body>
</html>
