
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legoland Doetinchem</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
</head>
<body>

       <div class="navbar">

       <a href="/"><img src="../Bestanden/LEGOLAND_PARKS_LOGO.svg" alt="Legoland logo"></a>
  <ul class="menu" id="menu">
    <li><a href="/contact">Contact</a></li>
    <li><a href="/aboutUs">About Us</a></li>
    <li><a href="/openingstijden">Openingstijden</a></li>
    <li><a href="/attracties">Attracties</a></li>
    <li><a href="/tickets">Tickets</a></li>
    <li><a href="/accomodatie">Accomodaties</a></li>
    <li><a href="#">Login</a></li>
  </ul>
</div>
    <div class="container">
        @yield('content')
        @yield('sidebar')
    </div>
    <footer>
        <p>© Legoland Doetinchem B.V., alle rechten voorbehouden</p>
    </footer>
</body>
</html>
