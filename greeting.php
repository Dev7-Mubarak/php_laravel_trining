<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Greeting Page</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(135deg, #74ebd5, #ACB6E5);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: white;
            padding: 30px 40px;
            width: 100%;
            max-width: 500px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        h2 {
            margin-bottom: 20px;
            color: #333;
        }
        input[type="text"] {
            padding: 10px;
            width: 80%;
            border: 1px solid #ccc;
            border-radius: 5px;
            margin-bottom: 15px;
        }
        button {
            padding: 10px 20px;
            border: none;
            background-color: #5c67f2;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        button:hover {
            background-color: #3b47d1;
        }
        .message {
            margin-top: 20px;
            font-size: 18px;
            padding: 15px;
            border-radius: 8px;
            background-color: #e6f7e6;
            color: #2f7a2f;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Enter your name</h2>
        <form method="GET" action="greeting.php">
            <input type="text" name="name" placeholder="Your name" />
            <br>
            <button type="submit">Greet me</button>
        </form>

        <div class="message">
            <?php
            $message = "";
            if (isset($_GET['name']) && !empty(trim($_GET['name']))) {
                $name = htmlspecialchars(trim($_GET['name']));
                $message = "👋 Hello, $name! Welcome to the PHP challenge 😊";
            } else {
                $message = "⚠️ Please enter your name to receive a greeting.";
            }
            echo $message;
            ?>

        </div>
    </div>
</body>
</html>
