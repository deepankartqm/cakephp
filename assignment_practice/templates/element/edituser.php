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

        <div class="card-body">
            <?= $this->Flash->render() ?>
            <?= $this->Form->create($user,['id'=>'form']) ?>
            <div class="input-group input-group-outline mb-3">

              <?= $this->Form->control('name', ['class'=>'form-control','placeholder'=>'Name','label'=>false,'required' => false,'input'=>'font-size:12px;', 'style'=>'width:366px;']) ?>
            </div>
            <div class="input-group input-group-outline mb-3">

              <?= $this->Form->control('email', ['class'=>'form-control','placeholder'=>'Email','label'=>false,'required' => false,'input'=>'font-size:12px;', 'style'=>'width:366px;']) ?>
            </div>
            <div class="input-group input-group-outline mb-3">

              <!-- <?= $this->Form->control('password', ['class'=>'form-control','placeholder'=>'Password','label'=>false,'required' => false,'input'=>'font-size:12px;', 'style'=>'width:366px;']) ?> -->
            </div>
            
            <div class="text-center">

              <?= $this->Form->button('Add User',['class'=>'btn btn-primary form-control text-center', 'type'=>'submit']); ?>
              <?= $this->Form->end() ?>
            </div>

    <?= $this->Html->script(['form']) ?>

</body>

</html>