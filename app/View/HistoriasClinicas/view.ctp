<div class="historiasClinicas view">
<h2><?php  echo __('Historias Clinica'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($historiasClinica['HistoriasClinica']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero Historia'); ?></dt>
		<dd>
			<?php echo h($historiasClinica['HistoriasClinica']['numero_historia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Ingreso'); ?></dt>
		<dd>
			<?php echo h($historiasClinica['HistoriasClinica']['fecha_ingreso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($historiasClinica['HistoriasClinica']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Primer Apellido'); ?></dt>
		<dd>
			<?php echo h($historiasClinica['HistoriasClinica']['primer_apellido']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Segundo Apellido'); ?></dt>
		<dd>
			<?php echo h($historiasClinica['HistoriasClinica']['segundo_apellido']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Historias Clinica'), array('action' => 'edit', $historiasClinica['HistoriasClinica']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Historias Clinica'), array('action' => 'delete', $historiasClinica['HistoriasClinica']['id']), null, __('Are you sure you want to delete # %s?', $historiasClinica['HistoriasClinica']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Historias Clinicas'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Historias Clinica'), array('action' => 'add')); ?> </li>
	</ul>
</div>
