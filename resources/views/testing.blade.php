<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Aplikasi SNMPTN & SBMPTN ITK</title>

        <!-- Fonts -->
        <!-- Bootstrap Core Css -->
        <link href="{{asset('template/plugins/bootstrap/css/bootstrap.css')}}" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 74px;
            }



            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>

        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else

                    @endauth
                </div>
            @endif


            <div class="content">
                <div class="title m-b-md">
                    Sistem Informasi </br> SNMPTN & SBMPTN ITK </br>
                </div>
                <div class="card-body">
                  @if(session('sukses'))
                  <div class="alert alert-primary" role="alert">
                        {{session('sukses')}}
                  </div>
                  @endif
                </div>
                <div class="links">
                    <a href="{{url('/superadmin')}}" class="btn btn-primary btn-lg"><i class="fas fa-users"></i> Login Super Admin</a>
                    <a href="{{url('/data')}}" class="btn btn-danger btn-lg"><i class="fas fa-chalkboard-teacher"></i> Login Admin Data </a>
                    <a href="{{url('/kajur')}}" class="btn btn-success btn-lg"><i class="fas fa-chalkboard-teacher"></i>Login Kepala Jurusan</a>
                    <a href="{{url('/korpro')}}" class="btn btn-info btn-lg"><i class="fas fa-chalkboard-teacher"></i>Login Koordinator Prodi</a>
                </div>
            </div>
        </div>
    </body>
</html>
