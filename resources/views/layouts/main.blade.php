<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link href="/RetailSmart/Jquery/jquery.multiselect.css" rel="stylesheet"/> -->
    <!-- Bootstrap CSS -->
    <!-- <link  href="/Jquery/jquery.multiselect.css" rel="stylesheet"/>
    <link  href="/Jquery/style.css" rel="stylesheet" />
    <link  href="/Jquery/prettify.css" rel="stylesheet" />
    <link href="/RetailSmart/Jquery/jquery.multiselect.css" rel="stylesheet"/> -->
    <link rel="stylesheet" href="/bootstrap-4.4.1-dist/css/bootstrap.css">
    <link href="/bootstrap-4.4.1-dist/css/fontawesome-free-6.4.2-web/css/all.css" rel="stylesheet">
    <link href="/bootstrap-4.4.1-dist/js/splide/css/splide.min.css" rel="stylesheet">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">

    <style>
        body{font-family: 'Slabo 27px', serif;}
        a{text-decoration:none;}
        /* #footer a{color: #fff;} */
    </style>

    <title>{{ config('app.name', 'Laravel') }}</title>
    @livewireStyles
  </head>
  <body>
    
    <header class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-body border-bottom shadow-sm">
        <a class="h5 my-0 me-md-auto fw-normal" href ="{{url('/')}}"> 
        {{ config('app.name', 'Laravel') }}</a>
        <nav class="my-2 my-md-0 me-md-5">
           
                <a class=" p-2 text-dark " href="{{route('login')}}">Login</a>
                <a class=" p-2 text-dark " href="{{route('register')}}">Register</a>
            

            <!-- @if(Auth::check())
                <b class=" p-2">welcom {{Auth::user()->name}}</b>
                <a class=" p-2 text-dark" href="{{route('dashboard')}}">Account</a>
                <a class=" p-2 text-dark" onclick="
                document.getElementById('logout-form').submit()">Logout</a>
                <form id="logout-form"  action="{{route('logout')}}" method="post">
                    @csrf
                </form>
            @endif -->
        </nav>
        @livewire('cart.preview')
<!-- <span class="border p-2">
                <i class="fa-solid fa-cart-shopping mx-3"></i> <b>0</b> Items
                </span> -->
    </header>

    @livewire('search')
<br>
<main class="container" style="min-height:100px">
    
    @yield('content')

</main>

<div class="border-top">
    <div class="container">
        <footer class="pt-4 my-md-5 pt-md-5 ">
            <div class="row">
                <div class="col-12 col-md">
                    <img class="mb-2" src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="" width="24" height="19">
                    <small class="d-block mb-3 text-body-secondary">&copy; 2017–2023</small>
                </div>
                <div class="col-6 col-md">
                    <h5>Features</h5>
                    <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Cool stuff</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Random feature</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team feature</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Stuff for developers</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another one</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Last time</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>Resources</h5>
                    <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Resource name</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Another resource</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Final resource</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md">
                    <h5>About</h5>
                    <ul class="list-unstyled text-small">
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Team</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Locations</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Privacy</a></li>
                    <li class="mb-1"><a class="link-secondary text-decoration-none" href="#">Terms</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>
</div>   

  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!-- <script src="../../Jquery/prettify.js"></script> -->
    <!-- <script  src="../Jquery/jquery.multiselect.js"></script>
    <script src="../../Jquery/prettify.js"></script> -->
    <script src="/bootstrap-4.4.1-dist/js/bootstrap.js"></script>
    <script src="/bootstrap-4.4.1-dist/js/splide/js/splide.min.js"></script>
    <!-- <script src="@(Url.Content("path of js"))" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script> -->
    @livewireScripts
    <script>
        // Livewire.on('CartUpdate',productId=>{
        //     Livewire.emit('postAdded')
        //     alert('cart need update');
        // })
    </script>

</body>
</html> 
