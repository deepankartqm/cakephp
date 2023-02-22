
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <title>
    Material Dashboard 2 by Creative Tim
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="../assets/css/nucleo-icons.css" rel="stylesheet" />
  <link href="../assets/css/nucleo-svg.css" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->

  <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js" integrity="sha512-rstIgDs0xPgmG6RX1Aba4KV5cWJbAMcvRCVmglpam9SoHZiUCyQVDdH2LPlxoHtrv17XWblE/V/PP+Tr04hbtA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
      
      .error{
        color:red;
      }
    
    </style>
  <?= $this->Html->css(['cake']) ?>
</head>

<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
          <div class="container-fluid ps-2 pe-0">
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                  <a class="nav-link d-flex align-items-center me-2 active" aria-current="page" href="/Users/dashboard">
                    <i class="fa fa-chart-pie opacity-6 text-dark me-1"></i>
                    Dashboard
                  </a>
                </li>

              </ul>
            </div>
          </div>
        </nav>
        <!-- End Navbar -->
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative bg-gradient-primary h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url(/img/img/illustrations/illustration-signup.jpg); background-size: cover;">
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card card-plain">
                <div class="card-header">
                  <h4 class="font-weight-bolder">Add User</h4>
                  <!-- <p class="mb-0">Enter your email and password to register</p> -->
                </div>
                <div class="card-body">
                
                    <?= $this->Flash->render() ?>
							      <?= $this->Form->create($user,['id'=>'form']) ?>
                    <div class="input-group input-group-outline mb-3">
                      <!-- <label class="form-label">Name</label>
                      <input type="text" class="form-control"> -->
                      <?= $this->Form->control('name', ['class'=>'form-control','placeholder'=>'Name','label'=>false,'required' => false,'input'=>'font-size:12px;', 'style'=>'width:366px;']) ?>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <!-- <label class="form-label">Email</label>
                      <input type="email" class="form-control"> -->
                      <?= $this->Form->control('email', ['class'=>'form-control','placeholder'=>'Email','label'=>false,'required' => false,'input'=>'font-size:12px;', 'style'=>'width:366px;']) ?>
                    </div>
                    <div class="input-group input-group-outline mb-3">
                      <!-- <label class="form-label">Password</label>
                      <input type="password" class="form-control"> -->
                      <?= $this->Form->control('password', ['class'=>'form-control','placeholder'=>'Password','label'=>false,'required' => false,'input'=>'font-size:12px;', 'style'=>'width:366px;']) ?>
                    </div>
                    
                    <div class="text-center">
                      <!-- <button type="button" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Sign Up</button> -->
                      <?= $this->Form->button('Add User',['class'=>'btn btn-primary form-control text-center', 'type'=>'submit']); ?>
                      <?= $this->Form->end() ?>
                    </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/material-dashboard.min.js?v=3.0.4"></script>

  <?= $this->Html->script(['form']) ?>


  <script>

    $('#form').on('submit', function(e) {
        e.preventDefault();
        
        var formData = new FormData(this);

        $.ajax({
            url: "http://localhost:8765/users/add",
            data: formData,
            method: "Post",
            processData:false,
            contentType:false,
            success:function(data){
                alert('data submit ucccesful');
            }
        });
    });

  </script>

</body>

</html>