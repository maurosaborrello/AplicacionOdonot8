<div class="contactoPacientes form">
<?php echo $this->Form->create('ContactoPaciente'); ?>
	<fieldset>
		<legend><?php echo __('Edit Contacto Paciente'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('fecha_ingreso');
		echo $this->Form->input('profesion');
		echo $this->Form->input('ocupacion');
		echo $this->Form->input('direccion_residencia');
		echo $this->Form->input('telefono_residencia');
		echo $this->Form->input('direccion_trabajo');
		echo $this->Form->input('telefono_trabajo');
		echo $this->Form->input('telefono_movil');
		echo $this->Form->input('correo_electronico');
		echo $this->Form->input('ciudad');
		echo $this->Form->input('pais');
		echo $this->Form->input('historias_clinicas_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('ContactoPaciente.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('ContactoPaciente.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Contacto Pacientes'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Historias Clinicas'), array('controller' => 'historias_clinicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Historias Clinicas'), array('controller' => 'historias_clinicas', 'action' => 'add')); ?> </li>
	</ul>
</div>
