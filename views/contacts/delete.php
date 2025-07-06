<?php
require_once __DIR__ . '/../controllers/ContactController.php';
$controller = new ContactController();
$contact = $controller->edit($_GET['id']); // Get contact by ID
?>
<!DOCTYPE html>
<html>
<head>
    <title>Delete Contact</title>
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>
    <h1>Delete Contact</h1>
    <p>Are you sure you want to delete <strong><?= htmlspecialchars($contact['name']) ?></strong>?</p>
    <form action="/routes.php?action=destroy&id=<?= $contact['id'] ?>" method="POST">
        <button type="submit" style="background:#dc3545;">Yes, Delete</button>
        <a href="/index.php" class="button">Cancel</a>
    </form>
</body>
</html>
