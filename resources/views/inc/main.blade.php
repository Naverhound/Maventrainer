<!doctype html>
<html class="no-js" lang="en">

@include('inc.head')

<body >
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

   <!--sidebar-->
    @include('inc.sidebar')
   
    <div class="all-content-wrapper"></div>
         <!--header-->
       @include('inc.navbar')
        <!--contenido-->
        @yield('content')
    </div>
        <!--footer-->
        @include('inc.footer')

    
    
    @include('inc.scripts')
</body>

</html>