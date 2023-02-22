
    <!-- End Navbar -->
    <div class="container-fluid py-4">
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Users table</h6>
              </div>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0 load-table">
                <table class="table align-items-center mb-0" id="table">
                <?= $this->Flash->render() ?>

                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-left p-2">Name</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-left p-2">Email</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-left p-2">Status</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder text-left p-2">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- //forech  -->
                    <?php foreach($users as $user){
                      
                      if($user->delete_status == 0){
                        continue;
                      }?>
                    <tr>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div>
                            <?php echo $this->Html->image($user->image,['class'=>'avatar avatar-sm me-3 border-radius-lg']) ; ?>
                          </div>
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm "><?php echo $user->name ; ?></h6>
                           
                          </div>
                        </div>
                      </td>
                      <td>
                        <div class="d-flex px-2 py-1">
                          <div class="d-flex flex-column justify-content-center">
                            <h6 class="mb-0 text-sm"><?php echo $user->email ; ?></h6>
                          </div>
                        </div>
                      </td>
                      <td class="align-middle text-sm">
                        
                        <!-- user status start  -->
                        
                        <?php If($user->status == 1) : ?>

                        <span class="badge badge-sm bg-gradient-success "> <?= $this->Form->postLink(__('Inactive'), ['action' => 'userStatus', $user->id, $user->status], ['confirm' => __('Are you sure you want to Inactive # {0}?', $user->id)]) ?></span>
                        
                        <?php else : ?>
                          <span class="badge badge-sm bg-danger text-white "><?= $this->Form->postLink(__('Active',['class'=>'text-white']), ['action' => 'userStatus', $user->id, $user->status],['confirm' => __('Are you sure you want to Inactive # {0}?', $user->id)]) ?></span>
                        
                        <?php endif ; ?>

                        <!-- user status end -->

                      </td>
                      <td class="actions">
                          <?= $this->Html->link(__(''), ['action' => 'view', $user->id],['class'=>"fa-solid fa-eye fs-5"]) ?>

                          
                          <!-- <?= $this->Html->link(__('Edit'), ['action' => 'edituser', $user->id,'id'=> 'modal']) ?> -->
                          <!-- <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->id], ['Swal' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> -->
                          
                          <a href="javascript:void(0)" class="fa-sharp fa-solid fa-pen-to-square edituser fs-5" data-bs-toggle="modal" data-bs-target="#exampleModal" data-id ="<?=$user->id?>"></a>

                          <a href="javascript:void(0)" class="delete-user fa-solid fa-trash-can fs-5" data-id ="<?=$user->id?>"></a>
                          
                          
                      </td>
                    </tr>
                    <?php }?>
                    <!-- close forech  -->

                    <tr>
                   
                  </tbody>
                </table>
                <div class="paginator">
                        <ul class="pagination fs-10">
                            <?= $this->Paginator->first('<< ' . __('first')) ?>
                            <?= $this->Paginator->prev('< ' . __('previous')) ?>
                            <?= $this->Paginator->numbers() ?>
                            <?= $this->Paginator->next(__('next') . ' >') ?>
                            <?= $this->Paginator->last(__('last') . ' >>') ?>
                        </ul>
                        <p class=" fs-10 mx-5"><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>

    <!-- footer -->
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
      </footer>
    </div>
  </main>
  <div class="fixed-plugin">
    <a class="fixed-plugin-button text-dark position-fixed px-3 py-2">
      <i class="material-icons py-2">settings</i>
    </a>
    <div class="card shadow-lg">
      <div class="card-header pb-0 pt-3">
        <div class="float-start">
          <h5 class="mt-3 mb-0">Material UI Configurator</h5>
          <p>See our dashboard options.</p>
        </div>
        <div class="float-end mt-4">
          <button class="btn btn-link text-dark p-0 fixed-plugin-close-button">
            <i class="material-icons">clear</i>
          </button>
        </div>
        <!-- End Toggle Button -->
      </div>
      <hr class="horizontal dark my-1">
      <div class="card-body pt-sm-3 pt-0">
        <!-- Sidebar Backgrounds -->
        <div>
          <h6 class="mb-0">Sidebar Colors</h6>
        </div>

        <a href="javascript:void(0)" class="switch-trigger background-color">
          <div class="badge-colors my-2 text-start">
            <span class="badge filter bg-gradient-primary active" data-color="primary" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-dark" data-color="dark" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-info" data-color="info" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-success" data-color="success" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-warning" data-color="warning" onclick="sidebarColor(this)"></span>
            <span class="badge filter bg-gradient-danger" data-color="danger" onclick="sidebarColor(this)"></span>
          </div>
        </a>

        <!-- Sidenav Type -->
        <div class="mt-3">
          <h6 class="mb-0">Sidenav Type</h6>
          <p class="text-sm">Choose between 2 different sidenav types.</p>
        </div>
        <div class="d-flex">
          <button class="btn bg-gradient-dark px-3 mb-2 active" data-class="bg-gradient-dark" onclick="sidebarType(this)">Dark</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-transparent" onclick="sidebarType(this)">Transparent</button>
          <button class="btn bg-gradient-dark px-3 mb-2 ms-2" data-class="bg-white" onclick="sidebarType(this)">White</button>
        </div>
        <p class="text-sm d-xl-none d-block mt-2">You can change the sidenav type just on desktop view.</p>
        <!-- Navbar Fixed -->
        <div class="mt-3 d-flex">
          <h6 class="mb-0">Navbar Fixed</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="navbarFixed" onclick="navbarFixed(this)">
          </div>
        </div>
        <hr class="horizontal dark my-3">
        <div class="mt-2 d-flex">
          <h6 class="mb-0">Light / Dark</h6>
          <div class="form-check form-switch ps-0 ms-auto my-auto">
            <input class="form-check-input mt-1 ms-auto" type="checkbox" id="dark-version" onclick="darkMode(this)">
          </div>
        </div>
        <hr class="horizontal dark my-sm-4">
        <a class="btn bg-gradient-info w-100" href="https://www.creative-tim.com/product/material-dashboard-pro">Free Download</a>
        <a class="btn btn-outline-dark w-100" href="https://www.creative-tim.com/learning-lab/bootstrap/overview/material-dashboard">View documentation</a>
        <div class="w-100 text-center">
          <a class="github-button" href="https://github.com/creativetimofficial/material-dashboard" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star creativetimofficial/material-dashboard on GitHub">Star</a>
          <h6 class="mt-3">Thank you for sharing!</h6>
          <a href="https://twitter.com/intent/tweet?text=Check%20Material%20UI%20Dashboard%20made%20by%20%40CreativeTim%20%23webdesign%20%23dashboard%20%23bootstrap5&amp;url=https%3A%2F%2Fwww.creative-tim.com%2Fproduct%2Fsoft-ui-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-twitter me-1" aria-hidden="true"></i> Tweet
          </a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.creative-tim.com/product/material-dashboard" class="btn btn-dark mb-0 me-2" target="_blank">
            <i class="fab fa-facebook-square me-1" aria-hidden="true"></i> Share
          </a>
        </div>
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
            <?= $this->Flash->render() ?>
            <?= $this->Form->create($user,['id'=>'form']) ?>

            <input type='hidden' id='iddd' name = 'iddd'>
            <div class="input-group input-group-outline mb-3">
             
              <?= $this->Form->control('name', ['class'=>'form-control','id'=>'name','label'=>false,'required' => false,'input'=>'font-size:12px;', 'style'=>'width:366px;']) ?>
            </div>
            <div class="input-group input-group-outline mb-3">

              <?= $this->Form->control('email', ['class'=>'form-control','placeholder'=>'Email','label'=>false,'required' => false,'input'=>'font-size:12px;', 'value'=> null, 'style'=>'width:366px;']) ?>
            </div>


            <div class="input-group input-group-outline mb-3">

              <!-- <?= $this->Form->control('password', ['class'=>'form-control','placeholder'=>'Password','label'=>false,'required' => false,'input'=>'font-size:12px;', 'style'=>'width:366px;']) ?> -->
              
            </div>
            
            <div class="text-center">

              <?= $this->Form->button('Edit',['class'=>'btn btn-primary text-center','id'=>'form-btn']); ?>
              <button type="button"  class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <?= $this->Form->end() ?>
            </div>

            <!-- <?= $this->Html->script(['form']) ?> -->


                  </div>
                </div>
              </div>
            </div>

<!-- Button trigger modal -->

<!-- modal -->




  <?= $this->Html->script(['search']) ?>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

  <script>

$(document).ready(function(){

    $(document).on('click', '.edituser', function (){
      var user_id = $(this).attr('data-id');
          
          $.ajax({
            
            url: "/users/ajaxedit/"+user_id,
            data : {'id':user_id},
            type : 'JSON',
            method :'get',
            success : function (response){

              user = $.parseJSON(response);
              $("#iddd").val(user['id'])
              $("#name").val(user['name']);
              $("#email").val(user['email']);

            }
            
          })
    });

    
  });

 

//-------------------Fetching data in modal through ajax ----------------------//

$(document).ready(function(){

  $('.delete-user').on('click',function(){
    var formdata= $(this).attr('data-id');
    var hide = $(this).parents('tr');
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
         
            // alert("here");
            var formData = new FormData(form);
            // alert("there");
            console.log(formData);
            $.ajax({
                headers: {
                    "X-CSRF-TOKEN": csrfToken,
                },
                url: "/users/edituser",
                type: "JSON",
                method: "POST",
                cache: false,
                processData: false,
                contentType: false,
                data: formData,
                success: function (response) {
                    console.log(response);
                    // alert(response);
                    // return false ;
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
                        $(".load-table").load("/Users/listTable .load-table");
                        $('.modal-backdrop').remove();
                    }
                },
            });
            return false;
        },
    });
});




  </script>


</body>

</html>