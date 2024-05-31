
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Legoland Doetinchem</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    @vite(['resources/js/app.js', 'resources/js/script.js', 'resources/css/app.css'])
</head>
<body>

       <div class="navbar">

       <a href="/"><img src="../Bestanden/LEGOLAND_PARKS_LOGO.svg" alt="Legoland logo"></a>
  <ul class="menu" id="menu">
    @guest
        <li><a href="/contact">Contact</a></li>
        <li><a href="/aboutUs">About Us</a></li>
        <li><a href="/openingstijden">Openingstijden</a></li>
        <li><a href="/attracties">Attracties</a></li>
        <li><a href="/tickets">Tickets</a></li>
        <li><a href="/accomodatie">Accomodaties</a></li>
        <li><a href="/login">Login</a></li>
        <li><a href="/register">Register</a></li>
    @endguest
    @auth
        <li><a href="/contact">Contacten</a></li>
        <li><a href="/dashboard">Dashboard</a></li>
        <li><a href="/logout">Logout</a></li>
    @endauth
  </ul>
  <div class="hamburger" id="hamburger">
    <span class="bar"></span>
    <span class="bar"></span>
    <span class="bar"></span>
  </div>
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

