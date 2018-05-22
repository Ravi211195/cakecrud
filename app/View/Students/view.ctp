<p style="font-size:25px; text-align:center;"><b><u>View Student</u></b></p>
<br />
<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Phone</th>
        <th>Created</th>
        <th>Modified</th>
        <th>action</th>
    </tr>
    <tr>
        <td><?php echo $stud['Student']['id']?></td>
        <td><?php echo $stud['Student']['name']?></td>
        <td><?php echo $stud['Student']['address']?></td>
        <td><?php echo $stud['Student']['phone']?></td>
        <td><?php echo $stud['Student']['created']?></td>
        <td><?php echo $stud['Student']['modified']?></td>
        <td>
                <?php echo $this->Html->link('edit',array('controller'=>'Students', 'action'=>'edit', $stud['Student']['id'])) ?>
                <?php echo $this->Form->postLink('delete',array('controller'=>'Students', 'action'=>'delete', $stud['Student']['id']),
                array(),_('are you sure?')) ?>
        </td>
    </tr>
</table>

<br/>
<p> <?php echo $this->Html->link('Back', 
                                  array('controller'=>'students', 'action'=>'index')) ?> </p>

