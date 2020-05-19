
<html>
    <title>Name Page</title>
</html>

<!-- Form tag is created -->
<?php $attributes =array('id'=>'name_form','class'=> 'form_horizontal');?>

<?php echo validation_errors("<p class='bg-danger'>"); ?>

<?php
echo form_open('index.php/name/insert',$attributes);?>

<!--Label and Text Field --> 
<div class="form-group">
    <?php echo form_label('First Name'); ?>
<?php 
    $data = array(
        'class' => 'form-control',
        'name' => 'first_name',
        'placeholder' => 'Enter first name'
        );?>
    <?php echo form_input($data);?>
</div>

<br><br>

<!--Label and Select option --> 
<div class="form-group">
    <?php echo form_label('Who is the best cricketer in the world? '); ?>
<?php
$data_cric = array(
    'option'=> 'Select any one ',
    'ST' => 'Sachin Tendulkar',
    'VK' => 'Virat Kohli',
    'AG'=> 'Adam Gilchirst',
    'JK'=>'Jacques Kallis'
    );
    echo form_dropdown('select', $data_cric, 'option');?>

</div>
<br><br>

<div class="form-group">
<?php echo form_label('What are the colors in the Indian national flag? Select all: '); ?>
<?php
$data_checkbox1 = array(
'name' => 'Flag',
'value' => 'White'
);?>

<?php
$data_checkbox2 = array(
'name' => 'Flag',
'value' => 'Yellow'
);?>

<?php
$data_checkbox3 = array(
'name' => 'Flag',
'value' => 'Orange'
);?>

<?php
$data_checkbox4 = array(
'name' => 'Flag',
'value' => 'Green'
);?>

<?php echo form_checkbox($data_checkbox1);?><td>
<?php echo form_checkbox($data_checkbox2);?><td>
<?php echo form_checkbox($data_checkbox3);?><td>
<?php echo form_checkbox($data_checkbox4);?><td>
</div>

<!--Submit Button.-->
<div class="form-group">
 <?php 
    $data = array(
        'class' => 'btn btn-primary',
        'name' => 'Submit',
        'value' => 'Next Page'
        );?>
    <?php echo form_submit($data);?>
</div>
<?php echo form_close();?>
