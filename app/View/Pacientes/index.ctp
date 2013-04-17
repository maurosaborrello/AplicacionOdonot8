<div class="pacientes index">
	<h2><?php echo __('Pacientes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_ingreso'); ?></th>
			<th><?php echo $this->Paginator->sort('identificacion'); ?></th>
			<th><?php echo $this->Paginator->sort('expedido_en'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_identificacion'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_nacimiento'); ?></th>
			<th><?php echo $this->Paginator->sort('ciudad_nacimiento'); ?></th>
			<th><?php echo $this->Paginator->sort('departamento_nacimiento'); ?></th>
			<th><?php echo $this->Paginator->sort('pais_nacimiento'); ?></th>
			<th><?php echo $this->Paginator->sort('sexo'); ?></th>
			<th><?php echo $this->Paginator->sort('tipo_de_sangre'); ?></th>
			<th><?php echo $this->Paginator->sort('rh'); ?></th>
			<th><?php echo $this->Paginator->sort('estado_civil'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_padre'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_madre'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre_conyugue'); ?></th>
			<th><?php echo $this->Paginator->sort('color_tez'); ?></th>
			<th><?php echo $this->Paginator->sort('estatura'); ?></th>
			<th><?php echo $this->Paginator->sort('observacion'); ?></th>
			<th><?php echo $this->Paginator->sort('historias_clinicas_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($pacientes as $paciente): ?>
	<tr>
		<td><?php echo h($paciente['Paciente']['id']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['fecha_ingreso']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['identificacion']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['expedido_en']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['tipo_identificacion']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['fecha_nacimiento']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['ciudad_nacimiento']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['departamento_nacimiento']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['pais_nacimiento']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['sexo']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['tipo_de_sangre']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['rh']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['estado_civil']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['nombre_padre']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['nombre_madre']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['nombre_conyugue']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['color_tez']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['estatura']); ?>&nbsp;</td>
		<td><?php echo h($paciente['Paciente']['observacion']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($paciente['HistoriasClinicas']['id'], array('controller' => 'historias_clinicas', 'action' => 'view', $paciente['HistoriasClinicas']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $paciente['Paciente']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $paciente['Paciente']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $paciente['Paciente']['id']), null, __('Are you sure you want to delete # %s?', $paciente['Paciente']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Paciente'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Historias Clinicas'), array('controller' => 'historias_clinicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Historias Clinicas'), array('controller' => 'historias_clinicas', 'action' => 'add')); ?> </li>
	</ul>
</div>
