<?php
include('header.php');
?>
<div class="container" style="margin-top:20px;">
<h1>
    Register Form
</h1>
        <?php echo form_open('admin/sendmail');?>
        <div class="row">
            <div class="col-lg-6">
            <div class="form-group">
                <label for="username"> UserName</label>
                <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Name',
                'name'=>'username','value'=>set_value('username')]); ?>
                </div>
                </div>
                <div class="col-lg-6">
            <div class="form-group">
            <label for="password"> Password</label>
                <?php echo form_password(['class'=>'form-control','placeholder'=>'Password',
                'name'=>'password','value'=>set_value('password')]); ?>
                
                </div>
                </div>
         </div>
     </div>
  </div>
</div>

<?php 
include('footer.php');
?>