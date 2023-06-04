<!DOCTYPE html>
<html lang="bn">

<head>
    <meta charset="UTF-8" />
    <title>RIFAT ABRAR JOWAD || FULL STACK SOFTWARE DEVELOPER || AI EXPERT</title>


    <meta name="description" content="RIFAT ABRAR JOWAD" />
    <meta name="keywords" content="Read blog in bangla" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
</head>

<body>
    @include('Layout.menu')

    <main>
        @yield('content')
    </main>





    <!-- footer section -->
    <footer class="footer_section">
        <div class="container">
            <p>
                &copy; <span id="displayYear"></span> All Rights Reserved By
                <a href="https://html.design/">Free Html Templates</a>
            </p>
        </div>
    </footer>
    <!-- footer section -->

    <script type="text/javascript" src="{{asset('js/jquery-3.4.1.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
</body>

</html>