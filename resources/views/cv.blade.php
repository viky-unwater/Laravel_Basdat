<!DOCTYPE html>
<html lang="en">
<head>
    <title>My CV</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cool Navigation Bar</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <style>
        /* CSS for background and text color */
        body {
            background-color: #36393e ;
            color: white;
            font-family: Helvetica;
        }
        a {
            color: #7289DA; /* Discord-like blue color */
        }
            /* CSS for visited links */
        nav {
            background-color: #212b2a; /* Set the background color */
            padding: 10px;
            text-align: center;
        }
        nav a:hover {
            color: #7289DA; /* Set the hover text color */
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
            color: #284887; /* Set the hover text color */
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

    <h1>My Curriculum Vitae</h1>
    <div id="cv">
        <div style="text-align: center;">
            <img src="{{ asset('images/My CV.png') }}" alt="img10" width="800">
        </div>
    </div>
</body>
</html>
