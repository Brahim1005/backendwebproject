<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>


    <title>About Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!--

TemplateMo 546 Sixteen Clothing

https://templatemo.com/tm-546-sixteen-clothing

-->

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <h2>Made <em>moiselle</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                    aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('faq')}}">FAQ Page</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{url('about')}}">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('contactform')}}">Contact Us</a>
                        </li>
                        <li class="nav-item">
                            @if (Route::has('login'))
                            @auth

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('showcart')}}"><i
                                    class="fas fa-shopping-cart"></i>Cart[{{$count}}]</a>
                        </li>
                        <x-app-layout>

                        </x-app-layout>
                        @else
                        <li><a class="nav-link" href="{{ route('login') }}">Log in</a></li>
                        @if (Route::has('register'))
                        <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                        @endif
                        @endauth
                        @endif
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        @if(session()->has('message'))
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert"></button>
            {{session()->get('message')}}
        </div>
        @endif
    </header>

    <!-- Page Content -->
    <div class="page-heading about-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <h1 align="center" style="padding-top: 15px; font-weight:bold; font-size:x-large;">Short Information about the website</h1>
    <br>
    <br>

    <h3 style="padding-left: 20px; font-weight:bold;">Algemene informatie</h3>
    <p style="padding-left: 20px;">Ik heb gekozen om een website te maken voor een small business van mijn schoonzus. Ze heeft een winkel waar ze
        jurken verkoopt. 
        Ik heb dus een website gemaakt daarvoor.
    </p>
    <br>

    <h3 style="padding-left: 20px; font-weight:bold;">Minimum Requirements</h3>
    <p style="padding-left: 20px;">
       -Login system :
       <br>
        - Users can log in ✅ <br>
        - Visitors can create a new account ✅<br>
        - Users may or may not be an administrator ✅<br>
        - Only an administrator can promote another user to administrator status (or create a new user that is an admin) -> Can promote a user to admin via DataBase by changing usertype in DataBase ✅<br>
        <br>
       - Profile pagina : <br>
        - Each user has their own profile page ✅ <br>
        - A user can edit their own user data ✅ <br>
        <br>
       - Latest news : <br>
        - Admins can add, edit, and delete news products ✅ <br>
        - Every visitor of the website can view the news products ✅ <br>
        - These news items have at least the following: <br>
        - Title ✅<br>
        - Cover image ✅<br>
        - Content ✅<br>
       - FAQ page : <br>
       <br>
        - There is a list of questions and answers ✅ <br>
        - Admins can add, edit, and delete FAQ question and answer pairs ✅ <br>
        - Every visitor of the website can view the FAQ page ✅ <br>
        <br>
       - Contact page : <br>
        - Visitors can fill out a contact form ✅<br>
        - The content of submitted forms will be sent to the administrators ✅ <br>
    </p>
    <br>

    <h3 style="padding-left: 20px; font-weight:bold;">Extra Features</h3>
    <p style="padding-left: 20px;">
        - Shopping system (user have a cart and can add products in it) ✅ <br>
        - In the contact page, users can see the real location of the store on Google Maps ✅ <br>
        - You can search products via the searchbar ✅ <br>
        - Users can pose questions that might be added to the FAQ ✅ <br>
        - Admins can add answers to the posed FAQ questions through the admin panel ✅ <br>
        - There is also a 2-factor authentification that is working (activable on user profile ) ✅
        - User can also delete his own account (on user profile) ✅
    </p>

    <br>
    <br>
    <h3 style="padding-left: 20px; font-weight:bold;">List of sources</h3>
    <p style="padding-left: 20px;">
        Ik heb 2 templates gebruikt in dit project : Een template voor de design van de website en een bootstrap template voor de admin panel 
        <br>
        Eerste template (Website) -> https://templatemo.com/tm-546-sixteen-clothing
        <br>
        Tweede template (Admin-panel) -> https://github.com/BootstrapDash/corona-free-dark-bootstrap-admin-template
        <br>
        Deze video heeft mij ook heel veel geholpen bij het integreren van deze templates -> https://youtu.be/gMzf49j9Qm0?si=YWGDJippCobq7Xks
        <br>
        Gebruikte image voor de banner van de contact page -> https://tampabaycateringco.com/contact-banner/
        <br>
        Gebruikte image voor de banner van de about page -> https://bulldogjob.com/readme/how-to-write-a-good-readme-for-your-github-project
        <br>
        Kleine tutorial dat ik gebruikte voor de login and registratie feature -> https://onlinewebtutorblog.com/laravel-ui-login-register-email-verification-in-laravel-8/
        <br>
        Laravel Documentatie voor Controllers -> https://laravel.com/docs/10.x/controllers
        <br>
        Video dat mij geholpen heeft bij het maken van Seeders -> https://www.youtube.com/watch?v=0CKyI1P36uQ
        <br>
        Laravel documentatie voor het randomize van getallen -> https://www.php.net/manual/en/function.rand.php
        <br>
        <br>
    </p>

    <p style="padding-left: 20px; font-weight:bold;">This is the link to my Github Repo -> https://github.com/Brahim1005/backendwebproject.git (I also send a invite to kevin.felix@ehb.be email :p)</p>


    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <p>Copyright &copy; 2024 Mademoiselle., Ltd.
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language="text/Javascript">
        cleared[0] = cleared[1] = cleared[2] = 0; //set a cleared flag for each field
        function clearField(t) {                   //declaring the array outside of the
            if (!cleared[t.id]) {                      // function makes it static and global
                cleared[t.id] = 1;  // you could use true and false, but that's more typing
                t.value = '';         // with more chance of typos
                t.style.color = '#fff';
            }
        }
    </script>


</body>

</html>