<?php
include('header.php');
?>
<div class="container" style="margin-top:20px;">
<h1>
    Register Form
</h1>
         
        echo form_open('admin/sendmail');?>
        <div class="row">
            <div class="col-lg-6">
            <div class="form-group">
                <label for="username"> UserName</label>
                <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Name',
                'name'=>'username','value'=>set_value('username')]); ?>
                </div>
                </div>
                <div class="col-lg-6" style="margin-top:20px;">
            <?php echo form_error('username'); ?>
            </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
            <div class="form-group">
            <label for="password"> Password</label>
                <?php echo form_password(['class'=>'form-control','placeholder'=>'Password',
                'name'=>'password','value'=>set_value('password')]); ?>
                </div>
                </div>
                <div class="col-lg-6" style="margin-top:20px;">      
                <?php echo form_error('password'); ?>
                </div>
                </div>
                <div class="row">
            <div class="col-lg-6">
            <div class="form-group">
                <label for="firstname">First Name</label>
                <?php echo form_input(['class'=>'form-control','placeholder'=>'First Name',
                'name'=>'firstname','value'=>set_value('firstname')]); ?>
                </div>
                </div>
                <div class="col-lg-6" style="margin-top:20px;">
            <?php echo form_error('firstname'); ?>
            </div>
            </div>
            <div class="row">
            <div class="col-lg-6">
            <div class="form-group">
                <label for="lastname"> Last Name</label>
                <?php echo form_input(['class'=>'form-control','placeholder'=>'Last Name',
                'name'=>'lastname','value'=>set_value('lastname')]); ?>
                </div>
                </div>
                <div class="col-lg-6" style="margin-top:20px;">
            <?php echo form_error('lastname'); ?>
            </div>
            </div>
            <div class="row">
            <div class="col-lg-6">
            <div class="form-group">
                <label for="email">E-Mail</label>
                <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter E-Mail',
                'name'=>'email','value'=>set_value('email')]); ?>
                </div>
                </div>
                <div class="col-lg-6" style="margin-top:20px;">
            <?php echo form_error('email'); ?>
            </div>
            </div>
    <?php  echo form_submit(['type'=>'submit','class'=>'btn btn-primary','value'=>'Submit']);
    ?>
     <?php  echo form_reset(['type'=>'submit','class'=>'btn btn-primary','value'=>'Reset']);
    ?>
   </div>

<?php 
include('footer.php');
?>