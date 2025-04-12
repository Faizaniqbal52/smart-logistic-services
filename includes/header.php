<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Smart Logistic Services</title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <link rel="stylesheet" href="css/style.css"> 
    <script src="js/main.js" defer></script> 
    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }

        nav {
            background-color: #333;
            padding: 10px 0;
            position: sticky;
            top: 0;
            z-index: 1000;
        }

        nav ul {
            display: flex;
            justify-content: center;
            list-style-type: none;
        }

        nav ul li {
            margin: 0 20px;
        }

        nav ul li a {
            text-decoration: none;
            color: #fff;
            font-size: 1.2rem;
            transition: color 0.3s ease, transform 0.3s ease;
            padding: 5px 10px;
        }

        nav ul li a:hover {
            color:rgb(74, 134, 140);
            transform: scale(1.1);
        }

        .logo {
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 2rem;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            margin-bottom: 10px;
        }

        header {
            background-color:rgb(37, 105, 170);
            color: #fff;
            padding: 20px 0;
            text-align: center;
        }

        header h1 {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        header p {
            font-size: 1.2rem;
        }

        @media (max-width: 768px) {
            nav ul {
                flex-direction: column;
            }

            nav ul li {
                margin: 10px 0;
            }

            header h1 {
                font-size: 2.5rem;
            }
        }
    </style>
</head>
<body>

<header>
    <div class="logo">
        <h1>Smart Logistic Services</h1>
    </div>
    <p>Efficient solutions for your logistics and supply chain needs.</p>
</header>

<nav>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="shipments.php">Shipments</a></li>
        <li><a href="orders.php">Orders</a></li>
        <li><a href="vehicles.php">Vehicles</a></li>
        <li><a href="warehouse.php">Warehouse</a></li>
        <li><a href="login.php">Login</a></li>
    </ul>
</nav>

</body>
</html>
