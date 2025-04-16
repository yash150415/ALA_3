<?php include 'db.php'; ?>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $conn->query("INSERT INTO books (id, title, author) VALUES ('$id', '$title', '$author')");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head><title>Add Book</title></head>
<body>
<h2>Add New Book</h2>
<form method="post">
    ID: <input type="number" name="id" required><br><br>
    Title: <input type="text" name="title" required><br><br>
    Author: <input type="text" name="author" required><br><br>
    <input type="submit" value="Add Book">
</form>
<a href="index.php">Back to List</a>
</body>
</html>
