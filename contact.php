<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - NCBI</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        header {
            background-color: #003366;
            color: white;
            padding: 20px;
            text-align: center;
        }
        .navbar {
            display: flex;
            justify-content: center;
            background-color: #005B94;
            padding: 10px 0;
        }
        .navbar a {
            text-decoration: none;
            color: white;
            padding: 15px 20px;
            transition: background-color 0.3s;
        }
        .navbar a:hover {
            background-color: #003366;
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        h2 {
            color: #003366;
        }
        label {
            display: block;
            margin: 10px 0 5px;
        }
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        textarea {
            height: 150px;
            resize: vertical;
        }
        button {
            background-color: #005B94;
            color: white;
            border: none;
            padding: 10px 15px;
            cursor: pointer;
            border-radius: 4px;
            font-weight: bold;
        }
        button:hover {
            background-color: #004080;
        }
    </style>
</head>
<body>

<header>
    <h1>Contact Us</h1>
    <p>National Center for Biotechnology Information</p>
</header>
<div class="navbar">
<a href="about.php">About NCBI</a>
    <a href="contact.php">Contact Us</a>
    <a href="help.php">Help and Support</a>
    <a href="search.php">Search NCBI Databases</a>
</div>
<div class="container">
    <h2>Get in Touch</h2>
    <form action="submit_contact.php" method="POST">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="message">Message:</label>
        <textarea id="message" name="message" required></textarea>

        <button type="submit">Submit</button>
    </form>
</div>

</body>
</html>
