<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{route('product.index')}}">Shopping</a>
        </div>
    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

        <ul class="nav navbar-nav navbar-right">
            <li><a href="{{'#'}}"><i class="fas fa-shopping-cart"></i></a></li>
            @if (!Auth::check())
                <li><a href="{{route('user.login')}}"><i class="fas fa-sign-in-alt"></i> Login</a></li>
                <li><a href="{{route('user.register')}}"><i class="fas fa-user-plus"></i> Register</a></li>
            @else
                <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle"></i> User Account <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('user.profile')}}"><i class="fas fa-user-circle"></i> Profile</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="{{route('user.logout')}}"><i class="fas fa-sign-out-alt"></i> Log Out</a></li>
                    </ul>
                </li>
            @endif
        </ul>
    </div><!-- /.container-fluid -->
</nav>