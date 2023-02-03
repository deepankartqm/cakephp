<!-- in /templates/Users/login.php -->
<!-- <div class="users form">
    <?= $this->Flash->render() ?>
    <h3>Login</h3>
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your email and password') ?></legend>
        <?= $this->Form->control('email', ['required' => false]) ?>
        <?= $this->Form->control('password', ['required' => false]) ?>
    </fieldset>
    <?= $this->Form->submit(__('Login')); ?>
    <?= $this->Form->end() ?>

    <p>Do not have Account?  <?= $this->Html->link("Register Here", ['action' => 'add']) ?></p>
</div> -->


<!-- ////////////////////////// -->


<!doctype html>
<html lang="en">

<head>
	<title>Login 05</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<?php echo $this->Html->css(['style', 'bootstrap.min']) ?>
	<?= $this->Html->css(['cake']) ?>
	<style>
		input {
			font-size: 16px;
		}
		
		.error{
			color:red;
			font-size: 15px;
        }

		.message.success {
			background: #e3fcec;
			color: #1f9d55;
			border-color: #51d88a;
		}
		.message.warning {
			background: #fffabc;
			color: #8d7b00;
			border-color: #d3b800;
		}
		.message.error {
			background: #fcebea;
			color: #cc1f1a;
			border-color: #ef5753;
		}

	</style>

</head>

<body style="background-image: url(/img/car4.jpg); background-size: cover; background-repeat: no-repeat; filter: blur(px);  ">
	<section class="ftco-section">
		<div class="container">
		<?= $this->Flash->render() ?>
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section text-white"><strong>Login<strong></h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-7 col-lg-5">
					<div class="wrap">
						<div class="img" style="background-image: url(/img/ford.jpg);"></div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<!-- <h3 class="mb-4">Please enter your email and password</h3> -->
									<legend class="fs-4 text-dark"><em>Please Enter Your Email & Password</em></legend>
								</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#"
											class="social-icon d-flex align-items-center justify-content-center"><span
												class="fa fa-facebook"></span></a>
										<a href="#"
											class="social-icon d-flex align-items-center justify-content-center"><span
												class="fa fa-twitter"></span></a>
									</p>
								</div>
							</div>
							<div class="container-fluid row">

							<?= $this->Flash->render() ?>

							<?= $this->Form->create(null,['id'=>'form']) ?>
							<div class="form-group mt-3">
								<?= $this->Form->control('email', ['required' => false]) ?>
								<!-- <label class="form-control-placeholder" for="username">Username</label> -->
							</div>
							<div class="form-group">
								<?= $this->Form->control('password', ['required' => false,'input'=>'font-size:12px;']) ?>
								<!-- <label class="form-control-placeholder" for="password">Password</label> -->
							</div>
							<div class="form-group">
								<!-- <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button> -->
								<?= $this->Form->submit(__('Login',['class'=>'my-2'])); ?>
								<?= $this->Form->end() ?>
							</div>

							<p class="text-left ">Not a member?
								<?= $this->Html->link("Register Here", ['action' => 'add', 'class'=>'text-primary']) ?>
							</p>


							<p class="text-left fs-5">Go to
								<?= $this->Html->link("Home Page", ['action' => 'home']) ?>
							</p>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?= $this->fetch('script') ?>

	<?= $this->Html->script(['form']) ?>

</body>

</html>