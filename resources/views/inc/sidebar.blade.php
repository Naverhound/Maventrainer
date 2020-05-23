<div class="left-sidebar-pro">
    <nav id="sidebar" class="">
        <div class="sidebar-header">
            <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
            <strong><img src="img/logo/logosn.png" alt="" /></strong>
        </div>
        <div class="nalika-profile">
            <div class="profile-dtl">
                <a href="#"><img src="{{asset('img/defaultusr.jpeg')}}" alt="" /></a>
                @isset(Auth::user()->userinfos)
                    <h2>{{Auth::user()->userinfos->name}}<span class="min-dtn"> {{Auth::user()->userinfos->lastname}}</span></h2>
                @endisset                
                <h2>Maven<span class="min-dtn"> Trainer</span></h2>
                
            </div>
           
        </div>
        <div class="left-custom-menu-adp-wrap comment-scrollbar">
            <nav class="sidebar-nav left-sidebar-menu-pro">
                <ul class="metismenu" id="menu1">

                    <li id="removable">
                        <a class="has-arrow" href="#" aria-expanded="false"><i class="icon nalika-new-file icon-wrap"></i> <span class="mini-click-non">Pages</span></a>
                        <ul class="submenu-angle" aria-expanded="false">
                            <li><a title="Login" href="login.html"><span class="mini-sub-pro">Login</span></a></li>
                            <li><a title="Register" href="register.html"><span class="mini-sub-pro">Register</span></a></li>
                            <li><a title="Lock" href="lock.html"><span class="mini-sub-pro">Lock</span></a></li>
                            <li><a title="Password Recovery" href="password-recovery.html"><span class="mini-sub-pro">Password Recovery</span></a></li>
                        </ul>
                    </li>

                </ul>
            </nav>
        </div>
    </nav>
</div>