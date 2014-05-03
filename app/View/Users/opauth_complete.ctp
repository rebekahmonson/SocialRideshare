<!--content container -->
<div id="container">
	<div class="row">
		<div class="col-sm-1 col-md-1"></div>
			<div class="col-xs-12 col-sm-10 col-md-10">
<!-- CONTENT HERE -->


<h2 class="topic">Welcome, <?php echo $name;?>!</h2>
<p>Thanks for being a <?php echo $location?> local.</p>

<p><strong> Your email is: </strong><?php echo $email?></p>

<img src="<?php echo $pic;?>" width="50px">

<p>
<pre>
	<?php print_r($opauth_data); ?>
</pre>

</p>
<!-- END CONTENT -->
			<!-- Close content divs -->
			</div>
		<div class="col-sm-1 col-md-1"></div>
	</div>
</div>
