<!DOCTYPE HTML>
<html>
    <head>
        <link rel="stylesheet" href="<?php echo $_SERVER['REQUEST_URI']; ?>css/bootstrap.min.css" /></link>
        <script language="javascript" src="<?php echo $_SERVER['REQUEST_URI']; ?>javascript/jquery-1.6.2.min.js"></script>
        <script language="javascript" src="<?php echo $_SERVER['REQUEST_URI']; ?>javascript/myscript.js"></script>
        <script>var base_url = '<?php echo $_SERVER['REQUEST_URI']; ?>'; </script>
    </head>

    <body>
   <div>

<?php echo form_open('shorten', array('name' => 'ajax_form', 'id' => 'ajax_form', 'class'=>'form-horizontal')); ?>

<div style="text-align: center; margin-top:20px; margin-bottom:20px;">

    <?php
    $mydata = array(
        'name' => 'url',
        'id' => 'url',
        'class' => 'span7',
        'placeholder' => 'Enter your url address and press submit key'
    );
    echo form_input($mydata);
    ?>

    <?php
    $mydata = array(
        'name' => 'submitbtn',
        'id' => 'submitbtn',
        'value' => 'Submit',
        'class' => 'btn btn-info'
    );
    echo form_submit($mydata);
    ?>

</div>
<div id="short_url" class="form-control" style="text-align: center;" >The New Short Url</div>


<?php echo form_close(); ?>

</div>
</body>
</html>
