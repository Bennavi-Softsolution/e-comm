<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

// Function to add item to cart
function addItem($item) {
    array_push($_SESSION['cart'], $item);
}

// Function to remove item from cart
function removeItem($itemId) {
    foreach ($_SESSION['cart'] as $key => $item) {
        if ($item['id'] == $itemId) {
            unset($_SESSION['cart'][$key]);
            break;
        }
    }
}

// Function to update item quantity
function updateItemQuantity($itemId, $quantity) {
    foreach ($_SESSION['cart'] as &$item) {
        if ($item['id'] == $itemId) {
            $item['quantity'] = $quantity;
            break;
        }
    }
}

// Handling form submissions
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['add_to_cart'])) {
        $item = array(
            'id' => $_POST['id'],
            'name' => $_POST['name'],
            'price' => $_POST['price'],
            'quantity' => $_POST['quantity']
        );
        addItem($item);
    } elseif (isset($_POST['remove'])) {
        removeItem($_POST['id']);
    } elseif (isset($_POST['update_quantity'])) {
        updateItemQuantity($_POST['id'], $_POST['quantity']);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f5f5f5;
    margin: 0;
    padding: 0;
    width: 100%
}
.cart {
    width: 100%;
    margin: 0;
    padding: 0;
    background-color: #fff;
}

.added-to-basket {
    background-color: #700C0C;
    color: white;
    padding: 20px;
}

.added-to-basket h2 {
    margin-top: 0;
    text-align: center;
}
.cart-item {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
    background-color: #FFFFFF;
    padding: 10px;
    border-radius: 8px;
}
.cart-item img {
    width: 20%;
    height: auto;
    border-radius: 8px;
}
.item-details {
    flex: 1;
    margin-left: 20px;
    padding-left: 20px;
}
.item-details h3 {
    margin-top: 0;
}
.quantity {
    display: flex;
    align-items: center;
    margin-top: 10px;
}
.quantity input {
    width: 50px;
    margin-left: 10px;
}
.remove {
    background-color: red;
    color: white;
    border: none;
    padding: 10px 20px;
    cursor: pointer;
    border-radius: 5px;
   margin-top: 10px;
}
.remove:hover {
    background-color: darkred;
}
.close {
    position: absolute;
    top: 10px;
    right: 10px;
    background: transparent;
    color: white;
    border: none;
    font-size: 20px;
    cursor: pointer;
}
.recommendations {
    margin-top: 20px;
    overflow: hidden;
    position: relative;
    background-color: #D9D9D9;
}
.recommendations h2 {
    margin-bottom: 20px;
    color:black;
    text-align: center;
}
.product-carousel {
    display: flex;
    gap: 30px;
    transition: transform 0.5s ease;
    justify-content: center;
}
.product-item {
    flex: 0 0 auto;
    background-color: #fff;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 8px;
    width: 200px;
    margin-bottom: 25px;
}
.product-item img {
    width: 100%;
    border-radius: 8px;
}
.product-item h3 {
    margin-top: 0;
}
.add-to-cart {
    background-color: red;
    color: white;
    border: none;
    padding: 10px;
    cursor: pointer;
    border-radius: 5px;
}
.add-to-cart:hover {
    background-color: darkred;
}
.carousel-controls {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 100%;
    display: flex;
    justify-content: space-between;
    z-index: 1;
}
.carousel-controls button {
    background-color: rgba(255, 255, 255, 0.8);
    border: none;
    cursor: pointer;
    padding: 10px;
    border-radius: 50%;
    transition: background-color 0.3s ease;
}
.carousel-controls button:hover {
    background-color: rgba(255, 255, 255, 0.5);
}
    </style>
</head>
<body>
        <div class="cart">
         <div class="added-to-basket">
            <h2>Added to Basket</h2>
            </div>

            <div class="cart-item">
                <img src="{{ asset('pictures/vase.png') }}" alt="Vintage Vase">
                <div class="item-details">
                    <h3>VINTAGE VASE</h3>
                    <p>A striking addition to any home decor, this vintage vase...</p>
                    <p>Price: KES 3500</p>
                    <p>Item: KED-1284</p>


                    <div class="quantity">
                        <label for="quantity">Quantity:</label>
                        <input type="number" id="quantity" name="quantity" value="1" min="1">
                    </div>
                    <button class="remove">Remove</button>
                </div>
            </div>
            <button class="close">X</button>
        
        <div class="recommendations">
        <div class="carousel-controls">
                <button id="prevBtn">&lt;</button>
                <button id="nextBtn">&gt;</button>
            </div>

            <h2>Products You May Like</h2>
            <div class="product-carousel">
                <div class="product-item">
                    <img src="vase.jpg" alt="Vintage Vase">
                    <h4>VINTAGE VASE</h4>
                    <p>Price: KES 3500</p>
                    <button class="add-to-cart">Add to Cart</button>
                </div>

                <div class="product-item">
                    <img src="vase.jpg" alt="Vintage Vase">
                    <h4>VINTAGE VASE</h4>
                    <p>Price: KES 3500</p>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
                <div class="product-item">
                    <img src="vase.jpg" alt="Vintage Vase">
                    <h4>VINTAGE VASE</h4>
                    <p>Price: KES 3500</p>
                    <button class="add-to-cart">Add to Cart</button>
                </div>

                <div class="product-item">
                    <img src="vase.jpg" alt="Vintage Vase">
                    <h4>VINTAGE VASE</h4>
                    <p>Price: KES 3500</p>
                    <button class="add-to-cart">Add to Cart</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        const prevBtn = document.getElementById('prevBtn');
        const nextBtn = document.getElementById('nextBtn');
        const carousel = document.querySelector('.product-carousel');

        let scrollAmount = 0;
        const scrollStep = 200;

        nextBtn.addEventListener('click', function() {
            scrollAmount += scrollStep;
            if (scrollAmount > carousel.scrollWidth - carousel.clientWidth) {
                scrollAmount = carousel.scrollWidth - carousel.clientWidth;
            }
            carousel.style.transform = `translateX(${-scrollAmount}px)`;
        });

        prevBtn.addEventListener('click', function() {
            scrollAmount -= scrollStep;
            if (scrollAmount < 0) {
                scrollAmount = 0;
            }
            carousel.style.transform = `translateX(${-scrollAmount}px)`;
        });
    </script>

</body>
</html>
