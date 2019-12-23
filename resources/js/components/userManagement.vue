<template>
    <div class="container">
       <div class="row mt-5">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">User Managment</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">Add New User <i class="fas fa-user-plus fa-fw"></i></button>
                   
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Name</th>
                      <th>Email</th>
                      <th>Status</th>
                      <th>Role</th>
                      <th>Last Login</th>
                      <th>Created At</th>
                      <th>Action</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>183</td>
                      <td>John Doe</td>
                      <td>someone@example.com</td>
                      <td><span class="tag tag-success">Active</span></td>
                      <td>Board Member </td>
                      <td>13 minutes</td>
                      <td>6.02.2018</td>
                      <td>
                          <div>
                              <button type="button" class="btn btn-secondary"><i class="far fa-edit"></i></button>
                             <button type="button" class="btn btn-danger"> <i class="fas fa-trash"></i></button>
                          </div>
                         </td>
                    </tr>
                    <tr>
                      <td>090</td>
                      <td>Smith Alex</td>
                      <td>anotherperson@example.com</td>
                      <td><span class="tag tag-success"> Not Active</span></td>
                      <td>Procurment </td>
                      <td>4 hours</td>
                      <td>10.11.2019</td>
                      <td>
                        
                          <div>
                              <button type="button" class="btn btn-secondary"><i class="far fa-edit"></i></button>
                             <button type="button" class="btn btn-danger"> <i class="fas fa-trash"></i></button>
                          </div>
                         </td>
                    </tr>
                    
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
       </div>
          <div class="modal fade" id="basicModal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="myModalLabel">Add New User </h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <input v-model="form.name" type="text" name="name" class="form-control" :class="{'is-invalid': form.error.has('name')}">
          <has-error :form="form" field="name"></has-error>






        </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Save changes</button>
      </div>
    </div>
  </div>
</div>
        
    </div>
</template>

<script>
    export default {
      data(){
        return {
        form: new Form({
          name: '',
          email: '',
          password: '',
          type: '',
          bio: '',
          photo: ''

        })
        }
      },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
