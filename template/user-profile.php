<?php 

//require( "../php/config.php" );

// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}


$connection = mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$userid = $_SESSION['userid'];
$profileRS__query="SELECT * FROM user WHERE id = $userid";

  $ProfileRS = $connection->query($profileRS__query);


  $loginFoundUser = $ProfileRS->num_rows;

  if ($loginFoundUser > 0) {
    $row = mysqli_fetch_assoc($ProfileRS);
        $displayname = ucwords($row['fullname']);
         $email = $row['email'];
  }
  else {
   		$displayname = "Display name";
   		$email = "user@email.com";
  }
?>
	<nav class="menu menu-right" id="profile">
		<div class="menu-scroll">
			<div class="menu-wrap">
				<div class="menu-top">
					<div class="menu-top-img">
						<img alt="John Smith" src="../images/samples/landscape.jpg">
					</div>
					<div class="menu-top-info">
						<a class="menu-top-user" href="javascript:void(0)"><span class="avatar pull-left"><img alt="alt text for John Smith avatar" src="../images/users/avatar-001.jpg"></span><?php echo $displayname; ?></a>
					</div>
					<div class="menu-top-info-sub">
						<small><?php echo $email; ?></small>
					</div>
				</div>
				<div class="menu-content">
					<ul class="nav">
						<li>
							<a href="form-edit-profile.php"><span class="icon icon-account-box"></span>Profile Settings</a>
						</li>
						<li>
							<a href="../php/logout.php"><span class="icon icon-exit-to-app"></span>Logout</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</nav>