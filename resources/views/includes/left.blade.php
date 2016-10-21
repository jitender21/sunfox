
<nav class="navbar-default navbar-static-side" role="navigation">
<div class="sidebar-collapse">
   <ul class="nav metismenu" id="side-menu">
       <li class="nav-header">
           <div class="dropdown profile-element"><span>
                            <img alt="image" class="img-circle" src="/uploads/profile/{{Auth::user()->profile_image}}">
                             </span>
               <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                   <span class="clear"><span class="block m-t-xs"> <strong class="font-bold"><h1>SUNFOX</h1></strong>
                    </span>
                    <b class="caret"></b></span>  </a>
               <ul class="dropdown-menu animated fadeInRight m-t-xs">
                   <li><a href="profile">Profile</a></li>
                   <li class="divider"></li>
                   <li><a href="{{ url('/logout') }}">Logout</a></li>
               </ul>
           </div>
           <li><a href="/sunfox"><i class="fa fa-th-large"></i>Sunfox</a></li>
           <li><a href="/digital"><i class="fa fa-diamond"></i>Digital</a></li>
           <li><a href="/manage"><i class="fa fa-pie-chart"></i>Manage</a></li>
       </li>
     </ul>
   </div>
 </nav>
