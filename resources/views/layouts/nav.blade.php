<nav class="navbar navbar-expand-md navbar-light navbar-daffodips">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <!-- {{ config('app.name', 'Laravel') }} --> <img class="d-none d-lg-block" src="http://theheritageschool.org/images/logo.png">
            <img class="d-lg-none" src="images/logo.png">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Home -->
                <li class="nav-item">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <!-- About -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        About
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Overview</a>
                        <a class="dropdown-item" href="#">Principal&rsquo;s Message</a>
                        <!-- <div class="dropdown-divider"></div> -->
                        <a class="dropdown-item" href="#">Vission &amp; Mission</a>
                        <a class="dropdown-item" href="#">Future Plan &amp; Thoughts</a>                        
                    </div>
                </li>
                <!-- Academic -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Academic
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Programs</a>
                        <a class="dropdown-item" href="#">Golden Rules</a>
                        <a class="dropdown-item" href="#">Staffs &amp; Faculty</a>
                        <a class="dropdown-item" href="#">Calender</a>
                    </div>
                </li>  
                <!-- Notice Board -->
                <li class="nav-item">
                    <a class="nav-link" href="#">Notice Board</a>
                </li>                                  
                <!-- Gallery -->
                <li class="nav-item">
                    <a class="nav-link" href="#">Gallery</a>
                </li>   
                <!-- Downloads -->
                <li class="nav-item">
                    <a class="nav-link" href="#">Downloads</a>
                </li>                                                
                <!-- Contact -->
                <li class="nav-item">
                    <a class="nav-link" href="#">Conatct</a>
                </li>
            </ul>
        </div>
    </div>
</nav>