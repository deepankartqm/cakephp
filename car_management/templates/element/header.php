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

                <!-- <li class="nav-item"><a class="nav-link" href="<?= $this->Url->build('/') ?>">Offers</a></li> -->

                <!-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                    
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="blog.html">Blog</a>
                      <a class="dropdown-item" href="team.html">Team</a>
                      <a class="dropdown-item" href="testimonials.html">Testimonials</a>
                      <a class="dropdown-item" href="terms.html">Terms</a>
                    </div>
                </li> -->
                <!-- <li class="nav-item"><a class="nav-link" href="about-us.html">About Us</a></li> -->
                
               
                <li class="nav-item">
                <?= $this->Html->link(__('Login'), ['action' => 'login'], ['class' => 'nav-link']) ?>
                    <!-- <a class="nav-link" href="contact.html">Contact Us</a> -->
                </li>

                <li class="nav-item">
                <?= $this->Html->link(__('Register'), ['action' => 'add'], ['class' => 'nav-link']) ?>
                    <!-- <a class="nav-link" href="contact.html">Contact Us</a> -->
                </li>


                <li class="nav-item">
                <?= $this->Html->link(__('logout'), ['action' => 'logout'], ['class' => 'nav-link']) ?>
                    <!-- <a class="nav-link" href="contact.html">Contact Us</a> -->
                </li>

            </ul>
          </div>
        </div>
      </nav>
    </header>