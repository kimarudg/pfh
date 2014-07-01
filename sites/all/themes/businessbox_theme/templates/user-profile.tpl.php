<?php
global $user;
$currrentUser = arg(1);
if ($currrentUser == '')
{
	$account = user_load($user->uid);
	$differentUser = FALSE;
}
else
{
	$account = user_load(arg(1));
	$differentUser = TRUE;
}
drupal_add_library('system', 'drupal.ajax');
 $businessbox_profile = profile2_load_by_user($account,'businessbox_register');
 //drupal_set_message(print_r($account, true));
 //$full_name = check_plain($businessbox_profile->field_first_name['und'][0]['value']);
$qualifications = (empty ($businessbox_profile->field_profile_qualifications) ? 'No information found' : check_plain($businessbox_profile->field_profile_qualifications['und'][0]['value']));
$business_industry = (empty ($businessbox_profile->field_profile_business_industry) ? 'No information found' : check_plain($businessbox_profile->field_profile_business_industry['und'][0]['value']));
$work_history = (empty ($businessbox_profile->field_profile_work_history) ? 'No information found' : check_plain($businessbox_profile->field_profile_work_history['und'][0]['value']))
?>
		<div class="container-fluid">
			<div class="row main-section">
				<div class="col-lg-9">
					
					<div class="row">
						<div class="col-lg-12">
							<div id="profile-content">
							
							<div class="profile-header">
								<div class="profile-photo">
								
								</div>
								<h2><?php print $account->realname; ?></h2>
								<a class="btn btn-default biz-plan-btn">My Business Plan</a>
							</div>
							<div class="profile-info">
								<h3>Business/ Industry</h3>
								<p> <?php print ($business_industry); ?>
								</p>
								<h3>Qualifications</h3>
								<p> <?php print ($qualifications); ?>
								</p>
								<h3>Work History</h3>
								<p><?php print ($work_history); ?>
								</p>
								<div class="profile-info-edit">
									<a class="btn btn-sm edit-profile-btn" href="/user/<?php print $account->uid; ?>/edit">Edit Account</a> <a class="btn btn-sm edit-profile-btn" href="/user/<?php print $account->uid; ?>/edit/businessbox_register">Edit Profile</a>
									<?php
									if (in_array("Coach", $account->roles))
									{
										if ($differentUser)
										{
											if (check_entrepreneur_request($account->uid, $user -> uid) === 0){
												print (l('Request this Coach','businessbox/request/coach/nojs/'.$account->uid, array('attributes' => array('class' => array('btn', 'btn-sm','assign-coach-btn', 'use-ajax'), 'id' => array('request_coach_btn')))));
												print 	'<a class="btn btn-sm assign-coach-btn" href= "entre/assigned">Assigned Enterpreneurs</a>';
											}
											else
											{
												print ('<a class="btn btn-sm assign-coach-btn" href= "#">Request '.get_request_status($account->uid, $user -> uid).'</a>');
												print 	'<a class="btn btn-sm assign-coach-btn" href= "entre/assigned">Assigned Enterpreneurs</a>';
											}
										}
									}
									
									if (in_array("Entrepreneur", $account->roles))
									{
										print 	'<a class="btn btn-sm assign-coach-btn">Assigned Coach</a>
												<a class="btn btn-sm assign-coach-btn">Request this Enterpreneur</a>';
									}
									
									?>
									
									
									
								</div>
							</div>
							
							</div>						
						</div>
						<div class="col-lg-6" id="connections">
							<h3>Connections</h3>
							<div class="list-group-box">
								<ul class="list-group">
									<li class="list-group-item">
										<a>Name One</a>
									</li>
									<li class="list-group-item">
										<a>Name Two</a>
									</li>
								</ul>
								
								<a class="view-all">View all</a>
							</div>
						</div>
						<div class="col-lg-6"  id="resources">
							<h3>Resources</h3>
							<div class="list-group-box">
								<ul class="list-group">
									<li class="list-group-item">
										<a>Name One</a>
									</li>
									<li class="list-group-item">
										<a>Name Two</a>
									</li>
								</ul>
								<a class="view-all">View all</a>
							</div>
						</div>
					</div>
					
				</div>
				
				<div class="col-lg-3">
					<div class="profile-sidebar">
					<div class="profile-search">
						<form role="form">
							
						<div class="form-group">
						    <input type="search" class="form-control" id="searc-bb" placeholder="Search">
  						</div>
  						
  						<button type="submit" class="btn btn-default btn-search-bb">Search</button>
  						
  						</form>
					</div>
					
					<div class="profile-twitter">
						<img src="/<?php print(drupal_get_path('theme', 'businessbox_theme')); ?>/img/twitter-sidebar-icon.png"/>
						<p class="twitter-feed">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
						</p>
					</div>
					
					<div class="profile-facebook">
						<img src="/<?php print(drupal_get_path('theme', 'businessbox_theme')); ?>/img/facebook-sidebar-icon.png"/>
						<p class="facebook-feed">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
						</p>
					</div>
					</div><!--end of sidebar-->
				</div>
			</div>
		</div>
		
		<!--footer-->
		
	
