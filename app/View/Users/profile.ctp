 
<!--content container -->
<div id="container">
	<div class="row">
		<div class="col-sm-1 col-md-1"></div>
			<div class="col-xs-12 col-sm-10 col-md-10">
<!-- CONTENT HERE -->
				<!--<?php debug($user)?>-->
				<!--define some variables-->
				<?php 
					$u=$user['User']['user'];
					$u_id=$user['User']['id'];
					$firstname=$user['Profile']['first_name'];
					$lastname=$user['Profile']['last_name'];
					$bio=$user['Profile']['bio'];
					$joined=$user['Profile']['created']
				?>
				


				<h1 class="topic"><?php echo h($u); ?></h1>

				<h3>A where-do-i contributor since 
					<?php echo $this->Time->nice($joined);?></h3>
				<p><strong>Name:</strong> <?php echo $firstname.' '.$lastname ?></p>
				<p> <?php echo $bio?></p>
				<p>&nbsp;</p>

				<h4>Reviews:</h4>
				<!--get the reviews-->
				<?php 
				foreach ($user['Review'] as $review){
					$title=$review['title'];
					$id=$review['id'];
					echo $this->Html->link(
    					$title,
   						 array(
        					'controller' => 'reviews',
      						'action' => 'viewOne',
						    $id)
						);				
					}
			 	 ?>
			 	 <p>&nbsp;</p>
						
<!-- END CONTENT -->
<!-- Close content divs -->
			</div>
		<div class="col-sm-1 col-md-1"></div>
	</div>
</div> 
