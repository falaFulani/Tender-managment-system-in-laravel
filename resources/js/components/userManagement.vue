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
                      <th>Bio</th>
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
      <form @submit.prevent="createUser">
      <div class="modal-body">
       <div class="form-group">
      <input v-model="form.name" type="text" name="name"
        class="form-control" :class="{ 'is-invalid': form.errors.has('name') }" placeholder="Enter Name">
      <has-error :form="form" field="name"></has-error>
    </div>
<div class="form-group">
      <input v-model="form.email" type="text" name="email"
        class="form-control" :class="{ 'is-invalid': form.errors.has('name') }" placeholder="Enter Users email">
      <has-error :form="form" field="email"></has-error>
    </div>
    <div class="form-group">
      <textarea v-model="form.bio" name="bio" placeholder="short user bio(optional)" class="form-control" :class="{'is-invalid ':form.errors.has('bio')}"></textarea> 
      <has-error :form="form" field ="bio"></has-error>
      
        </div>
        <div class="form-group">
     
          <select v-model="form.role" name="role"  id= "role" class="form-control" :class="{ 'is-invalid': form.errors.has('role') }">
            <option value="admin">Admin</option>
            <option value="admin">Manager</option>
            <option value="admin">System User</option>
          </select>
          <has-error :form="form" field="role"></has-error>
        </div>
        <div class="form-group">
      
      <input v-model="form.password" type="password" name="password"
        class="form-control" :class="{ 'is-invalid': form.errors.has('password') }" placeholder="Enter usser password">
      <has-error :form="form" field="password"></has-error>
    </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success">Create</button>
      </div>
      </form>
    </div>
  </div>
</div>
        
    </div>
</template>

<script>
import Form  from 'vform';
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
      methods:{
        createUser(){
          this.form.post('api/user'); 
        }
      },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
