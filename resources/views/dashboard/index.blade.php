<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <title>Dashboard</title>
</head>

<body>
<header>
        </div>
        <div class="container">
            <div class="main_menu">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="navbar-brand" href="{{ url('/') }}">
                        <img src="{{ asset('assets/img/logo.png') }}" class="logohome" alt="Axzons Logo">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsibleNavbar">
                        <!--<span class="navbar-toggler-icon"></span>-->
                        <img src="{{ asset('assets/img/nav-icon.png') }}" class="img-fluid" alt="Image">
                    </button>
                    <div class="collapse navbar-collapse main-menu-item" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('/') }}">Home</a>
                            </li>

                            <li class="nav-item">
                               <h3>WELCOME TO AXZONS HOME CARE ADMIN DASHBOARD</h3>
                            </li>
                           
                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('contact') }}">Contact</a>
                            </li>
                            <li class="nav-item">
                                @auth
                                    <a class="nav-link" href="{{ url('logout') }}">Logout</a>
                                @else
                                    <a class="nav-link" href="{{ url('login') }}">Login</a>

                                @endauth
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>


    <div class="row">
        <div class="col-lg-3">
            <x-dashboard-sidebar />
        </div>
        <div class="col-lg-9">
            <aside id="dashboard-right">
                @if ($_GET['route'] == 'submissions')
                    <x-read-submissions :submissions="$submissions" />
                @endif

    

                @if ($_GET['route'] == 'queries')
                    <x-read-queries :queries="$queries" />
                @endif
                @if ($_GET['route'] == 'blogs')
                    <x-read-blogs :blogs="$blogs" />
                @endif
                @if ($_GET['route'] == 'create_blog')
                    <x-create-blog :submissions="$submissions" />
                @endif
                @if ($_GET['route'] == 'edit_blog' && $_GET['blog_id'])
                    <x-edit-blog :blog="$blog" />
                @endif


                @if ($_GET['route'] == 'cdpaps')
                    <x-read-cdpaps :cdpaps="$cdpaps" />
                @endif 

                @if ($_GET['route'] == 'homecares')
                    <x-read-homecares :homecares="$homecares" />
                @endif 
            </aside>
        </div>
    </div>

    <script src="https://cdn.tiny.cloud/1/{{ env('TINY_MCE_API_KEY') }}/tinymce/6/tinymce.min.js" referrerpolicy="origin">
    </script>


    <script>
        tinymce.init({
            selector: 'textarea'
        });
    </script>

</body>

</html>
