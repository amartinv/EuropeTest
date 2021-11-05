<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- CSRF Token -->
    <script type="text/javascript">
        window.CSRF_TOKEN = '{{ csrf_token() }}';
    </script>

    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styles -->
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <style>
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
            font-size: 84px;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        table tbody tr:nth-child(even) {
            background-color: ghostwhite;

        }
    </style>
</head>

<body class="bg-gray-100">
    <div id="app">

        <!-- Nav -->
        <nav class="bg-gray-800">
            <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
                <div class="relative flex items-center justify-between h-16">
                    <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                    </div>
                    <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                        <div class="flex-shrink-0 flex items-center">
                            <img class="block lg:hidden h-8 w-auto" src="https://www.europelanguagejobs.com/statics/images/logo_100.png" alt="Logo">
                            <img class="hidden lg:block h-8 w-auto" src="https://www.europelanguagejobs.com/statics/images/logo_100.png" alt="Logo">
                        </div>
                        <div class="hidden sm:block sm:ml-6">
                            <div class="flex space-x-4">

                                <router-link to="/" class="bg-gray-800 text-white block px-3 py-2 rounded-md text-base font-medium">Home</router-link>
                                <router-link to="/dogs" class="bg-gray-800 text-white block px-3 py-2 rounded-md text-base font-medium">All Dogs</router-link>
                                <router-link to="/form" class="bg-gray-800 text-white block px-3 py-2 rounded-md text-base font-medium">Form</router-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Mobile menu, show/hide based on menu state. -->
            <div class="sm:hidden" id="mobile-menu">
                <div class="px-2 pt-2 pb-3 space-y-1 bg-gray-800">

                    <router-link to="/" class="bg-gray-800 text-white block px-3 py-2 rounded-md text-base font-medium">Home</router-link>
                    <router-link to="/dogs" class="bg-gray-800 text-white block px-3 py-2 rounded-md text-base font-medium">All Dogs</router-link>
                    <router-link to="/form" class="bg-gray-800 text-white block px-3 py-2 rounded-md text-base font-medium">Form</router-link>
                </div>
            </div>
        </nav>

        <div class="d-flex justify-content-center">
            @if (Route::has('login'))
            <div class="top-right links">
                @if (Auth::check())
                <a href="{{ url('/home') }}">Home</a>
                @else
                <a href="{{ url('/login') }}">Login</a>
                <a href="{{ url('/register') }}">Register</a>
                @endif
            </div>
            @endif

            <div class="content">
                <router-view></router-view>
            </div>
        </div>

    </div>
</body>
<script src="{{asset('js/app.js')}}"></script>

</html>