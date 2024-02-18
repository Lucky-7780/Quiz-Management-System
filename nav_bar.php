			<nav class = "navbar navbar-header navbar-light" style="background-color:#900">
			<div class = "container-fluid " >
				<div class = "navbar-header d-flex flex-row ">
					<img id src="image\logo2.jpg" alt="" style="height:50px;margin:10px; margin-top:30px;" >
					<div class = "navbar-header d-flex flex-column ">
					<p class = "navbar-text pull-right text-white"><h3 style="color:white"> <b>RAJIV GANDHI UNIVERSITY OF KNOWLEDGE TECHNOLOGIES,ONGOLE </b>	 </h3></p>
					
		</div>
				</div>
				<div class = "nav navbar-nav navbar-right">
					<a href="logout.php" class="text-dark" style="width:100px;background-color:white; margin-top:14px; border-radius:10px; border-width:0px; padding:5px"><h6 style="font-size:15px; margin-top:5px;"><b>LOG OUT</b> <i class="fa fa-power-off"></i> </h6></a>
				</div>
			</div>
		</nav>
		<div id="sidebar" class="bg-light">
			<div id="sidebar-field">
				<a href="home.php" class="sidebar-item text-dark">
						<div class="sidebar-icon"><i class="fa fa-home"> </i></div> Home
				</a>
			</div>
			<?php if($_SESSION['login_user_type'] != 3): ?>
			<?php if($_SESSION['login_user_type'] == 1): ?>
			<div id="sidebar-field">
				<a href="faculty.php" class="sidebar-item text-dark">
						<div class="sidebar-icon"><i class="fa fa-users"> </i></div>  Faculty List
				</a>
			</div>
		<?php endif; ?>
			<div id="sidebar-field">
				<a href="student.php" class="sidebar-item text-dark">
						<div class="sidebar-icon"><i class="fa fa-users"> </i></div>  Student List
				</a>
			</div>
			<div id="sidebar-field">
				<a href="quiz.php" class="sidebar-item text-dark">
						<div class="sidebar-icon"><i class="fa fa-list"> </i></div>  Quiz List
				</a>
			</div>
			<div id="sidebar-field">
				<a href="history.php" class="sidebar-item text-dark">
						<div class="sidebar-icon"><i class="fa fa-history"> </i></div>  Quiz Records
				</a>
			</div>
			<?php else: ?>
			<div id="sidebar-field">
				<a href="student_quiz_list.php" class="sidebar-item text-dark">
						<div class="sidebar-icon"><i class="fa fa-list"> </i></div>  Quiz List
				</a>
			</div>
		<?php endif; ?>

		</div>
		<script>
			$(document).ready(function(){
				var loc = window.location.href;
				loc.split('{/}')
				$('#sidebar a').each(function(){
				// console.log(loc.substr(loc.lastIndexOf("/") + 1),$(this).attr('href'))
					if($(this).attr('href') == loc.substr(loc.lastIndexOf("/") + 1)){
						$(this).addClass('active')
					}
				})
			})

		</script>
