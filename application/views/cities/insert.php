<?php echo validation_errors(); ?>
<?php echo form_open(); ?>

<?php echo form_label('Város neve:','cit_name'); ?>
<?php echo form_input('name',set_value('name',''),[ 'id' => 'cit_name',
                                  /*'required' => 'required'*/]); ?>
<?php echo form_error('name');?>
<br/>
<?php echo form_input('postal_code',set_value('postal_code',''),[ /*'required' => 'required',*/
                                'placeholder' => 'Irányítószám']); ?>
<?php echo form_error('postal_code'); ?>
<?php echo form_submit('submit','Beküld'); ?>
<?php echo form_close(); ?>