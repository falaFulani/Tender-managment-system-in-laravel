<template>
    <div class="container">
      

      




<div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">All Tenders</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    
                      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#basicModal">Add Tender <i class="fas fa-folder-plus fa-fw"></i></button>
                   
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0" style="height: 300px;">
                <table class="table table-head-fixed">
                  <thead>
                    <tr>
                      
                      <th>Entity</th>
                      <th>RefNumber</th>
                      <th>Tender Description </th>
                      <th>Category</th>
                      <th>Tender Type</th>
                      <th>Tender Status</th>
                      <th>Closing Date</th>
                      <th>Action </th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Ajira</td>
                      <td>GF ATM TB/002/2019</td>
                      <td>Provison of transport</td>
                      <td>Non Consultancy services</td>
                      <td>Open Tender </td>
                      <td>Published</td>
                      <td>6.02.2018</td>
                      <td>
                          <div>
                                               
                <select name="action" id="actions">
                    <option value="none" selected disabled hidden> Action </option>
                            <option value="edit">  Edit</option>
                             <option><button type="button" class="btn btn-danger"> Delete</button></option>
                </select>
                          </div>
                         </td>
                    </tr>
                    <tr>
                      <td>NOFBI</td>
                      <td>KR/SCM/025/2019-2020</td>
                      <td>Provison of transport</td>
                      <td>Consultancy Services for Supervision of the Development of 2,000KM of Fibre across the counrty for Lot 15: Contract No: KURA/PPP/237/2014-2015</td>
                      <td>Restircted Tender </td>
                      <td>Closed</td>
                      <td>6.02.2019</td>
                      <td>
                          <div>
                                               
                <select name="action" id="actions">
                    <option value="none" selected disabled hidden> Action </option>
                            <option value="edit">  Edit</option>
                             <option><button type="button" class="btn btn-danger"> Delete</button></option>
                </select>
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
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
