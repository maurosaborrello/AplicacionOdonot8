
<?php echo $this->Html->script('jquery-1.5.2.js'); ?>

<?php echo $this->Html->css('demos.css'); ?>
<?php echo $this->Html->css('jquery.ui.all.css'); ?>

<?php echo $this->Html->script('jquery.ui.core.js'); ?>
<?php echo $this->Html->script('jquery.ui.widget.js'); ?>
<?php echo $this->Html->script('jquery.ui.datepicker.js'); ?>
<?php echo $this->Form->create('User'); ?>
<fieldset>
    <legend>A&ntilde;adir Nuevo Usuario</legend>
    <?php
    echo $this->Form->input('username');
    echo $this->Form->input('email');
    echo $this->Form->input('password');
    echo $this->Form->label('fecha');
    ?>
    
    
   <input type="text" name="date" id="date" />
    <script type="text/javascript">
    jQuery(document).ready(function($){
        $('#date').datepicker();
    });
    
    </script>
    
</fieldset>
<?php
echo $this->Form->end('Crear Usuario');
?>
<?php echo $this->Html->link('Ver Usuarios Registrados', array('action' => 'index')); ?>