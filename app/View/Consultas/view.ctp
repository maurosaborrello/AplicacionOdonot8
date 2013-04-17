<div class="consultas view">
<h2><?php  echo __('Consulta'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($consulta['Consulta']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Ingreso'); ?></dt>
		<dd>
			<?php echo h($consulta['Consulta']['fecha_ingreso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remitido'); ?></dt>
		<dd>
			<?php echo h($consulta['Consulta']['remitido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Remitido Por'); ?></dt>
		<dd>
			<?php echo h($consulta['Consulta']['remitido_por']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Eps'); ?></dt>
		<dd>
			<?php echo h($consulta['Consulta']['eps']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Acudiente'); ?></dt>
		<dd>
			<?php echo h($consulta['Consulta']['acudiente']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Parentesco Acudiente'); ?></dt>
		<dd>
			<?php echo h($consulta['Consulta']['parentesco_acudiente']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Motivo Consulta'); ?></dt>
		<dd>
			<?php echo h($consulta['Consulta']['motivo_consulta']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Urgencia'); ?></dt>
		<dd>
			<?php echo h($consulta['Consulta']['urgencia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observacion'); ?></dt>
		<dd>
			<?php echo h($consulta['Consulta']['observacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Historias Clinicas'); ?></dt>
		<dd>
			<?php echo $this->Html->link($consulta['HistoriasClinicas']['id'], array('controller' => 'historias_clinicas', 'action' => 'view', $consulta['HistoriasClinicas']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Consulta'), array('action' => 'edit', $consulta['Consulta']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Consulta'), array('action' => 'delete', $consulta['Consulta']['id']), null, __('Are you sure you want to delete # %s?', $consulta['Consulta']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Consultas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Consulta'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Historias Clinicas'), array('controller' => 'historias_clinicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Historias Clinicas'), array('controller' => 'historias_clinicas', 'action' => 'add')); ?> </li>
	</ul>
</div>
