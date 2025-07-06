<?php
require_once __DIR__ . '/../controllers/ContactController.php';
$controller = new ContactController();
$contact = $controller->edit($_GET['id']); // Get contact by ID
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Contact</title>
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>
    <h1>Edit Contact</h1>
    <form action="/routes.php?action=update&id=<?= $contact['id'] ?>" method="POST">
        <label>Name:</label><br>
        <input type="text" name="name" value="<?= htmlspecialchars($contact['name']) ?>" required><br>
        <label>Email:</label><br>
        <input type="email" name="email" value="<?= htmlspecialchars($contact['email']) ?>" required><br>
        <label>Phone:</label><br>
        <input type="text" name="phone" value="<?= htmlspecialchars($contact['phone']) ?>" required><br><br>
        <button type="submit">Update</button>
    </form>
    <a href="/index.php" class="button">Back</a>
</body>
</html>
