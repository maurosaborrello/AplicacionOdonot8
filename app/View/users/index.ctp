<h2>Usuarios</h2>
<?php if(empty($users)): ?>
No hay Usuarios registrados
<?php else: ?>
<table>
<tr>
<th>Username</th>
<th>Email</th>
</tr>
<?php foreach ($users as $user): ?>
<tr>
<td>
<?php echo $user['User']['username'] ?>
</td>
<td>
<?php echo $user['User']['email'] ?>
</td>
<td>
<!-- acciones en las tareas ser�n a�adidas m�s tarde -->
</td>
</tr>
<?php endforeach; ?>
</table>
<?php endif; ?>

<table border="0">
<tr>
<td><?php echo $this->Html->link('Registrar Usuario', array('action'=>'add')); ?></td>
</tr>
<tr>
<td>
<?php echo $this->Html->link('Iniciar Sesion', array('action'=>'login')); ?>
</td>
</tr>
</table>
