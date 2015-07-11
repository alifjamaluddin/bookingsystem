<?php 

$userid = $_SESSION['userid'];
$profileRS__query="SELECT * FROM user WHERE id = $userid";

  $ProfileRS = $connection->query($profileRS__query);

  $loginFoundUser = $ProfileRS->num_rows;

  if ($loginFoundUser > 0) {
    $row = mysqli_fetch_assoc($ProfileRS);
        $displayname = $row['fullname'];
         $email = $row['email'];
  }
  else {
   		$displayname = "Display name"
   		$email = "user@email.com"
  }
?>
	<nav class="menu menu-right" id="profile">
		<div class="menu-scroll">
			<div class="menu-wrap">
				<div class="menu-top">
					<div class="menu-top-img">
						<img alt="John Smith" src="images/samples/landscape.jpg">
					</div>
					<div class="menu-top-info">
						<a class="menu-top-user" href="javascript:void(0)"><span class="avatar pull-left"><img alt="alt text for John Smith avatar" src="images/users/avatar-001.jpg"></span><?php echo $username ?></a>
					</div>
					<div class="menu-top-info-sub">
						<small><?php echo $email ?></small>
					</div>
				</div>
				<div class="menu-content">
					<ul class="nav">
						<li>
							<a href="javascript:void(0)"><span class="icon icon-account-box"></span>Profile Settings</a>
						</li>
						<li>
							<a href="javascript:void(0)"><span class="icon icon-add-to-photos"></span>Upload Photo</a>
						</li>
						<li>
							<a href="page-login.html"><span class="icon icon-exit-to-app"></span>Logout</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>