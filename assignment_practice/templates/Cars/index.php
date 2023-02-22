
 <?= $user->email ; ?>
  <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Cars table</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-3 load-table">
                <?= $this->Flash->render() ?>

                <table class="table align-items-center mb-0" id="table">
                  <thead>
                    <tr>
                      <th class="font-weight-bolder">S.no</th>
                      <th class="font-weight-bolder ">Name</th>
                      <th class="font-weight-bolder">Make</th>
                      <th class="font-weight-bolder">Model</th>
                      <th class="font-weight-bolder">colors</th>
                      <th class="font-weight-bolder">Image</th>
                      <th class="font-weight-bolder">Status</th>
                      <th class="font-weight-bolder">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- //forech  -->
                    <?php foreach($cars as $car){ ?>
                    <tr>

                      <td>
                          <h6 class="mb-0 text-sm "><?= $this->Number->format($car->id) ?></h6>
                      </td>

                      <td>
                        <h6 class="mb-0 text-sm"><?= h($car->name) ?></h6>
                      </td>
                    

                      <td>
                        <p class="text-xs font-weight-bold mb-0"><?= h($car->make) ?></p>
                      </td>

                      <td>
                        <p class="text-xs font-weight-bold mb-0"><?= h($car->model) ?></p>
                      </td>

                      <td>
                        <p class="text-xs font-weight-bold mb-0"><?= h($car->colors) ?></p>
                      </td>
                     
                      <td class="align-middle ">
                        <span class="text-secondary text-xs font-weight-bold"><?= $this->Html->image($car->image,['width'=>'100px']) ?></span>
                      </td> 

                      <td class="align-middle text-sm">
                        <!-- user status start  -->
                        <?php if ($car->status == 1) : ?>
                        <span class="badge badge-sm bg-gradient-success "> <?= $this->Form->postLink(__('Inactive'), ['action' => 'carStatus', $car->id, $car->status], ['confirm' => __('Are you sure you want to Inactive # {0}?', $car->id)]) ?></span>
                        
                        <?php else : ?>
                          <span class="badge badge-sm bg-danger text-white "><?= $this->Form->postLink(__('Active',['class'=>'text-white']), ['action' => 'carStatus', $car->id, $car->status],['confirm' => __('Are you sure you want to Inactive # {0}?', $car->id)]) ?></span>
                        
                        <?php endif ; ?>

                        <!-- user status end -->
                      </td>
                      
                      <td class="actions">
                        <?= $this->Html->link(__(''), ['action' => 'view', $car->id],['class'=>"fa-solid fa-eye fs-5"]) ?>
                        <!-- <?= $this->Html->link(__(''), ['action' => 'edit', $car->id],['class'=>"fa-sharp fa-solid fa-pen-to-square edituser fs-5"]) ?> -->
                        <!-- <?= $this->Form->postLink(__(''), ['action' => 'delete', $car->id], ['class'=>"delete-user fa-solid fa-trash-can fs-5" ,'confirm' => __('Are you sure you want to delete # {0}?', $car->id)]) ?> -->

                        <a href="javascript:void(0)"
                          class="fa-sharp fa-solid fa-pen-to-square editcar fs-5"
                          data-bs-toggle="modal" data-bs-target="#exampleModal"
                          data-id="<?= $car->id ?>"></a>

                    </td>
                  </tr>

                    <?php }?>

                    <!-- close forech  -->
                  </tbody>
                </table>
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
            </div>
          </div>
        </div>
      </div>
 
      <footer class="footer py-4  ">
        <div class="container-fluid">
          <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6 mb-lg-0 mb-4">
              <div class="copyright text-center text-sm text-muted text-lg-start">
                © <script>
                  document.write(new Date().getFullYear())
                </script>,
                made with <i class="fa fa-heart"></i> by
                <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
                for a better web.
              </div>
            </div>
            <div class="col-lg-6">
              <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                <li class="nav-item">
                  <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
                </li>
                <li class="nav-item">
                  <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit Details</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <div class="card-body">

                    <!-- form Start  -->

  
                    <fieldset>
                        <legend><?= __('Edit Car') ?></legend>

                        <?= $this->Flash->render() ?>
                        <?= $this->Form->create($car,['id'=>'form', 'class'=>'text-center','type'=>'file']) ?>
         
                        <input type="hidden" id="car_id" name="id">

                          <div class="input-group input-group-outline mb-3">
                            <?= $this->Form->control('name', ['class'=>'form-control','placeholder'=>'name','label'=>false,'required' => false,'input'=>'font-size:12px;', 'style'=>'width:366px;','id'=>'name']) ?>
                          </div>
        
                          <div class="input-group input-group-outline my-3">

                               
                              <select name="brand_id" id="" class="form-control">
                                <?php foreach($brand as $brand):?>
                                <option value="<?= h($brand->id)?>"><?= h($brand->name)?></option>
                                <?php endforeach;?>
                              </select>

                          </div>
                         
                          <div class="input-group input-group-outline mb-3">
                            <?= $this->Form->control('make', ['class'=>'form-control','id'=>'make','placeholder'=>'Make','label'=>false,'required' => false,'input'=>'font-size:12px;', 'style'=>'width:366px;']) ?>
                          </div>
        
                          <div class="input-group input-group-outline mb-3">
                            <?= $this->Form->control('model', ['class'=>'form-control','id'=>'model','placeholder'=>'Model','label'=>false,'required' => false,'input'=>'font-size:12px;', 'style'=>'width:366px;']) ?>
                           
                          </div>

                          <div class="input-group input-group-outline mb-3">
                           
                            <select class='form-control' style='width:366px;'>
                                      <option value="<?php $car->colors?>"><?= h($car->colors)?></option>
                                      <option>red</option>
                                      <option>black</option>
                                      <option>brown</option>
                                      <option>pink</option>
                                      <option>yellow</option>
                                      <option>Dark gray</option>
                                      </select>
 
                          </div>
        
                          <!-- <div class="input-group input-group-outline mb-3">
                            <?= $this->Form->control('colors', ['class'=>'form-control','placeholder'=>'Colors','label'=>false,'required' => false,'input'=>'font-size:12px;', 'style'=>'width:366px;']) ?>
                          </div> -->
        
                          <div class="input-group input-group-outline mb-3">
                            <?= $this->Form->control('description', ['class'=>'form-control','type'=>'textarea','id'=>'description','placeholder'=>'Description','label'=>false,'required' => false,'input'=>'font-size:12px;', 'style'=>'width:366px;']) ?>
                          </div>
        
                          <div class="input-group input-group-outline mb-3">
                            <?= $this->Form->control('image', ['class'=>'form-control','type'=>'file','placeholder'=>'Upload image','label'=>false,'required' => false,'input'=>'font-size:12px;', 'style'=>'width:366px;']) ?>
                          </div>
        
                          <div class="text-center">

                          <?= $this->Form->button('Edit',['class'=>'btn btn-primary text-center','id'=>'form-btn']); ?>
                          <button type="button"  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                          <?= $this->Form->end() ?>
                          </div>

                    </fieldset>

                    <!-- form End  -->                      

                </div>
            </div>
        </div>
    </div>
  <!-- modal -->


  <?= $this->Html->script(['search']) ?>



  <script>

//-------------------Fetching data in modal through ajax ----------------------//

$(document).ready(function(){

    $(document).on('click', '.editcar', function (){
      var car_id = $(this).attr('data-id');
          
          $.ajax({
            
            url: "/cars/ajaxedit/"+car_id,
            data : {'id':car_id},
            type : 'JSON',
            method :'get',
            success : function (response){
              // alert(response);
              user = $.parseJSON(response);

              $("#car_id").val(user['id'])
              $("#name").val(user['name']);
              $("#brand").val(user['brand']['name']);
              $("#make").val(user['make']);
              $("#model").val(user['model']);
              $("#color").val(user['color']);
              $("#description").val(user['description']);
              $("#email").val(user['email']);

            }
            
          })
    });

    
  });

//-------------------update data in modal through ajax ----------------------//

$(document).ready(function () {
  var csrfToken = $('meta[name="csrfToken"]').attr('content');
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': csrfToken // this is defined in app.php as a js variable
        }
    });
    
    $("#form").validate({
      rules: {
        name: {
          required: true,
        },
        email: {
          required: true,
        },
      },
      messages: {
        name: {
          required: " Please enter your name",
        },
        email: {
          required: "Please enter your email",
        },
      },
      submitHandler: function (form) {

            var formData = new FormData(form);

            alert(formData);
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": csrfToken,
                },
                
                url: "/cars/editcar",
                type: "JSON",
                method: "POST",
                cache: false,
                processData: false,
                contentType: false,
                data: formData,
                success: function (response) {
                               
                    console.log(response);
                    var data = JSON.parse(response);
                    if (data["status"] == 0) {
                        alert(data["message"]);
                    } else {
                        swal(
                          "Updated Successfully!",
                          "Details has been saved!",
                          "success"
                          );
                          $('#exampleModal').hide();
                        $(".load-table").load("/Cars/index .load-table");
                        $('.modal-backdrop').remove();
                    }
                },
            });
            return false;
        },
    });
});


//-------------------DELETING data in modal through ajax ----------------------//

$(document).ready(function(){

  $('.delete-user').on('click',function(){
    var formdata= $(this).attr('data-id');
    var hide=$(this).parents('tr');
    swal({
    title: "Are you sure to delete this  of ?",
    text: "Delete Confirmation?",
    type: "warning",
    showCancelButton: true,
    confirmButtonColor: "#DD6B55",
    confirmButtonText: "Delete",
    closeOnConfirm: false
  },
  function() {
    $.ajax({
        type: "get",
        url: "/Users/delete",
        data: {"id":formdata},
        success: function(data) {
          hide.hide();
        }
      })
      .done(function(data) {
        swal("Deleted!", "Data successfully Deleted!", "success");
      })
      .error(function(data) {
        swal("Oops", "We couldn't connect to the server!", "error");
      });

      }
    );
  });

});





  </script>

</body>

</html>