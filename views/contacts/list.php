<?php
$controller = new ContactController();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Contact List</title>
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>
    <h1>Contact List</h1>
    <a href="create.php" class="button">Add New Contact</a>
    <table>
        <thead>
            <tr><th>Name</th><th>Email</th><th>Phone</th><th>Actions</th></tr>
        </thead>
        <tbody>
        <?php foreach ($contacts as $contact): ?>
            <tr>
                <td><?= htmlspecialchars($contact['name']) ?></td>
                <td><?= htmlspecialchars($contact['email']) ?></td>
                <td><?= htmlspecialchars($contact['phone']) ?></td>
                <td>
                    <a href="edit.php?id=<?= $contact['id'] ?>" class="button">Edit</a>
                    <a href="delete.php?id=<?= $contact['id'] ?>" class="button" style="background:#dc3545;">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
