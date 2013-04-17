<div class="contactoPacientes view">
<h2><?php  echo __('Contacto Paciente'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contactoPaciente['ContactoPaciente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Ingreso'); ?></dt>
		<dd>
			<?php echo h($contactoPaciente['ContactoPaciente']['fecha_ingreso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Profesion'); ?></dt>
		<dd>
			<?php echo h($contactoPaciente['ContactoPaciente']['profesion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ocupacion'); ?></dt>
		<dd>
			<?php echo h($contactoPaciente['ContactoPaciente']['ocupacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion Residencia'); ?></dt>
		<dd>
			<?php echo h($contactoPaciente['ContactoPaciente']['direccion_residencia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono Residencia'); ?></dt>
		<dd>
			<?php echo h($contactoPaciente['ContactoPaciente']['telefono_residencia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Direccion Trabajo'); ?></dt>
		<dd>
			<?php echo h($contactoPaciente['ContactoPaciente']['direccion_trabajo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono Trabajo'); ?></dt>
		<dd>
			<?php echo h($contactoPaciente['ContactoPaciente']['telefono_trabajo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Telefono Movil'); ?></dt>
		<dd>
			<?php echo h($contactoPaciente['ContactoPaciente']['telefono_movil']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Correo Electronico'); ?></dt>
		<dd>
			<?php echo h($contactoPaciente['ContactoPaciente']['correo_electronico']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ciudad'); ?></dt>
		<dd>
			<?php echo h($contactoPaciente['ContactoPaciente']['ciudad']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pais'); ?></dt>
		<dd>
			<?php echo h($contactoPaciente['ContactoPaciente']['pais']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Historias Clinicas'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contactoPaciente['HistoriasClinicas']['id'], array('controller' => 'historias_clinicas', 'action' => 'view', $contactoPaciente['HistoriasClinicas']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contacto Paciente'), array('action' => 'edit', $contactoPaciente['ContactoPaciente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contacto Paciente'), array('action' => 'delete', $contactoPaciente['ContactoPaciente']['id']), null, __('Are you sure you want to delete # %s?', $contactoPaciente['ContactoPaciente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacto Pacientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contacto Paciente'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Historias Clinicas'), array('controller' => 'historias_clinicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Historias Clinicas'), array('controller' => 'historias_clinicas', 'action' => 'add')); ?> </li>
	</ul>
</div>
