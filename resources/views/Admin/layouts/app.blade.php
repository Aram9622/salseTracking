<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Structure/Dashboard</title>
{{--    <link rel="icon" href="{{asset('images/4010/Fortune-logo.png')}}" type="image/png" sizes="16x16">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/style/styles.css')}}">
    <link rel="stylesheet" href="{{ asset('css/style/clients.css') }}">
    <link rel="stylesheet" href="{{asset('css/style/app.css')}}">
    <style>


    </style>
</head>
<body>
<div class="wrapper">
    <input type="checkbox" id="menuToggler" class="input-toggler" value="1" autofocus="true"/>
    <label for="menuToggler" id="menuTogglerLabel" class="menu-toggler" role="button" aria-pressed="false"
           aria-expanded="false" aria-label="Navigation button">
        <span class="menu-toggler__line"></span>
        <span class="menu-toggler__line"></span>
        <span class="menu-toggler__line"></span>
    </label>
    <div id="sidebar" role="navigation" aria-labelledby="menuTogglerLabel" aria-hidden="true"
         class=" sidebar">
        <div class="navigation-bar">
            <div class="logo-bar">
                <img src="@if(Auth::user()->image != ''){{asset('uploads/agent/'.Auth::user()->image)}} @else {{asset('images/no-image.png')}} @endif" alt="Logo" title="Logo">
            </div>
            <div class="switch-button"><span class="active"></span>
                <button class="switch-button-case left active-case" id="structures-btn">Structures</button>
                <button class="switch-button-case right">Insurance</button>
            </div>
            @include('Admin.menu')
        </div>
    </div>
    <div class="wrapper-body">
        <header>
            <nav>
                <div class="page_name">
                    <h1>@yield('title')</h1>
                </div>
                <div class="user_avatar_bar">
                    <h3 class="user-name">{{Auth::user()->f_name}} {{Auth::user()->l_name}}</h3>
                    <a href="{{route('admin.my-account')}}">
                        <img src="@if(Auth::user()->image != ''){{asset('uploads/agent/'.Auth::user()->image)}} @else {{asset('images/no-image.png')}} @endif" alt="Logo" title="Logo" width="50px">
                    </a>

                </div>
            </nav>
        </header>
        <!-- /header  -->
        @yield('content')
        <footer>

        </footer>
    </div>
</div>
<script>

</script>
<script src="https://cdn.amcharts.com/lib/4/core.js"></script>
<script src="https://cdn.amcharts.com/lib/4/charts.js"></script>
<script src="https://cdn.amcharts.com/lib/4/themes/animated.js"></script>
<script src="{{asset('js/lib/js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/script/select.js')}}"></script>
<script src="{{asset('js/script/switch-buttons.js')}}"></script>
<script src="{{asset('js/script/script.js')}}"></script>
<script src="{{asset('js/script/chart-diagram.js')}}"></script>
<script>
    $(document).on('click', '.card-item', function () {
        let c = $(this);
        $(c).addClass("active-card").siblings().removeClass("active-card");
    });
</script>
</body>
</html>