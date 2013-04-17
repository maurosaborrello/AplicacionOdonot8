<div class="historiasClinicas form">
<?php echo $this->Form->create('HistoriasClinica'); ?>
	<fieldset>
		<legend><?php echo __('Add Historias Clinica'); ?></legend>
	<?php
		echo $this->Form->input('numero_historia');
		echo $this->Form->input('fecha_ingreso');
		echo $this->Form->input('nombre');
		echo $this->Form->input('primer_apellido');
		echo $this->Form->input('segundo_apellido');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Historias Clinicas'), array('action' => 'index')); ?></li>
	</ul>
</div>
