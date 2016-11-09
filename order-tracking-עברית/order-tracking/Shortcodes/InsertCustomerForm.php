<?php
/* The function that creates the HTML on the front-end, based on the parameters
* supplied in the product-catalog shortcode */
function Insert_Customer_Form($atts) {
	global $user_message;
	global $wpdb;
	global $EWD_OTP_orders_table_name, $EWD_OTP_order_statuses_table_name, $EWD_OTP_customers;

	$Custom_CSS = get_option('EWD_OTP_Custom_CSS');
	$New_Window = get_option("EWD_OTP_New_Window");
	$Email_Confirmation = get_option("EWD_OTP_Email_Confirmation");

	$Customer_Tracking_Track_Your_Order_Label = get_option("EWD_OTP_Customer_Tracking_Track_Your_Order_Label");
	if ($Customer_Tracking_Track_Your_Order_Label == "") {$Customer_Tracking_Track_Your_Order_Label = __("Track Your Orders", "EWD_OTP");}
	$Customer_Tracking_Enter_Order_Label = get_option("EWD_OTP_Customer_Tracking_Enter_Order_Label");
	if ($Customer_Tracking_Enter_Order_Label == "") {$Customer_Tracking_Enter_Order_Label = __('Enter your customer ID in the form below to track your orders.', 'EWD_OTP');}
	$Customer_Tracking_Customer_Number_Label = get_option("EWD_OTP_Customer_Tracking_Customer_Number_Label");
	if ($Customer_Tracking_Customer_Number_Label == "") {$Customer_Tracking_Customer_Number_Label = __("Customer Number", "EWD_OTP");}
	$Customer_Tracking_Customer_Number_Placeholder_Label = get_option("EWD_OTP_Customer_Tracking_Customer_Number_Placeholder_Label");
	if ($Customer_Tracking_Customer_Number_Placeholder_Label == "") {$Customer_Tracking_Customer_Number_Placeholder_Label = __("Customer Number", "EWD_OTP");}
	$Customer_Tracking_Customer_Email_Label = get_option("EWD_OTP_Customer_Tracking_Customer_Email_Label");
	if ($Customer_Tracking_Customer_Email_Label == "") {$Customer_Tracking_Customer_Email_Label = __("Customer Email", "EWD_OTP");}
	$Customer_Tracking_Customer_Email_Placeholder_Label = get_option("EWD_OTP_Customer_Tracking_Customer_Email_Placeholder_Label");
	if ($Customer_Tracking_Customer_Email_Placeholder_Label == "") {$Customer_Tracking_Customer_Email_Placeholder_Label = __("Customer Email", "EWD_OTP");}
	$Customer_Tracking_Track_Button_Label = get_option("EWD_OTP_Customer_Tracking_Track_Button_Label");
	if ($Customer_Tracking_Track_Button_Label == "") {$Customer_Tracking_Track_Button_Label = __("Track", "EWD_OTP");}

	$ReturnString = "";

	// Get the attributes passed by the shortcode, and store them in new variables for processing
	extract( shortcode_atts( array(
		 		'order_form_title' => $Customer_Tracking_Track_Your_Order_Label,
				'order_field_text' => $Customer_Tracking_Customer_Number_Label,
				'email_field_text' => $Customer_Tracking_Customer_Email_Label,
				'email_field_shortcode' => '',
				'email_field_shortcode_attribute' => '',
				'email_field_attribute_value' => '',
				'order_instructions' => $Customer_Tracking_Enter_Order_Label,
				'field_names' => '',
				'submit_text' => $Customer_Tracking_Track_Button_Label),
		$atts
		)
	);

	$ReturnString .= "<style type='text/css'>";
	$ReturnString .= EWD_OTP_Add_Modified_Styles();
	$ReturnString .= $Custom_CSS;
	$ReturnString .= "</style>";

	$Fields = array();
	$Field_Names_Array = explode(",", $field_names);
	foreach ($Field_Names_Array as $Field_Name) {
		$Field_Name_Key = trim(substr($Field_Name, 0, strpos($Field_Name, "=>")));
		$Field_Name_Value = trim(substr($Field_Name, strpos($Field_Name, "=>")+2));
		$Fields[$Field_Name_Key] = $Field_Name_Value;
	}

	//If there's a tracking number that's already been submitted, display the results
	$WP_User = wp_get_current_user();
	if (function_exists('EWD_FEUP_Get_All_Users')) {
		$FEUP_Installed = true;
		$FEUP_User = new FEUP_User();
	}
	if (isset($_POST['Customer_ID'])) {
		$Customer_ID = $_POST['Customer_ID'];
		$Customer_Email = $_POST['Customer_Email'];
	}
	elseif ($FEUP_Installed and $FEUP_User->Is_Logged_In()) {
		$Customer = $wpdb->get_row($wpdb->prepare("SELECT Customer_ID, Customer_Email FROM $EWD_OTP_customers WHERE Customer_FEUP_ID=%d", $FEUP_User->Get_User_ID()));
		$Customer_ID = $Customer->Customer_ID;
		$Customer_Email = $Customer->Customer_Email;
	}
	elseif ($WP_User->ID != 0) {
		$Customer = $wpdb->get_row($wpdb->prepare("SELECT Customer_ID, Customer_Email FROM $EWD_OTP_customers WHERE Customer_WP_ID=%d", $WP_User->ID));
		$Customer_ID = $Customer->Customer_ID;
		$Customer_Email = $Customer->Customer_Email;
	}

	if (isset($Customer_ID)) {
		$ReturnString .= "<div class='ewd-otp-tracking-results pure-g'>";
		$ReturnString .= "<div class='pure-u-1'><h3>" . __("Order Information", 'EWD_OTP') . "</h3></div>";
		$ReturnString .= EWD_OTP_Return_Customer_Results($Customer_ID, $Fields, $Customer_Email);
		$ReturnString .= "</div>";
	}

	//Put in the tracking form
	$ReturnString .= "<div id='ewd-otp-tracking-form-div' class='mt-12'>";
	$ReturnString .= "<h3>" . $order_form_title . "</h3>";
	$ReturnString .= "<div class='ewd-otp-message mb-6'>";
	$ReturnString .= $user_message;
	$ReturnString .= $order_instructions;
	$ReturnString .= "</div>";
	if ($New_Window == "Yes") {$ReturnString .= "<form action='#' method='post' target='_blank' id='ewd-otp-tracking-form' class='pure-form pure-form-aligned'>";}
	else {$ReturnString .= "<form action='#' method='post' id='ewd-otp-tracking-form' class='pure-form pure-form-aligned'>";}
	$ReturnString .= "<input type='hidden' name='ewd-otp-action' value='customer-track'>";
	$ReturnString .= "<div class='pure-control-group'>";
	$ReturnString .= "<label for='Order_Number' id='ewd-otp-order-number-div' class='ewd-otp-field-label ewd-otp-bold'>" . $order_field_text . ": </label>";
	$ReturnString .= "<input type='text' class='ewd-otp-text-input' name='Customer_ID' placeholder='" . $Customer_Tracking_Customer_Number_Placeholder_Label . "...'>";
	$ReturnString .= "</div>";
	if ($Email_Confirmation == "Order_Email") {
		$ReturnString .= "<div class='pure-control-group'>";
		$ReturnString .= "<label for='Order_Email' id='ewd-otp-order-number-div' class='ewd-otp-field-label ewd-otp-bold'>" . $email_field_text . ": </label>";
		$ReturnString .= "<input type='email' class='ewd-otp-text-input' name='Customer_Email' placeholder='" . $Customer_Tracking_Customer_Email_Placeholder_Label . "...'>";
		$ReturnString .= "</div>";
	}
	if ($Email_Confirmation == "Auto_Entered") {
		$ReturnString .= "<input type='hidden' class='ewd-otp-text-input' name='Customer_Email' value='[" . $email_field_shortcode . " " . $email_field_shortcode_attribute . "=" . $email_field_attribute_value . "]'>";
	}
	$ReturnString .= "<div class='pure-control-group'>";
	$ReturnString .= "<label for='Submit'></label><input type='submit' class='ewd-otp-submit pure-button pure-button-primary' name='Login_Submit' value='" . $submit_text . "'>";
	$ReturnString .= "</div>";
	$ReturnString .= "</form>";
	$ReturnString .= "</div>";

	return $ReturnString;
}
add_shortcode("customer-form", "Insert_Customer_Form");
