<p style="font-size:35px; text-align:center;"><b><u>List of Students</u></b></p>
<p>
    <?php
    echo $this->Html->link('Add Student', array('controller'=>'students', 'action'=>'add'));
    ?>
</p>

<table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Created</th>
        <th>Action</th>
    </tr>
    <?php foreach($students as $stud): ?>
        <tr>
            <td><?php echo $stud['Student']['id']; ?></td>
            <td><?php echo $stud['Student']['name']; ?></td>
            <td><?php echo $stud['Student']['created']; ?></td>
            <td>
                <?php echo $this->Html->link('view',array('controller'=>'Students', 'action'=>'view', $stud['Student']['id'])) ?>
                <?php echo $this->Html->link('edit',array('controller'=>'Students', 'action'=>'edit', $stud['Student']['id'])) ?>
                <?php echo $this->Form->postLink('delete',array('controller'=>'Students', 'action'=>'delete', $stud['Student']['id']),
                array(),_('are you sure?')) ?>
            </td>

        </tr>
    <?php endforeach; ?>
</table>