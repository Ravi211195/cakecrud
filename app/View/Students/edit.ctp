<p style="font-size:25px; text-align:center;"><b><u>Edit Student</u></b></p>
<br />

<?php
 echo $this->Form->create('Student');
 echo $this->Form->input('id',array('type'=>'hidden'));
 echo $this->Form->input('name',array('placeholder'=>'Enter name..','required' => true));
 echo $this->Form->input('address',array('rows'=>'3','placeholder'=>'Enter address..','required' => true));
 echo $this->Form->input('phone',array('type'=>'number','placeholder'=>'Enter phone no..','required' => true));
 echo $this->Form->end('Update Student');
?>

<br />

<p> <?php echo $this->Html->link('Back', 
                                  array('controller'=>'students', 'action'=>'index')) ?> </p>
