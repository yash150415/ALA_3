<?php include 'db.php'; ?>
<?php
$id = $_GET['id'];
$book = $conn->query("SELECT * FROM books WHERE id=$id")->fetch_assoc();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $conn->query("UPDATE books SET title='$title', author='$author' WHERE id=$id");
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head><title>Edit Book</title></head>
<body>
<h2>Edit Book</h2>
<form method="post">
    Title: <input type="text" name="title" value="<?= $book['title'] ?>" required><br><br>
    Author: <input type="text" name="author" value="<?= $book['author'] ?>" required><br><br>
    <input type="submit" value="Update Book">
</form>
<a href="index.php">Back to List</a>
</body>
</html>
