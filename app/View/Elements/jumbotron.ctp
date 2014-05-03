<div class="jumbotron">    
	<div class="container-fluid centerfy">

			<p> recommendations from locals who care …</p>
			<h1>where do i</h1>

				<div class="demo">
				<div class="control-group">
				<?php echo $this->Form->create(false, array(
					'url' => array('controller' => 'Reviews', 'action' => 'search'),
					'inputDefaults' => array(
						'div' => 'form-group',
						'wrapInput' => false,
						'class' => 'form-control'
					)
				)); ?>
					<fieldset>
					<?php 
					echo $this->Form->input('Activity.activity', array(
						'label' => false));
					 echo $this->Form->input('Neighborhood.neighborhood', array(
					 	'label' => false));

					echo $this->Form->submit('?', array(
							'div' => 'form-group',
							'class' => 'btn btn-danger btn-lg jumbo'
						)); ?>
				</fieldset>
				<?php echo $this->Form->end(); ?>
			</div>
	</div>
</div>
</div>