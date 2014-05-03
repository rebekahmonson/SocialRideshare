<!--content container -->
<div id="container">
	<div class="row">
		<div class="col-sm-1 col-md-1"></div>
			<div class="col-xs-10 col-sm-10 col-md-10">
					<!-- CONTENT HERE -->
							<?php //set vars
										$user=$opauth_data['auth']['info']['name'];
									    $pic=$opauth_data['auth']['info']['image'];
									    $id=$opauth_data['auth']['uid'];
									    $id=$opauth_data['auth']['credentials']['token'];
									?><p>&nbsp;</p>
									<p>&nbsp;</p>		
					    <div class="row">
					    	<div class="col-xs-1 col-sm-1 col-md-1" ></div>
					    	<div class="col-xs-8 col-sm-8 col-md-8" ><img src="<?php echo $pic;?>" style="float:left; margin-right:10px;">
							<h2 style="float:left;">Welcome, <?php echo $user;?>!</h2></div>
							<div class="col-xs-1 col-sm-1 col-md-1" ></div>
						</div>
						<p>&nbsp;</p>
							<div class="row">
								<div class="col-xs-1 col-sm-1 col-md-1" ></div>
									<div class="col-xs-8 col-sm-8 col-md-8" >
										<?php echo $this->Form->create('Commute', array(
											'action'=>'add',
											'inputDefaults' => array(
												'div' => 'form-group',
												'label' => true,
												'wrapInput' => false,
												'class' => 'form-control'
											)
										)); ?>

											<?php echo $this->Form->input('Commute.fromZIP', array(
												'placeholder' => 'Origin ZIP',
												'length' => 5,
												'label' => 'Where from?'

											)); ?>

											<?php echo $this->Form->input('Commute.toZIP', array(
												'placeholder' => 'Destination ZIP',
												'length' => 5,
												'label' => 'Where to?'
											)); ?>
											<div class="controls controls-row">
											<?php echo $this->Form->input('Commute.date', array(
											    'type' => 'date',
											    'label' => 'Date: &nbsp; ',
											    'class' => 'span2',
											    'div' => 'false',
											    'dateFormat' => 'MD',
											));?>
											</div>
											<div class="controls controls-row">
												<?php echo $this->Form->input('Commute.time', array(
											    'div' => 'false',
											    'type' => 'time',
											    'class' => 'span2',
											    'label' => 'Time leaving:&nbsp; ',
											    'selected' => '08:00:00'
											));?>
											</div>
											<?php echo $this->Form->input('drive', array(
												'div' => 'checkbox',
												'class' => false,
												'label' => 'I can drive!'
												)); ?>

											<?php echo $this->Form->submit('Get poold!', array(
												'div' => 'form-group',
												'class' => 'btn btn-default'
											)); ?>
											<?php echo $this->Form->end(); ?>
									</div>
							</div>
						<!--<?php debug($_SESSION)?>-->	

<!-- END CONTENT -->
			<!-- Close content divs -->
			</div>
		<div class="col-sm-1 col-md-1"></div>
	</div>
</div>
