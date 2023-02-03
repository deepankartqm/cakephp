<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">


  </head>

  <body>
  
  <!-- nav -->
    <!-- Header -->
    <header class="mb-5 sticky-top">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href=""><h2>Car Management <em>System</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= $this->Url->build('/') ?>">Home</a>
                </li> 

                <li class="nav-item">
                <?= $this->Html->link(__('Login'), ['action' => 'login'], ['class' => 'nav-link']) ?>
                
                    <!-- <a class="nav-link" href="contact.html">Contact Us</a> -->
                </li>

                <!-- <li class="nav-item">
                <?= $this->Html->link(__('Register'), ['action' => 'add'], ['class' => 'nav-link']) ?>
                </li>
                 -->
                

                <!-- <?php foreach ($users as $user): ?>
                <?php if($user->status == 0) : ?>
                <?= $this->Html->link(__('Logout'), ['action' => 'logout'], ['class' => 'button float-right']) ?> 
                <?php endif ; ?>
                <?php endforeach; ?> -->

              
            </ul>
          </div>
        </div>
      </nav>
    </header>
<!-- Banner image -->
    <div class="banner header-text p-0">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01" style="background-image: url(/img/car3.png);">
          <div class="text-content">
            <h4>Find your car today!</h4>
            <h2>Cross the Limits With Our Cars</h2>
            <!-- <img src="/img/ford.jpg" alt=""> -->
          </div>
        </div>
      </div>
    </div>

  <!-- nav -->
  <div class="w-50">
      <?= $this->Form->create(null, ['type'=>'get'])?>
      <?= $this->Form->control('key', ['label'=>'Search Car', 'style'=>'width:350;'])?>
      <?= $this->Form->button(__('Search',['class'=>'my-2 form-group'])) ?>
      <?= $this->Html->link(__('Back'), ['action' => 'home'], ['class' => 'btn btn-danger float-right fs-4']) ?>
      <?= $this->Form->end()?> <br>
  </div>

<div class="cars index content">
    <!-- <?= $this->Html->link(__('Back'), ['action' => 'index'], ['class' => 'btn btn-danger float-right fs-4']) ?> -->
    <!-- <?= $this->Html->link(__('New Car'), ['action' => 'addcar'], ['class' => 'button float-right']) ?> -->

    

    <h3><?= __('Our Featured Cars') ?></h3>
    <div class="">
        <table>
            <thead>
              <!-- <tr>
                    <th><?= $this->Paginator->sort('image') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('brand_id') ?></th>
                    <th><?= $this->Paginator->sort('make') ?></th>
                    <th><?= $this->Paginator->sort('model') ?></th>
                    <th><?= $this->Paginator->sort('colors') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('status') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                </tr> -->
                
            </thead>
            <tbody>
                
                <?php foreach ($cars as $car): ?>
                <tr>
                


                 
                    
                      <div class="col-md-3 ">
                      <tr><?= $this->Html->image(h($car->image),['width'=>'550px']) ?></tr>
                        <span><span>
                      </div>
                      <div class="col-md-9 mb-5">
                        <?= $this->Html->link(__('View More Details'), ['action' => 'viewcardetails',$car->id], ['class' => 'button float-left fs-4 my-2']) ?><br>
                        
                        <div class="card-body"><br>
                            <h6>
                            <label><small>Name : </small> <?= h($car->name) ?></label>
                            </h6>
                            <h6><label><small>Brand : </small><?= $car->has('brand') ? $this->Html->link($car->brand->name, ['controller' => 'Brands', 'action' => 'view', $car->brand->id]) : ''?></h6></label>

                            <label><small>Desciption : <p><?= h($car->description) ?></p></small>
                            <label><small>Color : <p><?= h($car->colors) ?></p></small>
                            <!-- <label><small>Status : <p><?= $this->Number->format($car->status) ?></p></small> -->
                            <label><small>Manufactured Date : <p><?= h($car->created_at) ?></p></small>
                            </div>
                              </div>
                              
                            
                  </div>

                  
                  
                      
                          <!-- <span><tr><?= $this->Html->image(h($car->image),['width'=>'550px']) ?></tr><span>
                          
                          <h6>
                            <label><small>Name : </small> <?= h($car->name) ?></label>
                          </h6>
                          <h6><label><small>Brand : </small><?= $car->has('brand') ? $this->Html->link($car->brand->name, ['controller' => 'Brands', 'action' => 'view', $car->brand->id]) : ''?></h6></label>
                          
                          <label><small>Desciption : <p><?= h($car->description) ?></p></small>
                          <label><small>Color : <p><?= h($car->colors) ?></p></small> -->
                          <!-- <label><small>Status : <p><?= $this->Number->format($car->status) ?></p></small> -->
                          <!-- <label><small>Manufactured Date : <p><?= h($car->created_at) ?></p></small> -->
                          
                   
              <!-- 
                    <td><?= h($car->image) ?></td>
                    <td><?= h($car->name) ?></td>
                    <td><?= $car->has('brand') ? $this->Html->link($car->brand->name, ['controller' => 'Brands', 'action' => 'view', $car->brand->id]) : '' ?></td>
                    <td><?= h($car->make) ?></td>
                    <td><?= h($car->model) ?></td>
                    <td><?= h($car->colors) ?></td>
                    <td><?= h($car->description) ?></td>
                    <td><?= $this->Number->format($car->status) ?></td>
                    <td><?= h($car->created_at) ?></td> -->
                </tr>
                <?php endforeach; ?>
                
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>


 <!-- About US -->

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Us</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <p>Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipisicing elit. Explicabo, esse consequatur alias repellat in excepturi inventore ad <a href="#">asperiores</a> tempora ipsa. Accusantium tenetur voluptate labore aperiam molestiae rerum excepturi minus in pariatur praesentium, corporis, aliquid dicta.</p>
              <ul class="featured-list">
                <li><a href="#">Lorem ipsum dolor sit amet</a></li>
                <li><a href="#">Consectetur an adipisicing elit</a></li>
                <li><a href="#">It aquecorporis nulla aspernatur</a></li>
                <li><a href="#">Corporis, omnis doloremque</a></li>
              </ul>
              <a href="" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="/img/ford.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

<!-- About End -->

    <div class="services" style="background-image: url(/img/car1.jpg);" >
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest blog posts</h2>

              <a href="blog.html">read more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="#" class="services-item-image"><img src="assets/images/blog-1-370x270.jpg" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="#">Lorem ipsum dolor sit amet, consectetur adipisicing elit hic</a></h4>

                <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="#" class="services-item-image"><img src="assets/images/blog-2-370x270.jpg" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit</a></h4>

                <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="#" class="services-item-image"><img src="assets/images/blog-3-370x270.jpg" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="#">Aperiam modi voluptatum fuga officiis cumque</a></h4>

                <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="happy-clients">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Happy Clients</h2>

              <a href="testimonials.html">read more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-clients owl-carousel text-center">
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>John Doe</h4>
                  <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Jane Smith</h4>
                  <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Antony Davis</h4>
                  <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>John Doe</h4>
                  <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Jane Smith</h4>
                  <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Antony Davis</h4>
                  <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Lorem ipsum dolor sit amet, consectetur adipisicing.</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
                </div>
                <div class="col-lg-4 col-md-6 text-right">
                  <a href="contact.html" class="filled-button">Contact Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="bg-dark text-white">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p class="text-white">Copyright © 2023 Car Management System - MADE by: <a href="">DEEPANKAR RAO</a></p>
            </div>
          </div>
        </div>
      </div>
</footer>
   

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>
</html>