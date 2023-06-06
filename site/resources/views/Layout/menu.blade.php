<header class="header_section">
    <div class="header_bottom">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand" href="{{url('/')}}">
                    <span> Minics </span>
                </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class=""> </span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="product.html">Contact</a>
                        </li>
                        @if(Auth::guard('donner')->check())
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/AdminWelcome')}}">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/AddProduct')}}">Add Product</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/logout')}}">Logout</a>
                        </li>

                        @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/login')}}">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('/signup')}}">Register</a>
                        </li>
                        @endif

                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>