<div class="right_col" role="main" style="min-height: 3899px;">
<div class="">
<div class="page-title">
   <div class="title_left">
      <h3>Form Elements</h3>
   </div>
   <div class="title_right">
      <div class="col-md-5 col-sm-5  form-group pull-right top_search">
         <div class="input-group">
            <input type="text" class="form-control" placeholder="Search for...">
            <span class="input-group-btn">
            <button class="btn btn-default" type="button">Go!</button>
            </span>
         </div>
      </div>
   </div>
</div>
<div class="clearfix"></div>
<div class="row">
   <div class="col-md-12 col-sm-12 ">
      <div class="x_panel">
         <div class="x_title">
            <h2>Form Design <small>different form elements</small></h2>
            <ul class="nav navbar-right panel_toolbox">
               <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
               <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                  <ul class="dropdown-menu" role="menu">
                     <li><a class="dropdown-item" href="#">Settings 1</a></li>
                     <li><a class="dropdown-item" href="#">Settings 2</a></li>
                  </ul>
               </li>
               <li><a class="close-link"><i class="fa fa-close"></i></a></li>
            </ul>
            <div class="clearfix"></div>
         </div>
         <div class="x_content">
            <br>
            <form action="<?=base_url()?>pencari_kerja/insert" method="POST" id="demo-form2" data-parsley-validate="" class="form-horizontal form-label-left" novalidate="">

              
             <div class="item form-group">
                  <label class="col-form-label col-md-3 col-sm-3 label-align" for="firstname">First Name <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 ">
                     <input type="text" id="firstname" name="firstname" required="required" class="form-control parsley-error" data-parsley-id="5">
                     <ul class="parsley-errors-list filled" id="parsley-id-5">
                        <li class="parsley-required">This value is required.</li>
                     </ul>
                  </div>
               </div>
               <div class="item form-group">
                  <label class="col-form-label col-md-3 col-sm-3 label-align" for="lastname">Last Name <span class="required">*</span>
                  </label>
                  <div class="col-md-6 col-sm-6 ">
                     <input type="text" id="lastname" name="lastname" required="required" class="form-control parsley-error" data-parsley-id="7">
                     <ul class="parsley-errors-list filled" id="parsley-id-7">
                        <li class="parsley-required">This value is required.</li>
                     </ul>
                  </div>
               </div>
               <div class="item form-group">
                  <label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Email</label>
                  <div class="col-md-6 col-sm-6 ">
                     <input id="email" class="form-control" type="text" name="email" data-parsley-id="9">
                  </div>
               </div>
               
               
               <div class="ln_solid"></div>
               <div class="item form-group">
                  <div class="col-md-6 col-sm-6 offset-md-3">
                     <a href="<?=base_url()?>pencari_kerja"><button class="btn btn-primary" type="button">Cancel</button></a>
                     <button class="btn btn-primary" type="reset">Reset</button>
                     <button type="submit" class="btn btn-success">Submit</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>