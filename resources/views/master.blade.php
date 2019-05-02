<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name', 'Laravel') }} - @yield('title') </title>

    <!-- Fonts -->
    <!-- <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css"> -->

    <!-- Styles -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    
    <style>
        /* Remove the navbar's default margin-bottom and rounded borders */ 
        .navbar {
          margin-bottom: 0;
          border-radius: 0;
          background-color: #4267B2;
        }
        
        /* Set black background color, white text and some padding */
        footer {
        position: fixed;
        left: 0;
        bottom: 0;
        width: 100%;
        background-color: #555;
        color: white;
        text-align: center;
        }
    
        /* This is for login form */
    	.login-form {
		width: 340px;
    	margin: 50px auto;
        }

        .login-form form {
            margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }

        .login-form h2 {
            margin: 0 0 15px;
        }

        .form-control, .btn {
            min-height: 38px;
            border-radius: 2px;
        }

        .btn {        
            font-size: 15px;
            font-weight: bold;
        }
    </style>
</head>
<body class="d-flex flex-column h-100" data-gr-c-s-loaded="true" cz-shortcut-listen="true">
    <main role="main" class="flex-shrink-0">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Logo</a>
                </div>
            </div>
        </nav>

        <div class="container-fluid col-sm-12">    
            <div class="row content">
                    @yield('home')
                    @yield('about')
                    @yield('login')
                    @yield('temp')
                    @yield('content')
            </div>
        </div>
    </main>
    <footer class="footer mt-auto py-3">
        <div class="container">
            <span class="text-muted">This is a footer message.</span>
        </div>
    </footer>
</body>
</html>