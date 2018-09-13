<?php
require "../api/MobileDetect.php";
$detect = new Mobile_Detect;

if( $detect->isMobile() ) 
{
  echo '<html lang="en">
    <head>
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Welcome to CodeIgniter</title>
    	<style type="text/css">
    
      	::selection { background-color: #E13300; color: white; }
      	::-moz-selection { background-color: #E13300; color: white; }
      
      	body {
      		background-color: #fff;
      		margin: 40px;
      		font: 13px/20px normal Helvetica, Arial, sans-serif;
      		color: #4F5155;
      	}
  
      	h1 {
      		color: #444;
      		background-color: transparent;
      		border-bottom: 1px solid #D0D0D0;
      		font-size: 19px;
      		font-weight: normal;
      		margin: 0 0 14px 0;
      		padding: 14px 15px 10px 15px;
      	}
  
      	#body {
      		margin: 0 15px 0 15px;
      	}
  
      	#container {
      		margin: 10px;
      		border: 1px solid #D0D0D0;
      		box-shadow: 0 0 8px #D0D0D0;
      	}
    	</style>
    </head>
    
    <body>
      <div id="container">
    	  <h1>Unsupported Device</h1>
    	  <div id="body">
    		  <p>Sorry, this page is only viewable from a Desktop Browser.</p>
    	  </div>
      </div>
    </body>
  </html>';
  exit;
}

?>

<!DOCTYPE html>
<html>
	<head>
	  <meta charset="UTF-8">
	  <meta name="description" content="Safaricom Daraja API Tutorial" />
	  <meta name="keywords" content="MPesa, M-Pesa, Safaricom API, Daraja API, Daraja, MPesa API, MPesa REST API, M-Pesa API, M-Pesa REST API, Safaricom REST API, Safaricom Daraja API, Safaricom API Tutorial, C2B Tutorial, B2C Tutorial, B2B Tutorial, Safaricom C2B Tutorial, Safaricom B2C Tutorial, Safaricom B2B Tutorial, Lipa na MPesa, STK Push, Lipa na MPesa API, STK Push API" />
	  <meta name="author" content="Peter Njeru" />
	  <title>Safaricom API Utilities</title>
		<link rel="stylesheet" type="text/css" href="res/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="res/bootstrap/css/sidebar.css">
		<link rel="stylesheet" type="text/css" href="res/css/index.css">
		<link rel="stylesheet" type="text/css" href="res/css/export.css">
	</head>
	<body id="body" data-spy="scroll" data-target="#main_menu" data-offset="10">
		<nav class="navbar navbar-static navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Safaricom API Utilities</a>
				</div>
			</div>
		</nav>
		
		<div class="container-fluid" id="content">
			<div class="jumbotron" style="background-color: #555; color: #fff;">
				<h1>Safaricom Daraja API Tutorial</h1>
				<p>Test Cases</p>
			</div>
			
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="panel panel-default tutorial_text" id="test_cases_text">
						<div class="panel-heading">
							<h3 class="panel-title">Test Cases</h3>
							<br />
							<button class="btn btn-success tests-export" id="tests_submit_top">Export</button>
						</div>
						<div class="panel-body">
							<p>You are only required to fill the test cases for the APIs you worked with, but all provided test cases will be included in the final file.</p>
							<p>Key:</p>
							<ul>
								<li><strong>Success</strong>: Your Results match Expected results</li>
								<li><strong>Fail</strong>: Your Results do not match Expected results</li>
							</ul>
							<p>The newly created Excel file might have <strong>Wrap Text</strong> disabled, thus overflowing text will be hidden. For readability, select all the data in each sheet (<kbd>Ctrl</kbd> + <kbd>A</kbd>), then click on <kbd>Wrap Text</kbd> on the <strong>Home Tab</strong> in Excel as shown below.</p>
							<p class="thumbnail">
								<img src="images/wordwrap.png">
								<div class="caption">
									<p><strong>Browse Org Menu Item</strong></p>
								</div>
							</p>
							 <p>Also, the file will not contain the rest of the worksheets not provided below. You can copy-paste them if you want to into the resulting file.</p>
							<ul class="nav nav-tabs" id="tabs-navigation">
								<li class="active">
									<a href="#b2c" data-toggle="tab">B2C</a>
								</li>
								<li>
									<a href="#c2b" data-toggle="tab">C2B</a>
								</li>
								<li>
									<a href="#b2b" data-toggle="tab">B2B</a>
								</li>
								<li>
									<a href="#acc_bal" data-toggle="tab">Account Bal</a>
								</li>
								<li>
									<a href="#reversal" data-toggle="tab">Reversal</a>
								</li>
								<li>
									<a href="#transaction_status" data-toggle="tab">Transaction Status</a>
								</li>
								<!--<li>
									<a href="#stk_push_process" data-toggle="tab">STK Push Request</a>
								</li>
								<li>
									<a href="#stk_push_query" data-toggle="tab">STK Push Query Request</a>
								</li>
								<li>
									<a href="#check_identity" data-toggle="tab">Check Identity</a>
								</li>
								<li>
									<a href="#cr_score_onboard" data-toggle="tab">Credit Score (onboard)</a>
								</li>
								<li>
									<a href="#cr_score_subscribe" data-toggle="tab">Credit Score (subscribe)</a>
								</li>
								<li>
									<a href="#cust_cr_score" data-toggle="tab">Customer Credit Score</a>
								</li>
								<li>
									<a href="#merc_cr_score" data-toggle="tab">Merchant Credit Score</a>
								</li>-->
							</ul>
							<div class="tab-content">
								<div id="b2c" class="tab-pane active">
									<table id="b2c-test-cases-table" class="table table-bordered test-cases-table" data-sheet="B2C">
										<thead>
											<tr>
												<th><strong>Subject</strong></th>
												<th><strong>Test Case</strong></th>
												<th><strong>Objective</strong></th>
												<th><strong>Expected Results</strong></th>
												<th class="actual_results"><strong>Actual Results</strong></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Authentication</td>
												<td>Authenticate using Oauth</td>
												<td>To test successful authentication of third party using consumerkey:consumersecret and hashing it to create the Oauth token</td>
												<td>Authentication is successful</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
												
											</tr>
											<tr>
												<td>Authentication</td>
												<td>Authenticate using Oauth</td>
												<td>To test unsuccessful authentication of third party using consumerkey:consumersecret and hashing it to create the Oauth token</td>
												<td>Authentication is unsuccessful</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
												
											</tr>
											<tr>
												<td>Authentication</td>
												<td>Security credential is correctly encrypted</td>
												<td>to test successful authentication of the third party</td>
												<td>Authentication is successful</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
												
											</tr>
											<tr>
												<td>Authentication</td>
												<td>Security credential is incorrectly encrypted</td>
												<td>to test unsuccessful authentication of the third party</td>
												<td>Authentication is unsuccessful</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
												
											</tr>
											<tr>
												<td>Certificate management</td>
												<td>Test transaction over https portal</td>
												<td>To test successful request sent over https on the portal</td>
												<td>Portal displays https and transaction is successful</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
												
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send request with transaction type B2C with command ID "PromotionPayment" to the Broker - B2C account has a valid initiator username, password and receiver party account is valid</td>
												<td>Partner is able to successful move funds from the organization to the customer MSISDN</td>
												<td>1) Request is sent to API gateway successfully. A valid response is returned to the Partner.
<br>2) Transfer of funds is successful from any organization to MSISDN
<br>3) Valid result is returned with appropriate error</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
												
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send request with transaction type B2C with command ID "PromotionPayment" to API Gateway- B2C account has insufficient balance</td>
												<td>Transfer of funds for B2C account with insufficient balance is unsuccessful. Request is processed by the gateway and appropriate error message is retuned in the result</td>
												<td>1) Request is sent to API Gateway successfully. A valid response is returned to the Partner.
<br>2) Transfer of funds from B2C business account to Customer's MPESA account is unsuccessful
<br>3) Valid result is returned with appropriate error</td>
												<td>
													<select class="form-control">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
												
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send request with transaction type B2C with command ID "PromotionPayment" to API Gateway - B2C account has wrong initiator username</td>
												<td>Transfer of funds for B2C account with invalid initiator username is unsuccessful. Request is processed by the API gateway and appropriate error message is retuned in the result</td>
												<td>1) Request is sent to API Gateway successfully. A valid response is returned to the Partner.
<br>2) Transfer of funds from B2C business account to Customer's MPESA account is unsuccessful
<br>3) Valid result is returned with appropriate error</td>
												<td>
													<select class="form-control">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
												
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send request with transaction type BusinessBuyGoods with command ID "PromotionPayment" to Broker - with an invalid recipient merchant account or store</td>
												<td>Transfer of funds from B2C account with invalid initiator password is unsuccessful. Request is processed by the API gateway and appropriate error message is retuned in the result</td>
												<td>1) Request is sent to API gateway successfully. A valid response is returned to the Partner.
<br>2) Transfer of funds from B2C business account to Customer's MPESA account is unsuccessful
<br>3) Valid result is returned with appropriate error
</td>
												<td>
													<select class="form-control">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
												
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send the request with an valid command id</td>
												<td>To test whether the request will go through with a valid command id</td>
												<td>You should get an appropriate success message: The service has been accepted successfully</td>
												<td>
													<select class="form-control">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
												
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send the request with an invalid command id</td>
												<td>To test whether the request will go through with an invalid command id</td>
												<td>The request shall not go through with an appropriate error thrown: Invalid CommandID</td>
												<td>
													<select class="form-control">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send the request with a valid amount between 1-70000</td>
												<td>To test whether the request will be allowed on Mpesa with a valid amount</td>
												<td>You should get an appropriate success message: The service has been accepted successfully</td>
												<td>
													<select class="form-control">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send the request with a negative amount or a large amount e.g 50000000000000000000000000</td>
												<td>To test whether the request will be allowed on Mpesa with a negative amount or large amount</td>
												<td>The request shall not go through with an appropriate error thrown: Invalid Amount</td>
												<td>
													<select class="form-control">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send the Party B with an MSISDN of 12 numbers</td>
												<td>To test whether an MSISDN of 12 numbers will be accepted</td>
												<td>You should get an appropriate success message: The service has been accepted successfully</td>
												<td>
													<select class="form-control">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send the Party B with an organization shortcode of 12 numbers</td>
												<td>To test whether an MSISDN of 12 or more numbers will be accepted</td>
												<td>The request shall not go through with an in appropriate error thrown:Invalid Party B</td>
												<td>
													<select class="form-control">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send remarks with less then 200 characters</td>
												<td>To test whether less then 200 characters will be accepted in remarks</td>
												<td>You should get an appropriate success message: The service has been accepted successfully</td>
												<td>
													<select class="form-control">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send remarks with more then 200 characters</td>
												<td>To test whether more then 200 characters will be accepted in remarks</td>
												<td>The request shall not go through with an in appropriate error thrown:Invalid Remarks</td>
												<td>
													<select class="form-control">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send result url with an IP and Port</td>
												<td>To test whether the request will be accepted with a valid IP and Port</td>
												<td>You should get an appropriate success message: The service has been accepted successfully</td>
												<td>
													<select class="form-control">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send result url without an IP and Port</td>
												<td>To test whether the request will be accepted without an IP and Port</td>
												<td>The request shall not go through and an appropriate error thrown: Invalid ResultURL</td>
												<td>
													<select class="form-control">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send queuetimeout URL with an IP and Port</td>
												<td>To test whether the request will be accepted with an IP and Port</td>
												<td>You should get an appropriate success message: The service has been accepted successfully</td>
												<td>
													<select class="form-control">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send queuetimeout URL without an IP and Port</td>
												<td>To test whether the request will be accepted without an IP and port</td>
												<td>The request shall not go through with an in appropriate error thrown:Invalid QueuetimeoutURL</td>
												<td>
													<select class="form-control">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								
								<div id="c2b" class="tab-pane">
									<table id="c2b-test-cases-table" class="table table-bordered test-cases-table" data-sheet="C2B">
										<thead>
											<tr>
												<th>Subject</th>
												<th>Test Case</th>
												<th>Objective</th>
												<th>Expected Results</th>
												<th class="actual_results"><strong>Actual Results</strong></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Authentication</td>
												<td>Authenticate using Oauth</td>
												<td>To test successful authentication of third party using consumerkey:consumersecret and hashing it to create the Oauth token</td>
												<td>Authentication is successful</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Authentication</td>
												<td>Authenticate using Oauth</td>
												<td>To test unsuccessful authentication of third party using consumerkey:consumersecret and hashing it to create the Oauth token</td>
												<td>Authentication is unsuccessful</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Authentication</td>
												<td>Security credential is correctly encrypted</td>
												<td>to test successful authentication of the third party</td>
												<td>Authentication is successful</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Authentication</td>
												<td>Security credential is incorrectly encrypted</td>
												<td>to test unsuccessful authentication of the third party</td>
												<td>Authentication is unsuccessful</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Certificate management</td>
												<td>Test transaction over https portal</td>
												<td>To test successful request sent over https on the portal</td>
												<td>Portal displays https and transaction is successful</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Transaction type management</td>
												<td>Use C2B to send request with transaction type RegisterURL with command ID "RegisterURL " for both confirmation and validation URLs</td>
												<td>Partner is able to make a successful register confirmation and Validation URL</td>
												<td>1) Request is sent to API Gateway successfully. Partner receive a success response from API Gateway <br>2) Successful registration of the ConfirmationURL for the specified short code</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Transaction type management</td>
												<td>Use C2B to send request with transaction type RegisterURL with command ID "RegisterURL" for only Confirmation notifications</td>
												<td>Partner is able to make a successful register confirmation URL</td>
												<td>1) Request is sent to API Gateway successfully. Partner receive a success response from API Gateway
<br>2) Successful registrationof the confirmationURL
</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Transaction type management</td>
												<td>Use C2B to send request with transaction type RegisterURL with command ID "RegisterURL" for only Validation requests from API Gateway</td>
												<td>Partner is able to make a successful register Validation URL</td>
												<td>1) Request is sent to API Gateway successfully. Partner receive a success response from API Gateway
<br>2) Successful registration of the Validation URL</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>API Gateway sends "C2BPaymentConfirmationRequest" to third party</td>
												<td>Third party successfully receives the confirmation request sends an acknowledgement to API Gateway</td>
												<td>1) Request is sent to Third party successfully. 
<br>2) Third party successfully acknowleges the confirmation request to API Gateway
</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>API gateway sends "C2BPaymentConfirmationRequest" to third party</td>
												<td>1)Third party does a successful registerURL with responsetype Complete
<br>2) Third party successfully receives the confirmation request
<br>3) Third party fails to send acknowlegement to API Gateway</td>
												<td>1) Request is sent to Third party successfully. 
<br>2) API Gateway sends a success to MPESA
</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>API Gateway sends "C2BPaymentValidationRequest" to third party</td>
												<td>1) Third party successfully receives the confirmation request sends an acknowledgement to API Gateway
<br>2) third party respond with a success message/code to API Gateway</td>
												<td>1) Third party successfully receives the validation request from API Gateway
<br>2) Third party respond with a success
<br>3) The subscriber receives SMS from MPESA showing a success or failure (customer may have or not have enough money in their mpesa account)
<br>4) third party Receives confirmation request from API Gateway in a case confirmation URL was registered
<br>5) Third party sends a successful confirmation acknowledgement to API Gateway.</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>API Gateway sends "C2BPaymentValidationRequest" to third party</td>
												<td>1) Third party successfully receives the confirmation request sends an acknowledgement to API Gateway
<br>2) third party respond with a failures message/code to API Gateway</td>
												<td>1) Third party successfully receives the validation request from API Gateway
<br>2) API Gateway receives the failure message and respond to MPESA to cancel the transaction
<br>3) The subscriber receives a failure SMS from MPESA</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>API Gateway sends "C2BPaymentValidationRequest" to third party</td>
												<td>1)Third party does a successful registerURL with responsetype Complete
<br>2) Third party successfully receives the Validation request
<br>3) Third party fails to send acknowlegement to API Gateway</td>
												<td>1) Request is sent to Third party successfully. 
<br>2) API Gateway sends a success to MPESA
</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>API Gateway sends "C2BPaymentValidationRequest" to third party</td>
												<td>1)Third party does a successful registerURL with responsetype Cancelled
<br>2) Third party successfully receives the Validation request
<br>3) Third party fails to send acknowlegement to API Gateway</td>
												<td>1) Request is sent to Third party successfully. 
<br>2) API Gateway sends a cancel request to MPESA.
</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Test C2B Simulate Transaction</td>
												<td>Accessing C2B Simulate Transaction</td>
												<td>To verify that the user can access APIs</td>
												<td>The user is able to view the testing page for C2B Simulate Transaction</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Test C2B Simulate Transaction</td>
												<td>Calling an API of C2B Simulate Transaction without any input</td>
												<td>To verify that the user must provide valid inputs</td>
												<td>OUTPUT: appropriate error message in the format 
<pre>{
"requestId": "",
"errorCode": "",
"errorMessage": ""Error Occurred - Error Message - "
}</pre>
												</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Test C2B Simulate Transaction</td>
												<td>Calling an API of C2B Simulate Transaction: Authorized access without payload</td>
												<td>To verify that the user must provide valid inputs</td>
												<td>OUTPUT: appropriate error message in the format 
<pre>{
"requestId": "",
"errorCode": "",
"errorMessage": ""Error Occurred - Error Message - "
}</pre>
												</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Test C2B Simulate Transaction</td>
												<td>Calling an API of C2B Payment Request to verify commandID is mandatory</td>
												<td>To verify that the user must provide a valid commandID</td>
												<td>OUTPUT: appropriate error message in the format 
<pre>{
"requestId": "",
"errorCode": "",
"errorMessage": "Error Occurred - Invalid Command ID- "
}
</pre>
												</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Test C2B Simulate Transaction</td>
												<td>Calling an API of C2B Payment Request to verify Amount is mandatory</td>
												<td>To verify that the user must provide a valid Amount</td>
												<td>OUTPUT: appropriate error message in the format 
<pre>{
"requestId": "",
"errorCode": "",
"errorMessage": "Error Occurred - Invalid Amount - "
}
</pre>
												</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Test C2B Simulate Transaction</td>
												<td>Calling an API of C2B Payment Request to verify MSISDN is mandatory</td>
												<td>To verify that the user must provide a valid msisdn</td>
												<td>OUTPUT: appropriate error message in the format 
<pre>{
"requestId": "",
"errorCode": "",
"errorMessage": "Error Occurred - Invalid MSISDN"
}</pre>
												</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Test C2B Simulate Transaction</td>
												<td>Calling an API of C2B Payment Request to verify BillRefNo is mandatory</td>
												<td>To verify that the user must provide a valid BillRefNo</td>
												<td>OUTPUT: appropriate error message in the format 
<pre>{
"requestId": "",
"errorCode": "",
"errorMessage": "Error Occurred - Invalid BillRefNo - "
}</pre>
												</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Test C2B Simulate Transaction</td>
												<td>Calling an API of C2B Payment Request to verify ShortCode is mandatory</td>
												<td>To verify that the user must provide a valid ShortCode</td>
												<td>OUTPUT: appropriate error message in the format 
<pre>{
"requestId": "",
"errorCode": "",
"errorMessage": "Error Occurred - Invalid Shortcode"
}</pre>
												</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Test C2B Simulate Transaction</td>
												<td>Calling an API of C2B Payment Request to verify Normal Flow with all Valid inputs for Command ID = CustomerPayBillOnline </td>
												<td>To verify that the user must provide a valid commandID</td>
												<td>OUTPUT: appropriate acknowledgement of success message with "ConversationID", "OriginatorConversationID" and "ResponseDescription"."</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Test C2B Simulate Transaction</td>
												<td>Calling an API of C2B Payment Request to verify Normal Flow with all Valid inputs for Command ID = randomValue</td>
												<td>To verify that the user must provide a valid commandID</td>
												<td>OUTPUT: appropriate error message in the format 
<pre>{
"requestId": "",
"errorCode": "",
"errorMessage": "Error Occurred - Invalid CommandID - "
}</pre>
												</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Test C2B Simulate Transaction</td>
												<td>Calling an API of C2B Payment Request to verify Normal Flow with all Valid inputs for amount = 0</td>
												<td>To verify that the user must provide a valid Amount</td>
												<td>OUTPUT: appropriate error message in the format 
<pre>{
"requestId": "",
"errorCode": "",
"errorMessage": "Error Occurred - Invalid Amount - "
}</pre>
												</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Test C2B Simulate Transaction</td>
												<td>Calling an API of C2B Payment Request to verify Normal Flow with all Valid inputs for amount above 70000</td>
												<td>To verify that the user must provide a valid Amount</td>
												<td>OUTPUT: appropriate error message in the format 
<pre>{
"requestId": "",
"errorCode": "",
"errorMessage": "Error Occurred - Invalid Amount - "
}</pre>
												</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Test C2B Simulate Transaction</td>
												<td>Calling an API of C2B Payment Request to verify Normal Flow with all Valid inputs for a negative amount</td>
												<td>To verify that the user must provide a valid Amount</td>
												<td>OUTPUT: appropriate error message in the format 
<pre>{
"requestId": "",
"errorCode": "",
"errorMessage": "Error Occurred - Invalid Amount- "
}</pre>
												</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Test C2B Simulate Transaction</td>
												<td>Calling an API of C2B Payment Request to verify MSISDN is not numeric</td>
												<td>To verify that the user must provide a valid MSISDN</td>
												<td>OUTPUT: appropriate error message in the format 
<pre>{
"requestId": "",
"errorCode": "",
"errorMessage": "Error Occurred - Invalid MSISDN - "
}</pre>
												</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Test C2B Simulate Transaction</td>
												<td>Calling an API of C2B Payment Request to verify MSISDN exceeding maximum allowed length (> 12 characters)</td>
												<td>To verify that the user must provide a valid MSISDN</td>
												<td>OUTPUT: appropriate error message in the format 
<pre>{
"requestId": "",
"errorCode": "",
"errorMessage": "Error Occurred - Invalid MSISDN- "
}</pre>
												</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Test C2B Simulate Transaction</td>
												<td>Calling an API of C2B Payment Request to verify MSISDN less than minimum allowed length (less then 12 char)</td>
												<td>To verify that the user must provide a valid MSISDN</td>
												<td>OUTPUT: appropriate error message in the format 
<pre>{
"requestId": "",
"errorCode": "",
"errorMessage": "Error Occurred - Invalid MSISDN - "
}</pre>
												</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Test C2B Simulate Transaction</td>
												<td>Calling an API of C2B Payment Request to verify BillRefNumber is not numeric</td>
												<td>To verify that the user must provide a valid BillRefNumber</td>
												<td>OUTPUT: appropriate error message in the format 
<pre>{
"requestId": "",
"errorCode": "",
"errorMessage": "Error Occurred - Invalid BillRefNumber - "
}</pre>
												</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Test C2B Simulate Transaction</td>
												<td>Calling an API of C2B Payment Request to verify BillRefNumber exceeding maximum allowed length</td>
												<td>To verify that the user must provide a valid BillRefNumber</td>
												<td>OUTPUT: appropriate error message in the format 
<pre>{
"requestId": "",
"errorCode": "",
"errorMessage": "Error Occurred - Invalid BillRefNumber"
}</pre>
												</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Test C2B Simulate Transaction</td>
												<td>Calling an API of C2B Payment Request to verify BillRefNumber less than minimum allowed length</td>
												<td>To verify that the user must provide a valid BillRefNumber</td>
												<td>OUTPUT: appropriate error message in the format 
<pre>{
"requestId": "",
"errorCode": "",
"errorMessage": "Error Occurred - Invalid BillRefNumber - "
}</pre>
												</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Test C2B Simulate Transaction</td>
												<td>Calling an API of C2B Payment Request to verify Shortcode is not numeric</td>
												<td>To verify that the user must provide a valid shortCode</td>
												<td>OUTPUT: appropriate error message in the format 
<pre>{
"requestId": "",
"errorCode": "",
"errorMessage": "Invalid - Shortcode -"
}</pre>
												</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Test C2B Simulate Transaction</td>
												<td>Calling an API of C2B Payment Request to verify ShortCode exceeding maximum allowed length > 6 characters</td>
												<td>To verify that the user must provide a valid shortCode</td>
												<td>OUTPUT: appropriate error message in the format 
<pre>{
"requestId": "",
"errorCode": "",
"errorMessage": "Error Occurred - Invalid Shortcode -"
}</pre>
												</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Test C2B Simulate Transaction</td>
												<td>Calling an API of C2B Payment Request to verify shortcode is less than minimum allowed length (<5 characters)</td>
												<td>To verify that the user must provide a valid shortCode</td>
												<td>OUTPUT: appropriate error message in the format 
<pre>{
"requestId": "",
"errorCode": "",
"errorMessage": "Error Occurred - Invalid Shortcode - "
}</pre>
												</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Test C2B Simulate Transaction</td>
												<td>Calling an API of C2B Payment Request to verify Normal Flow with all Valid inputs for Amount is not greater then 70000 and not negative</td>
												<td>To verify that the user must provide a valid amount between 1-70,000</td>
												<td>OUTPUT: appropriate acknowledgement of success message with "ConversationID", "OriginatorConversationID" and "ResponseDescription"."
												</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Test C2B Simulate Transaction</td>
												<td>Calling an API of C2B Payment Request to verify Normal Flow with all Valid inputs for MSISDN (12 digits)</td>
												<td>To verify that the user must provide a valid MSISDN</td>
												<td>OUTPUT: appropriate acknowledgement of success message with "ConversationID", "OriginatorConversationID" and "ResponseDescription".</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Test C2B Simulate Transaction</td>
												<td>Calling an API of C2B Payment Request to verify Normal Flow with all Valid inputs for MSISDN</td>
												<td>To verify that the user must provide a valid MSISDN</td>
												<td>OUTPUT: appropriate acknowledgement of success message with "ConversationID", "OriginatorConversationID" and "ResponseDescription".</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Test C2B Simulate Transaction</td>
												<td>Calling an API of C2B Payment Request to verify Normal Flow with all Valid inputs for BillRefNo</td>
												<td>To verify that the user must provide a valid BillRefNo</td>
												<td>OUTPUT: appropriate acknowledgement of success message with "ConversationID", "OriginatorConversationID" and "ResponseDescription".</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Test C2B Simulate Transaction</td>
												<td>Calling an API of C2B Payment Request to verify Normal Flow with all Valid inputs for Shortcode</td>
												<td>To verify that the user must provide a valid Shortcode</td>
												<td>OUTPUT: appropriate acknowledgement of success message with "ConversationID", "OriginatorConversationID" and "ResponseDescription".</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								
								<div id="b2b" class="tab-pane">
									<table id="b2b-test-cases-table" class="table table-bordered test-cases-table" data-sheet="B2B">
										<thead>
											<tr>
												<th><strong>Subject</strong></th>
												<th><strong>Test Case</strong></th>
												<th><strong>Objective</strong></th>
												<th><strong>Expected Results</strong></th>
												<th class="actual_results"><strong>Actual Results</strong></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Authentication</td>
												<td>Authenticate using Oauth</td>
												<td>To test successful authentication of third party using consumerkey:consumersecret and hashing it to create the Oauth token</td>
												<td>Authentication is successful</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
												
											</tr>
											<tr>
												<td>Authentication</td>
												<td>Authenticate using Oauth</td>
												<td>To test unsuccessful authentication of third party using consumerkey:consumersecret and hashing it to create the Oauth token</td>
												<td>Authentication is unsuccessful</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
												
											</tr>
											<tr>
												<td>Authentication</td>
												<td>Security credential is correctly encrypted</td>
												<td>to test successful authentication of the third party</td>
												<td>Authentication is successful</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
												
											</tr>
											<tr>
												<td>Authentication</td>
												<td>Security credential is incorrectly encrypted</td>
												<td>to test unsuccessful authentication of the third party</td>
												<td>Authentication is unsuccessful</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
												
											</tr>
											<tr>
												<td>Certificate management</td>
												<td>Test transaction over https portal</td>
												<td>To test successful request sent over https on the portal</td>
												<td>Portal displays https and transaction is successful</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
												
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send request with transaction type B2B with command ID "BusinessPayBill" to the API Gateway - B2B account has a valid initiator username, password and receiver party account is valid</td>
												<td>Partner is able to successful move funds from the organization to another organization</td>
												<td>1) Request is sent to API gateway successfully. A valid response is returned to the Partner.
<br>2) Transfer of funds is successful from any organization to organization
<br>3) Valid result is returned with appropriate error
</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
												
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send request with transaction type B2B with command ID "BusinessPayBill" to API Gateway- B2B account has insufficient balance</td>
												<td>Transfer of funds for B2B account with insufficient balance is unsuccessful. Request is processed by the gateway and appropriate error message is retuned in the result</td>
												<td>1) Request is sent to API Gateway successfully. A valid response is returned to the Partner.
<br>2) Transfer of funds from B2B business account to Customer's MPESA account is unsuccessful
<br>3) Valid result is returned with appropriate error
</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send request with transaction type B2B with command ID "BusinessPayBill" to API Gateway - B2B account has wrong initiator username</td>
												<td>Transfer of funds for B2B account with invalid initiator username is unsuccessful. Request is processed by the API gateway and appropriate error message is retuned in the result</td>
												<td>1) Request is sent to API Gateway successfully. A valid response is returned to the Partner.
<br>2) Transfer of funds from B2B business account to Customer's MPESA account is unsuccessful
<br>3) Valid result is returned with appropriate error
</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send request with transaction type B2B with command ID "BusinessPayBill" to API Gateway - B2B account has wrong initiator password</td>
												<td>Transfer of funds for B2B account with invalid initiator password is unsuccessful. Request is processed by the API gateway and appropriate error message is retuned in the result</td>
												<td>1) Request is sent to API Gateway successfully. A valid response is returned to the Partner.
<br>2) Transfer of funds from B2B business account to Customer's MPESA account is unsuccessful
<br>3) Valid result is returned with appropriate error
</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send request with transaction type B2B with command ID "BusinessPayBill" to API Gateway - with an invalid recipient merchant account or store</td>
												<td>Transfer of funds from B2B account with invalid initiator password is unsuccessful. Request is processed by the API gateway and appropriate error message is retuned in the result</td>
												<td>1) Request is sent to API gateway successfully. A valid response is returned to the Partner.
<br>2) Transfer of funds from B2B business account to Customer's MPESA account is unsuccessful
<br>3) Valid result is returned with appropriate error
</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send the request with an valid command id e.g BusinessPayBill/BusinessBuyGoods</td>
												<td>To test whether the request will go through with a valid command id</td>
												<td>You should get an appropriate success message: The service has been accepted successfully</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send the request with an invalid command id</td>
												<td>To test whether the request will go through with an invalid command id</td>
												<td>The request shall not go through with an appropriate error thrown: Invalid CommandID</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send the request with a valid amount between 1-70000</td>
												<td>To test whether the request will be allowed on Mpesa with a valid amount</td>
												<td>You should get an appropriate success message: The service has been accepted successfully</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send the request with a negetive amount or a large amount e.g 50000000000000000000000000</td>
												<td>To test whether the request will be allowed on Mpesa with a negative amount</td>
												<td>The request shall not go through with an appropriate error thrown: Invalid Amount</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send remarks with less then 200 characters</td>
												<td>To test whether less then 200 characters will be accepted in remarks</td>
												<td>You should get an appropriate success message: The service has been accepted successfully</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send remarks with more then 200 characters</td>
												<td>To test whether more then 200 characters will be accepted in remarks</td>
												<td>The request shall not go through with an in appropriate error thrown: Invalid Remarks</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send result url with an ip and port</td>
												<td>To test whether the request will be accepted with a valid ip and port</td>
												<td>You should get an appropriate success message: The service has been accepted successfully</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send result url without an ip and port</td>
												<td>To test whether the request will be accepted without an ip and port</td>
												<td>The request shall not go through with an in appropriate error thrown: Invalid ResultURL</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send queuetimeout URL with an ip and port</td>
												<td>To test whether the request will be accepted with an ip and port</td>
												<td>The request shall not go through with an in appropriate error thrown: Invalid ResultURL</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send queuetimeout URL without an ip and port</td>
												<td>To test whether the request will be accepted without an ip and port</td>
												<td>The request shall not go through with an in appropriate error thrown:Invalid ResultURL</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								
								<div id="acc_bal" class="tab-pane">
									<table id="acc_bal-test-cases-table" class="table table-bordered test-cases-table" data-sheet="Account Bal">
										<thead>
											<tr>
												<th><strong>Subject</strong></th>
												<th><strong>Test Case</strong></th>
												<th><strong>Objective</strong></th>
												<th><strong>Expected Results</strong></th>
												<th class="actual_results"><strong>Actual Results</strong></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Authentication</td>
												<td>Authenticate using Oauth</td>
												<td>To test successful authentication of third party using consumerkey:consumersecret and hashing it to create the Oauth token</td>
												<td>Authentication is successful</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
												
											</tr>
											<tr>
												<td>Authentication</td>
												<td>Authenticate using Oauth</td>
												<td>To test unsuccessful authentication of third party using consumerkey:consumersecret and hashing it to create the Oauth token</td>
												<td>Authentication is unsuccessful</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
												
											</tr>
											<tr>
												<td>Authentication</td>
												<td>Security credential is correctly encrypted</td>
												<td>to test successful authentication of the third party</td>
												<td>Authentication is successful</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
												
											</tr>
											<tr>
												<td>Authentication</td>
												<td>Security credential is incorrectly encrypted</td>
												<td>to test unsuccessful authentication of the third party</td>
												<td>Authentication is unsuccessful</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
												
											</tr>
											<tr>
												<td>Certificate management</td>
												<td>Test transaction over https portal</td>
												<td>To test successful request sent over https on the portal</td>
												<td>Portal displays https and transaction is successful</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
												
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send request with transaction type Account Balance with command ID "AccountBalance" to the gateway - Paybill  account has a valid initiator username ,password and party A account is valid</td>
												<td>Partner is able to  successful move funds from  the organization to the customer MSISDN</td>
												<td>1) Request is sent to API gateway successfully. A valid response is returned to the Partner.
<br>2) Valid result is returned with appropriate error
</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send request with transaction type Account Balance with command ID "AccountBalance" to API Gateway - Paybill account has wrong initiator username</td>
												<td>Checking of balance for paybill account with invalid initiator username is unsuccessful. Request is processed by the API gateway and appropriate error message is retuned in the result</td>
												<td>1) Request is sent to API Gateway successfully. A valid response is returned to the Partner.
<br>2) Valid result is returned with appropriate error
</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send request with transaction type Account Balance with command ID "AccountBalance" to  gateway - Paybill account has wrong initiator password</td>
												<td>Checking of balance for paybill account with invalid initiator password is unsuccessful. Request is processed by the API gateway and appropriate error message is retuned in the result</td>
												<td>1) Request is sent to API Gateway successfully. A valid response is returned to the Partner.
<br>2) Valid result is returned with appropriate error
</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send request with transaction type Account Balance with command ID "AccountBalance" to  gateway - with an invalid  party A merchant account or store</td>
												<td>Transfer of funds from paybill account with invalid initiator password is unsuccessful. Request is processed by the API gateway and appropriate error message is retuned in the result</td>
												<td>1) Request is sent to API gateway successfully. A valid response is returned to the Partner.
<br>2) Valid result is returned with appropriate error
</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send the request with an valid command id i.e AccountBalance</td>
												<td>To test whether the request will go through with a valid command id through the API gateway</td>
												<td>You should get an appropriate success message: The service has been accepted successfully</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send the request with an invalid command id</td>
												<td>To test whether the request will go through with an invalid command id will go through to API gateway</td>
												<td>The request shall not go through with an appropriate error thrown: Invalid CommandID</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send the request with an invalid identifier e.g. 6</td>
												<td>To test whether the request will be allowed on Mpesa with an invalid identifier</td>
												<td>The request shall not go through with an appropriate error thrown: Invalid identifier</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send remarks with less then 200 characters</td>
												<td>To test whether less then 200 characters will be accepted in remarks</td>
												<td>You should get an appropriate success message: The service has been accepted successfully</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send remarks with more then 200 characters</td>
												<td>To test whether more then 200 characters will be accepted in remarks</td>
												<td>The request shall not go through with an in appropriate error thrown: Invalid Remarks</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send result url with an ip and port</td>
												<td>To test whether the request will be accepted with a valid ip and port</td>
												<td>You should get an appropriate success message: The service has been accepted successfully</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send result url without an ip and port</td>
												<td>To test whether the request will be accepted without an ip and port</td>
												<td>The request shall not go through with an in appropriate error thrown:Invalid ResultURL</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send queuetimeout URL with an ip and port</td>
												<td>To test whether the request will be accepted with an ip and port</td>
												<td>You should get an appropriate success message: The service has been accepted successfully</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send queuetimeout URL without an ip and port</td>
												<td>To test whether the request will be accepted without an ip and port</td>
												<td>The request shall not go through with an in appropriate error thrown:Invalid QueuetimeoutURL</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
								
								<div id="reversal" class="tab-pane">
									<table id="reversal-test-cases-table" class="table table-bordered test-cases-table" data-sheet="Reversal">
										<thead>
											<tr>
												<th><strong>Subject</strong></th>
												<th><strong>Test Case</strong></th>
												<th><strong>Objective</strong></th>
												<th><strong>Expected Results</strong></th>
												<th class="actual_results"><strong>Actual Results</strong></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Authentication</td>
												<td>Authenticate using Oauth</td>
												<td>To test successful authentication of third party using consumerkey:consumersecret and hashing it to create the Oauth token</td>
												<td>Authentication is successful</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
												
											</tr>
											<tr>
												<td>Authentication</td>
												<td>Authenticate using Oauth</td>
												<td>To test unsuccessful authentication of third party using consumerkey:consumersecret and hashing it to create the Oauth token</td>
												<td>Authentication is unsuccessful</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
												
											</tr>
											<tr>
												<td>Authentication</td>
												<td>Security credential is correctly encrypted</td>
												<td>to test successful authentication of the third party</td>
												<td>Authentication is successful</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
												
											</tr>
											<tr>
												<td>Authentication</td>
												<td>Security credential is incorrectly encrypted</td>
												<td>to test unsuccessful authentication of the third party</td>
												<td>Authentication is unsuccessful</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
												
											</tr>
											<tr>
												<td>Certificate management</td>
												<td>Test transaction over https portal</td>
												<td>To test successful request sent over https on the portal</td>
												<td>Portal displays https and transaction is successful</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
												
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send request with transaction type Transaction Reversal with command ID "TransactionReversal" to the gateway - Paybill account has a valid initiator username,password, amount and ReceiverParty account is valid</td>
												<td>Partner is able to successfully reverse funds</td>
												<td>1) Request is sent to API gateway successfully. A valid response is returned to the Partner.
												<br>2) Valid result is returned and transaction is reversed</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send request with transaction type Transaction Reversal with command ID "TransactionReversal" to API Gateway - Paybill account has wrong initiator username</td>
												<td>Reversal for paybill account with invalid initiator username is unsuccessful. Request is processed by the API gateway and appropriate error message is retuned in the result</td>
												<td>1) Request is sent to API Gateway successfully. A valid response is returned to the Partner.
												<br>2) Valid result is returned with appropriate error</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send request with transaction type Transaction Reversal with command ID "TransactionReversal" to  gateway - Paybill account has wrong initiator password</td>
												<td>Reversal for paybill account with invalid initiator password is unsuccessful. Request is processed by the API gateway and appropriate error message is retuned in the result</td>
												<td>1) Request is sent to API Gateway successfully. A valid response is returned to the Partner.<br>2) Valid result is returned with appropriate error</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send request with transaction type Transaction Reversal with command ID "TransactionReversal" to  gateway - with an invalid  ReceiverParty merchant account or store</td>
												<td>Reversal from paybill account with invalid Receiver party is unsuccessful. Request is processed by the API gateway and appropriate error message is retuned in the result</td>
												<td>1) Request is sent to API gateway successfully. A valid response is returned to the Partner.<br>2) Valid result is returned with appropriate error</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send the request with an valid command id i.e TransactionReversal</td>
												<td>To test whether the request will go through with a valid command id through the API gateway</td>
												<td>You should get an appropriate success message: The service has been accepted successfully</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send the request with an invalid command id</td>
												<td>To test whether the request will go through with an invalid command id will go through to API gateway</td>
												<td>The request shall not go through with an appropriate error thrown: Invalid CommandID</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send the request with an invalid identifier e.g. 6. The valid identifier is 1</td>
												<td>To test whether the request will be allowed on Mpesa with an invalid identifier</td>
												<td>The request shall not go through with an appropriate error thrown: Invalid identifier</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send remarks with less then 200 characters</td>
												<td>To test whether less then 200 characters will be accepted in remarks</td>
												<td>You should get an appropriate success message: The service has been accepted successfully</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send remarks with more then 200 characters</td>
												<td>To test whether more then 200 characters will be accepted in remarks</td>
												<td>The request shall not go through with an in appropriate error thrown: Invalid Remarks</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send result url with an ip and port</td>
												<td>To test whether the request will be accepted with a valid ip and port</td>
												<td>You should get an appropriate success message: The service has been accepted successfully</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send result url without an ip and port</td>
												<td>To test whether the request will be accepted without an ip and port</td>
												<td>The request shall not go through with an in appropriate error thrown:Invalid ResultURL</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send queuetimeout URL with an ip and port</td>
												<td>To test whether the request will be accepted with an ip and port</td>
												<td>You should get an appropriate success message: The service has been accepted successfully</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send queuetimeout URL without an ip and port</td>
												<td>To test whether the request will be accepted without an ip and port</td>
												<td>The request shall not go through with an in appropriate error thrown:Invalid QueuetimeoutURL</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											
											<tr>
												<td>Functionality tests</td>
												<td>Send the Occasion with less than 200 characters </td>
												<td>To test whether Occasion will be accepted with less than 200 characters</td>
												<td>The request shall not go through with an in appropriate success message: The service has been accepted successfully</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											
											<tr>
												<td>Functionality tests</td>
												<td>Send Occasion with more then 200 characters</td>
												<td>To test whether occasion will go through with more then 200 characters</td>
												<td>The request shall not go through with an in appropriate error thrown:Invalid Occasion</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											
											<tr>
												<td>Functionality tests</td>
												<td>Send the amount with a different amount that was sent during c2b with a valid transaction ID</td>
												<td>To test whether the transaction will be reversed with an amount not matching the intial C2B request</td>
												<td>1) Request is sent to API Gateway successfully. A valid response is returned to the Partner.<br>2) Valid result is returned with appropriate error</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											
											<tr>
												<td>Functionality tests</td>
												<td>Send an invalid transaction ID that does not exist</td>
												<td>To test whether the transaction will be reversed with a transaction ID not matching the intial C2B request</td>
												<td>1) Request is sent to API Gateway successfully. A valid response is returned to the Partner.<br>2) Valid result is returned with appropriate error</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											
											<tr>
												<td>Functionality tests</td>
												<td>Send the TransactionID with a valid Transaction ID and valid shortcode</td>
												<td>To test whether a valid transaction can be queried</td>
												<td>The request shall not go through with an in appropriate success message: The service has been accepted successfully</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											
										</tbody>
									</table>
								</div>
								
								<div id="transaction_status" class="tab-pane">
									<table id="transaction_status-test-cases-table" class="table table-bordered test-cases-table" data-sheet="Transaction Status">
										<thead>
											<tr>
												<th><strong>Subject</strong></th>
												<th><strong>Test Case</strong></th>
												<th><strong>Objective</strong></th>
												<th><strong>Expected Results</strong></th>
												<th class="actual_results"><strong>Actual Results</strong></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>Authentication</td>
												<td>Authenticate using Oauth</td>
												<td>To test successful authentication of third party using consumerkey:consumersecret and hashing it to create the Oauth token</td>
												<td>Authentication is successful</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
												
											</tr>
											<tr>
												<td>Authentication</td>
												<td>Authenticate using Oauth</td>
												<td>To test unsuccessful authentication of third party using consumerkey:consumersecret and hashing it to create the Oauth token</td>
												<td>Authentication is unsuccessful</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
												
											</tr>
											<tr>
												<td>Authentication</td>
												<td>Security credential is correctly encrypted</td>
												<td>to test successful authentication of the third party</td>
												<td>Authentication is successful</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
												
											</tr>
											<tr>
												<td>Authentication</td>
												<td>Security credential is incorrectly encrypted</td>
												<td>to test unsuccessful authentication of the third party</td>
												<td>Authentication is unsuccessful</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
												
											</tr>
											<tr>
												<td>Certificate management</td>
												<td>Test transaction over https portal</td>
												<td>To test successful request sent over https on the portal</td>
												<td>Portal displays https and transaction is successful</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
												
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send request with transaction type Transaction Status Query with command ID "TransactionStatusQuery" to the gateway - Paybill  account has a valid initiator username ,password, Transaction ID, Identifier Type and party A account is valid</td>
												<td>Partner is able to  successfully query the transaction from the organization that received it</td>
												<td>1) Request is sent to API gateway successfully. A valid response is returned to the Partner.<br>2) Valid result is returned with success message and transaction details</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send request with transaction type Transaction Status Query with command ID "TransactionStatusQuery" to API Gateway - Paybill account has wrong initiator username</td>
												<td>Checking the status of a transaction for paybill account with invalid initiator username is unsuccessful. Request is processed by the API gateway and appropriate error message is retuned in the result</td>
												<td>1) Request is sent to API Gateway successfully. A valid response is returned to the Partner.<br>2) Valid result is returned with appropriate error</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send request with transaction type Transaction Status Query with command ID "TransactionStatusQuery" to  gateway - Paybill account has wrong initiator password</td>
												<td>Checking the status of a transaction for paybill account with invalid initiator password is unsuccessful. Request is processed by the API gateway and appropriate error message is retuned in the result</td>
												<td>1) Request is sent to API Gateway successfully. A valid response is returned to the Partner.<br>2) Valid result is returned with appropriate error</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send request with transaction type Transaction Status Query with command ID "TransactionStatusQuery" to  gateway - with an invalid  party A merchant account or store</td>
												<td>Checking funds from paybill account with invalid initiator password is unsuccessful. Request is processed by the API gateway and appropriate error message is retuned in the result</td>
												<td>1) Request is sent to API gateway successfully. A valid response is returned to the Partner.<br>2) Valid result is returned with appropriate error</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send the request with a valid command id i.e TransactionStatusQuery</td>
												<td>To test whether the request will go through with a valid command id through the API gateway</td>
												<td>You should get an appropriate success message: The service has been accepted successfully</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send the request with an invalid command id</td>
												<td>To test whether the request will go through with an invalid command id will go through to API gateway</td>
												<td>The request shall not go through with an appropriate error thrown: Invalid CommandID</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send the request with an invalid identifier e.g. 6.</td>
												<td>To test whether the request will be allowed on Mpesa with an invalid identifier</td>
												<td>The request shall not go through with an appropriate error thrown: Invalid identifier</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send the Party A with a MSISDN of 10 digits</td>
												<td>To test whether a MSISDN of 10 digits will be accepted</td>
												<td>You should get an appropriate success message: The service has been accepted successfully</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send the Party A with a MSISDN of more then 10 digits</td>
												<td>To test whether a MSISDN of more or less then 10 digits will be accepted</td>
												<td>The request shall not go through with an in appropriate error thrown:Invalid Party A</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send remarks with less then 200 characters</td>
												<td>To test whether less then 200 characters will be accepted in remarks</td>
												<td>You should get an appropriate success message: The service has been accepted successfully</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send remarks with more then 200 characters</td>
												<td>To test whether more then 200 characters will be accepted in remarks</td>
												<td>The request shall not go through with an in appropriate error thrown: Invalid Remarks</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send result url with an ip and port</td>
												<td>To test whether the request will be accepted with a valid ip and port</td>
												<td>You should get an appropriate success message: The service has been accepted successfully</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send result url without an ip and port</td>
												<td>To test whether the request will be accepted without an ip and port</td>
												<td>The request shall not go through with an in appropriate error thrown:Invalid ResultURL</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send queuetimeout URL with an ip and port</td>
												<td>To test whether the request will be accepted with an ip and port</td>
												<td>You should get an appropriate success message: The service has been accepted successfully</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											<tr>
												<td>Functionality tests</td>
												<td>Send queuetimeout URL without an ip and port</td>
												<td>To test whether the request will be accepted without an ip and port</td>
												<td>The request shall not go through with an in appropriate error thrown:Invalid QueuetimeoutURL</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											
											<tr>
												<td>Functionality tests</td>
												<td>Send the Occasion with less than 200 characters </td>
												<td>To test whether Occasion will be accepted with less than 200 characters</td>
												<td>The request shall not go through with an in appropriate success message: The service has been accepted successfully</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											
											<tr>
												<td>Functionality tests</td>
												<td>Send Occasion with more then 200 characters</td>
												<td>To test whether occasion will go through with more then 200 characters</td>
												<td>The request shall not go through with an in appropriate error thrown:Invalid Occasion</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											
											<tr>
												<td>Functionality tests</td>
												<td>Send an invalid transaction ID that does not exist</td>
												<td>To test whether the transaction will be reversed with a transaction ID not matching the intial C2B request</td>
												<td>1) Request is sent to API Gateway successfully. A valid response is returned to the Partner.<br>2) Valid result is returned with appropriate error</td>
												<td>
													<select class="form-control" value="N/A">
														<option value="N/A">N/A</option>
														<option value="Success">Success</option>
														<option value="Fail">Fail</option>
													</select>
												</td>
											</tr>
											
										</tbody>
									</table>
								</div>
								
							</div>
						</div>
						<div class="panel-footer">
							<button class="btn btn-success tests-export" id="tests_submit_bottom">Export</button>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		<!-- ######################################################### -->
		
		<script src="res/js/jquery.js"></script>
		<script src="res/js/jquery.storageapi.js"></script>
		<script src="res/bootstrap/js/bootstrap.min.js"></script>
		<script src="res/bootstrap/js/sidebar.js"></script>
		<script src="res/excel/xlsx.full.min.js"></script>
		<script src="res/js/jquery.tabletojson.js"></script>
		<script src="res/js/export.js"></script>
		
	</body>
</html>
