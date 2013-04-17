<div class="contactoPacientes index">
	<h2><?php echo __('Contacto Pacientes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_ingreso'); ?></th>
			<th><?php echo $this->Paginator->sort('profesion'); ?></th>
			<th><?php echo $this->Paginator->sort('ocupacion'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion_residencia'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono_residencia'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion_trabajo'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono_trabajo'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono_movil'); ?></th>
			<th><?php echo $this->Paginator->sort('correo_electronico'); ?></th>
			<th><?php echo $this->Paginator->sort('ciudad'); ?></th>
			<th><?php echo $this->Paginator->sort('pais'); ?></th>
			<th><?php echo $this->Paginator->sort('historias_clinicas_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($contactoPacientes as $contactoPaciente): ?>
	<tr>
		<td><?php echo h($contactoPaciente['ContactoPaciente']['id']); ?>&nbsp;</td>
		<td><?php echo h($contactoPaciente['ContactoPaciente']['fecha_ingreso']); ?>&nbsp;</td>
		<td><?php echo h($contactoPaciente['ContactoPaciente']['profesion']); ?>&nbsp;</td>
		<td><?php echo h($contactoPaciente['ContactoPaciente']['ocupacion']); ?>&nbsp;</td>
		<td><?php echo h($contactoPaciente['ContactoPaciente']['direccion_residencia']); ?>&nbsp;</td>
		<td><?php echo h($contactoPaciente['ContactoPaciente']['telefono_residencia']); ?>&nbsp;</td>
		<td><?php echo h($contactoPaciente['ContactoPaciente']['direccion_trabajo']); ?>&nbsp;</td>
		<td><?php echo h($contactoPaciente['ContactoPaciente']['telefono_trabajo']); ?>&nbsp;</td>
		<td><?php echo h($contactoPaciente['ContactoPaciente']['telefono_movil']); ?>&nbsp;</td>
		<td><?php echo h($contactoPaciente['ContactoPaciente']['correo_electronico']); ?>&nbsp;</td>
		<td><?php echo h($contactoPaciente['ContactoPaciente']['ciudad']); ?>&nbsp;</td>
		<td><?php echo h($contactoPaciente['ContactoPaciente']['pais']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($contactoPaciente['HistoriasClinicas']['id'], array('controller' => 'historias_clinicas', 'action' => 'view', $contactoPaciente['HistoriasClinicas']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $contactoPaciente['ContactoPaciente']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $contactoPaciente['ContactoPaciente']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $contactoPaciente['ContactoPaciente']['id']), null, __('Are you sure you want to delete # %s?', $contactoPaciente['ContactoPaciente']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Contacto Paciente'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Historias Clinicas'), array('controller' => 'historias_clinicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Historias Clinicas'), array('controller' => 'historias_clinicas', 'action' => 'add')); ?> </li>
	</ul>
</div>
