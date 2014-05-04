<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="/website"><img src="/img/pooldlogo.png" width="12px" style="float:left;margin-right:2px;margin-top:2px;">poold</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
<!--	        <li class="dropdown">
	          <a href="#" class="dropdown-toggle" data-toggle="dropdown">Find something fun<b class="caret"></b></a>
	          <ul class="dropdown-menu">
	            <li><a href="#">By Neighborhood</a></li>
	            <li><a href="#">By Activity</a></li>
	            <li><a href="#">By Reviewer</a></li>
	          </ul>
	        </li>
-->	        <li><a href="/contact">about</a></li>
	      </ul>
	      <?php echo $this->element("login");?>
	    </div><!-- /.navbar-collapse --> 
	  </div><!-- /.container-fluid -->
	</nav>