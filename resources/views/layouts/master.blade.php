<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>

    <!-- bootstrap cdn -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" 
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/cc881508d5.js"></script>

    <!-- custom css -->
    <link rel="stylesheet" href="{{url('admin/css/styles.css')}}">
</head>
<body>
    <header id="nav">
        <div class="navbrand">admin panel</div>
        <!-- <div class="nav-right">
            <img src="../images/me.jpg" alt="">
            <i class="fa fa-angle-down"></i>
        </div> -->
        <div class="menu-bar" onclick="showmenu()">
            <button><i class="fa fa-bars"></i></button>
        </div>    
    </header>
    <section id="side-nav">
        <ul>
            <li><a href="{{route('admin.dashboard')}}" class="p-2"><i class="fa fa-cog"></i>settings</a></li>
            <li><a href="{{route('admin.skill')}}"><i class="fa fa-book"></i>skills</a></li>
            <li><a href="{{route('admin.service')}}"><i class="fa fa-wrench"></i>services</a></li>
            <li><a href="{{route('admin.link')}}"><i class="fa fa-share-square"></i>social links</a></li>
            <li><a href="{{route('admin.mail')}}"><i class="fa fa-envelope"></i>mails</a></li>
            <li><a href="{{route('admin.logout')}}"><i class="fa fa-sign-out"></i>Logout</a></li>
        </ul>
    </section>
    <div class="wrapper">
        <div class="wizard">
            @yield('content')
        </div>
    </div>
    <script>
        var nav = document.getElementById('side-nav');
        function showmenu(){
            nav.classList.toggle('flex');
        }
    </script>
</body>
</html>