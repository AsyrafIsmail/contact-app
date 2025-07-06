<!DOCTYPE html>
<html>
<head>
    <title>Add Contact</title>
    <link rel="stylesheet" href="/assets/style.css">
</head>
<body>
    <h1>Add New Contact</h1>
    <form action="/routes.php?action=store" method="POST">
        <label>Name:</label><br>
        <input type="text" name="name" required><br>
        <label>Email:</label><br>
        <input type="email" name="email" required><br>
        <label>Phone:</label><br>
        <input type="text" name="phone" required><br><br>
        <button type="submit">Save</button>
    </form>
    <a href="/index.php" class="button">Back</a>
</body>
</html>
