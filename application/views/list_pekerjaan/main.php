<div class="right_col" role="main" style="min-height: 4191px;">
   <div class="">
      <div class="page-title">
         <div class="title_left">
            <h3>Data Pencari Kerja</h3>
         </div>
         
         </div>
      </div>
      <div class="clearfix"></div>
      <div class="row">
         <div class="col-md-12 col-sm-12 ">
            <div class="x_panel">
               <div class="x_title">
                  <h2>Table Pencari Kerja</h2>
                  
                  <div class="clearfix"></div>
               </div>
               <div class="x_content">
                  <div class="row">
                     <div class="col-sm-12">
                        <div class="card-box table-responsive">
                        
                           <div id="datatable-buttons_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap no-footer">
                       

                              <table id="datatable-buttons" class="table table-striped table-bordered dataTable no-footer dtr-inline" style="width: 100%;" role="grid" aria-describedby="datatable-buttons_info">
                                 <thead>
                                    <tr role="row">
                                       <th class="sorting_asc" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 157px;" aria-sort="ascending" aria-label="Name: activate to sort column descending">No</th>
                                       <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 246px;" aria-label="Position: activate to sort column ascending">Nama Les</th>
                                       <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 119px;" aria-label="Office: activate to sort column ascending">Durasi</th>
                                       <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 59px;" aria-label="Age: activate to sort column ascending">Pengajar</th>
                                       <th class="sorting" tabindex="0" aria-controls="datatable-buttons" rowspan="1" colspan="1" style="width: 112px;" aria-label="Start date: activate to sort column ascending">Action</th>
                                       
                                    </tr>
                                 </thead>
                                 <tbody>
                                  <?php 
      $no = 0;
      foreach ($data_pencari_kerja as $key => $value) { 
        $no++;
      ?>

                                    <tr role="row" class="odd">
                                       <td tabindex="0" class="sorting_1"><?=$no?></td>
                                       <td><?=$value->nama_les?></td>
                                       <td><?=$value->durasi?></td>
                                       <td><?=$value->pengajar?></td>
                                        <td><a href="<?=base_url()?>list_pekerjaan/form/<?=$value->id?>">Edit</a>
              <a href="<?=base_url()?>list_pekerjaan/delete/<?=$value->id?>">Delete</a>
         </td>
                                    </tr>
                                  <?php } ?>
                                 </tbody>
                              </table>
                              
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>