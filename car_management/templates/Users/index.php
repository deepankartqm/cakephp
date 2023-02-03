
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
                <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'nav-link fs-4']) ?>
            </li>

            <li class="nav-item">
                <?= $this->Html->link(__('Rated Cars'), ['action' => 'indexrating'], ['class' => 'nav-link fs-4']) ?>
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
                    <div class="users index content">
                    <!-- <aside class="column">
                        <div class="side-nav">
                            <h4 class="heading"><?= __('Actions') ?></h4>
                            <?= $this->Html->link(__('List Cars'), ['action' => 'indexcar'], ['class' => 'side-nav-item']) ?>
                        </div>
                    </aside> -->
                    
                    <?= $this->Html->link(__('LOGOUT'), ['action' => 'logout'], ['class' => 'button float-right fs-4']) ?>
                    <!-- <?= $this->Html->link(__('ADD CAR'), ['action' => 'addcar'], ['class' => 'button float-right fs-4 mx-2']) ?>  -->
                    <!-- <?= $this->Html->link(__('ADD NEW USER'), ['action' => 'add'], ['class' => 'btn btn-success float-right fs-4']) ?> -->
                    <h3><?= __('Users') ?></h3>
                    <div class="table-responsive ">
                        <table>
                            <thead>
                                <tr>
                                    <th><?= $this->Paginator->sort('id') ?></th>
                                    <th><?= $this->Paginator->sort('name') ?></th>
                                    <th><?= $this->Paginator->sort('email') ?></th>
                                    <th><?= $this->Paginator->sort('status') ?></th>
                                    <th><?= $this->Paginator->sort('role') ?></th>
                                    <th><?= $this->Paginator->sort('created_at') ?></th>
                                    <th><?= $this->Paginator->sort('modified_at') ?></th>
                                    <th class="actions"><?= __('Actions') ?></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($users as $user): ?>
                                <tr>
                                    <td><?= $this->Number->format($user->id) ?></td>
                                    <td><?= h($user->name) ?></td>
                                    <td><?= h($user->email) ?></td>
                                    <!-- <td><?= $this->Number->format($user->status) ?></td> -->

                                    <td>
                                    <?php If($user->status == 1) : ?>
                                    <?= $this->Form->postLink(__('Inactive'), ['action' => 'userStatus', $user->id, $user->status], ['confirm' => __('Are you sure you want to Inactive # {0}?', $user->id)]) ?>

                                    <?php else : ?>
                                        <?= $this->Form->postLink(__('Active'), ['action' => 'userStatus', $user->id, $user->status], ['confirm' => __('Are you sure you want to Inactive # {0}?', $user->id)]) ?>
                                        <?php endif ; ?>
                                    </td>

                                    <td><?= $this->Number->format($user->role) ?></td>
                                    <td><?= h($user->created_at) ?></td>
                                    <td><?= h($user->modified_at) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->id]) ?>
                                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="paginator">
                        <ul class="pagination fs-3">
                            <?= $this->Paginator->first('<< ' . __('first')) ?>
                            <?= $this->Paginator->prev('< ' . __('previous')) ?>
                            <?= $this->Paginator->numbers() ?>
                            <?= $this->Paginator->next(__('next') . ' >') ?>
                            <?= $this->Paginator->last(__('last') . ' >>') ?>
                        </ul>
                        <p class=" fs-5"><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
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


