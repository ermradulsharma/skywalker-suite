   <!-- Main Sidebar Container -->
   <aside class="main-sidebar sidebar-dark-primary elevation-4">
       <!-- Brand Logo -->
       <a href="index3.html">
    
           <img src="{{asset('/')}}dist/img/zaiba.png" alt="AdminLTE Logo" class="brand-image pt-3" width="90%">
           <hr>
         
       </a>

       <!-- Sidebar -->
       <div class="sidebar">
         

           <!-- Sidebar Menu -->
           <nav class="mt-2">
               <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                   <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                   <li class="nav-item menu-open">
                       <a href="#" class="nav-link ">
                           <i class="nav-icon fas fa-tachometer-alt"></i>
                           <p>
                               Dashboard
                               <i class="right fas fa-angle-left"></i>
                           </p>
                       </a>
                     
                   </li>
                
                   <!-- <li class="nav-item">
                       <a href="pages/calendar.html" class="nav-link">
                       <i class=" nav-icon fa fa-users" aria-hidden="true"></i>
                           <p>
                               Users
                               <span class="badge badge-info right">2</span>
                           </p>
                       </a>
                   </li> -->

                   <li class="nav-item">
                       <a href="{{url('services')}}" class="nav-link {{ request()->is('services*') ? 'active' : '' }}">
                       <i class=" nav-icon fa fa-address-book" aria-hidden="true"></i>
                           <p>
                               Service
                              
                           </p>
                       </a>
                   </li>


                   <li class="nav-item">
                       <a href="{{url('project')}}" class="nav-link {{ request()->is('project*') ? 'active' : '' }}">
                           <i class="nav-icon far fa-image"></i>
                           <p>
                               Project
                           </p>
                       </a>
                   </li>
                  
               
                 
                
                  
                  
                   
                  
               </ul>
           </nav>
           <!-- /.sidebar-menu -->
       </div>
       <!-- /.sidebar -->
   </aside>