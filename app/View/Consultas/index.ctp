<div class="consultas index">
	<h2><?php echo __('Consultas'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_ingreso'); ?></th>
			<th><?php echo $this->Paginator->sort('remitido'); ?></th>
			<th><?php echo $this->Paginator->sort('remitido_por'); ?></th>
			<th><?php echo $this->Paginator->sort('eps'); ?></th>
			<th><?php echo $this->Paginator->sort('acudiente'); ?></th>
			<th><?php echo $this->Paginator->sort('parentesco_acudiente'); ?></th>
			<th><?php echo $this->Paginator->sort('motivo_consulta'); ?></th>
			<th><?php echo $this->Paginator->sort('urgencia'); ?></th>
			<th><?php echo $this->Paginator->sort('observacion'); ?></th>
			<th><?php echo $this->Paginator->sort('historias_clinicas_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($consultas as $consulta): ?>
	<tr>
		<td><?php echo h($consulta['Consulta']['id']); ?>&nbsp;</td>
		<td><?php echo h($consulta['Consulta']['fecha_ingreso']); ?>&nbsp;</td>
		<td><?php echo h($consulta['Consulta']['remitido']); ?>&nbsp;</td>
		<td><?php echo h($consulta['Consulta']['remitido_por']); ?>&nbsp;</td>
		<td><?php echo h($consulta['Consulta']['eps']); ?>&nbsp;</td>
		<td><?php echo h($consulta['Consulta']['acudiente']); ?>&nbsp;</td>
		<td><?php echo h($consulta['Consulta']['parentesco_acudiente']); ?>&nbsp;</td>
		<td><?php echo h($consulta['Consulta']['motivo_consulta']); ?>&nbsp;</td>
		<td><?php echo h($consulta['Consulta']['urgencia']); ?>&nbsp;</td>
		<td><?php echo h($consulta['Consulta']['observacion']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($consulta['HistoriasClinicas']['id'], array('controller' => 'historias_clinicas', 'action' => 'view', $consulta['HistoriasClinicas']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $consulta['Consulta']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $consulta['Consulta']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $consulta['Consulta']['id']), null, __('Are you sure you want to delete # %s?', $consulta['Consulta']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Consulta'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Historias Clinicas'), array('controller' => 'historias_clinicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Historias Clinicas'), array('controller' => 'historias_clinicas', 'action' => 'add')); ?> </li>
	</ul>
</div>
