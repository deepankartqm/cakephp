
<div class="row">
    <div class="column-responsive column-80 text-center">
        <div class="cars form content text-center">
            <?= $this->Form->create($car) ?>
            <fieldset>
                <legend><?= __('Edit Car') ?></legend>
                
               
                <?= $this->Flash->render() ?>
                <?= $this->Form->create(null,['id'=>'form', 'class'=>'text-center']) ?>

                  <div class="input-group input-group-outline my-3">
                    <?php  echo $this->Form->control('user_id', ['options' => $users , 'class'=>'form-control','placeholder'=>'Email','label'=>false,'required' => false,'input'=>'font-size:12px;', 'style'=>'width:366px;']);?>
                  </div>

                  <div class="input-group input-group-outline mb-3">
                    <?= $this->Form->control('name', ['class'=>'form-control','placeholder'=>'password','label'=>false,'required' => false,'input'=>'font-size:12px;', 'style'=>'width:366px;']) ?>
                  </div>

                  <div class="input-group input-group-outline my-3">
                    <?php  echo $this->Form->control('brand_id', ['options' => $brands , 'class'=>'form-control','placeholder'=>'Email','label'=>false,'required' => false,'input'=>'font-size:12px;', 'style'=>'width:366px;']);?>
                  </div>
                 
                  <div class="input-group input-group-outline mb-3">
                    <?= $this->Form->control('make', ['class'=>'form-control','placeholder'=>'Make','label'=>false,'required' => false,'input'=>'font-size:12px;', 'style'=>'width:366px;']) ?>
                  </div>

                  <div class="input-group input-group-outline mb-3">
                    <!-- <?= $this->Form->control('model', ['class'=>'form-control','placeholder'=>'Model','label'=>false,'required' => false,'input'=>'font-size:12px;', 'style'=>'width:366px;']) ?> -->
                    <select class='form-control' style='width:366px;'>
                              <option value="<?php $car->colors?>"><?= h($car->colors)?></option>
                              <option>red</option>
                              <option>black</option>
                              <option>brown</option>
                              <option>pink</option>
                              <option>yellow</option>
                              <option>Dark gray</option>
                              </select>
                              <?php echo $car->colors?>
                  </div>

                  <div class="input-group input-group-outline mb-3">
                    <?= $this->Form->control('colors', ['class'=>'form-control','placeholder'=>'Colors','label'=>false,'required' => false,'input'=>'font-size:12px;', 'style'=>'width:366px;']) ?>
                  </div>

                  <div class="input-group input-group-outline mb-3">
                    <?= $this->Form->control('description', ['class'=>'form-control','placeholder'=>'Description','label'=>false,'required' => false,'input'=>'font-size:12px;', 'style'=>'width:366px;']) ?>
                  </div>

                  <div class="input-group input-group-outline mb-3">
                    <?= $this->Form->control('image', ['class'=>'form-control','type'=>'file','placeholder'=>'Upload image','label'=>false,'required' => false,'input'=>'font-size:12px;', 'style'=>'width:366px;']) ?>
                  </div>

                  <div class="text-center">
                    <?= $this->Form->button('Submit',['class'=>'btn btn-primary text-center', 'type'=>'submit']); ?>
                      <?= $this->Form->end() ?>
                  </div>
                  <?= $this->Form->end() ?>
                 
              
          
            </fieldset>
           
        </div>
    </div>
</div>
