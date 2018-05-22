<p style="font-size:25px; text-align:center;"><b><u>Add Student</u></b></p>

<?php
 echo $this->Form->create('Student');
 echo $this->Form->input('name',array('placeholder'=>'Enter name..','required' => true));
 echo $this->Form->input('address',array('rows'=>'3','placeholder'=>'Enter address..','required' => true));
 echo $this->Form->input('phone',array('type'=>'number','placeholder'=>'Enter phone no..','required' => true));
 echo $this->Form->end('Save Student');
?>

<p> 
 <?php echo $this->Html->link('Cancel',
            array('controller'=>'students', 'action'=>'index')) ?>
</p>