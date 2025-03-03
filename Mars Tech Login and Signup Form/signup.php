<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Collect form data
    $name = $_POST['name'];
    $cert_name = $_POST['cert-name'];
    $address = $_POST['address'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $nationality = $_POST['nationality'];
    $religion = $_POST['religion'];
    $id = $_POST['id'];
    $contact = $_POST['contact'];
    $home_contact = $_POST['home-contact'];
    $email = $_POST['email'];
    $occupation = $_POST['occupation'];
    $status = $_POST['status'];
    $how_found = $_POST['how-found'];

    // Handle file uploads
    $id_copy = $_FILES['id-copy'];
    $photo = $_FILES['photo'];
    $signature = $_FILES['signature'];

    // Process file uploads
    $upload_dir = 'uploads/';
    $id_copy_path = $upload_dir . basename($id_copy['name']);
    $photo_path = $upload_dir . basename($photo['name']);
    $signature_path = $upload_dir . basename($signature['name']);

    // Move uploaded files to the server
    move_uploaded_file($id_copy['tmp_name'], $id_copy_path);
    move_uploaded_file($photo['tmp_name'], $photo_path);
    move_uploaded_file($signature['tmp_name'], $signature_path);

    // Here, you can save the form data to your database
    // Example for a MySQL database
    $conn = new mysqli('localhost', 'root', '', 'your_database');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute the database query
    $sql = "INSERT INTO applicants (name, cert_name, address, dob, gender, nationality, religion, id, contact, home_contact, email, occupation, status, how_found, id_copy, photo, signature)
            VALUES ('$name', '$cert_name', '$address', '$dob', '$gender', '$nationality', '$religion', '$id', '$contact', '$home_contact', '$email', '$occupation', '$status', '$how_found', '$id_copy_path', '$photo_path', '$signature_path')";

    if ($conn->query($sql) === TRUE) {
        echo "Sign-up successful! Your details are awaiting admin approval.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
