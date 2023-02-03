



<!-- //////////////////////////////////// -->


<!doctype html>
<html lang="en">
  <head>
  	<title>Login 05</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<?php echo $this->Html->css(['style', 'bootstrap.min']) ?>

    <style>
        .error-message{
            color:red;
            font-size: 13px;
        }
        
        input{
            font-size: 16px;
            padding:0 ;
        }
        
        .error{
            color:red;
            font-size: 15px;
        }

    </style>
    

	</head>
	<body style="background-image: url(/img/img2.jpg); background-size: cover; background-repeat: no-repeat; filter: blur(px);  ">
        <section class="ftco-section">
            <div class="container">
                <div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section text-white"><strong>Login</strong></h2>
				</div>
			</div>
			<div class="row justify-content-center">
                <div class="col-md-7 col-lg-6">
                    <div class="wrap">
						<div class="img"  style="background-image: url(/img/car1.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                
                                
                                <!-- Form Start -->
                                <div class="container-fluid row">
                                  <?= $this->Flash->render() ?>
      
                                  <div class="column-responsive">
                                      
                                      <?= $this->Form->create($user, ['id'=>'form']) ?>
                                        <fieldset>
                                            <legend class="fs-2 text-dark"><em>Create Account</em></legend>
                                            <?php
                                                echo $this->Form->control('name',['required'=>false, 'class'=>'form-group']);
                                                echo $this->Form->control('email',['required'=>false, 'class'=>'form-group']);
                                                echo $this->Form->control('password',['required'=>false, 'class'=>'form-group']);
                                                // echo $this->Form->control('confirm_password',['type'=>'password', 'required'=>false, 'class'=>'form-group']);
                                                // echo $this->Form->control('role');
                                                // echo $this->Form->control('created_at');
                                                // echo $this->Form->control('modified_at');
                                                // echo $this->Form->control('token');
                                            ?>
                                        </fieldset>
                                        <?= $this->Form->button(__('Submit',['class'=>'my-2 form-group'])) ?>
                                        <?= $this->Form->end() ?>
                                        <p class="my-2">Already have Account?  <?= $this->Html->link("Login", ['action' => 'login']) ?></p>
                                        <p class="text-left fs-5">Go to  <?= $this->Html->link("Home Page", ['action' => 'home']) ?></p>
                                    
                                </div>
                            </div>

							<!-- Form End -->
		            </div>

				</div>
			</div>
		</div>
	</section>

    <?= $this->fetch('script') ?>
    <?= $this->Html->script(['form']) ?>


	</body>
</html>