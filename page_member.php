<?php /* Template Name: Membership page */ ?>
<?php
	session_start(); 
	if(isset($_POST['logout'])) { session_destroy(); echo "<meta http-equiv='refresh' content='0;url=" . home_url("/") . "membership/members-only/' />"; exit; }
	if(isset($_POST['home'])) { echo "<meta http-equiv='refresh' content='0;url=" . home_url("/") . "membership/members-only/' />"; exit; }
?>
<?php
	$logged_in = false;
	$error = false;
	if(!empty($_POST['email_recover'])) {
		$found_email = false;
		$notfound = false; 
		$email = $_POST['email_recover'];
		$sql = "SELECT id, email FROM ae_company WHERE (email = '$email' AND active = 0) OR (old_login = '$email' AND active = 0)";
		$result = $wpdb->get_results($wpdb->prepare($sql, 0));

		if(count($result) == 1) { 
			$email = $result[0]->email;
			$found_email = true;
			$password = unique_id();
			$sql = "UPDATE ae_company SET password = MD5('$password') WHERE id = " . $result[0]->id;
			$wpdb->get_results($wpdb->prepare($sql, 0));
		} else { 
			$sql = "SELECT id FROM ae_user WHERE email = '$email' AND active = 0";
			$result = $wpdb->get_results($wpdb->prepare($sql, 0));
			if(count($result) == 1) {
				$found_email = true;
				$password = unique_id();
				$sql = "UPDATE ae_company SET password = MD5('$password') WHERE id = " . $result[0]->id;
				$wpdb->get_results($wpdb->prepare($sql, 0));
			}
		}


		if($found_email) {
			$message = "<html><body><p>Here is your new account password. If you did not request this password reset please contact us at 406.248.6178.</p><p>Your new password: " . $password . "</p></body></html>";
			$headers = "MIME-Version: 1.0" . "\r\n";
			$headers .= "Content-type:text/html;charset=iso-8859-1" . "\r\n";
			$headers .= "From: no-reply@aehr.org" . "\r\n";
			$headers .= "Bcc: cyndi@aehr.org" . "\r\n";
			mail($email, 'Password Reset', $message, $headers);
		} else { $notfound = true; }
	}


	if(!empty($_POST['email'])) {
		$email = $_POST['email'];
		$password = $_POST['pass'];
		$sql = "SELECT * FROM ae_company WHERE (email = '$email' AND password = MD5('$password') AND active = 0) OR (old_login = '$email' AND password = MD5('$password') AND active = 0)";
		$result = $wpdb->get_results($wpdb->prepare($sql, 0));
		$_SESSION['user_type'] = 'company_account';

		if(count($result) == 0) { 
			$sql = "SELECT * FROM ae_user WHERE email = '$email' AND password = MD5('$password') AND active = 0";
			$result = $wpdb->get_results($wpdb->prepare($sql, 0));
			$_SESSION['user_type'] = 'sub_account';
		}

		if(count($result) == 1) { 
			$logged_in = true;
			$result = current($result);
			$_SESSION['email'] = $result->email;
			$_SESSION['user_id'] = $result->id;

			if($_SESSION['user_type'] == 'company_account') {
				$_SESSION['comp_id'] = $result->id;
				$sql = "UPDATE ae_company SET last_login = NOW() WHERE id = " . $result->id;
				$result = $wpdb->get_results($wpdb->prepare($sql, 0));
			}
			if($_SESSION['user_type'] == 'sub_account') {
				$_SESSION['comp_id'] = $result->company_id;
				$sql = "UPDATE ae_user SET last_login = NOW() WHERE id = " . $result->company_id;
				$result = $wpdb->get_results($wpdb->prepare($sql, 0));
			}
		} else { 
			$error = 'Invalid email or password.';
		}
	}

	if(!empty($_SESSION['comp_id'])) { $logged_in = true; }
?>
<?php get_header(); ?>
<?php if($logged_in && isset($_GET['remove_sub'])) { 
	$remove_id = $_GET['remove_sub'];
	$sql = "DELETE FROM ae_user WHERE id = " . $remove_id . " AND company_id = " . $_SESSION['comp_id'];
	$result = $wpdb->get_results($wpdb->prepare($sql, 0));
	header('Location: ' . home_url('/') . 'membership/members-only/');
	exit;
 } ?>
<div class="bannerContainerSub">
	<div class="bigBannerSub"></div>
</div>

<div class="container_12 content">
	<div id="content" class="content grid_9">
		<div id="content_wrap">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<?php if($error) { ?><p style="color: red;"><?php echo $error; ?></p><?php } ?>


			<?php if(!$logged_in) { ?>
					<h3>Member Login</h3>
					<form method="post">
						<label>Email or Username</label><input type="text" name="email" /><br/>
						<label>Password</label><input type="password" name="pass" /><br/>
						<input type="submit" class="btn btn-primary" value="Login" />
					</form>

					<button class="btn btn-warning" onclick="$('#recover').show(); $(this).hide();">Lost your Password?</button>
					<form id="recover" method="post" style="display: none;" >
						<label>Email</label><input type="text" name="email_recover" /><br/>
						<input type="submit" name="recover" class="btn btn-primary" value="Recover Password" />
					</form>
					<?php if($found_email) { echo '<br/><br/><p>Your new password has been sent to your email</p>'; } ?>
					<?php if($notfound) { echo '<br/><br/><p>Your email/username not found.</p>'; } ?>


					<br/><br/><p>Still can't login? <a href="<?php echo home_url('/');?>contact-us">Click here</a> to contact us.</p>
			<?php } else { ?>
				<?php $id = $wp_query->query_vars['user_edit'];
					if(is_page('add-sub-accounts')) { 
						if(!empty($id)) { echo '<h1>Edit Sub Account</h1>'; }
						else if($_SESSION['user_type'] == 'sub_account') { echo '<h1>Edit Profile</h1>'; }
						else { the_title('<h1>', '</h1>'); }
					} ?>
				<?php the_content(); ?>


				<?php if(is_page('members-only') && $_SESSION['user_type'] != 'sub_account') { ?>
					<br/><br/><h3>Sub Accounts</h3>
					<?php $sql = "SELECT * FROM ae_user WHERE company_id = " . $_SESSION['comp_id'] . " ORDER BY first_name ASC "; $result = $wpdb->get_results($wpdb->prepare($sql, 0));
						if($result) { 
							echo '<table width="100%" class="table">';
							foreach($result as $r) { echo '<tr><td width="100%"><a href="' . home_url('/') . 'members-only/add-sub-accounts/' . $r->id . '">' . $r->first_name . ' ' . $r->last_name . '</a></td><td><a href="?remove_sub=' . $r->id . '" style="color: red;">remove</a></tr>'; } 
							echo '</table>';
						} else { 
							echo '<p><form style="display: inline;" method="post"><button class="btn btn-primary" formaction="' . home_url('/') . 'membership/members-only/add-sub-accounts/">Create a sub account</button></form></p>';
						}
					} ?>
			<?php } ?>

			<?php endwhile; endif; ?>
		</div>
	</div>

	<div id="sidebar" class="grid_3">
		<?php if($logged_in) { ?>
			<form style="display: inline;" method="post"><input type="hidden" value="logout" name="logout" /><input type="submit" class="btn btn-primary" value="Logout" /></form>
			<?php if(!is_page('members-only')) { ?>
			<form style="display: inline;" method="post"><input type="hidden" value="home" name="home" /><button formaction="<?php echo home_url('/');?>membership/members-only/" class="btn btn-warning">Member Home</button></form>
			<?php } ?><br/>

			<?php 
			$exclude = '&exclude=944'; //Hides transactions page
			if($_SESSION['user_type'] == 'sub_account') { 
				$profile_edit = '<li><a href="' . home_url('/') . 'membership/members-only/add-sub-accounts/' . $_SESSION['user_id'] . '">Edit Profile</a></li>';
				$exclude = '&exclude=879,942,944,946';
			}
			$children = wp_list_pages('title_li=&child_of=288&echo=0' . $exclude);

			if($children || $profile_edit) { echo '<br/><h4>Member Pages</h4><ul class="subpages">' . $profile_edit . $children . '</ul>'; }

			echo '<br/><strong>HR Answers Now</strong><br/><div class="hrAnswers" style="border-bottom: none;">
						<p style="margin: 0;">Online HR resource that is available to you 24 hours a day, 7 days a week, 365 days a year.</p>
						<p style="margin: 0;">
							<a href="http://ae.cch.mediregs.com/cgi-bin/_subs/abc_login_fs_gen?U=' . $_SESSION['email'] . '&P=aemp&C=aehr&X=720" target="_blank">Open HR Answers Now ></a>
						</p>
					</div>';
		} ?>
		<?php get_sidebar(); ?>
	</div>
</div>

<div class="footerBgContainer">
	<div class="footerBg sbar"></div>
</div>


<?php get_footer(); ?>