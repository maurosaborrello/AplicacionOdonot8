<div class="pacientes form">
<?php echo $this->Form->create('Paciente'); ?>
	<fieldset>
		<legend><?php echo __('Edit Paciente'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fecha_ingreso');
		echo $this->Form->input('identificacion');
		echo $this->Form->input('expedido_en');
		echo $this->Form->input('tipo_identificacion');
		echo $this->Form->input('fecha_nacimiento');
		echo $this->Form->input('ciudad_nacimiento');
		echo $this->Form->input('departamento_nacimiento');
		echo $this->Form->input('pais_nacimiento');
		echo $this->Form->input('sexo');
		echo $this->Form->input('tipo_de_sangre');
		echo $this->Form->input('rh');
		echo $this->Form->input('estado_civil');
		echo $this->Form->input('nombre_padre');
		echo $this->Form->input('nombre_madre');
		echo $this->Form->input('nombre_conyugue');
		echo $this->Form->input('color_tez');
		echo $this->Form->input('estatura');
		echo $this->Form->input('observacion');
		echo $this->Form->input('historias_clinicas_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Paciente.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Paciente.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Historias Clinicas'), array('controller' => 'historias_clinicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Historias Clinicas'), array('controller' => 'historias_clinicas', 'action' => 'add')); ?> </li>
	</ul>
</div>
