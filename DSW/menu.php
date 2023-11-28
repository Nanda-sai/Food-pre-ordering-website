
<?php

$servername = "localhost";
$username = "root";
$password = "Nanda123@n";
$dbname = "collegebites";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get the category parameter from the URL
$category = isset($_GET['category']) ? $_GET['category'] : '';

// Use the category parameter in the SQL query
$sql = "SELECT Fname, description, price, Fimage FROM food_table";

// Add a WHERE clause to filter by category if a category is specified
if ($category != '') {
    $sql .= " WHERE category = '$category'";
}

$result = $conn->query($sql);

$menuItems = [];

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $menuItems[] = $row;
    }
}
session_start();
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['add_to_cart'])) {
        $itemId = $_POST['add_to_cart'];
        // Add the item to the cart session variable
        $_SESSION['cart'][] = $itemId;
    }
}


$conn->close();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>

<div class="cart-container">
    <a href="cart.php">
        <i class="fas fa-shopping-cart cart-icon fa-2x"></i>
        <span id="cart-count"><?= count($_SESSION['cart']) ?></span>
    </a>
</div>

    <div class="container-fluid">
        <div class="wrap">
            <div class="sidebar pt-5">
                <ul>
                    <li class="pt-5"><a href="?category=Chinese">Chinese</a></li>
                    <li><a href="?category=South%20Indian">South Indian</a></li>
                    <li><a href="?category=Beverages">Beverages</a></li>
                    <li><a href="?category=Ice%20cream">Ice creams</a></li>
                    <li><a href="?category=Chips">Chips</a></li>
                    <li><a href="?category=chat-pati%20chaat">chaat</a></li>
                    <li><a href="?category=combo%20Meal">paratha</a></li>
                    <li><a href="?category=Biscuits">Biscuits</a></li>
                </ul>
            </div>
        </div>
    </div>


    <h3 class="pt-5 margin-left" style="color:red;">Menu</h3>

<?php foreach ($menuItems as $item): ?>
    <div class="menu-card ps-3 mt-5">
        <div class="left-side">
            <h4><?= $item['Fname'] ?></h4>
            <p><?= $item['description'] ?></p>
            <span><?= $item['price'] ?>💲</span>
            <form method="post">
                <!-- Add a hidden input field to store the item ID -->
                <input type="hidden" name="add_to_cart" value="<?= $item['Fname'] ?>">
                <div class="quantity-control">
                    <button class="quantity-btn minus-btn" data-id="<?= $item['Fname'] ?>">-</button>
                    <span class="quantity" id="quantity-<?= $item['Fname'] ?>">1</span>
                    <button class="quantity-btn plus-btn" data-id="<?= $item['Fname'] ?>">+</button>
                    <!-- Modify the button to trigger the form submission -->
                    <button type="submit" class="add-to-cart-btn ms-4">Add to Cart</button>
                </div>
            </form>
        </div>
        <div class="left-side">
            <img src="<?= $item['Fimage'] ?>" alt="<?= $item['Fname'] ?>">
        </div>
    </div>
    <?php endforeach; ?>
<script>
document.addEventListener('DOMContentLoaded', function () {
    // Add event listeners for each set of elements
    const quantityBtns = document.querySelectorAll('.quantity-btn');
    quantityBtns.forEach(btn => {
        btn.addEventListener('click', function () {
            const itemId = btn.getAttribute('data-id');
            const quantityElement = document.getElementById(`quantity-${itemId}`);
            
            const currentQuantity = parseInt(quantityElement.textContent);
            if (btn.classList.contains('plus-btn')) {
                quantityElement.textContent = currentQuantity + 1;
            } else if (btn.classList.contains('minus-btn') && currentQuantity > 1) {
                quantityElement.textContent = currentQuantity - 1;
            }
        });
    });
});

</script></body>

</html>
