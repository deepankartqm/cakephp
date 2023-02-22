
<!DOCTYPE html>
<html lang="en">

<head>

    <style>
      
      .error{
        color:red;
      }
    
    </style>
  <?= $this->Html->css(['cake']) ?>
</head>

<body class="">

  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
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

  <?= $this->Html->script('/js/core/bootstrap.min.js')?>
  <?= $this->Html->script('/js/plugins/perfect-scrollbar.min')?>
  <?= $this->Html->script('/js/plugins/smooth-scrollbar.min')?>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>


  <?= $this->Html->script(['form']) ?>


</body>

</html>