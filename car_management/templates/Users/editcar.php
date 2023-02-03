<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Car $car
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $brands
 */
?>
<!-- <div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $car->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $car->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Cars'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cars form content">
            <?= $this->Form->create($car, ['enctype'=>'multipart/form-data']) ?>
            <fieldset>
                <legend><?= __('Edit Car') ?></legend>
                <?php
                    echo $this->Form->control('user_id', ['options' => $users]);
                    echo $this->Form->control('name');
                    echo $this->Form->control('brand_id', ['options' => $brands]);
                    echo $this->Form->control('make');
                    echo $this->Form->control('model');
                    echo '<label>Colors</label>';
                    echo $this->Form->select(
                        'colors',
                        ['Choose Color','Red', 'Black','Yellow','Dark grey']);
                    echo $this->Form->control('description');
                    echo $this->Form->control('image_file',['type'=>'file']);
                    echo $this->Form->control('status');
                    // echo $this->Form->control('created_at');
                    echo $this->Form->control('modified_at');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div> -->
<!-- /////////////////////////////////////// -->



<!DOCTYPE html>
<html lang="en">

<head>

  <?= $this->Html->css(['adminstyle','normalize.min', 'milligram.min', 'cake']) ?>

</head>
<body>
 
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
        <?= $this->element('adminnav') ?>
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
            <li class="nav-item">
            <h4 class="m-5"> <em><strong>Menu</strong></em> </h4>
            <h4 class="mx-4 fs-2"> Actions </h4>
                <?= $this->Html->link(__('List Cars'), ['action' => 'indexcar'], ['class' => 'nav-link fs-4']) ?>
            </li>
            
            <li class="nav-item">
                <?= $this->Html->link(__('List All Users'), ['action' => 'index'], ['class' => 'nav-link fs-4']) ?>
            </li>
        </ul>
      </nav>

      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="d-flex justify-content-between flex-wrap">
                <div class="d-flex align-items-end flex-wrap">
                  <div class="me-md-3 me-xl-5">
                    <h2>Welcome back</h2>

                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
          <div class="col-md">
            <div class="row">
                <div class="column-responsive column-100">
                    <div class="cars form content">
                        <?= $this->Form->create($car, ['enctype'=>'multipart/form-data']) ?>
                        <fieldset>
                            <legend><?= __('Edit Car') ?></legend>
                            <?php
                                echo $this->Form->control('user_id', ['options' => $users]);
                                echo $this->Form->control('name');
                                echo $this->Form->control('brand_id', ['options' => $brands]);
                                echo $this->Form->control('make');
                                echo $this->Form->control('model');
                                echo '<label>Colors</label>';
                                echo $this->Form->select(
                                    'colors',
                                    ['Choose Color','Red', 'Black','Yellow','Dark grey']);
                                echo $this->Form->control('description');
                                echo $this->Form->control('image_file',['type'=>'file']);
                                echo $this->Form->control('status');
                                // echo $this->Form->control('created_at');
                                echo $this->Form->control('modified_at');
                            ?>
                        </fieldset>
                        <?= $this->Form->button(__('Submit')) ?>
                        <?= $this->Form->end() ?>
                    </div>
                </div>
            </div>
            

          </div>
          </div>
      </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <footer class="footer">
        <div class="d-sm-flex justify-content-center justify-content-sm-between fs-2">
          <span class="text-muted text-center text-sm-left d-block d-sm-inline-block fs-5">Copyright © 2023 Car Management System</span>
          <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Admin Panal</span>
        </div>
        </footer>
     
      </div>
 
    </div>
</body>

</html>
