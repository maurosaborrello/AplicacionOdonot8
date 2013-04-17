<div class="consultas form">
<?php echo $this->Form->create('Consulta'); ?>
	<fieldset>
		<legend><?php echo __('Edit Consulta'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fecha_ingreso');
		echo $this->Form->input('remitido');
		echo $this->Form->input('remitido_por');
		echo $this->Form->input('eps');
		echo $this->Form->input('acudiente');
		echo $this->Form->input('parentesco_acudiente');
		echo $this->Form->input('motivo_consulta');
		echo $this->Form->input('urgencia');
		echo $this->Form->input('observacion');
		echo $this->Form->input('historias_clinicas_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Consulta.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Consulta.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Consultas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Historias Clinicas'), array('controller' => 'historias_clinicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Historias Clinicas'), array('controller' => 'historias_clinicas', 'action' => 'add')); ?> </li>
	</ul>
</div>
