<aside class="main-sidebar text-white elevation-4" style="background-color:	#000000	" >

<!-- Brand Logo -->
<a href="#" class=" text-white brand-link">
  <img src="{{('assetsss/img/to do logo.jpg')}}" alt="to do logo.jpg" class=" img-responsive" style="opacity: .8;width:100%;height:80px;">
  <!-- <span class="brand-text text-white font-weight-light"><strong><p style="color:white;"><strong>EKLAVYA</strong></p> </strong></span> -->
</a>

<!-- Sidebar -->
<div class="sidebar">
  <!-- Sidebar user panel (optional) -->
   <!-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
   <i class="ionicons ion-ios-home fa-2x" style="color:black" aria-hidden="true"></i>  
    <div class="info">
      <a href="/dashboard" class=" text-white d-block"><strong><p>HOME</p> </strong></a>
    </div>
  </div> -->
<!-- Sidebar Menu -->
  <nav class="">
  @if (Auth::user()->isadmin==2)
    <ul class="nav nav-pills nav-sidebar  flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item menu-open">
        <a  href="/dashboard" class="nav-link text-white">
        <i class="ionicons ion-ios-speedometer"></i>
          <p>
            <strong>
            DASHBOARD
          </strong>
          </p>
        </a>
      </li>
  
    

<li class="nav-item">
            <a href="/use" class="nav-link text-white">
            <i class="ionicons ion-android-hand"></i>
              <p><strong> USER MANAGEMENT</strong></p>
            </a>
          </li> 

          <li class="nav-item">
            <a href="/admintodo" class="nav-link text-white">
            <i class="ionicons ion-android-done-all"></i>
              <p> <strong>CHEACK TO DO LIST</strong></p>
            </a>
          </li> 
          <!-- <li class="nav-item">
            <a href="/" class="nav-link text-white">
            <i class="ionicons ion-clipboard"></i>
              <p><strong>CHEACK Project  Status</strong></p>
            </a>
          </li>  -->
          <li class="nav-item">
            <a href="/admintask" class="nav-link text-white">
            <i class="ionicons ion-android-add"></i>
              <p><strong>ASSIGN TASK</strong></p>
            </a>
          </li> 
          <!-- <li class="nav-item">
            <a href="/" class="nav-link text-white">
            <i class="ionicons ion-android-star-half"></i>
              <p><strong>RATINGS</strong></p>
            </a>
          </li>  -->
          <li class="nav-item">
            <a href="/fullcalender" class="nav-link text-white">
            <i class="ionicons ion-ios-star-outline"></i>
              <p><strong>CALENDER</strong></p>
            </a>
          </li>  
</ul>
@else
@endif

<!-- //----------------user panel---------- -->
@if (Auth::user()->isadmin==1)
<ul class="nav nav-pills nav-sidebar  flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item menu-open">
        <a  href="/dashboard" class="nav-link text-white">
        <i class="ionicons ion-ios-speedometer-outline"></i>
          <p>
            <strong>
            DASHBOARD
</strong>
          </p>
        </a>
      </li>
<li class="nav-item">
            <a href="/todo" class="nav-link text-white">
            <i class="ionicons ion-ios-paper-outline"></i>
              <p> <strong>TO-DO LIST</strong></p>
            </a>
          </li> 
          <!-- <li class="nav-item">
            <a href="/" class="nav-link text-white">
            <i class="ionicons ion-ios-alarm-outline"></i>
              <p><strong>WORKING HOURS</strong></p>
            </a>
          </li> -->
          
          <li class="nav-item">
            <a href="/usercheackpro" class="nav-link text-white">
            <i class="ionicons ion-ios-star-outline"></i>
              <p><strong>CHEACK ASSIGN TASK</strong></p>
            </a>
          </li>  
          <li class="nav-item">
            <a href="/fullcalender" class="nav-link text-white">
            <i class="ionicons ion-ios-star-outline"></i>
              <p><strong>CALENDER</strong></p>
            </a>
          </li>  
          



@else
@endif
  </nav>
  <!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->
</aside>  
