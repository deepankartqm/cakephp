    <!-- Header -->
    <header class="">
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

                <li class="nav-item text-right">
                <!-- <?= $this->Html->link(__('logout'), ['action' => 'logout'], ['class' => 'nav-link text-right']) ?> -->
                    <!-- <a class="nav-link" href="contact.html">Contact Us</a> -->
                </li>

            </ul>
          </div>
        </div>
      </nav>
  </header> 