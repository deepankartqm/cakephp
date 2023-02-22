
<style>
    .cars{
        width : 500px;
        margin : 100px auto ;
    }
</style>




        <div class="cars form content">
            <fieldset>
                <legend><?= __('Edit Car') ?></legend>
                
                
                <?= $this->Flash->render() ?>
                <?= $this->Form->create($car,['type'=>'file']) ?>
                <!-- <?= $this->Form->create(null,['id'=>'form', 'class'=>'text-center', 'type'=>'file']) ?> -->

              
                  <div class="input-group input-group-outline mb-3">
                    <?= $this->Form->control('name', ['class'=>'form-control','placeholder'=>'Name','label'=>false,'required' => false,'input'=>'font-size:12px;', 'style'=>'width:366px;']) ?>
                  </div>

                  <div class="input-group input-group-outline my-3">
                    <?php  echo $this->Form->control('brand_id', ['options' => $brands , 'class'=>'form-control','placeholder'=>'Email','label'=>false,'required' => false,'input'=>'font-size:12px;', 'style'=>'width:366px;']);?>
                  </div>
                 
                  <div class="input-group input-group-outline mb-3">
                    <?= $this->Form->control('make', ['class'=>'form-control','placeholder'=>'Make','label'=>false,'required' => false,'input'=>'font-size:12px;', 'style'=>'width:366px;']) ?>
                  </div>

                  <div class="input-group input-group-outline mb-3">
                    <?= $this->Form->control('model', ['class'=>'form-control','placeholder'=>'Model','label'=>false,'required' => false,'input'=>'font-size:12px;', 'style'=>'width:366px;']) ?>
                 
                  </div>

                  <div class="input-group input-group-outline mb-3">
                    <?php 
                            echo $this->Form->select(
                            'colors',
                            ['Choose Color','Red', 'Black','Yellow','Dark grey'],['class'=>'form-control','style'=>'width:366px;']); ?>
                    </div>

                  <div class="input-group input-group-outline mb-3">
                    <?= $this->Form->control('description', ['class'=>'form-control','placeholder'=>'Description','label'=>false,'required' => false,'input'=>'font-size:12px;', 'style'=>'width:366px;']) ?>
                  </div>

                  <div class="input-group input-group-outline mb-3">
                    <?= $this->Form->control('image_file', ['class'=>'form-control','type'=>'file','placeholder'=>'Upload image','label'=>false,'required' => false,'input'=>'font-size:12px;', 'style'=>'width:366px;']) ?>
                  </div>

                    <?= $this->Form->button('Submit',['class'=>'btn btn-primary', 'type'=>'submit']); ?>
                    <?= $this->Form->end() ?>
                
                 
              
          
            </fieldset>
           
        </div>
