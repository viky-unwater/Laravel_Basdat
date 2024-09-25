<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <style>
        /* Custom styles for your layout */
        html, body {
            height: 100%; /* Ensure full height */
            margin: 0; /* Remove default margin */
            background: linear-gradient(135deg, #10794a 0%, #291e35 100%); /* Gradient background */
            color: white; /* Set default text color to white */
            font-family: Helvetica, sans-serif; /* Use Helvetica font */
        }

        .header {
            background-color: #212b2a; /* Header background color */
            padding: 10px; /* Padding for header */
            text-align: center; /* Center text in header */
        }

        .header h1 {
            margin: 0; /* Remove default margin */
            font-size: 24px; /* Set font size for header title */
            color: #ffffff; /* Text color for header */
        }

        nav {
            background-color: #212b2a; /* Set the background color for nav */
            padding: 10px;
            text-align: center;
        }
        
        nav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
        }

        nav li {
            display: inline;
            margin-right: 20px;
        }

        nav a {
            text-decoration: none;
            color: #ffffff; /* Set the text color */
            font-size: 18px;
            transition: color 0.3s ease-in-out;
        }

        nav a:hover {
            color: #1dd65f; /* Set the hover text color */
        }

        .container {
            margin-top: 20px; /* Space between header and content */
            margin-bottom: 60px; /* Space for footer */
        }

    </style>
</head>
<body>

    <nav>
        <ul>
            <li><a href="/">Home</a></li>
            <li><a href="/cv">CV</a></li>
            <li><a href="/portofolio">Portofolio</a></li>
            <li><a href="/interests">Interests</a></li>
            <li><a href="/social-media">Social Media</a></li>
            <li><a href="/contacts">Contacts</a></li>
        </ul>
    </nav>

    <div class="container">
        <h1 style="text-align: center; color: #ffffff">Put in your contacts here</h1>
        @yield('content')
    </div>


</body>
</html>
