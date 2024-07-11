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
    <link rel="stylesheet" href="{{ asset('../css/cart.css') }}" >
</head>
<body>
    <div class="cart mt-4">
        <div class="added-to-basket">
            <h2>Added to Basket</h2>
            <button class="close"><img src="{{ asset('../images/close.jpg') }}"</button>
        </div>

        <div class="cart-item d-flex justify-content-between align-items-center my-3">
            <img src="{{ asset('../images/p5.jpg') }}" alt="Sneakers">
            <div class="item-details flex-fill ms-3">
                <h3>SwiftGlide Slip-On Sneakers</h3>
                <p>SwiftGlide Slip-On Sneakers: Effortless style meets comfort with these 
                    versatile slip-ons, perfect for everyday wear.</p>
                <p><strong>Price:</strong> KES 999</p>
                <p><strong>Item:</strong> 1234</p>
                <div class="quantity d-flex align-items-center">
                    <label for="quantity" class="me-2"><strong>Quantity:</strong></label>
                    
                    <button class="btn btn-outline-secondary btn-sm me-2" onclick="updateQuantity(-1)"> <b>-</b></button>
                    <input type="number" id="quantity" name="quantity" value="1" min="1" >
                    <button class="btn btn-outline-secondary btn-sm ms-2" onclick="updateQuantity(1)"><b>+</b></button>
                </div>
                <div>
                <a href="#" class="text-primary">
                    Available offer to save you money</di>
                </a>
                </div>
                <button class="remove btn btn-danger ms-3">
                    <i class="bi bi-trash"></i>
                    <img src="{{ asset('../images/remove.jpg') }}"> REMOVE</button>
            </div>
        </div>

        <div class="recommendations">
            <h2>Products You May Like</h2>
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center">
                            <div class="product-item me-3">
                                <img src="{{ asset('../images/p2.jpg') }}" alt="GripMax">
                                <h3>GripMax Trail Hiking Boots. waterproof</h3>
                                <p><strong>Price:</strong> KES 1,799</p>
                                <button class="add-to-cart btn btn-primary">Add to Cart</button>
                            </div>
                            <div class="product-item me-3">
                                <img src="{{ asset('../images/p8.jpg') }}" alt="VentureTrack">
                                <h3>VentureTrack Trail Running Shoes</h3>
                                <p><strong>Price:</strong> KES 7,999</p>
                                <button class="add-to-cart btn btn-primary">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                        <div class="product-item me-3">
                                <img src="{{ asset('../images/sneakers.jpg') }}" alt="Sneakers">
                                <h3>Men's casual sneakers white shoes </h3>
                                <p><strong>Price:</strong> KES 2,999</p>
                                <button class="add-to-cart btn btn-primary">Add to Cart</button>
                            </div>
                            <div class="product-item me-3">
                                <img src="{{ asset('../images/p3.jpg') }}" alt="UrbanFlex">
                                <h3>UrbanFlex Laced Official Shoe</h3>
                                <p><strong>Price:</strong> KES 1,499</p>
                                <button class="add-to-cart btn btn-primary">Add to Cart</button>
                            </div>
                            </div>
                            </div>

                     <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                            <div class="product-item me-3">
                                <img src="{{ asset('../images/p21.jpg') }}" alt="OfficialShoe">
                                <h3>Mens Black Laced Official Shoe</h3>
                                <p><strong>Price:</strong> KES 2,499</p>
                                <button class="add-to-cart btn btn-primary">Add to Cart</button>
                            </div>
                            <div class="product-item me-3">
                                <img src="{{ asset('../images/p4.jpg') }}" alt="OfficialShoe">
                                <h3>Mens Brown Laced Official Shoe </h3>
                                <p><strong>Price:</strong> KES 2,499</p>
                                <button class="add-to-cart btn btn-primary">Add to Cart</button>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                            <div class="product-item me-3">
                                <img src="{{ asset('../images/p7.jpg') }}" alt="TrekkingSandals">
                                <h3>SummitVenture Trekking Sandals</h3>
                                <p><strong>Price:</strong> KES 9,999</p>
                                <button class="add-to-cart btn btn-primary">Add to Cart</button>
                            </div>
                            <div class="product-item me-3">
                                <img src="{{ asset('../images/p20.jpg') }}" alt="CasualSneakers">
                                <h3>Casual Sneakers Sport Shoes</h3>
                                <p><strong>Price:</strong> KES 2,999</p>
                                <button class="add-to-cart btn btn-primary">Add to Cart</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                   <img src="{{ asset('../images/prev.jpg') }}">
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <img src="{{ asset('../images/next.jpg') }}">
                </button>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
        function updateQuantity(change) {
            let quantityInput = document.getElementById('quantity');
            let currentValue = parseInt(quantityInput.value);
            let newValue = currentValue + change;
            if (newValue >= 1) {
                quantityInput.value = newValue;
            }
        }
        // Auto-slide the carousel every 5 seconds
        document.addEventListener('DOMContentLoaded', function() {
            var myCarousel = document.querySelector('#carouselExampleIndicators');
            var carousel = new bootstrap.Carousel(myCarousel, {
                interval: 5000
            });
        });

        // Close button functionality for the added-to-basket section
        document.querySelector('.added-to-basket .close').addEventListener('click', function() {
            document.querySelector('.added-to-basket').style.display = 'none';
        });
    </script>
</body>
</html>
