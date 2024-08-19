<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>

    <title>FAQ Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-sixteen.css">
    <link rel="stylesheet" href="assets/css/owl.css">

    <style>
        .show-questions {
            border-collapse: collapse;
            margin: 25px 0;
            font-size: 0.9em;
            font-family: sans-serif;
            min-width: 400px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
        }

        .show-questions thead tr {
            background-color: #9C9696;
            color: #ffffff;
            text-align: left;
        }

        .show-questions th,
        .show-questions td {
            padding: 12px 15px;
        }

        .show-questions tbody tr {
            border-bottom: 1px solid #dddddd;
        }

        .show-questions tbody tr:nth-of-type(even) {
            background-color: #f3f3f3;
        }

        .show-questions tbody tr:last-of-type {
            border-bottom: 2px solid #9C9696;
        }

        .faq-category {
            margin-top: 50px;
        }

        .faq-category h3 {
            background-color: #78CA68;
            color: white;
            padding: 10px;
            margin-bottom: 0;
        }

        .faq-category table {
            width: 100%;
            margin-top: 15px;
        }
    </style>

</head>

<body>

    <!-- Header and Navigation -->
    <header class="">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="/">
                    <h2>Made <em>moiselle</em></h2>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a class="nav-link" href="/">Home</a></li>
                        <li class="nav-item active"><a class="nav-link" href="{{ url('faq') }}">FAQ Page</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('about') }}">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ url('contactform') }}">Contact Us</a></li>
                        @if (Route::has('login'))
                            @auth
                                <li class="nav-item"><a class="nav-link" href="{{ url('showcart') }}"><i class="fas fa-shopping-cart"></i>Cart[{{ $count }}]</a></li>
                                <x-app-layout></x-app-layout>
                            @else
                                <li><a class="nav-link" href="{{ route('login') }}">Log in</a></li>
                                @if (Route::has('register'))
                                    <li><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                                @endif
                            @endauth
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @if(session()->has('message'))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert"></button>
                {{ session()->get('message') }}
            </div>
        @endif
    </header>

    <!-- Page Content -->
    <div class="page-heading faq-heading header-text">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-content">
                        <h4>FAQ Page</h4>
                        <h2 style="color: black;">Most asked questions</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Form and Category Filter -->
    <div class="send-question">
        <div class="container">
            <div class="row">
                <div class="col-md-12"><div class="section-heading"></div></div>
                <div class="col-md-8">
                    <div class="faq-form">
                    <form id="contact" action="{{ route('faq.store') }}" method="post">
                    @csrf
                        <div class="row">
                            <div class="col-lg-5 col-md-8 col-sm-15">
                            <fieldset>
                            <input name="question" type="text" class="form-control" id="question" placeholder="Question" required="">
                            <br>
                            </fieldset>
                            </div>
                        <div class="col-lg-5 col-md-8 col-sm-15">
                    <fieldset>
                        <select name="category_id" class="form-control" required>
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                        @endforeach
                        </select>
                    <br>
                    </fieldset>
                        </div>
                    <div class="col-lg-12">
                    <fieldset>
                        <button type="submit" id="form-submit" style="background-color: #78CA68; color:black" class="btn btn-success">Send Question</butto>
                    </fieldset>
                    </div>
                        </div>
                </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- FAQ Categories and Questions -->
    <div class="container faq-category">
        @foreach($categories as $category)
            @if(request('category_id') == $category->id || !request('category_id'))
                <div class="faq-category">
                    <h3>{{ $category->name }}</h3>
                    <table class="show-questions">
                        <thead>
                            <tr align="center">
                                <th>Asked Questions</th>
                                <th>Answer</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($category->faqs as $faq)
                                <tr align="center">
                                    <td>{{ $faq->question }}</td>
                                    <td>{{ $faq->answer }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        @endforeach
    </div>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="inner-content">
                        <p>Copyright &copy; 2024 Mademoiselle., Ltd.</p>
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
        function clearField(t) {
            if (!cleared[t.id]) {
                cleared[t.id] = 1;
                t.value = '';
                t.style.color = '#fff';
            }
        }
    </script>

</body>

</html>
