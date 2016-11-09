<?php
$Statuses_Array = get_option("EWD_OTP_Statuses_Array");

$Order_Information_String = get_option("EWD_OTP_Order_Information");
$Order_Information = explode(",", $Order_Information_String);

?>


<div id="fade" class="ewd-otp-dark_overlay"></div>
<div id="ewd-dashboard-top" class="metabox-holder">


<!-- Upgrade to pro link box -->
<?php if ($EWD_OTP_Full_Version != "Yes") { ?>
<div id="side-sortables" class="metabox-holder ">
<div id="upcp_pro" class="postbox " >
		<div class="handlediv" title="Click to toggle"></div><h3 class='hndle'><span><?php _e("Full Version", 'EWD_OTP') ?></span></h3>
		<div class="inside">
				<ul><li><a href="http://www.etoilewebdesign.com/plugins/order-tracking/"><?php _e("Upgrade to the full version ", "EWD_OTP"); ?></a><?php _e("to take advantage of all the available features of the Order Tracking for Wordpress!", 'EWD_OTP'); ?></li>
				<h3 class='hndle'><span><?php _e("What you get by upgrading:", 'EWD_OTP') ?></span></h3>
				<ul>
					<li>Access to the "Custom Fields" tab, so you can create and display your own fields.</li>
					<li>Access to the "Locations" tab, so you can let customers know where their order is.</li>
					<li>Access to the "Sales Reps" and "Customers" tabs, so you can assign orders to customers or sales reps.</li>
					<li>Additional display options, including a mobile stylesheet as well as different tracking graphic options.</li>
					<li>WooCommerce integration as well as other premium features!</li>
					<li>Access to e-mail support. </li>
				</ul>
				<div class="full-version-form-div">
						<form action="admin.php?page=EWD-OTP-options" method="post">
								<div class="form-field form-required">
										<label for="Product_Key"><?php _e("Product Key", 'EWD_OTP') ?></label>
										<input name="Key" type="text" value="" size="40" />
								</div>
								<input type="submit" name="EWD_OTP_Upgrade_To_Full" value="<?php _e('Upgrade', 'EWD_OTP') ?>">
						</form>
				</div>
		</div>
</div>
</div>
<?php } ?>

<?php if (get_option("EWD_OTP_Update_Flag") == "Yes" or get_option("EWD_OTP_Install_Flag") == "Yes") {?>
					<div id="side-sortables" class="metabox-holder ">
							<div id="upcp_pro" class="postbox " >
									<div class="handlediv" title="Click to toggle"></div>
									<h3 class='hndle'><span><?php _e("Thank You!", 'EWD_OTP') ?></span></h3>
							 		<div class="inside">
											<?php /* if (get_option("EWD_OTP_Install_Flag") == "Yes") { ?><ul><li><?php _e("Thanks for installing Order Tracking.", 'EWD_OTP'); ?><br> <a href='http://www.facebook.com/EtoileWebDesign'><?php _e("Follow us on Facebook", 'EWD_OTP'); ?></a> <?php _e("to suggest new features or hear about upcoming ones!", 'EWD_OTP');?>  </li></ul>
											<?php } else { ?><ul><li><?php _e("Thanks for upgrading to version 2.6.21!", 'EWD_OTP'); ?><br> <a href='https://www.youtube.com/channel/UCZPuaoetCJB1vZOmpnMxJNw'><?php _e("Subscribe to our YouTube channel ", 'EWD_OTP'); ?></a> <?php _e("for tutorial videos on this and our other plugins!", 'EWD_OTP');?> </li></ul><?php } */ ?>

											<?php if (get_option("EWD_OTP_Install_Flag") == "Yes") { ?><ul><li><?php _e("Thanks for installing Order Tracking.", 'EWD_OTP'); ?><br> <a href='https://www.youtube.com/channel/UCZPuaoetCJB1vZOmpnMxJNw'><?php _e("Subscribe to our YouTube channel ", 'EWD_OTP'); ?></a> <?php _e("for tutorial videos on this and our other plugins!", 'EWD_OTP');?>  </li></ul>
											<?php } else { ?><ul><li><?php _e("Thanks for upgrading to version 2.8.4!", 'EWD_OTP'); ?><br> <a href='https://wordpress.org/plugins/ultimate-faqs/'><?php _e("Check out our new FAQ plugin ", 'EWD_OTP'); ?></a> <?php _e("if you're looking to connect with your customers!", 'EWD_OTP');?> </li></ul><?php } ?>

											<?php /* if (get_option("EWD_OTP_Install_Flag") == "Yes") { ?><ul><li><?php _e("Thanks for installing Order Tracking.", 'EWD_OTP'); ?><br> <a href='http://www.facebook.com/EtoileWebDesign'><?php _e("Follow us on Facebook", 'EWD_OTP'); ?></a> <?php _e("to suggest new features or hear about upcoming ones!", 'EWD_OTP');?>  </li></ul>
											<?php } else { ?><ul><li><?php _e("Thanks for upgrading to version 2.4.8!", 'EWD_OTP'); ?><br> <a href='http://wordpress.org/support/view/plugin-reviews/order-tracking'><?php _e("Please rate our plugin", 'EWD_OTP'); ?></a> <?php _e("if you find Order Tracking useful!", 'EWD_OTP');?> </li></ul><?php } */ ?>

											<?php /*if (get_option("EWD_OTP_Install_Flag") == "Yes") { ?><ul><li><?php _e("Thanks for installing the Ultimate Product Catalogue Plugin.", 'EWD_OTP'); ?><br> <a href='http://www.facebook.com/EtoileWebDesign'><?php _e("Follow us on Facebook", 'EWD_OTP'); ?></a> <?php _e("to suggest new features or hear about upcoming ones!", 'EWD_OTP');?>  </li></ul>
											<?php } else { ?><ul><li><?php _e("Thanks for upgrading to version 2.3.9!", 'EWD_OTP'); ?><br> <a href='http://wordpress.org/support/topic/error-hunt'><?php _e("Please let us know about any small display/functionality errors. ", 'EWD_OTP'); ?></a> <?php _e("We've noticed a couple, and would like to eliminate as many as possible.", 'EWD_OTP');?> </li></ul><?php } */?>

											<?php /* if (get_option("EWD_OTP_Install_Flag") == "Yes") { ?><ul><li><?php _e("Thanks for installing the Ultimate Product Catalogue Plugin.", 'EWD_OTP'); ?><br> <a href='https://www.youtube.com/channel/UCZPuaoetCJB1vZOmpnMxJNw'><?php _e("Check out our YouTube channel ", 'EWD_OTP'); ?></a> <?php _e("for tutorial videos on this and our other plugins!", 'EWD_OTP');?> </li></ul>
											<?php } elseif ($Full_Version == "Yes") { ?><ul><li><?php _e("Thanks for upgrading to version 2.4!", 'EWD_OTP'); ?><br> <a href='http://www.facebook.com/EtoileWebDesign'><?php _e("Follow us on Facebook", 'EWD_OTP'); ?></a> <?php _e("to suggest new features or hear about upcoming ones!", 'EWD_OTP');?> </li></ul>
											<?php } else { ?><ul><li><?php _e("Thanks for upgrading to version 2.4!", 'EWD_OTP'); ?><br> <?php _e("Love the plugin but don't need the premium version? Help us speed up product support and development by donating. Thanks for using the plugin!", 'EWD_OTP');?>
																	 <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
																	 <input type="hidden" name="cmd" value="_s-xclick">
																	 <input type="hidden" name="hosted_button_id" value="AQLMJFJ62GEFJ">
																	 <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_SM.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">
																	 <img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
																	 </form>
																	 </li></ul>
											<?php } */ ?>

									</div>
							</div>
					</div>
		<?php
		update_option('EWD_OTP_Update_Flag', "No");
		update_option('EWD_OTP_Install_Flag', "No");
	}
	EWD_OTP_Get_EWD_Blog();
	EWD_OTP_Get_Changelog();
?>







	<div id="ewd-dashboard-box-orders" class="ewd-otp-dashboard-box" >
	  	<div class="ewd-dashboard-box-icon"><img src="<?php echo plugins_url(); ?>/order-tracking/images/otp-buttonsicons-full-06.png"/>
	  	</div>
		<div class="ewd-dashboard-box-value-and-field-container">
		  <div class="ewd-dashboard-box-value"><span class="displaying-num"><?php echo $wpdb->get_var("SELECT COUNT(Order_Number) FROM $EWD_OTP_orders_table_name"); ?></span>
		  </div>
		  <div class="ewd-dashboard-box-field"><?php _e("Orders", 'EWD_OTP'); ?>
		  </div>
		</div>
	</div>
	<div id="ewd-dashboard-box-links" class="ewd-otp-dashboard-box" >
	  	<div class="ewd-dashboard-box-icon"><img src="<?php echo plugins_url(); ?>/order-tracking/images/otp-buttonsicons-05.png"/>
	  	</div>
		<div class="ewd-dashboard-box-value-and-field-container">
		  <div class="ewd-dashboard-box-value ewd-font-22"><?php echo $wpdb->get_var("SELECT Order_Number FROM $EWD_OTP_orders_table_name ORDER BY Order_ID DESC"); ?>
		  </div>
		  <div class="ewd-dashboard-box-field"><?php _e("Most Recent Order", 'EWD_OTP'); ?>
		  </div>
		</div>
	</div>
	<div id="ewd-dashboard-box-views" class="ewd-otp-dashboard-box" >
	  	<div class="ewd-dashboard-box-icon"><img src="<?php echo plugins_url(); ?>/order-tracking/images/otp-buttonsicons-03.png"/>
	  	</div>
		<div class="ewd-dashboard-box-value-and-field-container">
		  <div class="ewd-dashboard-box-value"><?php echo $wpdb->get_var("SELECT SUM(Order_View_Count) FROM $EWD_OTP_orders_table_name"); ?>
		  </div>
		  <div class="ewd-dashboard-box-field"><?php _e("Views", 'EWD_OTP'); ?>
		  </div>
		</div>
	</div>

	<div id="ewd-dashboard-box-support" class="ewd-otp-dashboard-box" >
		<div class="ewd-dashboard-box-icon"><img src="<?php echo plugins_url(); ?>/order-tracking/images/otp-buttonsicons-04.png"/>
	  	</div>
		<div class="ewd-dashboard-box-value-and-field-container">
		  	<div class="ewd-dashboard-box-support-value">
			<form id="form1" runat="server">
			<a href="javascript:void(0)" onclick="document.getElementById('light').style.display='block';document.getElementById('fade').style.display='block'">Click here for support</a>
		  		</div>
			</div>
		</div>
	<div id="light" class="ewd-otp-bright_content">
            <asp:Label ID="lbltext" runat="server" Text="Hey there!"></asp:Label>
            <a href="javascript:void(0)" onclick="document.getElementById('light').style.display='none';document.getElementById('fade').style.display='none'">Close</a>
		</br>
		<h2>Need help?</h2>
		<p>You may find the information you need with our support tools.</p>
		<a href="https://www.youtube.com/playlist?list=PLEndQUuhlvSqa6Txwj1-Ohw8Bj90CIRl0"><img src="<?php echo plugins_url(); ?>/order-tracking/images/support_icons_otp-01.png" /></a>
		<a href="https://www.youtube.com/playlist?list=PLEndQUuhlvSqa6Txwj1-Ohw8Bj90CIRl0"><h4>Youtube Tutorials</h4></a>
		<p>Our tutorials show you the basics of setting up your plugin, to the more specific utilization of our features.</p>
		<div class="ewd-otp-clear"></div>
		<a href="https://wordpress.org/support/plugin/order-tracking"><img src="<?php echo plugins_url(); ?>/order-tracking/images/support_icons_otp-03.png"/></a>
		<a href="https://wordpress.org/support/plugin/order-tracking"><h4>WordPress Forum</h4></a>
		<p>We make sure to answer your questions within a 24hrs frame during our business days. Search within our threads to find your answers. If it has not been addressed, please create a new thread!</p>
		<div class="ewd-otp-clear"></div>
		<a href="http://www.etoilewebdesign.com/plugins/order-tracking/documentation-order-tracking/"><img src="<?php echo plugins_url(); ?>/order-tracking/images/support_icons_otp-02.png"/></a>
		<a href="http://www.etoilewebdesign.com/plugins/order-tracking/documentation-order-tracking/"><h4>Documentation</h4></a>
		<p>Most information concerning the installation, the shortcodes and the features are found within our documentation page.</p>
        </div>
	</form>

<!--END TOP BOX-->
</div>



<?php
$Sql = "SELECT * FROM $EWD_OTP_orders_table_name WHERE Order_Display='Yes' ORDER BY Order_Number LIMIT 0,10";
$myrows = $wpdb->get_results($Sql);
?>

<!--Middle box-->
<div class="ewd-dashboard-middle">
<div id="col-full">
<h3 class="ewd-otp-dashboard-h3"><?php _e('Recent Order Summary', 'EWD_OTP'); ?></h3>
<div>
	<table class='ewd-otp-overview-table wp-list-table widefat fixed striped posts'>
		<thead>
			<tr>
				<th><?php _e("Order Number", 'EWD_OTP'); ?></th>
				<th><?php _e("Name", 'EWD_OTP'); ?></th>
				<th><?php _e("Status", 'EWD_OTP'); ?></th>
				<th><?php _e("Updated", 'EWD_OTP'); ?></th>
			</tr>
		</thead>
		<tbody>
			 <?php
				if ($myrows) {
	  			  	foreach ($myrows as $Order) {
						echo "<tr id='Order" . $Order->Order_ID ."'>";
						echo "<td class='name column-name'>";
						echo "<strong>";
						echo "<a class='row-title' href='admin.php?page=EWD-OTP-options&OTPAction=EWD_OTP_Order_Details&Selected=Order&Order_ID=" . $Order->Order_ID ."' title='Edit " . $Order->Order_Number . "'>" . $Order->Order_Number . "</a></strong>";
						echo "</td>";
						echo "<td class='name column-name'>" . stripslashes($Order->Order_Name) . "</td>";
						echo "<td class='status column-status'>" . stripslashes($Order->Order_Status) . "</td>";
						echo "<td class='updated column-updated'>" . stripslashes($Order->Order_Status_Updated) . "</td>";
						echo "</tr>";
					}
				}
			?>
		</tbody>
	</table>
</div>
<br class="clear" />
</div>
</div>
<!-- END MIDDLE BOX -->

<!-- FOOTER BOX -->
<!-- A list of the products in the catalogue -->
<div class="ewd-dashboard-footer">
<div id='ewd-dashboard-updates' class='ewd-otp-updates postbox upcp-postbox-collapsible'>
<h3 class='hndle ewd-otp-dashboard-h3' id='ewd-recent-changes'><?php _e("Recent Changes", 'EWD_OTP'); ?> <i class="fa fa-cog" aria-hidden="true"></i></h3>
<div class='ewd-dashboard-content' ><?php echo get_option('EWD_OTP_Changelog_Content'); ?></div>
</div>

<div id='ewd-dashboard-blog' class='ewd-otp-blog postbox upcp-postbox-collapsible'>
<h3 class='hndle ewd-otp-dashboard-h3'>News <i class="fa fa-rss" aria-hidden="true"></i></h3>
<div class='ewd-dashboard-content'><?php echo get_option('EWD_OTP_Blog_Content'); ?></div>
</div>

<div id="ewd-dashboard-plugins" class='ewd-otp-plugins postbox upcp-postbox-collapsible' >
	<h3 class='hndle ewd-otp-dashboard-h3'><span><?php _e("Goes great with:", 'EWD_OTP') ?></span><i class="fa fa-plug" aria-hidden="true"></i></h3>
	<div class="inside">
		<div class="ewd-dashboard-plugin-icons">
			<div style="width:50%">
				<a target='_blank' href='https://wordpress.org/plugins/front-end-only-users/'><img style="width:100%" src='<?php echo plugins_url(); ?>/order-tracking/images/Related_FEUP.png'/></a>
			</div>
			<div>
				<h3>Front-End Only Users</h3><p>A user management and membership plugin that allows admins to restrict access to portions of their websites.</p>
			</div>

		</div>
		<div class="ewd-dashboard-plugin-icons">
			<div style="width:50%">
				<a target='_blank' href='https://wordpress.org/plugins/ultimate-faqs/'><img style="width:100%" src='<?php echo plugins_url(); ?>/order-tracking/images/Related_FAQ.png'/></a>
			</div>
			<div>
				<h3>Ultimate FAQS</h3><p>An easy-to-use FAQ plugin that lets you create, order and publicize FAQs, insert 3 styles of FAQs on a page.</p>
			</div>

		</div>
	</div>
</div>
</div>


<?php
function EWD_OTP_Get_EWD_Blog() {
	$Blog_URL = EWD_OTP_CD_PLUGIN_PATH . 'Blog.html';
	$Blog = file_get_contents($Blog_URL);

	update_option('EWD_OTP_Blog_Content', $Blog);
}

function EWD_OTP_Get_Changelog() {
	$Readme_URL = EWD_OTP_CD_PLUGIN_PATH . 'readme.txt';
	$Readme = file_get_contents($Readme_URL);

	$Changes_Start = strpos($Readme, "== Changelog ==") + 15;
	$Changes_Section = substr($Readme, $Changes_Start);

	$Changes_Text = substr($Changes_Section, 0, strposX($Changes_Section, "=", 5));

	$Changes_Text = str_replace("= ", "<h3>", $Changes_Text);
	$Changes_Text = str_replace(" =", "</h3>", $Changes_Text);
	$Changes_Text = str_replace("- ", "<br />- ", $Changes_Text);

	update_option('EWD_OTP_Changelog_Content', $Changes_Text);
}

function strposX($haystack, $needle, $number){
    if($number == '1'){
        return strpos($haystack, $needle);
    }elseif($number > '1'){
        return strpos($haystack, $needle, strposX($haystack, $needle, $number - 1) + strlen($needle));
    }else{
        return error_log('Error: Value for parameter $number is out of range');
    }
}
