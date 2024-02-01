<?php
// Function to validate email format
function validateEmail($email) {
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

// Check if form data is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if admin form is submitted
    if (isset($_POST['admin_username']) && isset($_POST['admin_password']) && isset($_POST['product_name']) && isset($_POST['product_image'])) {
        // Admin login credentials
        $admin_username = $_POST['admin_username'];
        $admin_password = $_POST['admin_password'];

        // Check admin login credentials (for demonstration, hardcoded values are used)
        if ($admin_username == "admin" && $admin_password == "admin123") {
            // Instantiate Admin class
            $admin = new Admin(1, $admin_username, "", "");

            // Validate product image URL (for demonstration, validation is not implemented here)
            $product_name = $_POST['product_name'];
            $product_image = $_POST['product_image'];

            // Call uploadProduct method
            $admin->uploadProduct($product_name, $product_image);
        } else {
            echo "Invalid admin credentials!";
        }
    }
    // Check if customer form is submitted
    elseif (isset($_POST['customer_username']) && isset($_POST['customer_password'])) {
        // Customer login credentials
        $customer_username = $_POST['customer_username'];
        $customer_password = $_POST['customer_password'];

        // Check customer login credentials (for demonstration, hardcoded values are used)
        if ($customer_username == "customer" && $customer_password == "customer123") {
            // Instantiate Customer class
            $customer = new Customer(2, $customer_username, "", "");

            // Call viewProduct method
            $customer->viewProduct("Sample Product");
        } else {
            echo "Invalid customer credentials!";
        }
    } else {
        echo "Form data missing!";
    }
} else {
    echo "Invalid request!";
}
?>