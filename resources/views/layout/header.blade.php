<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="{{ asset('style.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<header>
    <div class="nav container">
        <a href="{{ route("pages.index") }}" class="logo"><i class="bx bx-home"></i>Glenn Corporation</a>
        <input type="checkbox" name="" id="menu"/>
        <label for="menu"><i class="bx bx-menu" id="menu-icon"></i></label>
        <ul class="navbar">
            <li><a href="{{ route('pages.index') }}">home</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#sales">Sales</a></li>
            <li><a href="#properties">Properties</a></li>
        </ul>

        <a href="{{ url("/login") }}" class="btn">Log In</a>
    </div>
</header>
