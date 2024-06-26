  
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{route('/')}}" class="logo">
                            <img src="{{asset('images/logo.png')}}">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{route('/')}}" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="{{route('get_mens_products')}}">Men's</a></li>
                            <li class="scroll-to-section"><a href="{{route('get_womens_products')}}">Women's</a></li>
                            <li class="scroll-to-section"><a href="{{route('get_kids_products')}}">Kid's</a></li>
                            <li class="scroll-to-section"><a href="#main-footer">About Us</a></li>

                            
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a rel="nofollow" href="https://templatemo.com/page/4" target="_blank">Template Page 4</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="#explore">Explore</a></li>

                        
                                
                        
                            <li class="scroll-to-section">
                            @if(auth()->user())
                               
                            <a href="{{route('logout')}}">Logout</a>
                            @else
                                <a href="{{route('login')}}">Login</a>
                            @endif
                        </li>

                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->