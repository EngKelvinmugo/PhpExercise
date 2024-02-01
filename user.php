<?php

// User class
class User {
    protected $id;
    protected $username;
    protected $email;
    protected $password;

    public function __construct($id, $username, $email, $password) {
        $this->id = $id;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    public function getId() {
        return $this->id;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }
}

// Admin class extends User
class Admin extends User {
    public function uploadProduct($productName, $image) {
        // Simulate product upload with image
        echo "Admin uploaded product: '$productName' with image: $image<br>";
    }
}

// Customer class extends User
class Customer extends User {
    public function viewProduct($productName) {
        // Simulate product viewing
        echo "Customer viewed product: '$productName'<br>";
    }
}

// Simple user interface
echo "<h1>User System</h1>";

$admin = new Admin(1, "admin", "admin@example.com", "admin123");
$customer = new Customer(2, "customer", "customer@example.com", "customer123");

echo "<h2>Admin</h2>";
echo "<div class='user-info'>";
echo "<strong>ID:</strong> {$admin->getId()} <br>";
echo "<strong>Username:</strong> {$admin->getUsername()} <br>";
echo "<strong>Email:</strong> {$admin->getEmail()} <br>";
echo "<strong>Password:</strong> {$admin->getPassword()} <br>";
echo "</div>";
$admin->uploadProduct("New Product", "product_image.jpg");

echo "<h2>Customer</h2>";
echo "<div class='user-info'>";
echo "<strong>ID:</strong> {$customer->getId()} <br>";
echo "<strong>Username:</strong> {$customer->getUsername()} <br>";
echo "<strong>Email:</strong> {$customer->getEmail()} <br>";
echo "<strong>Password:</strong> {$customer->getPassword()} <br>";
echo "</div>";
$customer->viewProduct("Sample Product");

?>
