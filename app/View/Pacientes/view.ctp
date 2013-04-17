<div class="pacientes view">
<h2><?php  echo __('Paciente'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Ingreso'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['fecha_ingreso']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Identificacion'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['identificacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Expedido En'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['expedido_en']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo Identificacion'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['tipo_identificacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Fecha Nacimiento'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['fecha_nacimiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Ciudad Nacimiento'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['ciudad_nacimiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Departamento Nacimiento'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['departamento_nacimiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Pais Nacimiento'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['pais_nacimiento']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sexo'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['sexo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo De Sangre'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['tipo_de_sangre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Rh'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['rh']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estado Civil'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['estado_civil']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Padre'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['nombre_padre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Madre'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['nombre_madre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre Conyugue'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['nombre_conyugue']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Color Tez'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['color_tez']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Estatura'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['estatura']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Observacion'); ?></dt>
		<dd>
			<?php echo h($paciente['Paciente']['observacion']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Historias Clinicas'); ?></dt>
		<dd>
			<?php echo $this->Html->link($paciente['HistoriasClinicas']['id'], array('controller' => 'historias_clinicas', 'action' => 'view', $paciente['HistoriasClinicas']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Paciente'), array('action' => 'edit', $paciente['Paciente']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Paciente'), array('action' => 'delete', $paciente['Paciente']['id']), null, __('Are you sure you want to delete # %s?', $paciente['Paciente']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Pacientes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paciente'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Historias Clinicas'), array('controller' => 'historias_clinicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Historias Clinicas'), array('controller' => 'historias_clinicas', 'action' => 'add')); ?> </li>
	</ul>
</div>
