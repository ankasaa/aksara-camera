<header class="header">
    <nav class="navbar" id="navbar">
        <a href="#" class="navbar-logo">
            <img src="{{ asset('assets/icon/icon_Aksa.png') }}" alt="logo" id="logo" loading="lazy">
        </a>
        <ul class="nav-links">
            <li><a href="#Home">Home</a></li>
            <li><a href="#product">Product</a></li>
            <li><a href="#about">About Us</a></li>
            <li><a href="#Footer">Footer</a></li>
        </ul>
        <div class="hamburger" id="hamburger" onclick="toggleSidebar()">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>
</header>

<div class="sidebar" id="sidebar">
    <ul class="sidebar-links">
        <li><a href="#Home">Home</a></li>
        <li><a href="#product">Product</a></li>
        <li><a href="#about">About Us</a></li>
        <li><a href="#Footer">Footer</a></li>
    </ul>
</div>