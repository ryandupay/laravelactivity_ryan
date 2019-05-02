<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href=" {{asset('css/app.css')}}">
        <title>Homework</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html,body {
            height: 100%;
            }

            #detail {
            height: 100%;
            } 

            h1 {
                font-size: 60px;
                font-weight: bold;
            }

            .pageinfocontainer {
                position: absolute;
                top: 50%;
                margin-right: 10px;

                -webkit-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                transform: translateY(-50%);;
            }

            p {
                color: #7c7c7c;
            }

            .sideimg {
                background-image: url("img/TokyoTower.jpg");
                background-color: #ffffff;
                height: 100%; 
                background-position: center; 
                background-repeat: no-repeat; 
                background-size: cover; 
            }
        </style>
    </head>
    <body>
        <div class="container-fluid h-100">
            <div class="row justify-content-center h-100">
                <div class="col-4 hidden-md-down" id="detail">
                    <div class="pageinfocontainer"> 
                        <h1>Tokyo Tower</h1>
                        <h4>Minato City, Tokyo 105-0011, Japan</h4>
                        <p>Tokyo Tower is a communications and observation tower in the Shiba-koen district of Minato, Tokyo, Japan. At 332.9 metres, it is the second-tallest structure in Japan. The structure is an Eiffel Tower-inspired lattice tower that is painted white and international orange to comply with air safety regulations.</p>
                    </div>
                </div>
                <div class="sideimg col-10 col-sm-10 col-md-10 col-lg-8 col-xl-8">
                </div>
            </div>
        </div>
    </body>
</html>
