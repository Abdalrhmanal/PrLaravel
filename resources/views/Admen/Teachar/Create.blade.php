@extends('Admen.layout')
@section('content')


<div class="container-scroller">
  <!-- partial -->
   <div class="container-fluid page-body-wrapper">
  
  
    <!-- partial:partials/_sidebar.html -->
    <nav class="sidebar sidebar-offcanvas" id="sidebar">
      <ul class="nav">
        <li class="nav-item nav-category">Main</li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
            <span class="menu-title">Homepage</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
            <span class="menu-title">Our network</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="ui-basic">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href=" #">Linked In</a></li>
              <li class="nav-item"> <a class="nav-link" href=" #">Facebook</a></li>
              <li class="nav-item"> <a class="nav-link" href=" #">Instagram</a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#business-t2">
            <span class="icon-bg"><i class="mdi mdi-contacts menu-icon"></i></span>
            <span class="menu-title">Teachars</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/cc">
            <span class="icon-bg"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
            <span class="menu-title">Courses</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>
            <span class="menu-title">Services</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/stud">
            <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
            <span class="menu-title">Table Students</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
            <span class="menu-title">Communication</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
            <span class="icon-bg"><i class="mdi mdi-lock menu-icon"></i></span>
            <span class="menu-title">User Pages</span>
            <i class="menu-arrow"></i>
          </a>
          <div class="collapse" id="auth">
            <ul class="nav flex-column sub-menu">
              <li class="nav-item"> <a class="nav-link" href="#"> Blank Page </a></li>
              <li class="nav-item"> <a class="nav-link" href=""> Login </a></li>
              <li class="nav-item"> <a class="nav-link" href=""> Register </a></li>
              <li class="nav-item"> <a class="nav-link" href="#"> 404 </a></li>
              <li class="nav-item"> <a class="nav-link" href="#"> 500 </a></li>
            </ul>
          </div>
        </li>
        <li class="nav-item documentation-link">
          <a class="nav-link" href="http://www.bootstrapdash.com/demo/connect-plus-free/jquery/documentation/documentation.html" target="_blank">
            <span class="icon-bg">
              <i class="mdi mdi-file-document-box menu-icon"></i>
            </span>
            <span class="menu-title">Documentation</span>
          </a>
        </li>
        <li class="nav-item sidebar-user-actions">
          <div class="user-details">
            <div class="d-flex justify-content-between align-items-center">
              <div>
                <div class="d-flex align-items-center">
                  <div class="sidebar-profile-img">
                    <img src="{{asset('assets/images/faces')}}/face28.png" alt="image">
                  </div>
                  <div class="sidebar-profile-text">
                    <p class="mb-1">Abdulrahman Saraqbi</p>
                  </div>
                </div>
              </div>
              <div class="badge badge-danger">3</div>
            </div>
          </div>
        </li>
        <li class="nav-item sidebar-user-actions">
          <div class="sidebar-user-menu">
            <a href="#" class="nav-link"><i class="mdi mdi-settings menu-icon"></i>
              <span class="menu-title">Settings</span>
            </a>
          </div>
        </li>
        <li class="nav-item sidebar-user-actions">
          <div class="sidebar-user-menu">
            <a href="#" class="nav-link"><i class="mdi mdi-speedometer menu-icon"></i>
              <span class="menu-title">Take Tour</span></a>
          </div>
        </li>
        <li class="nav-item sidebar-user-actions">
          <div class="sidebar-user-menu">
            <a href="#" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
              <span class="menu-title">Log Out</span></a>
          </div>
        </li>
      </ul>
    </nav>


    <div class="container">
        <div class="row">
            <div class="col-12 pt-2">
               <a href="/" class="btn btn-outline-primary btn-sn">Go Bake</a>
              <div class="border rounded nt-5 p-4">
               <h1> Create a New Session</h1>
               <p>Fille and a create Session</p>
               <hr>
               <form action="" method="POST">
                   @csrf
                   <div class="row">
                    <div class="control-group col-12" >
                        <label for="name"> name</label>
                        <input type="text" id="name" class="form-control" name="name" placeholder="Enter name" required>
                    </div>
                       <div class="control-group col-12" >
                           <label for="phone"> phone</label>
                           <input type="text" id="phone" class="form-control" name="phone" placeholder="Enter Number phone" required>
                       </div>
                       <div class="control-group col-12" >
                           <label for="specialty">specialty</label>
                           <input type="text" id="specialty" class="form-control" name="specialty" placeholder="Enter specialty" required>
                       </div><br><br><br><br>
                       <div class="control-group col-12" >
                           <label for="img">img</label>
                           <input type="text" id="img" class="form-control" name="img" placeholder="Enter Link img" required>
                       </div><br><br><br><br><br><br>
                       <div class="row mt-2">
                           <div class="control-group col-12 text-center" >
                               <button id="btn-submit" class="btn btn-primary">
                                   Create Session
                               </button>
                           </div>
                       </div>
                   </div>
               </form>
              </div>
            </div>
        </div>
    </div>
</div>
</div>