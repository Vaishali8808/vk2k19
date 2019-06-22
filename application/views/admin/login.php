<?php
include('header.php');
?>
<div class="container" style="margin-top:20px;">
<h1>Admin Form</h1>
<?php echo form_open('admin/index'); ?>
<div class="row">
<div class="col-lg-6">
<div class="form-group">
    <label for="username">UserName</label>
    <?php echo form_input(['class'=>'form-control',
    'placeholder'=>'Enter User Name',
    'name'=>'username'
    ,'value'=>set_value('username')
    ]); ?>
</div></div>
<div class="col-lg-6">
<?php echo form_error('username'); ?>
</div>
</div>
<div class="row">
<div class="col-lg-6">
<div class="form-group">
    <label for="password">Password</label>
    <?php echo form_password(['class'=>'form-control',
    'name'=>'password','placeholder'=>'Enter Password',
     'value'=>set_value('password')
    ]);?>
</div></div>
<div class="col-lg-6">
<?php echo form_error('password'); ?>
</div>
</div>
    <?php echo form_submit(['class'=>'btn btn-success mt-2',
    'type'=>'submit','value'=>'
    Submit']);?>
     <?php echo form_reset(['class'=>'btn btn-danger mt-2',
     'type'=>'submit','value'=>'
    Reset']);?>
    <?php echo anchor('admin/register','Sign up?','class="link-class"');?>

</div>

<?php 
include('footer.php');?>

