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

  
  <!-- partial -->
  <div class="main-panel">
    <div class="content-wrapper">
      <div class="row" id="proBanner">
        <div class="col-12">
          <span class="d-flex align-items-center purchase-popup">
            <p>Like what you see? Check out our premium version for more.</p>
            <a href="https://github.com/BootstrapDash/ConnectPlusAdmin-Free-Bootstrap-Admin-Template" target="_blank" class="btn ml-auto download-button">Download Free Version</a>
            <a href="http://www.bootstrapdash.com/demo/connect-plus/jquery/template/" target="_blank" class="btn purchase-button">Upgrade To Pro</a>
            <i class="mdi mdi-close" id="bannerClose"></i>
          </span>
        </div>
      </div>
      <div class="d-xl-flex justify-content-between align-items-start">
        <h2 class="text-dark font-weight-bold mb-2"> Overview dashboard </h2>
        <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">
          <div class="btn-group bg-white p-3" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-link text-light py-0 border-right">7 Days</button>
            <button type="button" class="btn btn-link text-dark py-0 border-right">1 Month</button>
            <button type="button" class="btn btn-link text-light py-0">3 Month</button>
          </div>
          <div class="dropdown ml-0 ml-md-4 mt-2 mt-lg-0">
            <button class="btn bg-white dropdown-toggle p-3 d-flex align-items-center" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-calendar mr-1"></i>24 Mar 2019 - 24 Mar 2019 </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
              <h6 class="dropdown-header">Settings</h6>
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Separated link</a>
            </div>
          </div>
        </div>
      </div>
      

    <div class="row">
        <div class="col-md-12">
          
          <div class="tab-content tab-transparent-content">
            <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
              <div class="row">


                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body text-center">
                      <h5 class="mb-2 text-dark font-weight-normal">Orders</h5>
                      <h2 class="mb-4 text-dark font-weight-bold">932.00</h2>
                      <div class="dashboard-progress dashboard-progress-1 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-lightbulb icon-md absolute-center text-dark"></i></div>
                      <p class="mt-4 mb-0">Completed</p>
                      <h3 class="mb-0 font-weight-bold mt-2 text-dark">5443</h3>
                    </div>
                  </div>
                </div>


                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body text-center">
                      <h5 class="mb-2 text-dark font-weight-normal">Unique Visitors</h5>
                      <h2 class="mb-4 text-dark font-weight-bold">756,00</h2>
                      <div class="dashboard-progress dashboard-progress-2 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-account-circle icon-md absolute-center text-dark"></i></div>
                      <p class="mt-4 mb-0">Increased since yesterday</p>
                      <h3 class="mb-0 font-weight-bold mt-2 text-dark">50%</h3>
                    </div>
                  </div>
                </div>


                <div class="col-xl-3  col-lg-6 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body text-center">
                      <h5 class="mb-2 text-dark font-weight-normal">Impressions</h5>
                      <h2 class="mb-4 text-dark font-weight-bold">100,38</h2>
                      <div class="dashboard-progress dashboard-progress-3 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-eye icon-md absolute-center text-dark"></i></div>
                      <p class="mt-4 mb-0">Increased since yesterday</p>
                      <h3 class="mb-0 font-weight-bold mt-2 text-dark">35%</h3>
                    </div>
                  </div>
                </div>


                <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                  <div class="card">
                    <div class="card-body text-center">
                      <h5 class="mb-2 text-dark font-weight-normal">Followers</h5>
                      <h2 class="mb-4 text-dark font-weight-bold">4250k</h2>
                      <div class="dashboard-progress dashboard-progress-4 d-flex align-items-center justify-content-center item-parent"><i class="mdi mdi-cube icon-md absolute-center text-dark"></i></div>
                      <p class="mt-4 mb-0">Decreased since yesterday</p>
                      <h3 class="mb-0 font-weight-bold mt-2 text-dark">25%</h3>
                    </div>
                  </div>
                </div>

              </div>

              
            </div>
          </div>
        </div>
      </div>


    </div>

    <div class="content-wrapper">
      <div class="row" id="proBanner">
        <div class="col-12">
          <span class="d-flex align-items-center purchase-popup">
            <p>Like what you see? Check out our premium version for more.</p>
            <a href="https://github.com/BootstrapDash/ConnectPlusAdmin-Free-Bootstrap-Admin-Template" target="_blank" class="btn ml-auto download-button">Download Free Version</a>
            <a href="http://www.bootstrapdash.com/demo/connect-plus/jquery/template/" target="_blank" class="btn purchase-button">Upgrade To Pro</a>
            <i class="mdi mdi-close" id="bannerClose"></i>
          </span>
        </div>
      </div>
      <div class="d-xl-flex justify-content-between align-items-start">
        <h2 class="text-dark font-weight-bold mb-2"> Overview dashboard </h2>
        <div class="d-sm-flex justify-content-xl-between align-items-center mb-2">
          <div class="btn-group bg-white p-3" role="group" aria-label="Basic example">
            <button type="button" class="btn btn-link text-light py-0 border-right">7 Days</button>
            <button type="button" class="btn btn-link text-dark py-0 border-right">1 Month</button>
            <button type="button" class="btn btn-link text-light py-0">3 Month</button>
          </div>
          <div class="dropdown ml-0 ml-md-4 mt-2 mt-lg-0">
            <button class="btn bg-white dropdown-toggle p-3 d-flex align-items-center" type="button" id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="mdi mdi-calendar mr-1"></i>24 Mar 2019 - 24 Mar 2019 </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton1">
              <h6 class="dropdown-header">Settings</h6>
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Separated link</a>
            </div>
          </div>
        </div>
      </div>
      


      <div class="cll-4" style="padding: 12px;">
        <div class="tab-content tab-transparent-content">
          <div class="tab-pane fade show active" id="business-t2" role="tabpanel" aria-labelledby="business-tab">
            <div class="row">
              @foreach($teacher as $teach)
              <div class="col-6" style="padding: 12px;">
                <div class="card mb-3" style="max-width: 450px;">
                  <div class="row g-0">
                    <div class="col-md-4">
                      <img src="{{$teach->img}}" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                      <div class="card-body">
                        <h5 class="card-title">{{$teach->name}}_____{{$teach->id}}</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <p class="card-text"><small class="text-muted">{{$teach->specialty}}</small>
                          <p class="card-text"><small class="text-muted">{{$teach->phone}}</small>
                      </div>
                      <div class="card-body">
                        <a href="/{{$teach->id}}/ed" class="btn btn-success">Edit</a>
                        <a href="/techs/{{$teach->id}}" class="btn btn-danger">Delete</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>

    

    <!-- content-wrapper ends -->
    <!-- partial:partials/_footer.html -->
    <footer class="footer">
      <div class="footer-inner-wraper">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a> from Bootstrapdash.com</span>
        </div>
      </div>
    </footer>
    <!-- partial -->
  </div>
  <!-- main-panel ends -->
  </div>
</div>