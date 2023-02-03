<!-- <?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($user->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($user->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($user->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Status') ?></th>
                    <td><?= $this->Number->format($user->status) ?></td>
                </tr>
                <tr>
                    <th><?= __('Role') ?></th>
                    <td><?= $this->Number->format($user->role) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($user->created_at) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified At') ?></th>
                    <td><?= h($user->modified_at) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Brands') ?></h4>
                <?php if (!empty($user->brands)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Modified At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->brands as $brands) : ?>
                        <tr>
                            <td><?= h($brands->id) ?></td>
                            <td><?= h($brands->user_id) ?></td>
                            <td><?= h($brands->name) ?></td>
                            <td><?= h($brands->description) ?></td>
                            <td><?= h($brands->status) ?></td>
                            <td><?= h($brands->created_at) ?></td>
                            <td><?= h($brands->modified_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Brands', 'action' => 'view', $brands->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Brands', 'action' => 'edit', $brands->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Brands', 'action' => 'delete', $brands->id], ['confirm' => __('Are you sure you want to delete # {0}?', $brands->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Cars') ?></h4>
                <?php if (!empty($user->cars)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Name') ?></th>
                            <th><?= __('Brand Id') ?></th>
                            <th><?= __('Make') ?></th>
                            <th><?= __('Model') ?></th>
                            <th><?= __('Colors') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Image') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th><?= __('Modified At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->cars as $cars) : ?>
                        <tr>
                            <td><?= h($cars->id) ?></td>
                            <td><?= h($cars->user_id) ?></td>
                            <td><?= h($cars->name) ?></td>
                            <td><?= h($cars->brand_id) ?></td>
                            <td><?= h($cars->make) ?></td>
                            <td><?= h($cars->model) ?></td>
                            <td><?= h($cars->colors) ?></td>
                            <td><?= h($cars->description) ?></td>
                            <td><?= h($cars->image) ?></td>
                            <td><?= h($cars->status) ?></td>
                            <td><?= h($cars->created_at) ?></td>
                            <td><?= h($cars->modified_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Cars', 'action' => 'view', $cars->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Cars', 'action' => 'edit', $cars->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cars', 'action' => 'delete', $cars->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cars->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Ratings') ?></h4>
                <?php if (!empty($user->ratings)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Car Id') ?></th>
                            <th><?= __('Rating') ?></th>
                            <th><?= __('Reviews') ?></th>
                            <th><?= __('Review') ?></th>
                            <th><?= __('Status') ?></th>
                            <th><?= __('Created At') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($user->ratings as $ratings) : ?>
                        <tr>
                            <td><?= h($ratings->id) ?></td>
                            <td><?= h($ratings->user_id) ?></td>
                            <td><?= h($ratings->car_id) ?></td>
                            <td><?= h($ratings->rating) ?></td>
                            <td><?= h($ratings->reviews) ?></td>
                            <td><?= h($ratings->review) ?></td>
                            <td><?= h($ratings->status) ?></td>
                            <td><?= h($ratings->created_at) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Ratings', 'action' => 'view', $ratings->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Ratings', 'action' => 'edit', $ratings->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ratings', 'action' => 'delete', $ratings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ratings->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div> -->

<!-- //////////////////////////////////// -->


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
                    <div class="users view content">
                        <h3><?= h($user->name) ?></h3>
                        <table>
                            <tr>
                                <th><?= __('Name') ?></th>
                                <td><?= h($user->name) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Email') ?></th>
                                <td><?= h($user->email) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Id') ?></th>
                                <td><?= $this->Number->format($user->id) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Status') ?></th>
                                <td><?= $this->Number->format($user->status) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Role') ?></th>
                                <td><?= $this->Number->format($user->role) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Created At') ?></th>
                                <td><?= h($user->created_at) ?></td>
                            </tr>
                            <tr>
                                <th><?= __('Modified At') ?></th>
                                <td><?= h($user->modified_at) ?></td>
                            </tr>
                        </table>
                        <div class="related">
                            <h4><?= __('Related Brands') ?></h4>
                            <?php if (!empty($user->brands)) : ?>
                            <div class="table-responsive">
                                <table>
                                    <tr>
                                        <th><?= __('Id') ?></th>
                                        <th><?= __('User Id') ?></th>
                                        <th><?= __('Name') ?></th>
                                        <th><?= __('Description') ?></th>
                                        <th><?= __('Status') ?></th>
                                        <th><?= __('Created At') ?></th>
                                        <th><?= __('Modified At') ?></th>
                                        <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($user->brands as $brands) : ?>
                                    <tr>
                                        <td><?= h($brands->id) ?></td>
                                        <td><?= h($brands->user_id) ?></td>
                                        <td><?= h($brands->name) ?></td>
                                        <td><?= h($brands->description) ?></td>
                                        <td><?= h($brands->status) ?></td>
                                        <td><?= h($brands->created_at) ?></td>
                                        <td><?= h($brands->modified_at) ?></td>
                                        <td class="actions">
                                            <?= $this->Html->link(__('View'), ['controller' => 'Brands', 'action' => 'view', $brands->id]) ?>
                                            <?= $this->Html->link(__('Edit'), ['controller' => 'Brands', 'action' => 'edit', $brands->id]) ?>
                                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Brands', 'action' => 'delete', $brands->id], ['confirm' => __('Are you sure you want to delete # {0}?', $brands->id)]) ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="related">
                            <h4><?= __('Related Cars') ?></h4>
                            <?php if (!empty($user->cars)) : ?>
                            <div class="table-responsive">
                                <table>
                                    <tr>
                                        <th><?= __('Id') ?></th>
                                        <th><?= __('User Id') ?></th>
                                        <th><?= __('Name') ?></th>
                                        <th><?= __('Brand Id') ?></th>
                                        <th><?= __('Make') ?></th>
                                        <th><?= __('Model') ?></th>
                                        <th><?= __('Colors') ?></th>
                                        <th><?= __('Description') ?></th>
                                        <th><?= __('Image') ?></th>
                                        <th><?= __('Status') ?></th>
                                        <th><?= __('Created At') ?></th>
                                        <th><?= __('Modified At') ?></th>
                                        <!-- <th class="actions"><?= __('Actions') ?></th> -->
                                    </tr>
                                    <?php foreach ($user->cars as $cars) : ?>
                                    <tr>
                                        <td><?= h($cars->id) ?></td>
                                        <td><?= h($cars->user_id) ?></td>
                                        <td><?= h($cars->name) ?></td>
                                        <td><?= h($cars->brand_id) ?></td>
                                        <td><?= h($cars->make) ?></td>
                                        <td><?= h($cars->model) ?></td>
                                        <td><?= h($cars->colors) ?></td>
                                        <td><?= h($cars->description) ?></td>
                                        <td><?= $this->Html->image(h($cars->image),['width'=>'150px']) ?></td>
                                        <td><?= h($cars->status) ?></td>
                                        <td><?= h($cars->created_at) ?></td>
                                        <td><?= h($cars->modified_at) ?></td>
                                        <!-- <td class="actions">
                                            <?= $this->Html->link(__('View'), ['controller' => 'Cars', 'action' => 'view', $cars->id]) ?>
                                            <?= $this->Html->link(__('Edit'), ['controller' => 'Cars', 'action' => 'edit', $cars->id]) ?>
                                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Cars', 'action' => 'delete', $cars->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cars->id)]) ?>
                                        </td> -->
                                    </tr>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                            <?php endif; ?>
                        </div>
                        <div class="related">
                            <h4><?= __('Related Ratings') ?></h4>
                            <?php if (!empty($user->ratings)) : ?>
                            <div class="table-responsive">
                                <table>
                                    <tr>
                                        <th><?= __('Id') ?></th>
                                        <th><?= __('User Id') ?></th>
                                        <th><?= __('Car Id') ?></th>
                                        <th><?= __('Rating') ?></th>
                                        <th><?= __('Reviews') ?></th>
                                        <th><?= __('Review') ?></th>
                                        <th><?= __('Status') ?></th>
                                        <th><?= __('Created At') ?></th>
                                        <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                    <?php foreach ($user->ratings as $ratings) : ?>
                                    <tr>
                                        <td><?= h($ratings->id) ?></td>
                                        <td><?= h($ratings->user_id) ?></td>
                                        <td><?= h($ratings->car_id) ?></td>
                                        <td><?= h($ratings->rating) ?></td>
                                        <td><?= h($ratings->reviews) ?></td>
                                        <td><?= h($ratings->review) ?></td>
                                        <td><?= h($ratings->status) ?></td>
                                        <td><?= h($ratings->created_at) ?></td>
                                        <td class="actions">
                                            <?= $this->Html->link(__('View'), ['controller' => 'Ratings', 'action' => 'view', $ratings->id]) ?>
                                            <?= $this->Html->link(__('Edit'), ['controller' => 'Ratings', 'action' => 'edit', $ratings->id]) ?>
                                            <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ratings', 'action' => 'delete', $ratings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ratings->id)]) ?>
                                        </td>
                                    </tr>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                            <?php endif; ?>
                        </div>
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