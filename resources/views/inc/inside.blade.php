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
        
            <div class="vid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/TSdGUaHj3TA" allowfullscreen></iframe>
                          </div>
                    </div>
                   
                   
                   
                </div>
            </div>
        
        
        <!--footer-->
        @include('inc.footer')
    </div>
    @include('inc.scripts')
</body>
    
</html>