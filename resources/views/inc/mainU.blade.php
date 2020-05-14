<!doctype html>
<html class="no-js" lang="en">
@include('inc.head')

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

   <!--sidebar-->
        @include('inc.sidebar')

    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        
        <!--header-->
        @include('inc.navbar')
        <!--contenido-->
        @section('name')
            
        @endsection
        
        <!--footer-->
        @include('inc.footer')
    </div>
    
</body>

</html>