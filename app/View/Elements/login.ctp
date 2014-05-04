<form class="navbar-form navbar-right">
		<?php 
		if(isset($_SESSION['user'])){
			$user=$_SESSION['user'];
			$pic=$_SESSION['pic'];
			echo '<div style="float:left; height: 40px;"><img src= "'.$pic.'" width="40px"></div>';
			echo '<div id="loginInfo" style="float:left; margin-left:5px; margin-top:0px;"> Hey, '.$user.'! 
					<br>'; 
			echo $this->Html->link(
    					'Logout',
    						array(
					        'controller' => 'Users',
					        'action' => 'logout'
					    )
					);
			echo '</div>';
		}
		else{ 
			echo '<a href="/auth/facebook" class="btn btn-default btn-sm"><i class="fa fa-facebook-square"></i> Log in</a>';
			}?> 

		<!--<a href="/auth/facebook"><button type="submit" class="btn btn-default btn-sm"><i class="fa fa-facebook-square"></i> Log in </button></a>-->
    	

   	
</form>