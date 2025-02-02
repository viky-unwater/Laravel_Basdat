<!DOCTYPE html>
<html lang="en">
<head>
    <title>My Portofolio</title>
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

    <h1>My Design Portofolio</h1>
    <section id="Port0folio">
        <h2 style="margin-left: 10px;"></h2>
        <div style="text-align: center;">
            <img src="{{ asset('images/id card amifest-01.png') }}" alt="img02" width="200" style="margin-right: 10px">
            <br>
            <img src="{{ asset('images/Sertifikat Dewan Juri.png') }}" alt="img01" width="430" style="margin-right: 10px">
            <img src="{{ asset('images/Paid promote camp pengabdian.png') }}" alt="img024" width="300">
            <img src="{{ asset('images/FIX Mockup Lanyard Amifest-01.png') }}" alt="img05" width="400">
            <img src="{{ asset('images/FIX Mockup Lanyard Karsa-01.png') }}" alt="img06" width="400">               
            <img src="{{ asset('images/Screenshot_3.png') }}" alt="img07" width="300" style="margin-right: 10px">
            <img src="{{ asset('images/Screenshot_4.png') }}" alt="img08" width="280" style="margin-right: 10px">
            <br>
            <img src="{{ asset('images/2.png') }}" alt="img05" width="600">
        </div>
        
    </section>
</body>
</html>
