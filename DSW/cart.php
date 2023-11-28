<?php
session_start();

// Check if the 'cart' session variable is set
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

$cartItems = [];

// Assuming you have a database connection here
$servername = "localhost";
$username = "root";
$password = "Nanda123@n";
$dbname = "collegebites";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch cart items from the database based on the item IDs in the 'cart' session variable
if (!empty($_SESSION['cart'])) {
    $cartItemIds = implode("','", $_SESSION['cart']);
    $sql = "SELECT Fname, description, price, Fimage FROM food_table WHERE Fname IN ('$cartItemIds')";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $cartItems[] = $row;
        }
    }
}

// Handle item deletion
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['delete_item'])) {
        $deleteItemId = $_POST['delete_item'];
        // Remove the item from the 'cart' session variable
        $_SESSION['cart'] = array_diff($_SESSION['cart'], [$deleteItemId]);
        // Redirect to avoid form resubmission on refresh
        header('Location: cart.php');
        exit();
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
    <link rel="stylesheet" href="style.css">
</head>

<body>

<div class="container">
    <h3 class="pt-5 margin-left" style="color: red;">Cart</h3>

    <?php if (!empty($cartItems)): ?>
        <?php foreach ($cartItems as $cartItem): ?>
            <div class="menu-card ps-3 mt-5">
                <div class="left-side">
                    <h4><?= $cartItem['Fname'] ?></h4>
                    <p><?= $cartItem['description'] ?></p>
                    <span><?= $cartItem['price'] ?>💲</span>
                    <form method="post" class="delete-form">
                        <!-- Add a hidden input field to store the item ID -->
                        <input type="hidden" name="delete_item" value="<?= $cartItem['Fname'] ?>">
                        <button type="submit" class="delete-btn">Delete</button>
                    </form>
                </div>
                <div class="right-side">
                    <img src="<?= $cartItem['Fimage'] ?>" alt="<?= $cartItem['Fname'] ?>">
                    
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p>Your cart is empty.</p>
    <?php endif; ?>
</div>

</body>

</html>
