<!--content container -->
<div id="container">
	<div class="row">
		<div class="col-sm-1 col-md-1"></div>
			<div class="col-xs-12 col-sm-10 col-md-10">
<!-- CONTENT HERE -->
    <div class="row">
    	<div class="col-xs-3 col-sm-1 col-md-1" ><img src="<?php echo $pic;?>"></div>
		<div class="col-xs-9 col-sm-9 col-md-9"><h2>Welcome, <?php echo $user;?>!</h2></div>
	</div>
	<p>&nbsp;</p>
	<div class="row">
		<?php echo $this->Form->create('Commute', array(
			'action'=>'add',
			'inputDefaults' => array(
				'div' => 'form-group',
				'label' => true,
				'wrapInput' => false,
				'class' => 'form-control'
			)
		)); ?>

			<?php echo $this->Form->input('fromZIP', array(
				'placeholder' => 'Origin ZIP',
				'length' => 5,
				'label' => 'Where from?'

			)); ?>

			<?php echo $this->Form->input('toZIP', array(
				'placeholder' => 'Destination ZIP',
				'length' => 5,
				'label' => 'Where to?'
			)); ?>
	
			<?php echo $this->Form->input('drive', array(
				'div' => 'checkbox',
				'class' => false,
				'label' => 'I can drive!'
			)); ?>

			<?php echo $this->Form->submit('Find a ride', array(
				'div' => 'form-group',
				'class' => 'btn btn-default'
			)); ?>
			<?php echo $this->Form->end(); ?>
	</div>
	<!--<?php debug($_SESSION)?>-->	
	</div>	
	</div>


</p>
<!-- END CONTENT -->
			<!-- Close content divs -->
			</div>
		<div class="col-sm-1 col-md-1"></div>
	</div>
</div>
