<div class="tareas form">
<?php echo $this->Form->create('Tarea'); ?>
	<fieldset>
		<legend><?php echo __('Add Tarea'); ?></legend>
	<?php
		echo $this->Form->input('nombre_tarea');
		echo $this->Form->input('descripcion_tarea');
		echo $this->Form->input('codigo_proyecto');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tareas'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Proyectos'), array('controller' => 'proyectos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Proyecto'), array('controller' => 'proyectos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Responsables'), array('controller' => 'responsables', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Responsable'), array('controller' => 'responsables', 'action' => 'add')); ?> </li>
	</ul>
</div>
