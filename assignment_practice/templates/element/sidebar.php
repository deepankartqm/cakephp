
  <body class="g-sidenav-show  bg-gray-100">

<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3   bg-gradient-dark" id="sidenav-main">

<div class="sidenav-header">
<i class="fas fa-times p-3 cursor-pointer text-white opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
<a class="navbar-brand m-0" href=" https://demos.creative-tim.com/material-dashboard/pages/dashboard " target="_blank">
<img src="/img/img/logo-ct.png" class="navbar-brand-img h-100" alt="main_logo">
<span class="ms-1 font-weight-bold text-white">Material Dashboard 2</span>
</a>
</div>


<hr class="horizontal light mt-0 mb-2">

<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
<ul class="navbar-nav">

<li class="nav-item">
<a class="nav-link text-white " href="/Users/dashboard">

<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
  <i class="material-icons opacity-10">dashboard</i>
</div>

<span class="nav-link-text ms-1">Dashboard</span>
</a>
</li>


<li class="nav-item">
<a class="nav-link text-white " href="/Users/listTable">

<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
<i class="fa-solid fa-users"></i>
</div>

<span class="nav-link-text ms-1">User's Table</span>
</a>
</li>


<li class="nav-item">
<a class="nav-link text-white " href="/cars/index">

<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
  <i class="fa-regular fa-rectangle-list"></i>
</div>

<span class="nav-link-text ms-1">Car's List</span>
</a>
</li>

<!-- <li class="nav-item">
  <a class="nav-link text-white " href=<?php echo $this->Url->build([
      'controller' => 'Users',
      'action' => 'adduser',
      ]);?> >
  
  <div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
    <i class="fa-solid fa-plus"></i>
  </div>
  
  <span class="nav-link-text">Add User</span>
  </a>
  </li> -->

<li class="nav-item">
<a class="nav-link text-white " href=<?php echo $this->Url->build([
    'controller' => 'Cars',
    'action' => 'add',
    ]);?> >

<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
  <i class="fa-solid fa-plus"></i>
</div>

<span class="nav-link-text">Add Car</span>
</a>
</li>


<li class="nav-item mt-3">
<h6 class="ps-4 ms-2 text-uppercase text-xs text-white font-weight-bolder opacity-8">Account pages</h6>
</li>

<li class="nav-item">
<a class="nav-link text-white" href="/Users/profile">

<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
  <i class="material-icons opacity-10">person</i>
</div>

<span class="nav-link-text ms-1">Profile</span>
</a>
</li>


<!-- <li class="nav-item">
<a class="nav-link text-white " href="/Users/sign_in">

<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
  <i class="material-icons opacity-10">login</i>
</div>

<span class="nav-link-text ms-1">Sign In</span>
</a>
</li>


<li class="nav-item">
<a class="nav-link text-white " href="/Users/sign_up">

<div class="text-white text-center me-2 d-flex align-items-center justify-content-center">
  <i class="material-icons opacity-10">assignment</i>
</div>

<span class="nav-link-text ms-1">Sign Up</span>
</a>
</li> -->

</ul>
</div>

<div class="sidenav-footer position-absolute w-100 bottom-0 ">
<div class="mx-3">
<a class="btn bg-gradient-primary mt-4 w-100" href="/Users/logout" type="button">Logout</a>
</div>

</div>

</aside>

<main class="main-content border-radius-lg ">
  <!-- Navbar -->

<nav class="navbar navbar-main navbar-expand-lg px-0 mx-4 shadow-none border-radius-xl" id="navbarBlur" data-scroll="true">
<div class="container-fluid py-1 px-3">
<nav aria-label="breadcrumb">



</nav>
<!----------------------- search --------------->
<div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
<div class="ms-md-auto pe-md-3 d-flex align-items-center">
    
    <div class="input-group input-group-outline">
      <input class="fs-12 search form-control" style="height:35px"  id="searchBox" type="search" placeholder="Search" aria-label="Search">
    </div>
    
</div>
<ul class="navbar-nav  justify-content-end">
  

  <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
    <a href="javascript:;" class="nav-link text-body p-0" id="iconNavbarSidenav">
      <div class="sidenav-toggler-inner">
        <i class="sidenav-toggler-line"></i>
        <i class="sidenav-toggler-line"></i>
        <i class="sidenav-toggler-line"></i>
      </div>
    </a>
  </li>
  <li class="nav-item px-3 d-flex align-items-center">
    <a href="javascript:;" class="nav-link text-body p-0">
      <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i>
    </a>
  </li>
  <li class="nav-item dropdown pe-2 d-flex align-items-center">
    <a href="javascript:;" class="nav-link text-body p-0" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="fa fa-bell cursor-pointer"></i>
    </a>

    <ul class="dropdown-menu  dropdown-menu-end  px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
      <li class="mb-2">
        <a class="dropdown-item border-radius-md" href="javascript:;">
          <div class="d-flex py-1">
            <div class="my-auto">
              <img src="./assets/img/team-2.jpg" class="avatar avatar-sm  me-3 ">
            </div>
            <div class="d-flex flex-column justify-content-center">
              <h6 class="text-sm font-weight-normal mb-1">
                <span class="font-weight-bold">New message</span> from Laur
              </h6>
              <p class="text-xs text-secondary mb-0">
                <i class="fa fa-clock me-1"></i>
                13 minutes ago
              </p>
            </div>
          </div>
        </a>
      </li>
      <li class="mb-2">
        <a class="dropdown-item border-radius-md" href="javascript:;">
          <div class="d-flex py-1">
            <div class="my-auto">
              <img src="./assets/img/small-logos/logo-spotify.svg" class="avatar avatar-sm bg-gradient-dark  me-3 ">
            </div>
            <div class="d-flex flex-column justify-content-center">
              <h6 class="text-sm font-weight-normal mb-1">
                <span class="font-weight-bold">New album</span> by Travis Scott
              </h6>
              <p class="text-xs text-secondary mb-0">
                <i class="fa fa-clock me-1"></i>
                1 day
              </p>
            </div>
          </div>
        </a>
      </li>
      <li>
        <a class="dropdown-item border-radius-md" href="javascript:;">
          <div class="d-flex py-1">
            <div class="avatar avatar-sm bg-gradient-secondary  me-3  my-auto">
              
            </div>
            <div class="d-flex flex-column justify-content-center">
              <h6 class="text-sm font-weight-normal mb-1">
                Payment successfully completed
              </h6>
              <p class="text-xs text-secondary mb-0">
                <i class="fa fa-clock me-1"></i>
                2 days
              </p>
            </div>
          </div>
        </a>
      </li>
    </ul>
  </li>
</ul>
</div>
</div>
</nav>