<header class="header">
<a href="{{ route('home') }}" class="home"><img src="img/logo-white.svg"></a>
    <input class="menu-btn" type="checkbox" id="menu-btn" />
    <label class="menu-icon" for="menu-btn"><span class="navicon"></span></label>
    <ul class="menu">
        <li>
            <a href="{{ route('about') }}" class="about">About</a>
        </li>
        <li>
            <a href="{{ route('contact') }}" class="contact">Contact</a>
        </li>
        <li>
            <a href="{{ route('products') }}" class="product-list">Product List</a>
        </li>
        <li>
            <a href="{{ route('montessori') }}" class="montessori-guide">Montessori Guide</a>
        </li>
    </ul>
</header>