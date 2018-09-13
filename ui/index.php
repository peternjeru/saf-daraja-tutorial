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
	    <meta name="keywords" content="Daraja, Daraja API, MPesa, MPesa API, MPesa Payment API, MPesa REST API, M-Pesa, M-Pesa API, M-Pesa REST API, MPesa Express, MPesa C2B, MPesa B2C, MPesa B2B, M-Pesa C2B, M-Pesa B2C, M-Pesa B2B, Safaricom, Safaricom API, Safaricom Payment API, Safaricom Daraja, Safaricom Daraja API, Safaricom Developer Portal, Safaricom REST API, Safaricom C2B, Safaricom B2C, Safaricom B2B, Safaricom Lipa na MPesa, C2B, B2C, B2B, Lipa na MPesa, STK Push, MPesa Express, Daraja Tutorial, Daraja API Tutorial, MPesa Tutorial, MPesa API Tutorial, MPesa REST API Tutorial, M-Pesa Tutorial, M-Pesa API Tutorial, M-Pesa REST API Tutorial, MPesa Express Tutorial, MPesa C2B Tutorial, MPesa B2C Tutorial, MPesa B2B Tutorial, M-Pesa C2B Tutorial, M-Pesa B2C Tutorial, M-Pesa B2B Tutorial, Safaricom Tutorial, Safaricom API Tutorial, Safaricom Daraja Tutorial, Safaricom Daraja API Tutorial, Safaricom REST API Tutorial, Safaricom C2B Tutorial, Safaricom B2C Tutorial, Safaricom B2B Tutorial, Safaricom Lipa na MPesa Tutorial, C2B Tutorial, B2C Tutorial, B2B Tutorial, Lipa na MPesa Tutorial, STK Push Tutorial, MPesa Express Tutorial, Daraja Example, Daraja API Example, MPesa Example, MPesa API Example, MPesa REST API Example, M-Pesa Example, M-Pesa API Example, M-Pesa REST API Example, MPesa Express Example, MPesa C2B Example, MPesa B2C Example, MPesa B2B Example, M-Pesa C2B Example, M-Pesa B2C Example, M-Pesa B2B Example, Safaricom Example, Safaricom API Example, Safaricom Daraja Example, Safaricom Daraja API Example, Safaricom REST API Example, Safaricom C2B Example, Safaricom B2C Example, Safaricom B2B Example, Safaricom Lipa na MPesa Example, C2B Example, B2C Example, B2B Example, Lipa na MPesa Example, STK Push Example, MPesa Express Example, Daraja Documentation, Daraja API Documentation, MPesa Documentation, MPesa API Documentation, MPesa REST API Documentation, M-Pesa Documentation, M-Pesa API Documentation, M-Pesa REST API Documentation, MPesa Express Documentation, MPesa C2B Documentation, MPesa B2C Documentation, MPesa B2B Documentation, M-Pesa C2B Documentation, M-Pesa B2C Documentation, M-Pesa B2B Documentation, Safaricom Documentation, Safaricom API Documentation, Safaricom Daraja Documentation, Safaricom Daraja API Documentation, Safaricom REST API Documentation, Safaricom C2B Documentation, Safaricom B2C Documentation, Safaricom B2B Documentation, Safaricom Lipa na MPesa Documentation, C2B Documentation, B2C Documentation, B2B Documentation, Lipa na MPesa Documentation, STK Push Documentation, MPesa Express Documentation"/>
	    
	    <meta name="author" content="Peter Njeru" />
	    
	    <title>Safaricom API Tutorial</title>
		<link rel="stylesheet" type="text/css" href="res/bootstrap/css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="res/bootstrap/css/sidebar.css">
		<link rel="stylesheet" type="text/css" href="res/css/index.css">
	</head>
	<body ng-app="apitutorial" ng-controller="MainController" id="body" data-spy="scroll" data-target="#main_menu" data-offset="10">
		<nav class="navbar navbar-static navbar-default navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#">Safaricom API Tutorial</a>
				</div>
				<button type="button" class="navbar-toggle navbar-right toggle-right" data-toggle="sidebar" data-target=".sidebar-right">
					<span class="glyphicon glyphicon-edit"></span>
				</button>
			</div>
		</nav>
		<div class="container-fluid" id="content">
			<div class="row">
				<div class="col-xs-10 col-sm-6 col-md-6 sidebar sidebar-right sidebar-animate ">
					<div class="panel panel-default logs-panel">
						<div class="panel-heading">
							<h3 class="panel-title">Received Callbacks</h3>
						</div>
						<div class="panel-body" style="max-width: 1000px; margin:auto; word-break: break-all; word-wrap: break-word;" id="tutorial_callbacks">
							<p>No callbacks yet</p>
						</div>
					</div>
				</div>
			</div>
			<div class="jumbotron" style="background-color: #555; color: #fff;">
				<h1>Safaricom Daraja API Tutorial</h1>
				<p>Learn how to easily integrate into the new REST API with step by step tutorials.</p>
			</div>
			
			<div class="row" id="intro" ng-controller="IntroController">
				<nav class="col-sm-12 col-md-12 col-lg-2"  id="main_menu">
					<ul class="nav nav-pills nav-stacked" data-spy="affix" data-offset-top="250">
						<li class="active">
							<a href="#intro" class="navbar-link main-link">Introduction</a>
						</li>
						<li>
							<a href="#api_apps" class="navbar-link main-link">API Apps</a>
						</li>
						<li>
							<a href="#get_token_tutorial" class="navbar-link main-link">Generate Token API</a>
						</li>
						<li>
							<a href="#register_url_tutorial" class="navbar-link main-link">Register URL API</a>
						</li>
						<li>
							<a href="#c2b_tutorial" class="navbar-link main-link">C2B API</a>
						</li>
						<li>
							<a href="#b2c_tutorial" class="navbar-link main-link">B2C API</a>
						</li>
						<li>
							<a href="#b2b_tutorial" class="navbar-link main-link">B2B API</a>
						</li>
						<li>
							<a href="#lnm_tutorial" class="navbar-link main-link">Lipa Na MPesa API</a>
						</li>
						<li>
							<a href="#reversal_tutorial" class="navbar-link main-link">Reversal API</a>
						</li>
						<li>
							<a href="#go_live_tutorial" class="navbar-link main-link">Go Live</a>
						</li>
						<li>
							<a href="#utilities_tutorial" class="navbar-link main-link">Utilities</a>
						</li>
						<li>
							<a href="#errors_tutorial" class="navbar-link main-link">API Errors</a>
						</li>
					</ul>
				</nav>
				<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
					<div class="panel panel-primary" id="intro">
						<div class="panel-heading">
							<h3 class="panel-title">Introduction</h3>
						</div>
						<div class="panel-body">
							<p>
							Welcome to the Safaricom API Tutorials. The main intention of this tutorial is try to explain the ins and outs of the API in more detail than the site's [documentation](https://developer.safaricom.co.ke/docs). 
							</p>
							<p>
							Ok, first, you need to open an account with them. That's pretty straight forward. They also have the option of Company management whereby you can be a member of a team. Haven't tried that out, but you can [check it out](https://developer.safaricom.co.ke/api_company/companies/list). The API is designed to work exclusively over the Internet, so no need for VPN setups or IP whitelisting compared to the previous Soap API.
							</p>
							<p>
							Once you have created an account and accessed your account, you will be given access to five main menu items. Allow me to expound on some of them:
							</p>
							<ul class="list-group">
							  <li class="list-group-item">
								<h4>[Docs](https://developer.safaricom.co.ke/docs)</h4>
								<p>This is where you will find the Official site documentation.</p>
							  </li>
							  
							  <li class="list-group-item">
								<h4>[APIs](https://developer.safaricom.co.ke/apis-explorer)</h4>
								<p class="mb-1">This is where you will find the list of all available APIs provided.</p>
							  </li>
							  
							  <li class="list-group-item">
								<h4>[My Apps](https://developer.safaricom.co.ke/user/me/apps)</h4>
								<p class="mb-1">This holds a list of all applications you have created. Apps are a way of grouping APIs into a single collection for easier classification on the user's side. You shall need at least one app on the portal to use the APIs.</p>
							  </li>
							  
							  <li class="list-group-item">
								<h4>[Go Live](https://developer.safaricom.co.ke/production_profile/form_production_profile)</h4>
								<p class="mb-1">This is the link that will enable you to begin the process to take your application live. It has quite some hustle, but it’s the only way available under your control.</p>
							  </li>
							  
							  <li class="list-group-item">
								<h4>[Blog](https://developer.safaricom.co.ke/blog)</h4>
								<p class="mb-1">Not sure what this does or is supposed to do, since it is blank. But am guessing a Blog is supposed to be here...?</p>
								<p class="mb-1">UPDATE: They just added their first post (May 07), hehehe.</p>
							  </li>
							  
							  <li class="list-group-item">
								<h4>[Forums](https://developer.safaricom.co.ke/forum)</h4>
								<p class="mb-1">This is where you get support from the API team when you are stuck. You can ask questions and they can give you the answers you need.</p>
							  </li>
							</ul>
							
							<p>Below are some prerequisites I believe are needed for those planning to use the API:</p>
							<ul class="list-group">
								<li class="list-group-item">Strong knowledge of a general programming language e.g. Java, Python, PHP for making the API requests. You should be comfortable enough to make HTTP requests in that language.</li>
								<li class="list-group-item">Knowledge of REST-based (Representational State Transfer) web services, and the JSON interchange format.</li>
								<li class="list-group-item">Basic Knowledge of troubleshooting via TCP dumps or Log dumps. This is very useful.</li>
								<li class="list-group-item">Working knowledge of Asynchronous HTTP Requests</li>
								<li class="list-group-item">Access to a publicly available web server for receiving HTTP requests from MPesa.</li>
								<li class="list-group-item">If you are planning to go live using the API, an <strong>existing</strong> pay bill number with all KYC details (especially Phone Number and Email) properly filled in and available on the MPesa Org Portal.</li>
							</ul>
						</div>
					</div>
					<div class="panel panel-primary" id="api_apps">
						<div class="panel-heading">
							<h3 class="panel-title">API Apps</h3>
						</div>
						<div class="panel-body">
							<p>
							Now, assuming you have access to the portal, first thing you do is create an app. The app you create will determine the APIs you use e.g. if you create an app and assign it Lipa Na Mpesa Online product only, it means that app will only apply to Lipa na MPESA Online API, and you will not be able to use it's keys with the MPesa Sandbox APIs, and vice versa. Also, beware, you need to have planned out your APIs before going live. You cannot use the same product for <strong>both</strong> B2C APIs and C2B APIs when going live. If you applied for a C2B shortcode/paybill, it will not be allowed to use the B2C API, and if you applied for a B2C shortcode, it will not be allowed to go live with a C2B API. But the C2B API and Lipa Na MPesa API can be used by the same App. Also beware the name of the app will be used to identify your app in the System and will be the main identifier for all enquiries about APIs from the team. The API also has a little known analytics page, where you can view the performance of your app. This is under the <strong>Your App</strong> section on the <strong>My Apps</strong> page.
							</p>
							<p>
							For the APIs, they are divided amongst the products as shared below:
							</p>
							<h4>Lipa Na Mpesa Online</h4>
							<ul class="list-group">
							  <li class="list-group-item">Lipa Na MPESA Online</li>
							</ul>
							<h4>MPesa Sandbox</h4>
							<ul class="list-group">
							  <li class="list-group-item">Reversal</li>
							  <li class="list-group-item">Transaction Status</li>
							  <li class="list-group-item">Account Balance</li>
							  <li class="list-group-item">B2C</li>
							  <li class="list-group-item">B2C</li>
							  <li class="list-group-item">C2B</li>
							</ul>
							<p>The OAuth API is shared among all APIs.</p>
							<p>For each App you create, there will be a set of two parameters that will tie a request to the app as mentioned before: the Consumer Key and the Consumer Secret. They do not have an expiry on testbed, but for prod, not so sure (Can someone confirm this for me?). These will be used in the API specifically applied for when creating the Application. Beware the app credentials are in no way tied to the MPesa credentials, which are a separate set of credentials used in the API requests. Will explain more of that as I go along.</p>
							<p>
							Now, for the setup. We are going to go through each API, and I am going to try and extrapolate the details as much as I can. We are going to use the below details in the API requests, hopefully they are active by the time you read this. You can get the MPesa Sandbox credentials from the Credentials page located [here](https://developer.safaricom.co.ke/test_credentials). I think they change after some time when you are inactive, and they also have an expiry date, so in case the below do not work, just use your own test credentials. If you change they will be saved locally on your browser for easy access next time you visit.
							</p>
							<ul class="list-group">
								<li class="list-group-item">Sandbox Consumer Key: <strong>{{Credentials.SandboxConsumerKey}}</strong></li>
								<li class="list-group-item">Sandbox Consumer Secret: <strong>{{Credentials.SandboxConsumerSecret}}</strong></li>
								<li class="list-group-item">Sandbox Shortcode 1: <strong>{{Credentials.SandboxShortcode1}}</strong></li>
								<li class="list-group-item">Sandbox Initiator Name (Shortcode 1): <strong>{{Credentials.SandboxInitiatorName1}}</strong></li>
								<li class="list-group-item">Sandbox Security Credential (Shortcode 1): <strong>{{Credentials.SandboxSecurityCredential}}</strong></li>
								<li class="list-group-item">Sandbox Shortcode 2: <strong>{{Credentials.SandboxShortcode2}}</strong></li>
								<li class="list-group-item">Sandbox Test MSISDN: <strong>{{Credentials.SandboxTestMSISDN}}</strong></li>
								
								<li class="list-group-item">Lipa Na MPESA Online Consumer Key: <strong>{{Credentials.LNMConsumerKey}}</strong></li>
								<li class="list-group-item">Lipa Na MPESA Online Consumer Secret: <strong>{{Credentials.LNMConsumerSecret}}</strong></li>
								<li class="list-group-item">Lipa Na MPESA Online Shortcode: <strong>{{Credentials.LNMShortcode}}</strong></li>
								<li class="list-group-item">Lipa Na MPESA Online Passkey: <strong>{{Credentials.LNMPasskey}}</strong></li>
							</ul>
							<div>
								<button class="btn btn-primary" data-toggle="modal" data-target="#tutorials_credentials_form" id="tutorial_change_credentials">Change credentials</button>
							</div>
							<div id="tutorials_credentials_form" role="dialog" class="modal fade">
								<div class="modal-dialog">
								
									<!-- Modal content-->
									<div class="modal-content">
									
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal">&times;</button>
											<h4><span class="glyphicon glyphicon-pencil"></span> Change Credentials</h4>
										</div>
										
										<div class="modal-body">
											<form role="form">
												<div class="form-group">
													<label for="tutorial_sandbox_consumer_key" >Sandbox Consumer Key</label>
													<input type="text" class="form-control" id="tutorial_sandbox_consumer_key" value="{{Credentials.SandboxConsumerKey}}" />
												</div>
												
												<div class="form-group">
													<label for="tutorial_sandbox_consumer_secret" >Sandbox Consumer Secret</label>
													<input type="text" class="form-control" id="tutorial_sandbox_consumer_secret" value="{{Credentials.SandboxConsumerSecret}}">
												</div>
												
												<div class="form-group">
													<label for="tutorial_sandbox_shortcode1" >Sandbox Shortcode 1</label>
													<input type="text" class="form-control" id="tutorial_sandbox_shortcode1" value="{{Credentials.SandboxShortcode1}}">
												</div>
												
												<div class="form-group">
													<label for="tutorial_sandbox_initiator_shortcode1" >Sandbox Initiator (Shortcode 1)</label>
													<input type="text" class="form-control" id="tutorial_sandbox_initiator_shortcode1" value="{{Credentials.SandboxInitiatorName1}}">
												</div>
												
												<div class="form-group">
													<label for="tutorial_sandbox_sec_credential_shortcode1" >Sandbox Security Credential (Shortcode 1)</label>
													<input type="text" class="form-control" id="tutorial_sandbox_sec_credential_shortcode1" value="{{Credentials.SandboxSecurityCredential}}">
												</div>
												
												<div class="form-group">
													<label for="tutorial_sandbox_shortcode2" >Sandbox Shortcode 2</label>
													<input type="text" class="form-control" id="tutorial_sandbox_shortcode2" value="{{Credentials.SandboxShortcode2}}">
												</div>
												
												<div class="form-group">
													<label for="tutorial_sandbox_msisdn" >Sandbox Test MSISDN</label>
													<input type="text" class="form-control" id="tutorial_sandbox_msisdn" value="{{Credentials.SandboxTestMSISDN}}">
												</div>
												
												<div class="form-group">
													<label for="tutorial_lnm_consumer_key" >Lipa na MPesa Online Consumer Key</label>
													<input type="text" class="form-control" id="tutorial_lnm_consumer_key" value="{{Credentials.LNMConsumerKey}}">
												</div>
												
												<div class="form-group">
													<label for="inputEmail3" >Lipa na MPesa Online Consumer Secret</label>
													<input type="text" class="form-control" id="tutorial_lnm_consumer_secret" value="{{Credentials.LNMConsumerSecret}}">
												</div>
												
												<div class="form-group">
													<label for="inputEmail3" >Lipa na MPesa Online Shortcode</label>
													<input type="text" class="form-control" id="tutorial_lnm_shortcode" value="{{Credentials.LNMShortcode}}">
												</div>
												
												<div class="form-group">
													<label for="inputEmail3" >Lipa na MPesa Online Passkey</label>
													<input type="text" class="form-control" id="tutorial_lnm_passkey" value="{{Credentials.LNMPasskey}}">
												</div>
												<button type="submit" class="btn btn-default btn-success btn-block request_submit" id="tutorials_save_credentials">Save</button>
												<!--<button class="btn btn-default btn-success btn-block" id="tutorials_save_credentials" ng-click="SaveCredentials()">Save</button> -->
											</form>
										</div>
										<div class="modal-footer text-danger" >
										Note: values might be saved for current session only.
										</div>
									</div>
								</div>
							</div>
							
							<br />
							<p>For those not familiar with MPesa APIs, a short intro is needed: 
							</p>
							<p>
							All MPesa requests (except Register URL API) are of an asynchronous nature. This means that you will not receive a result showing completion of the transaction immediately after making the request. Instead, you make the request and wait for feedback via a <strong>listener</strong> or <strong>callback URL</strong>. Thus, you first make a request, then, if your request passes all checks, you get an <strong>Acknowledgement</strong> that the request has been received for processing synchronously. Then, after processing has completed, you get feedback via the callback URL which you need to have specified beforehand via two means: registration of the URLs on the system (used by C2B API only), or preset in your initial request (used by the other APIs). Depending on the transaction type and the outcome of the transaction, the result can either be a success or failure. So don't mistake the acknowledgement (which is returned immediately after you make the request) for a successful transaction.
							</p>
							<p>Let me try to use a real-world scenario to make the above more clearer. You may skip this section if you already understand the above.
							</p>
							<p>Imagine you are a student currently sitting for an examination. You are required to fill in an exam paper, and hand it over for marking when you are done. Now, when you are done with the paper, you want to know how much you have scored, and the teacher needs to mark the paper before they can tell you your score. The teacher will most probably not mark the paper immediately, but will instead tell you that you shall hand in the paper and he/she shall give you your results after marking them later (after their tea break, of course). The teacher will then first confirm that all required questions have been answered, and that at least you have put your own name on the paper. After accepting and marking the paper, the teacher notifies you by either calling you to the office, sending someone to fetch you, sending a messenger to deliver the marked paper to you, or any other method applicable, with your result on it. Then you shall know whether you passed or failed. 
							</p>
							<p>Applying the above to our situation, the paper you are sitting for represents the request you are sending to Safaricom. The teacher is the API/MPesa, and the communication between you and the teacher represents the HTTP requests between your system and the API. When you send a request to the API, it sends back an Acknowledgement, telling you that your request is received. This is analogous to the teacher telling you "OK, I have received your paper, let me mark it and send the results back to you later". The action of the teacher checking that you have answered all questions represents the API checking your request before accepting it. If there are missing parameters, or other errors in your request structure, the API immediately informs you of the error, and you are left to correct the errors and trying again. Until all parameters are correctly filled, or the structure fits the required format, the API will not accept your request. The teacher sending the results back to you using whichever method represents the API calling your system back via a normal HTTP Request using the pre-defined URL and delivering the results to you. The results tell you the outcome of your request (failed or succeeded) and any extra information necessary if required.</p> 
							<p>Hope that helps.</p>
							
						</div>
					</div>
					
				</div>
			</div>
			
			<div class="row" id="get_token_tutorial" ng-controller="GetTokenController">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-6 col-lg-offset-2">
					<div class="panel panel-primary tutorial_text" id="get_token_text">
						<div class="panel-heading">
							<h3 class="panel-title">Generate Token</h3>
						</div>
						<div class="panel-body">
							<p>This API generates the tokens for authenticating your API calls. This is the first API you need to engage with in the set of APIs available as all the other APIs require the information from this API to work.
							</p>
							<p>The API works as below:</p>
							<ol class="list-group">
								<li class="list-group-item">1. Get the Base-64 encoding of <strong>Consumer Key + ":" + Consumer Secret</strong> (note the full colon in the encoding)</li>
								<li class="list-group-item">2. Create a <code>GET</code> request and set an Authentication header with the value as Basic  + encoded value from above step e.g. using the Consumer Credentials above, the header will be<code>Authentication: Basic {{Credentials.SecurityToken}}</code></li>
								<li class="list-group-item">3. Send the request to the endpoint <code>https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials</code>. The raw request will look similar to the following :</p>
<pre>
GET /oauth/v1/generate?grant_type=client_credentials HTTP/1.1
Host: sandbox.safaricom.co.ke
Authorization: Basic {{Credentials.SecurityToken}}
Content-Type: application/json
</pre>
								</li>
								<li class="list-group-item"><p>4. You will get a response in the sample format shown below. This shows your token and how long it will take before it expires.</p>
<pre>
{
	"access_token": "hsHoclSD53UC3657NAD3d0qBE8cA",
	"expires_in": "3599"
}
</pre>
								</li>
							</ol>
							<p>Once generated, you somehow need to keep track of the timeout period so it does not expire unknowingly. This means you need to either generate a new token for every request you make, or keep a timer variable somewhere and keep checking it. That's up to you. But know that when you get the "Invalid Access Token" error, your Auth token has expired or is not set. Get a new one.</p>
							<div class="panel panel-success">
								<div class="panel-body bg-info">The panel on the right, I call it a playground, is designed to help you test out the APIs as we go through them. It shall consist of multiple tabs. At the minimum, it shall have a "Try it" tab for testing the specific API which you are reading on, and a quick access "Refresh Credentials" tab for when the token expires in the middle of a session to quickly generate a new token. If the panel is not completely visible, it means you may be viewing on a 4:3 ratio monitor. Try zooming out to around 80-90%, to be able to view the scrollers. There is also a panel showing any callbacks that may be received from using the testers, accessible by clicking on the <span class="glyphicon glyphicon-edit"></span> icon at the top-right corner of the screen. The latest received callbacks will be displayed there whenever available if you have not changed the default callback preset in the requests, ordered by latest callbacks first. It will record all callbacks received, unfiltered for now, so you may need to dig around for your callback from the incoming requests. Use a unique Identifier to try and capture yours on the log.
								</div>
							</div>
						</div>
					</div>
				</div>
				
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-4">
					<div class="panel panel-info tutorial_code" id="get_token_code" data-affix_target="get_token_text" >
						<div class="panel-heading">Generate Sandbox Token</div>
						<div class="panel-body">
							<ul class="nav nav-tabs">
								<li class="active">
									<a href="#get_token_code_test" data-toggle="tab">Try It</a>
								</li>
							</ul>
							<div class="tab-content" style="background-color: #fff; padding: 10px">
								<div id="get_token_code_test" class="panel panel-default tab-pane active">
									<div class="panel-body pre-scrollable" style="max-width: 400px; margin:auto">
										<form id="get_token_code_request">
											
											<div class="form-group">
												<label>Base-64 Encoded Credential</label>
												<input type="text" class="form-control" id="get_token_code_client_credentials" placeholder="Encoded Credential" value="Basic {{Credentials.SecurityToken}}">
											</div>
											
											<button type="submit" class="btn btn-primary request_submit" id="get_token_code_submit">Send Request</button>
										</form>
										<div class="panel panel-default" id="get_token_code_response_panel">
											<div class="panel-heading">Response</div>
											<div class="panel-body" id="get_token_code_response">
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											</div>
										</div>
									
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row" id="register_url_tutorial" ng-controller="RegisterURLController">
				<div class="col-md-6 col-md-offset-2">
					<div class="panel panel-primary tutorial_text" id="register_url_text">
						<div class="panel-heading">
							<h3 class="panel-title">Register URL</h3>
						</div>
						<div class="panel-body">
							<p>The first API we shall look at is the Register URL API under C2B APIs. It is the first half of the C2B API for receiving payment notifications to your paybill. This API enables you to register the callback URLs via which you shall receive payment notifications for payments to your paybill/till number. The URLs are used by the C2B payment simulation API for sending the transaction details to you.
							</p>
							<p>There are two URLs required for RegisterURL API: <strong>Validation URL</strong> and <strong>Confirmation URL</strong>. The reason for two of them is due to the nature of C2B API calls. Below is a flowchart of the C2B process:</p> 
							<p>NB: Broker is the API interface between MPesa and 3rd parties.</p>
							<p class="thumbnail">
								<img src="images/c2bflow.png" alt="C2B Flow">
								<div class="caption">
									<p><strong>C2B transaction flow</strong></p>
								</div>
							</p>
							<p>The process is explained as below:</p>
							<ol>
								<li>A customer sends a payment request to your paybill from their phone</li>
								<li>MPesa received the request and validates it internally first</li>
								<li>MPesa checks if you have enabled  <strong>External Validation</strong> for the paybill receiving the request </li>
								<li>If External Validation is enabled:
									<ol type="a">
										<li>MPesa first sends a <strong>Validation request</strong> to the Validation URL registered in the system (3<sup>rd</sup> party) with the payment details.</li>
										<li>The 3<sup>rd</sup> Party validates the request and sends an appropriate response to MPesa. This response must be received within a given time period or MPesa marks the endpoint system as unreachable. The response is either to complete or cancel the payment:</li>
										<li>MPesa received the response and processes the transaction accordingly:</li>
										<li>If you had chosen to complete the transaction, MPesa sends a <strong>Confirmation request</strong> to your Confirmation URL with the details of the completed transaction. The transaction is then complete. Thus you shall receive <strong>two</strong> API calls on your system.</li>
										<li>If you had chosen to cancel the payment, MPesa simply cancels the transaction and no other request is sent. The transaction is then complete</li>
									</ol>
								</li>
								<li>If External Validation is <strong>disabled</strong>, MPesa automatically completes the transaction, and if the transaction is a success, MPesa sends a <strong>Confirmation</strong> request to the Confirmation URL registered in the system. This is the <strong>only</strong> API call you shall receive on your end.</li>
								<li>If External Validation is <strong>enabled</strong>, but for some reason MPesa could <strong>not</strong> reach your endpoint to validate the transaction within the stipulated time period (usually &lt; 8 seconds), or no response was received by the time MPesa terminates the request, it checks on the default action value saved during registration of the URLs. If the default action was set to <strong>Completed</strong>, MPesa automatically completes the transaction and also tries to send a Confirmation request to your other endpoint. If the default action was set to <strong>Cancelled</strong>, MPesa simply cancels the transaction. The transaction is then complete.</li>
								<li>If no URLs are registered in the system, MPesa automatically completes the request.</li>
								<li>MPesa then sends an SMS notification to both the customer and paybill owner with the results of the transaction as usual.</li>
								<li>When the external notifications fail to be sent, you can check on the MPesa Org portal and cross-check against received callbacks. The portal has all the payments ever made available, whether you received the callback or not. Manual, but necessary once in a while.</li>
							</ol>
							<p>For the two URLs, below are some pointers. These will also apply to the Callback URLs we shall use later on in other APIs:
							</p>
							<ol class="list-group">
								<li class="list-group-item">- Use publicly available (Internet-accessible) IP addresses or domain names.</li>
								<li class="list-group-item">- <strong>Do not</strong> use the words <strong>MPesa, M-Pesa, Safaricom</strong> or any of their variants in either upper or lower cases in your URLs, the system filters these URLs out and blocks them. Of course any Localhost URL will be refused.</li>
								<li class="list-group-item">- <strong>Do not</strong> use public URL testers e.g. [mockbin](http://mockbin.org/) or [requestbin](https://requestb.in/)<strong> especially</strong> on production, they are also blocked by the API.</li>
							</ol>
							<p>The request structure will be as shown below:</p>
<pre>
// URL
[POST] https://sandbox.safaricom.co.ke/mpesa/c2b/v1/registerurl

// HEADERS
Host: sandbox.safaricom.co.ke
Authorization: Bearer [access token]
Content-Type: application/json

// BODY
{
	"ShortCode": "{{Credentials.SandboxShortcode1}}",
	"ResponseType": "[Cancelled/Completed]",
	"ConfirmationURL": "[confirmation URL]",
	"ValidationURL": "[validation URL]"
}
</pre>
							<p>The other parameters are:</p>
							<dl>
								<dt>Shortcode</dt>
								<dd>This is your paybill number/till number, which you expect to receive payments notifications about.</dd>
							</dl>
							<dl>
								<dt>Response Type</dt>
								<dd>This is the default action value that determines what MPesa will do in the scenario that your endpoint is unreachable or is unable to respond on time. Only two values are allowed: <strong>Completed</strong> or <strong>Cancelled</strong>. Completed means MPesa will automatically complete your transaction, whereas Cancelled means MPesa will automatically cancel the transaction, in the case MPesa is unable to reach your Validation URL.</dd>
							</dl>
							<p>Then a success response will look like the one below:</p>
							<pre>
{
	"ConversationID": "",
	"OriginatorCoversationID": "",
	"ResponseDescription": "success"
}
</pre>
							<p>Anything else other than the above means there is an error, check error description and fix it if it's your error. I will cover some common errors encountered on the portal later on in a different section as I compile them one by one from the APIs.</p>
							<p>Unfortunately, there is no way to check which URLs are currently registered on the system, or whether the URLs were actually registered in the first place. You can only confirm by performing C2B requests and checking if the registered endpoints are hit or not. Otherwise you can get in touch with the support team and enquire which URLs are currently under your paybill on the system</p>
							<p>Also, it is good to know the relationship between short codes and the URLs. One paybill can only have one pair of URLs under it, but the same pair of URLs can be used by multiple paybill numbers for transaction notifications. That means it will be up to you to differentiate requests for different paybills.</p>
							<p>NB: For this API,and the C2B API below, please test using your own test paybill assigned to you. Most probably, by the time you register your URLs with my paybill above, then get down to testing on the C2B section, someone else will have overwritten your URLs with their own URLs. Then you will be left scratching your head as to why "MPesa is not calling my endpoints".</p>
							<p>And that's pretty much it for Register URL API.</p>
						</div>
						
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-info tutorial_code" id="register_url_code" data-affix_target="register_url_text" >
						<div class="panel-heading">Register URL</div>
						<div class="panel-body">
							<ul class="nav nav-tabs">
								<li class="active">
									<a href="#register_url_code_test" data-toggle="tab">Try It</a>
								</li>
								<li>
									<a href="#register_url_auth_refresh" data-toggle="tab">Refresh Token</a>
								</li>
							</ul>
							<div class="tab-content" style="background-color: #fff; padding: 10px">
								<div id="register_url_code_test" class="panel panel-default tab-pane active">
									<div class="panel-body pre-scrollable" style="max-width: 400px; margin:auto">
										<form id="register_url_code_request">
										
											<div class="form-group">
												<label>Access Token</label>
												<input type="text" class="form-control" id="register_url_code_auth_token" placeholder="Access Token" value = "Bearer [access token]">
											</div>
											
											<div class="form-group">
												<label>Shortcode</label>
												<input type="text" class="form-control" id="register_url_code_shortcode" placeholder="Shortcode" value = "{{Credentials.SandboxShortcode1}}">
											</div>
											
											<div class="form-group">
												<label>Response Type</label>
												<input type="text" class="form-control" id="register_url_code_response_type" placeholder="Response Type" value="Cancelled">
											</div>
											
											<div class="form-group">
												<label>Validation URL</label>
												<input type="text" class="form-control" id="register_url_code_validation_url" placeholder="Validation URL", value="{{Credentials.ValidationURL}}">
											</div>
											
											<div class="form-group">
												<label>Confirmation URL</label>
												<input type="text" class="form-control" id="register_url_code_confirmation_url" placeholder="Confirmation URL" value="{{Credentials.ConfirmationURL}}">
											</div>
											
											<button type="submit" class="btn btn-primary request_submit" id="register_url_code_submit">Send Request</button>
										</form>
										<div class="panel panel-default">
											<div class="panel-heading">
											Request JSON
											</div>
											<div class="panel-body" id="register_url_code_body">
											</div>
										</div>
										<div class="panel panel-success" id="register_url_code_response_panel">
											<div class="panel-heading">Response</div>
											<div class="panel-body" id="register_url_code_response">
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											</div>
										</div>
									
									</div>
								</div>
								<div id="register_url_auth_refresh" class="panel panel-default tab-pane">
									<div class="panel-body pre-scrollable" style="max-width: 400px; margin:auto">
										<form id="register_url_auth_refresh_request">
											<button type="submit" class="btn btn-primary request_submit" id="register_url_auth_refresh_submit">Refresh</button>
										</form>
										<div class="panel panel-info">
											<div class="panel-heading">Response</div>
											<div class="panel-body" id="register_url_auth_refresh_response">
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row" id="c2b_tutorial" ng-controller="C2BController">
				<div class="col-md-6 col-md-offset-2">
					<div class="panel panel-primary tutorial_text" id="c2b_text">
						<div class="panel-heading">
							<h3 class="panel-title">C2B API</h3>
						</div>
						<div class="panel-body">
							<p>This API is used to simulate payment requests from clients and to your API. It basically simulates a payment made from the client phone's STK/SIM Toolkit menu, and enables you to receive the payment requests in real time. It is the second half of the Register URL API covered above, and requires the URLs registered by the previous API to work. Hopefully you have gone through the previous section to understand how the C2B payment process works, as both are tied to each other. If not, please do, I can wait...
							</p>
							<p>Welcome back. Moving on, the basic C2B request looks like the sample below:</p>
							<pre>
// URL
[POST] https://sandbox.safaricom.co.ke/mpesa/c2b/v1/simulate

// HEADERS
Host: sandbox.safaricom.co.ke
Authorization: Bearer [access token]
Content-Type: application/json

// BODY
{
    "ShortCode": "{{Credentials.SandboxShortcode1}}",
    "CommandID": "CustomerPayBillOnline",
    "Amount": "100",
    "Msisdn": "{{Credentials.SandboxTestMSISDN}}",
    "BillRefNumber": "account"
}
</pre>
							<p>These are explained below:</p>
							<dl>
								<dt>Shortcode</dt>
								<dd>This is your paybill number/till number, which you expect to receive payments notifications about.</dd>
							</dl>
							<dl>
								<dt>CommandID</dt>
								<dd>This is a transaction type identifier, which Identifies the type of C2B transaction being made. There are two options: <strong>CustomerPayBillOnline</strong> and <strong>CustomerBuyGoodsOnline</strong>. CustomerPayBillOnline is used when simulating Pay Bill requests, which the customer does by going to the <kbd>Lipa na M-PESA</kbd> -> <kbd>Pay Bill</kbd> option on mobile, and uses a Paybill number. Thus it requires an Account number/Bill reference number for it to be valid. CustomerBuyGoodsOnline is used for Buy Goods simulation, which is when a customer goes to <kbd>Lipa na M-PESA</kbd> -> <kbd>Buy Goods and Services</kbd> on their mobile phones and uses a Till number. This does not require a paybill number, and putting one actually causes the request to fail. Beware that you cannot use a Till number with CustomerPayBillOnline command ID and you cannot use a Pay Bill number with CustomerBuyGoodsOnline Command ID. As of now, I can only see the paybill number provided on the portal, there is no Till number, so the CustomerBuyGoodsOnline command ID might not work as expected, and you might not receive callbacks if you use it since the payment might automatically fail on the backend. But am still going to provision for it here.
								</dd>
							</dl>
							<dl>
								<dt>Msisdn</dt>
								<dd>This is the test phone number of the virtual customer paying to your paybill. Use the one given in your [test credentials](https://developer.safaricom.co.ke/test_credentials) section (Test MSISDN) to test. Testing using your own phone numbers will not work with this API since the numbers need to be registered on the testbed first. The number should either begin with 07XX, or 2547XX. International numbers are not supported for now.</dd>
							</dl>
							<dl>
								<dt>BillRefNumber</dt>
								<dd>This simulates the account number that a user would have entered when making a Pay Bill request. This parameter is only required for CustomerPayBillOnline transaction type. It is sent as part of the validation and confirmation requests to you (3rd party) to validate and confirm. It has a maximum of 20 characters.</dd>
							</dl>
							<p>After sending the request, and assuming you have all the correct details, the success response should be the acknowledgement below:</p>
							<pre>
{
	"ConversationID": "AG_20180324_000066530b914eee3f85",
	"OriginatorCoversationID": "25344-885903-1",
	"ResponseDescription": "Accept the service request successfully."
}</pre>
							<p>The above response shows that your request has been accepted, and will be processed. The two 'ConversationID's are unique identifiers of your transaction's journey on MPesa. MPesa itself processes transaction in &lt;~8 seconds, thus, adding 1-2 seconds of network delays and communication, it should take no more than 10 seconds for the validation/confirmation request to hit your endpoint. If it is consistently above that, please check for network or processing delays around your system.</p>
							<p>For those who have enabled External Validation, you will first receive a validation request on your Validation URL to validate the request. That request will have the structure below:</p>
							<pre>
{
    "TransactionType": "",
    "TransID": "LHG31AA5TX",
    "TransTime": "20170816190243",
    "TransAmount": "200.00",
    "BusinessShortCode": "{{Credentials.SandboxShortcode1}}",
    "BillRefNumber": "account",
    "InvoiceNumber": "",
    "OrgAccountBalance": "",
    "ThirdPartyTransID": "",
    "MSISDN": "{{Credentials.SandboxTestMSISDN}}",
    "FirstName": "John",
    "MiddleName": "",
    "LastName": "Doe"
}
</pre>
							<dl>
								<dt>TransID</dt>
								<dd>This is MPesa's unique transaction identifier for your transaction. This can be used for searching for the transaction later on using the Transaction Query API.</dd>
							</dl>
							<dl>
								<dt>TransTime</dt>
								<dd>Simply the time the transaction was completed on MPesa in the format <strong>YYYYMMddHHmmss</strong>.</dd>
							</dl>
							<dl>
								<dt>TransAmount</dt>
								<dd>The amount transacted by the customer when paying to your paybill/till.</dd>
							</dl>
							<dl>
								<dt>BusinessShortCode</dt>
								<dd>The shortcode to which the customer paid to. This can be used to differentiate payments to different paybills via the same notification URLs.</dd>
							</dl>
							<dl>
								<dt>BillRefNumber</dt>
								<dd>The account number the customer entered on their phone when making the payment. Applicable to PayBill requests.</dd>
							</dl>
							<dl>
								<dt>MSISDN</dt>
								<dd>The phone number from which the payment was made.</dd>
							</dl>
							<dl>
								<dt>FirstName, MiddleName, LastName</dt>
								<dd>The names of the customer under whom the MSISDN above is registered. The First Name and Last Name are usually mandatory. The Middle Name is optional.</dd>
							</dl>
							<p>After receiving the request, you are supposed to process it and respond to the API call with either an <strong>accept</strong> or <strong>reject</strong> response. To accept, you send the below JSON making sure the value of <strong>ResultCode</strong> is 0 (zero), but the value of ResultDesc can be any alphanumeric value.
							</p>
							<pre>
{
	"ResultCode": 0,
	"ResultDesc": "Accepted"
}</pre>
							<p>To reject a transaction, you send the same JSON above, but with the value of ResultCode being any integer <strong>EXCEPT</strong> 0, as shown below</p>
<pre>
{
	"ResultCode": 1,
	"ResultDesc": "Rejected"
}</pre>
							<p>So, basically, sending a ResultCode value of 0 means you accept the transaction, and sending anything else rejects the transaction. Values below 0 are not accepted, and also constitute a rejection.
							</p>
							<p>If transaction has been accepted, MPesa will complete the transaction and send a Confirmation request to you. This will have the same structure and values as the Validation request JSON above. This also applies for those who have disabled External Validation. You may respond to the Confirmation request with the JSON below. If you cancel the transaction, no Confirmation will be sent to you. Beware that you cannot cancel a transaction after the Confirmation request has been sent to you. Confirmation marks the completion of the transaction on MPesa.
							</p>
							<pre>
	{
		"C2BPaymentConfirmationResult": "Success"
	}</pre>
							<p>That marks the end of the C2B transaction. If you find out that Mpesa is not getting to you, or that your systems are not receiving payment notifications, you can always fall back to the MPesa Org Portal to confirm the transactions were received and processed as required.</p>
							<div class="panel panel-success">
								<div class="panel-body bg-info">
								Caveat: please disconnect your shortcode from the old Soap API before using it on the new API if you are planning to migrate the shortcode. The settings from the old API could really mess up your integration in the new API. Make sure to delete the registered C2B URLS from the old System by placing a request with the Support team to have them deleted. This will also apply to the [Lipa Na MPesa API](#lnm_tutorial).
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-info tutorial_code" id="c2b_code" data-affix_target="c2b_text">
						<div class="panel-heading">C2B API</div>
						<div class="panel-body">
							<ul class="nav nav-tabs">
								<li class="active">
									<a href="#c2b_code_test" data-toggle="tab">Try It</a>
								</li>
								<li>
									<a href="#c2b_auth_refresh" data-toggle="tab">Refresh Token</a>
								</li>
							</ul>
							<div class="tab-content" style="background-color: #fff; padding: 10px">
								<div id="c2b_code_test" class="panel panel-default tab-pane active">
									<div class="panel-body pre-scrollable" style="max-width: 400px; margin:auto">
										<form id="c2b_code_request">
											<div class="form-group">
												<label>Access Token</label>
												<input type="text" class="form-control" id="c2b_code_access_token" placeholder="Access Token" value = "Bearer [access token]">
											</div>
											
											<div class="form-group">
												<label>Shortcode</label>
												<input type="text" class="form-control" id="c2b_code_shortcode" placeholder="Shortcode" value = "{{Credentials.SandboxShortcode1}}">
											</div>
											
											<div class="form-group">
												<label>Command ID</label>
												<select class="form-control" id="c2b_code_commandid">
													<option value="CustomerPayBillOnline">CustomerPayBillOnline</option>
													<option value="CustomerBuyGoodsOnline">CustomerBuyGoodsOnline</option>
												</select>
												
											</div>
											
											<div class="form-group">
												<label>Amount</label>
												<input type="text" class="form-control" id="c2b_code_amount" placeholder="Amount" value = "500">
											</div>
											
											<div class="form-group">
												<label>Phone Number</label>
												<input type="text" class="form-control" id="c2b_code_msisdn" placeholder="Phone Number" value = "{{Credentials.SandboxTestMSISDN}}">
											</div>
											
											<div class="form-group">
												<label>Account/Bill Ref Number</label>
												<input type="text" class="form-control" id="c2b_code_acc_no" placeholder="Account Number" value = "account">
											</div>
											
											<button type="submit" class="btn btn-primary request_submit" id="c2b_code_submit">Send Request</button>
										</form>
										<div class="panel panel-default">
											<div class="panel-heading">Request JSON</div>
											<div class="panel-body" id="c2b_code_body" style="max-width: 500px; word-wrap:break-word; display:inline-block;">
											</div>
										</div>
										<div class="panel panel-success" id="c2b_code_response_panel">
											<div class="panel-heading">Response</div>
											<div class="panel-body pre-scrollable" id="c2b_code_response">
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											</div>
										</div>
									
									</div>
								</div>
								<div id="c2b_auth_refresh" class="panel panel-default tab-pane">
									<div class="panel-body pre-scrollable" style="max-width: 400px; margin:auto">
										<form id="c2b_auth_refresh_request">
											
											<button type="submit" class="btn btn-primary request_submit" id="c2b_auth_refresh_submit">Refresh</button>
										</form>
										<div class="panel panel-default">
											<div class="panel-heading">Response</div>
											<div class="panel-body" id="c2b_auth_refresh_response">
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											</div>
										</div>
									
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row" id="b2c_tutorial" ng-controller="B2CController">
				<div class="col-md-6 col-md-offset-2">
					<div class="panel panel-primary tutorial_text" id="b2c_text">
						<div class="panel-heading">
							<h3 class="panel-title">B2C API</h3>
						</div>
						<div class="panel-body">
							<p>This API enables a Business or Organization to pay their customers for a variety of reasons. The most common reasons a business can pay their customer include salary payments, promotion payments (e.g. betting winnings payouts) or normal business payments (e.g. transfers from bank to mobile accounts). Each of these scenarios has their own unique characteristics, but all lie under the B2C (Business to Consumer) API category. Below is the flow of a B2C transaction.</p>
							<p class="thumbnail">
								<img src="images/b2cflow.png" alt="C2B Flow">
								<div class="caption">
									<p><strong>B2C transaction flow</strong></p>
								</div>
							</p>
							<ol>
								<li>The Business sets the data in the request and sends it</li>
								<li>MPesa received the request and validates it internally first, then sends you an acknowledgement response.</li>
								<li>MPesa processes the request, then sends the response back to you via the callback URL specified in your initial request.</li>
								<li>As of now, there are no repeat callbacks for failed callbacks, thus if MPesa is unable to send the callback to you, you will need to confirm from the portal as to the status of the request or use the Transaction Status API to get the result.</li>
							</ol>
							<p>The B2C API has quite some hustle to understanding how to make it work, thus I shall explain it from the point of perspective of a client who has access to the MPesa Organization Portal, since we shall touch on that portal quite frequently from here on. But I shall make sure to expound properly for those with no access to the portal.</p>
							<p>For one to be able to perform operations on the MPesa system, one must have access to it. Access to the system is mainly based on your identity, i.e. you are either a <strong>Customer</strong>, an <strong>Organization</strong> or <strong>Service Provider (SP)</strong>. The SP is Safaricom, and they have full control over the other two entities. The customer is obviously the client registered on MPesa, who can perform the transactions allowed to them via phone or other means, and are identified by their phone number/[MSISDN](https://en.wikipedia.org/wiki/MSISDN). The Organization is the Business, Company e.t.c. who are identified by the shortcode they applied for, and want to perform operations or transactions on the system.</p>
							<p>Access to MPesa is via three channels: <strong>Web</strong>, <strong>API</strong> and <strong>Handset</strong>. Customers mainly use the handset channel, Organizations take the Web and API channel. For Organizations (Orgs from here on), the access channels give rise to two classes of users: <strong>Web Operators</strong> and <strong>API operators</strong>. Web operators can access MPesa via the MPesa Portal, commonly known as the Mpesa Org. Portal, to perform their transactions and operations there. They have no permissions to perform any operations or transaction via API. API operators, on the other hand, access the MPesa system via API calls. They can perform the operations/transactions assigned to them only via API calls, and cannot log into the system via the web portal. Also, Web operators have control over API operators.</p>
							<p>Both types of operators are limited to their actions on the portal via roles assigned to them by the SP ([RBAC](https://en.wikipedia.org/wiki/Role-based_access_control)). On a typical MPesa Org portal, there are at least three roles: <strong>Business Administrator</strong>, <strong>Business Manager</strong>, and <strong>Org API operator</strong>. The Business Administrator is the overall admin of the account, and controls other users on the portal and can perform bulk operations for their organization. The Business Manager mainly controls the financial aspects of the system, including transactions overview, authorization, perform transactions and reverse them too via portal e.t.c. The Business Admin and Business Manager are both Web operators i.e. they can only access the system via the web portal. The Org API Operator is the user allowed to perform transactions/actions over API calls. This is the user who is used in the B2C calls on the API portal. The actions they can perform are limited to the permissions assigned to them by their Business Administrator. The operator is identified as the <strong>Initiator</strong> in API calls. At the minimum, the below are the permissions assignable to them and the actions/transactions they perform (note: the case might be different):</p>
							<dl>
								<dt>ORG B2C API initiator</dt>
								<dd>This enables the API operator to perform B2C and B2B transactions via API.</dd>
							</dl>
							<dl>
								<dt>Transaction Status Query Org API</dt>
								<dd>This enables the API operator to query for the status of transactions performed previously by the same operator via API. An operator can only query for their own transactions which they perfomed.</dd>
							</dl>
							<dl>
								<dt> Balance Query Org API</dt>
								<dd>This enables the API operator to query the balance of their Organization's MPesa accounts via API.</dd>
							</dl>

							<p>Note, the Org's Business Admin requires the <strong>Set Restricted Org API Password</strong> permission for them to set passwords for other users. Without that permission, you cannot set a password for other operators. This is assigned by the Support Team from MPesa after taking your paybill live.</p>
							<p>[This](files/org_operator_manual.pdf) document shows how to create an API operator, give them their respective permissions and assign them a password for use in API calls. The same user can also be used by C2B paybill owners to perform transaction query and balance query API calls.</p>
							<p>So, for you to be able to perform B2C API calls on the API, you need the below at a minimum:</p>
							<ul class="list-group">
								<li class="list-group-item"><strong>Initiator username</strong>: this is the API operator's username as set on the portal when the user was created. For Sandbox users, the username is already created and assigned to them and is available on the [test credentials](https://developer.safaricom.co.ke/test_credentials) page as <strong>Initiator Name (Shortcode 1)</strong>.
								</li>
								<li class="list-group-item"><strong>Initiator Password</strong>: this is the password assigned to the API operator after being created by the Business Administrator. For Sandbox users, this is available as <strong>Security Credential (Shortcode 1)</strong> on the test credentials page. <strong>Note:</strong> the password should be limited to specific special characters such as '#', '&', '%' and '$'. Other characters might cause issues, and the password may refuse to be accepted e.g. using a '(' or ')' character will be refused. Also, '@' is not a special character on MPesa, it's treated as a normal character.</li>
								<li class="list-group-item"><strong>Public Key Certificate</strong>: this is the certificate used to encrypt the Initiator's plaintext password for use in the API calls. This is provided for both [Sandbox](https://developer.safaricom.co.ke/sites/default/files/cert/cert_sandbox/cert.cer) and [Production](https://developer.safaricom.co.ke/sites/default/files/cert/cert_prod/cert.cer) clients on the portal. You need to learn how to encrypt using your API language to be able to make API calls, or find a way to encrypt beforehand and set the password as a static variable on the API call. The playground offers the capability to encrypt your test password for you on the right.</li>
							</ul>
							<p>These are the credentials which I mentioned are not tied to the Dev Portal Consumer credentials at all. If your API calls are accepted, but you get errors such as "Initiator Information is invalid", it means its the above MPesa credentials which have issues, not the API credentials. If the API credentials have any issue, you will definitely not be able to reach MPesa itself. But if you are able to reach MPesa (requests are being accepted), it means your API Consumer credentials are OK.
							</p>
							<p>Back to the API. Currently the B2C API allows the org to perform around 3 types of transactions: <strong>Salary Payments</strong>, <strong>Business Payments</strong> or <strong>Promotion payments</strong>. Salary payments are used by organizations paying their employees via MPesa, Business Payments are normal business transactions to customers e.g. bank transfers to mobile, Promotion payments are payments made by organization carrying out promotional services e.g. betting companies paying out winnings to clients. Business Payments are the most common, and can be used for any of the above mentioned scenarios, but they all carry their own tariffs and configurations, so be sure which you are using beforehand.</p>
							<p>The B2C request structure is as shown below:</p>
							<pre>
// URL
[POST] https://sandbox.safaricom.co.ke/mpesa/b2c/v1/paymentrequest

// HEADERS
Host: sandbox.safaricom.co.ke
Authorization: Bearer [access token]
Content-Type: application/json

// BODY
{
    "InitiatorName": "{{Credentials.SandboxInitiatorName1}}",
    "SecurityCredential": "{{B2C.SandboxSecurityCredential}}",
    "CommandID": "[CommandID]",
    "Amount": "1000",
    "PartyA": "{{Credentials.SandboxShortcode1}}",
    "PartyB": "{{Credentials.SandboxTestMSISDN}}",
    "Remarks": "",
    "QueueTimeOutURL": "{{Credentials.CallbackURL}}" ,
    "ResultURL": "{{Credentials.CallbackURL}}",
    "Occassion":  ""
}
</pre>
							<p>The parameters are explained below:</p>
							<dl>
								<dt>InitiatorName</dt>
								<dd>The username of the API operator as assigned on the MPesa Org Portal.</dd>
							</dl>
							<dl>
								<dt>SecurityCredential</dt>
								<dd>The password of the API operator <strong>encrypted</strong> using the public key certificate provided.</dd>
							</dl>
							<dl>
								<dt>CommandID</dt>
								<dd>This specifies the type of transaction being performed. There are three allowed values on the API: <strong>SalaryPayment</strong>, <strong>BusinessPayment</strong> or <strong>PromotionPayment</strong>.</dd>
							</dl>
							<dl>
								<dt>PartyA</dt>
								<dd>This is the identifier of the Debit party of the transaction, in this case the debit party being the Organization thus the identifier being the Shortcode of the organization.</dd>
							</dl>
							<dl>
								<dt>PartyB</dt>
								<dd>This is the identifier of the Credit party of the transaction, here the credit party being the customer thus the identifier being the customer's phone number (beginning with 07XX or 2547XX)</dd>
							</dl>
							<dl>
								<dt>Remarks, Occassion</dt>
								<dd>A very short description of the transaction from your end. Occassion can be left blank, Remarks cannot be blank.</dd>
							</dl>
							<dl>
								<dt>ResultURL</dt>
								<dd>This is the callback URL where the results of the transaction will be sent. Please visit the [API Apps](#api_apps) section to understand how this is used if you are not familiar with it.</dd>
							</dl>
							<dl>
								<dt>QueueTimeOutURL</dt>
								<dd>This is the callback URL used to send an error callback when the transaction was not able to be processed by MPesa within a stipulated time period.</dd>
							</dl>
							<p>Once sent, you shall expect a success acknowledgement response from the API informing you that your request was accepted. The response format is as below:</p>
<pre>
{
  "ConversationID": "AG_20180326_00005ca7f7c21d608166",
  "OriginatorConversationID": "12363-1328499-6",
  "ResponseCode": "0",
  "ResponseDescription": "Accept the service request successfully."
}
</pre>
							<p>Note the value of <strong>ResponseCode</strong>. Any value other than 0 (zero) means the request was unsuccessful, and the error is defined in the <strong>ResponseDescription</strong> element. So you need to fix that first. A value of 0 means the request was accepted by the API.</p>
							<p>After MPesa completes processing the transaction, it sends back the callback via the ResultURL you specified in the initial request. A callback from MPesa can either be a success callback or a failure callback. A sample of a successful transaction callback is as shown below:</p>
<pre>
{
	"Result":
	{
		"ResultType":0,
		"ResultCode":0,
		"ResultDesc":"The service request has been accepted successfully.",
		"OriginatorConversationID":"14593-80515-2",
		"ConversationID":"AG_20170821_000049448b24712383de",
		"TransactionID":"LHL41AHJ6G",
		"ResultParameters":
		{
			"ResultParameter":
			[
				{
					"Key":"TransactionAmount",
					"Value":100
				},
				{
					"Key":"TransactionReceipt",
					"Value":"LHL41AHJ6G"
				},
				{
					"Key":"B2CRecipientIsRegisteredCustomer",
					"Value":"Y"
				},
				{
					"Key":"B2CChargesPaidAccountAvailableFunds",
					"Value":0.00
				},
				{
					"Key":"ReceiverPartyPublicName",
					"Value":"254708374149 - John Doe"
				},
				{
					"Key":"TransactionCompletedDateTime",
					"Value":"21.08.2017 12:01:59"
				},
				{
					"Key":"B2CUtilityAccountAvailableFunds",
					"Value":98834.00
				},
				{
					"Key":"B2CWorkingAccountAvailableFunds",
					"Value":100000.00
				}
			]
		},
		"ReferenceData":
		{
			"ReferenceItem":
			{
				"Key":"QueueTimeoutURL",
				"Value":"https:\/\/internalsandbox.safaricom.co.ke\/mpesa\/b2cresults\/v1\/submit"
			}
		}
	}
}
</pre>
							<p>Of major importance are:</p>
							<dl>
								<dt>ResultCode</dt>
								<dd>This is a simple outcome of the transaction. A 0 (zero) standing for successful transaction, and any other code standing for an unsuccessful transaction. If not successful, the description of the error that was raised is in the <strong>ResultDesc</strong> element.</dd>
							</dl>
							<dl>
								<dt>ResultDesc</dt>
								<dd>This is a one line description of the result code received above. It explains, if unsuccessful, why a transaction failed.</dd>
							</dl>
							<dl>
								<dt>TransactionID, TransactionReceipt</dt>
								<dd>This is MPesa's unique identifier of the transaction. As long as the request was accepted by MPesa, you can expect a transaction ID in your callback, whether the transaction was successful or not. Note: TransactionReceipt and TransactionID both represent the same transaction, thus are the same.</dd>
							</dl>
							<dl>
								<dt>TransactionAmount</dt>
								<dd>This is the amount that was transferred to the customer in this transaction.</dd>
							</dl>
							
							<dl>
								<dt>ReceiverPartyPublicName</dt>
								<dd>This is a concatenation of the receiver's phone number + First name + Last name as registered on MPesa</dd>
							</dl>
							<dl>
								<dt>B2CUtilityAccountAvailableFunds, B2CWorkingAccountAvailableFunds</dt>
								<dd>Simply the current usable balances of the Organization's Utility Account and Working account respecively as at the time of the current transaction.</dd>
							</dl>
							<p>For an unsuccessful transaction, the response format will be:</p>
<pre>
{
	"Result":
	{
		"ResultType":0,
		"ResultCode":17,
		"ResultDesc":"System internal error.",
		"OriginatorConversationID":"16940-3815719-3",
		"ConversationID":"AG_20171228_00004fd3a482e7f73145",
		"TransactionID":"LLS81H3W6E",
		"ReferenceData":
		{
			"ReferenceItem":
			{
				"Key":"QueueTimeoutURL","Value":"https:\/\/internalsandbox.safaricom.co.ke\/mpesa\/b2cresults\/v1\/submit"
			}
		}
	}
}
</pre>
							<p>Note the value of ResultCode, which gives an instant view of the status of the transaction. The cause of the error is then described in the ResultDesc element. For this specific error (System internal error), get in touch with the support team, something's wrong with the backend. Also note the transaction also has an MPesa Transaction ID, which identifies your transaction in the system.</p>
							<p>That is pretty much B2C in a nutshell.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-info tutorial_code" id="b2c_code" data-affix_target="b2c_text">
						<div class="panel-heading">B2C API</div>
						<div class="panel-body">
							<ul class="nav nav-tabs">
								<li class="active">
									<a href="#b2c_code_test" data-toggle="tab">Try It</a>
								</li>
								<li>
									<a href="#b2c_password_encrypt" data-toggle="tab">Encrypt Test Password</a>
								</li>
								<li>
									<a href="#b2c_auth_refresh" data-toggle="tab">Refresh Token</a>
								</li>
							</ul>
							<div class="tab-content" style="background-color: #fff; padding: 10px">
								<div id="b2c_code_test" class="panel panel-default tab-pane active">
									<div class="panel-body pre-scrollable" style="max-width: 400px; margin:auto">
										<form id="b2c_code_request">
											<div class="form-group">
												<label>Access Token</label>
												<input type="text" class="form-control" id="b2c_code_access_token" placeholder="Access Token" value = "Bearer [access token]">
											</div>
											
											<div class="form-group">
												<label>Initiator Name (API Operator's username)</label>
												<input type="text" class="form-control" id="b2c_code_initiator_username" placeholder="Initiator Username" value = "{{Credentials.SandboxInitiatorName1}}">
											</div>
											
											<div class="form-group">
												<label>Security Credential (Initiator's Encrypted Password)</label>
												<textarea id="b2c_code_password" class="form-control" rows="5" >{{B2C.SandboxSecurityCredential}}</textarea>
												
											</div>
											
											<div class="form-group">
												<label>Command ID</label>
												<select class="form-control" id="b2c_code_commandid">
													<option value="BusinessPayment">BusinessPayment</option>
													<option value="PromotionPayment">PromotionPayment</option>
													<option value="SalaryPayment">SalaryPayment</option>
												</select>
											</div>
											
											<div class="form-group">
												<label>Amount</label>
												<input type="text" class="form-control" id="b2c_code_amount" placeholder="Amount" value = "1000">
											</div>

											<div class="form-group">
												<label>Party A (Debit Party)</label>
												<input type="text" class="form-control" id="b2c_code_shortcode" placeholder="Party A" value = "{{Credentials.SandboxShortcode1}}">
											</div>
											
											<div class="form-group">
												<label>Party B (Credit Party)</label>
												<input type="text" class="form-control" id="b2c_code_msisdn" placeholder="Party B" value = "{{Credentials.SandboxTestMSISDN}}">
											</div>
											
											<div class="form-group">
												<label>Remarks</label>
												<input type="text" class="form-control" id="b2c_code_remarks" placeholder="Remarks" value = "please">
											</div>
											
											<div class="form-group">
												<label>Queue TimeOut URL</label>
												<input type="text" class="form-control" id="b2c_code_queue_timeout_url" placeholder="Queue TimeOut URL" value = "{{Credentials.CallbackURL}}">
											</div>
											
											<div class="form-group">
												<label>Result URL</label>
												<input type="text" class="form-control" id="b2c_code_result_url" placeholder="Result URL" value = "{{Credentials.CallbackURL}}">
											</div>
											
											<div class="form-group">
												<label>Occassion</label>
												<input type="text" class="form-control" id="b2c_code_occassion" placeholder="Occassion" value = "work">
											</div>
											
											<button type="submit" class="btn btn-primary request_submit" id="b2c_code_submit">Send Request</button>
										</form>
										<div class="panel panel-default">
											<div class="panel-heading">Request JSON</div>
											<div class="panel-body" id="b2c_code_body" style="max-width: 500px; word-wrap:break-word; display:inline-block;">
											</div>
										</div>
										
										<div class="panel panel-success" id="b2c_code_response_panel">
											<div class="panel-heading">Response</div>
											<div class="panel-body pre-scrollable" id="b2c_code_response">
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											</div>
										</div>
									
									</div>
								</div>
								<div id="b2c_password_encrypt" class="panel panel-default tab-pane">
									<div class="panel-body">
										<form id="b2c_password_encrypt_request">
											<div class="form-group">
												<label>Plaintext Password</label>
												<input type="text" class="form-control" id="b2c_password_encrypt_plain_password" placeholder="Plain Password" value = "{{Credentials.SandboxSecurityCredential}}">
											</div>
											<button type="submit" class="btn btn-primary request_submit" id="b2c_password_encrypt_submit">Encrypt</button>
										</form>
										<div class="panel panel-default">
											<div class="panel-heading">Encrypted Password</div>
											<div class="panel-body">
												<textarea id="b2c_password_encrypt_response" class="form-control" rows="10" cols="50" style="max-width: 500px;"></textarea>
											</div>  
											<div class="panel-footer"><button class="btn btn-success request_submit" id="b2c_password_encrypt_copy">Copy to Clipboard</button></div>
										</div>
									</div>
								</div>
								<div id="b2c_auth_refresh" class="panel panel-default tab-pane">
									<div class="panel-body pre-scrollable" style="max-width: 400px; margin:auto">
										<form id="b2c_auth_refresh_request">
											<button type="submit" class="btn btn-primary request_submit" id="b2c_auth_refresh_submit">Refresh</button>
										</form>
										<div class="panel panel-default">
											<div class="panel-heading">Response</div>
											<div class="panel-body" id="b2c_auth_refresh_response">
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											</div>
										</div>
									
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row" id="b2b_tutorial" ng-controller="B2BController">
				<div class="col-md-6 col-md-offset-2">
					<div class="panel panel-primary tutorial_text" id="b2b_text">
						<div class="panel-heading">
							<h3 class="panel-title">B2B API</h3>
						</div>
						<div class="panel-body">
							<p>This API enables a Business or Organization to perform transactions between each other. The transaction flow is the same as the B2C API transaction flow, but this time the Credit Party is another Business/Company/Organization. It requires the same credentials and information as the B2C API.</p>
							<p>Currently the B2B API allows an organization to perform 5 types of transfers:</p>
							<ul class="list-group">
								<li class="list-group-item"><strong>Business Pay Bill</strong>: This is a transfer of funds from one Organization's Working Account to another Organization's Utility Account.</li>
								<li class="list-group-item"><strong>Business Buy Goods</strong>: A transfer of funds from one Organization's Working Account to another Organization's Merchant Account.</li>
								<li class="list-group-item"><strong>Disburse Funds To Business</strong>: A transfer of funds from one Organization's Utility Account to another Organization's Working Account.</li>
								<li class="list-group-item"><strong>Business To Business Transfer</strong>: A transfer of funds from one Organization's Working Account to another Organization's Working Account.</li>
								<li class="list-group-item"><strong>Merchant To Merchant Transfer</strong>: A transfer of funds from one Organization's Merchant Account to another Organization's Merchant Account.</li>
							</ul>
							
							<p>For any two shortcodes to perform B2B transactions between themselves, they both need to have the B2B product assigned to them, otherwise the transaction request will fail. The B2B request structure is as shown below:</p>
							<pre>
// URL
[POST] https://sandbox.safaricom.co.ke/mpesa/b2b/v1/paymentrequest

// HEADERS
Host: sandbox.safaricom.co.ke
Authorization: Bearer [access token]
Content-Type: application/json

// BODY
{
	"Initiator": "{{Credentials.SandboxInitiatorName1}}",
	"SecurityCredential": "[encrypted password]",
	"CommandID": "[CommandID]",
	"SenderIdentifierType": "4",
	"RecieverIdentifierType": "4",
	"Amount": "100000",
	"PartyA": "{{Credentials.SandboxShortcode1}}",
	"PartyB": "{{Credentials.SandboxTestMSISDN}}",
	"AccountReference": "",
	"Remarks": "",
	"QueueTimeOutURL": "{{Credentials.CallbackURL}}" ,
	"ResultURL": "{{Credentials.CallbackURL}}"
}
</pre>
							<p>These are explained below:</p>
							<dl>
								<dt>Initiator</dt>
								<dd>The username of the API operator as assigned on the MPesa Org Portal.</dd>
							</dl>
							<dl>
								<dt>SecurityCredential</dt>
								<dd>The password of the API operator <strong>encrypted</strong> using the public key certificate provided.</dd>
							</dl>
							<dl>
								<dt>CommandID</dt>
								<dd>This specifies the type of transaction being performed. There are five allowed values on the API: <strong>BusinessPayBill</strong>, <strong>BusinessBuyGoods</strong>, <strong>DisburseFundsToBusiness</strong>, <strong>BusinessToBusinessTransfer</strong> or <strong>MerchantToMerchantTransfer</strong>.</dd>
							</dl>
							<dl>
								<dt>SenderIdentifierType, RecieverIdentifierType</dt>
								<dd>This is the type of Identity performing the transaction. An organization's Identity type for a shortcode (identity being used in the request) is 4, thus for both the above parameters, the value will always be 4 for B2B transfers (NB: you cannot use Till numbers in B2B transfers).</dd>
							</dl>
							<dl>
								<dt>PartyA</dt>
								<dd>This is the identifier of the Debit party of the transaction, in this case the debit party being the Organization and the identifier being the Shortcode of the organization.</dd>
							</dl>
							<dl>
								<dt>PartyB</dt>
								<dd>This is the identifier of the Credit party of the transaction, here the credit party being another organization and the identifier being the other org's shortcode.</dd>
							</dl>
							<dl>
								<dt>AccountReference</dt>
								<dd>This is a custom value that may represent an account or unique value item being paid for. It is only required for the BusinessPayBill Command ID.</dd>
							</dl>
							<dl>
								<dt>Remarks</dt>
								<dd>A very short description of the transaction from your end, or just a minimum of 2 characters.</dd>
							</dl>
							<dl>
								<dt>ResultURL</dt>
								<dd>This is the callback URL where the results of the transaction will be sent. Please visit the [API Apps](#api_apps) section to understand how this is used if you are not familiar with it.</dd>
							</dl>
							<dl>
								<dt>QueueTimeOutURL</dt>
								<dd>This is the callback URL used to send an error callback when the transaction was not able to be processed by MPesa within a stipulated time period.</dd>
							</dl>
							<p>Once sent, you shall expect a success acknowledgement response from the API informing you that your request was accepted. The response format is as below:</p>
<pre>
{
    "ConversationID": "AG_20180326_00005ca7f7c21d608166",
    "OriginatorConversationID": "12363-1328499-6",
    "ResponseCode": "0",
    "ResponseDescription": "Accept the service request successfully."
}
</pre>
							<p>From here, process is the same as the B2C flow. A sample success B2B callback is shown below:</p>
<pre>
{
    "Result":
    {
        "ResultType":0,
        "ResultCode":0,
        "ResultDesc":"The service request has been accepted successfully.",
        "OriginatorConversationID":"8551-61996-3",
        "ConversationID":"AG_20170727_00006baee344f4ce0796",
        "TransactionID":"LGR519G2QV",
        "ResultParameters":
        {
            "ResultParameter":
            [
                {
                    "Key":"InitiatorAccountCurrentBalance",
                    "Value":"{ Amount={BasicAmount=46713.00, MinimumAmount=4671300, CurrencyCode=KES
                    }}"
                },
                {
                    "Key":"DebitAccountCurrentBalance",
                    "Value":"{Amount={BasicAmount=46713.00, MinimumAmount=4671300, CurrencyCode=KES}}"
                },
                {
                    "Key":"Amount",
                    "Value":10
                },
                {
                    "Key":"DebitPartyAffectedAccountBalance",
                    "Value":"Working Account|KES|46713.00|46713.00|0.00|0.00"
                },
                {
                    "Key":"TransCompletedTime",
                    "Value":20170727102524
                },
                {
                    "Key":"DebitPartyCharges",
                    "Value":"Business Pay Bill Charge|KES|77.00"
                },
                {
                    "Key":"ReceiverPartyPublicName",
                    "Value":"603094 - Safaricom3117"
                },
                {
                    "Key":"Currency",
                    "Value":"KES"
                }
            ]
        },
        "ReferenceData":
        {
            "ReferenceItem":
            [
                {
                    "Key":"BillReferenceNumber",
                    "Value":"aaa"
                },
                {
                    "Key":"QueueTimeoutURL",
                    "Value":"https://internalsandbox.safaricom.co.ke/mpesa/b2bresults/v1/submit"
                }
            ]
        }
    }
}
</pre>
							<p>Some new elements descriptions:</p>
							<dl>
								<dt>ReceiverPartyPublicName</dt>
								<dd>The Shortcode + Registered Name of the organization being credited in the transaction.</dd>
							</dl>
							<dl>
								<dt>DebitPartyCharges</dt>
								<dd>How much the debit party is being charged for the transfer.</dd>
							</dl>
							<p>For an unsuccessful transaction, the response format will be the same as the B2C callback, and follows the same rules.</p>
							<p>That is pretty much B2B in a nutshell.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-info tutorial_code" id="b2b_code" data-affix_target="b2b_text">
						<div class="panel-heading">B2B API</div>
						<div class="panel-body">
							<ul class="nav nav-tabs">
								<li class="active">
									<a href="#b2b_code_test" data-toggle="tab">Try It</a>
								</li>
								<li>
									<a href="#b2b_password_encrypt" data-toggle="tab">Encrypt Test Password</a>
								</li>
								<li>
									<a href="#b2b_auth_refresh" data-toggle="tab">Refresh Token</a>
								</li>
							</ul>
							<div class="tab-content" style="background-color: #fff; padding: 10px">
								<div id="b2b_code_test" class="panel panel-default tab-pane active">
									<div class="panel-body pre-scrollable" style="max-width: 400px; margin:auto">
										<form id="b2b_code_request">
											<div class="form-group">
												<label>Access Token</label>
												<input type="text" class="form-control" id="b2b_code_access_token" placeholder="Access Token" value = "Bearer [access token]">
											</div>
											
											<div class="form-group">
												<label>Initiator Name (API Operator's username)</label>
												<input type="text" class="form-control" id="b2b_code_initiator_username" placeholder="Initiator Username" value = "{{Credentials.SandboxInitiatorName1}}">
											</div>
											
											<div class="form-group">
												<label>Security Credential (Initiator's Encrypted Password)</label>
												<textarea id="b2b_code_password" rows="5" class="form-control" >{{B2B.SandboxSecurityCredential}}</textarea>
												
											</div>
											
											<div class="form-group">
												<label>Command ID</label>
												<select class="form-control" id="b2b_code_commandid">
													<option value="BusinessPayBill">BusinessPayBill</option>
													<option value="BusinessBuyGoods">BusinessBuyGoods</option>
													<option value="DisburseFundsToBusiness">DisburseFundsToBusiness</option>
													<option value="BusinessToBusinessTransfer">BusinessToBusinessTransfer</option>
													<option value="MerchantToMerchantTransfer">MerchantToMerchantTransfer</option>
												</select>
											</div>
											
											<div class="form-group">
												<label>Amount</label>
												<input type="text" class="form-control" id="b2b_code_amount" placeholder="Amount" value = "1000">
											</div>

											<div class="form-group">
												<label>Party A (Debit Party)</label>
												<input type="text" class="form-control" id="b2b_code_shortcode1" placeholder="Party A" value = "{{Credentials.SandboxShortcode1}}">
											</div>
											
											<div class="form-group">
												<label>Party B (Credit Party)</label>
												<input type="text" class="form-control" id="b2b_code_shortcode2" placeholder="Party B" value = "{{Credentials.SandboxShortcode2}}">
											</div>
											
											<div class="form-group">
												<label>Account Reference</label>
												<input type="text" class="form-control" id="b2b_code_acc_ref" placeholder="Account Reference" value = "ref">
											</div>
											
											<div class="form-group">
												<label>Remarks</label>
												<input type="text" class="form-control" id="b2b_code_remarks" placeholder="Remarks" value = "please work">
											</div>
											
											<div class="form-group">
												<label>Queue TimeOut URL</label>
												<input type="text" class="form-control" id="b2b_code_queue_timeout_url" placeholder="Queue TimeOut URL" value = "{{Credentials.CallbackURL}}">
											</div>
											
											<div class="form-group">
												<label>Result URL</label>
												<input type="text" class="form-control" id="b2b_code_result_url" placeholder="Result URL" value = "{{Credentials.CallbackURL}}">
											</div>
											
											<button type="submit" class="btn btn-primary request_submit" id="b2b_code_submit">Send Request</button>
										</form>
										<div class="panel panel-default">
											<div class="panel-heading">Request JSON</div>
											<div class="panel-body" id="b2b_code_body" style="max-width: 500px; word-wrap:break-word; display:inline-block;">
											</div>
										</div>
										
										<div class="panel panel-success" id="b2b_code_response_panel">
											<div class="panel-heading">Response</div>
											<div class="panel-body pre-scrollable" id="b2b_code_response">
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											</div>
										</div>
									
									</div>
								</div>
								<div id="b2b_password_encrypt" class="panel panel-default tab-pane">
									<div class="panel-body pre-scrollable" style="max-width: 400px; margin:auto">
										<form id="b2b_password_encrypt_request">
											<div class="form-group">
												<label>Plaintext Password</label>
												<input type="text" class="form-control" id="b2b_password_encrypt_plain_password" placeholder="Plain Password" value = "{{Credentials.SandboxSecurityCredential}}">
											</div>
											<button type="submit" class="btn btn-primary request_submit" id="b2b_password_encrypt_submit">Encrypt</button>
										</form>
										<div class="panel panel-default">
											<div class="panel-heading">Encrypted Password</div>
											<div class="panel-body">
												<textarea id="b2b_password_encrypt_response" class="form-control" rows="10" cols="50" style="max-width: 500px;"></textarea>
											</div>  
											<div class="panel-footer"><button class="btn btn-success request_submit" id="b2b_password_encrypt_copy">Copy to Clipboard</button></div>
										</div>
									</div>
								</div>
								<div id="b2b_auth_refresh" class="panel panel-default tab-pane">
									<div class="panel-body">
										<form id="b2b_auth_refresh_request">
											<button type="submit" class="btn btn-primary request_submit" id="b2b_auth_refresh_submit">Refresh</button>
										</form>
										<div class="panel panel-default">
											<div class="panel-heading">Response</div>
											<div class="panel-body" id="b2b_auth_refresh_response">
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row" id="lnm_tutorial" ng-controller="LNMController">
				<div class="col-md-6 col-md-offset-2">
					<div class="panel panel-primary tutorial_text" id="lnm_text">
						<div class="panel-heading">
							<h3 class="panel-title">Lipa Na M-Pesa Online API</h3>
						</div>
						<div class="panel-body">
							<p>
							The Lipa na MPesa (LNM) API is an API designed to utilize the new feature introduced by Safaricom known as STK Push. This feature allows the transaction initiation to be moved from the paying customer's side to the payee Organization's side. This eliminates the hustle of having to remember business paybill numbers and account numbers for customers, and allows them to simply confirm the current transaction by entering their MPesa PIN on their mobile phone. This is done via the STK Pop-up which appears on a customer's phone that prompts them to enter their PIN. For the business, this API enables them to preset all the correct info in the payment request and greatly reduce chances of wrong payments being performed to their systems. It is a C2B transaction, but with the initiator being the organization instead of the customer. Here, the organization has the option of presetting all required variables in the request before sending the request, thus this API has no Validation-Confirmation process of it's own unlike the previous C2B API (but is still affected by any previous C2B integrations done on the shortcode being used in the request, especially Validation/Confirmation). It's process is explained below:</p>
							<ol>
								<li>The Business sets the data in the request and sends it</li>
								<li>The API receives the request and validates it internally first, then sends you an acknowledgement response.</li>
								<li>The API then sends an STK Push request to the target customer's mobile phone. The customer's phone has to be online and unlocked to receive the request.</li>
								<li>The customer confirms the payment amount via the message displayed on-screen, then either enters the PIN or cancels the request accordingly.</li>
								<li>The API receives the customer's response. If the response is a negative, it cancels the transaction and sends a corresponding callback to the initiating 3rd party via the predefined callback URL in the initial request, with the info on why the transaction was cancelled. The possible negative responses could be due to the following scenarios:
									<ul>
										<li>An invalid PIN entered by the customer</li>
										<li>Timeout due to customer not entering the PIN within a given time period (usually 1 min 30 secs)</li>
										<li>The customer's SIM card not having the STK applet on it</li>
										<li>A literal request cancellation by the user on their phone</li>
										<li>Another STK transaction is already underway on the customer's phone (no more than one request can be processed at the same time on the same phone)</li>
									</ul>
								</li>
								<li>If the PIN is correct, it means the customer accepted the request. The API forwards the transaction to MPesa.</li>
								<li>MPesa automatically processes the request, then sends the response back to the API system which then forwards it to you via the callback URL specified in your initial request. Here, the callback can also either be a success or failure, just like a normal C2B transaction.</li>
								<li>There are no repeat calls for failed callbacks, thus if the API is unable to send the callback to you, you have the Transaction Status Query API to confirm the status of the request, or also confirm via the MPesa Org. portal.</li>
							</ol>
							<p>For this API, you shall need your actual production line to test the API. Your line must have the STK applet installed (you can update by dialing <strong>*234*1*6#</strong> on your handset (as of the day of writing of this tutorial). If the update does not work,and your physical SIM card is more than 3 years old, consider replacing it), and you must be registered on MPesa. The funds utilized are automatically refunded at midnight. I suggest using values as low as 1 - 10 shillings to perform your transactions to lengthen the number of tries you make. Also beware, the API does not allow one to perform more than 5 consecutive STK requests without completing them. This is marked as phishing, and will cause your line to be blocked from making any more STK requests over 24 hours.</p>
							<p>The LNM request takes the format below:</p>
<pre>
// URL
[POST] https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest

// HEADERS
Host: sandbox.safaricom.co.ke
Authorization: Bearer [access token]
Content-Type: application/json

// BODY
{
	"BusinessShortCode": "{{Credentials.LNMShortcode}}",
	"Password": "{{LNM.EncodedPassword}}",
	"Timestamp": "{{LNM.Timestamp}}",
	"TransactionType": "[Transaction Type]",
	"Amount": "1000",
	"PartyA": "{{Credentials.SandboxTestMSISDN}}",
	"PartyB": "{{Credentials.LNMShortcode}}",
	"PhoneNumber": "{{Credentials.SandboxTestMSISDN}}",
	"CallBackURL": "{{Credentials.CallbackURL}}"
	"AccountReference": "account",
	"TransactionDesc": "test" ,
}
</pre>
							<p>Some definitions</p>
							<dl>
								<dt>BusinessShortCode</dt>
								<dd>This is the shortcode of the organization initiating the request and expecting the payment.</dd>
							</dl>
							<dl>
								<dt>Password</dt>
								<dd>This is the Base64-encoded value of the concatenation of the <strong>Shortcode + LNM Passkey + Timestamp</strong>, e.g. given the test values above, and using a timestamp of {{LNM.Timestamp}}, the encoded password will be <pre>{{LNM.EncodedPassword}}</pre> You can use [this site](http://www.timestampgenerator.com/tools/base64-decode/) to confirm your encoding.</dd>
							</dl>
							<dl>
								<dt>Timestamp</dt>
								<dd>This is the same Timestamp used in the encoding above, in the format <strong>YYYMMDDHHmmss</strong>.</dd>
							</dl>
							<dl>
								<dt>TransactionType</dt>
								<dd>The type of transaction being performed. These are the same values as the C2B command IDs (CustomerPayBillOnline and CustomerBuyGoodsOnline) and the same rules apply here. For now, only <strong>CustomerPayBillOnline</strong> is supported.</dd>
							</dl>
							<dl>
								<dt>Amount</dt>
								<dd>Self explanatory.</dd>
							</dl>
							<dl>
								<dt>PartyA</dt>
								<dd>The Debit party of the transaction, hereby the phone number of the customer.</dd>
							</dl>
							<dl>
								<dt>PartyB</dt>
								<dd>The credit  party of the transaction, hereby being the shortcode of the organization. This is the same value as the Business Shortcode</dd>
							</dl>
							<dl>
								<dt>PhoneNumber</dt>
								<dd>Same as PartyA.</dd>
							</dl>
							<dl>
								<dt>CallBackURL</dt>
								<dd>This is the endpoint where you want the results of the transaction delivered. Same rules for Register URL API callbacks apply</dd>
							</dl>
							<dl>
								<dt>AccountReference</dt>
								<dd>This is the value the customer would have put as the account number on their phone if they had performed the transaction via phone.</dd>
							</dl>
							<dl>
								<dt>TransactionDesc</dt>
								<dd>Short description of the transaction. Optional, but element must be present.</dd>
							</dl>
							<p>After sending a successful transaction, you can expect a response in the below format:</p>
							<pre>
{
    "MerchantRequestID": "25353-1377561-4",
    "CheckoutRequestID": "ws_CO_26032018185226297",
    "ResponseCode": "0",
    "ResponseDescription": "Success. Request accepted for processing",
    "CustomerMessage": "Success. Request accepted for processing"
}
</pre>
							<p>Note the <strong>ResponseCode</strong>. The value 0 (zero) means the request was accepted successfully. Any other value means there was an error validating your request. Confirm the error on the <strong>ResponseDescription</strong> and fix it. The CheckoutRequestID is your unique request ID and can be used later for the LNM Transaction Query API.</p>
						
							<p>After sending the callback, and assuming a customer has accepted your request and responded to it, a successful callback will have the structure below:</p>
<pre>
{
	"Body": 
	{
		"stkCallback": 
		{
			"MerchantRequestID": "21605-295434-4",
			"CheckoutRequestID": "ws_CO_04112017184930742",
			"ResultCode": 0,
			"ResultDesc": "The service request is processed successfully.",
			"CallbackMetadata": 
			{
				"Item": 
				[
					{
						"Name": "Amount",
						"Value": 1
					},
					{
						"Name": "MpesaReceiptNumber",
						"Value": "LK451H35OP"
					},
					{
						"Name": "Balance"
					},
					{
						"Name": "TransactionDate",
						"Value": 20171104184944
					},
					{
						"Name": "PhoneNumber",
						"Value": 254727894083
					}
				]
			}
		}
	}
}
</pre>
							<p>I believe all elements there are already known. I will shift your attention to the <strong>ResultCode</strong>,which shows the status of the request. The 0 (zero) means a success as usual, anything else will be an error whose description is defined in <strong>ResultDesc</strong>. The MPesa Receipt Number is your unique identifier of the transaction on MPesa, and can be used with the Sandbox Transaction Query API.
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-info tutorial_code" id="lnm_code" data-affix_target="lnm_text">
						<div class="panel-heading">LNM API</div>
						<div class="panel-body">
							<ul class="nav nav-tabs">
								<li class="active">
									<a href="#lnm_code_test" data-toggle="tab">Try It</a>
								</li>
								<li>
									<a href="#lnm_password_encode" data-toggle="tab">Encode Test Passkey</a>
								</li>
								<li>
									<a href="#lnm_auth_refresh" data-toggle="tab">Refresh LNM Token</a>
								</li>
							</ul>
							<div class="tab-content" style="background-color: #fff; padding: 10px">
								<div id="lnm_code_test" class="panel panel-default tab-pane active">
									<div class="panel-body pre-scrollable" style="max-width: 400px; margin:auto">
										<form id="lnm_code_request">
											<div class="form-group">
												<label>Access Token</label>
												<input type="text" class="form-control" id="lnm_code_access_token" placeholder="Access Token" value = "Bearer [access token]">
											</div>
											
											<div class="form-group">
												<label>Business ShortCode, Party B</label>
												<input type="text" class="form-control" id="lnm_code_shortcode" placeholder="Business ShortCode" value = "{{Credentials.LNMShortcode}}">
											</div>
											
											<div class="form-group">
												<label>Encoded Password</label>
												<textarea id="lnm_code_password" rows="3" class="form-control" >{{LNM.EncodedPassword}}</textarea>
											</div>
											
											<div class="form-group">
												<label>Timestamp</label>
												<input type="text" class="form-control" id="lnm_code_timestamp" placeholder="Timestamp" value="{{LNM.Timestamp}}">
											</div>
											
											<div class="form-group">
												<label>Transaction Type</label>
												<select class="form-control" id="lnm_code_transaction_type">
													<option value="CustomerPayBillOnline">CustomerPayBillOnline</option>
												</select>
											</div>
											
											<div class="form-group">
												<label>Amount</label>
												<input type="text" class="form-control" id="lnm_code_amount" placeholder="Amount" value = "1">
											</div>

											<div class="form-group">
												<label>Party A, Phone Number</label>
												<input type="text" class="form-control" id="lnm_code_msisdn" placeholder="Party A" value = "{{Credentials.SandboxTestMSISDN}}">
											</div>
											
											<div class="form-group">
												<label>Callback URL</label>
												<input type="text" class="form-control" id="lnm_code_callback_url" placeholder="Callback URL" value = "{{Credentials.CallbackURL}}">
											</div>
											
											<div class="form-group">
												<label>Account Reference</label>
												<input type="text" class="form-control" id="lnm_code_acc_ref" placeholder="Account Reference" value = "ref">
											</div>
											
											<div class="form-group">
												<label>Transaction Desc</label>
												<input type="text" class="form-control" id="lnm_code_trans_desc" placeholder="Transaction Desc" value = "please work">
											</div>
											
											<button type="submit" class="btn btn-primary request_submit" id="lnm_code_submit">Send Request</button>
										</form>
										<div class="panel panel-default">
											<div class="panel-heading">Request JSON</div>
											<div class="panel-body" id="lnm_code_body" style="max-width: 500px; word-wrap:break-word; display:inline-block;">
											</div>
										</div>
										
										<div class="panel panel-success" id="lnm_code_response_panel">
											<div class="panel-heading">Response</div>
											<div class="panel-body pre-scrollable" id="lnm_code_response">
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											</div>
										</div>
									
									</div>
								</div>
								<div id="lnm_password_encode" class="panel panel-default tab-pane">
									<div class="panel-body pre-scrollable" style="max-width: 400px; margin:auto">
										<form id="lnm_password_encrypt_request">
											<div class="form-group">
												<label>Shortcode</label>
												<input type="text" class="form-control" id="lnm_password_encrypt_shortcode" placeholder="Shortcode" value = "{{Credentials.LNMShortcode}}">
											</div>
											<div class="form-group">
												<label>Plaintext Passkey</label>
												<input type="text" class="form-control" id="lnm_password_encrypt_plain_passkey" placeholder="Plain Passkey" value = "{{Credentials.LNMPasskey}}">
											</div>
											<button type="submit" class="btn btn-primary request_submit" id="lnm_password_encrypt_submit">Encode</button>
										</form>
										<div class="panel panel-default">
											<div class="panel-body">
												<form>
													<div class="form-group">
														<label>Encoded Password</label>
														<textarea id="lnm_password_encrypt_result_passkey" class="form-control" rows="5" style="max-width: 500px;"></textarea>
													</div>
													<div class="form-group">
														<label>Timestamp</label>
														<input type="text" class="form-control" id="lnm_password_encrypt_result_timestamp" placeholder="Timestamp" />
													</div>
												</form>
												
											</div>
										</div>
									</div>
								</div>
								<div id="lnm_auth_refresh" class="panel panel-default tab-pane">
									<div class="panel-body pre-scrollable" style="max-width: 400px; margin:auto">
										<form id="lnm_auth_refresh_request">
											<button type="submit" class="btn btn-primary request_submit" id="lnm_auth_refresh_submit">Refresh</button>
										</form>
										<div class="panel panel-default">
											<div class="panel-heading">Response</div>
											<div class="panel-body" id="lnm_auth_refresh_response">
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											</div>
										</div>
									
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row" id="reversal_tutorial" ng-controller="ReversalController">
				<div class="col-md-6 col-md-offset-2">
					<div class="panel panel-primary tutorial_text" id="reversal_text">
						<div class="panel-heading">
							<h3 class="panel-title">Reversal API</h3>
						</div>
						<div class="panel-body">
							<p>According to the documentation, this API enables one to reverse a transaction done. But there are some limitations to this I believe you need to know:</p>
							<ul class="list-group">
								<li class="list-group-item">You will probably only be able to reverse a transaction where you are the credit party. When you are the debit party, you may not be able to initiate a reversal via API. This means it will be done via the Web portal, and may require manual authorization from the SP side. But if you are allowed to reverse a transaction via API, it may also need to be authorized from the SP side. This means you will only get the callback after the SP has reviewed and completed processing the transaction on their side, which can be a couple of hours. Otherwise you are good</li>
								<li class="list-group-item">Obviously the reversal is dependent on the funds being available in the originally credited account. If there are no funds in the originally credited account, the reversal fails.</li>
								<li class="list-group-item">Charges accrued during the transaction will most probably <strong>not</strong> be reversed.</li>
								<li class="list-group-item">You cannot reverse a reversal transaction.</li>
								<li class="list-group-item">Not a limitation but a requirement: an initiator needs the <strong>Org Reversals Initiator</strong> role to be able to perform reversals via API.</li>
							</ul>
							<p>The reversal request format is as below:</p>
<pre>
// URL
[POST] https://sandbox.safaricom.co.ke/mpesa/reversal/v1/request

// HEADERS
Host: sandbox.safaricom.co.ke
Authorization: Bearer [access token]
Content-Type: application/json

// BODY
{
	"Initiator":"{{Credentials.SandboxInitiatorName1}}",
	"SecurityCredential":"[encrypted password]",
	"CommandID":"TransactionReversal",
	"TransactionID":"[original trans_id]",
	"Amount":"[trans amount]",
	"ReceiverParty":"{{Credentials.SandboxShortcode1}}",
	"RecieverIdentifierType":"4",
	"ResultURL":"{{Credentials.CallbackURL}}",
	"QueueTimeOutURL":"{{Credentials.CallbackURL}}",
	"Remarks":"please",
	"Occasion":"work"
}
</pre>
							<p>Important parameters:</p>
							<dl>
								<dt>TransactionID</dt>
								<dd>This is the MPesa Transaction ID of the transaction which you wish to reverse.</dd>
							</dl>
							<dl>
								<dt>Amount</dt>
								<dd>The amount transacted in that transaction to be reversed, down to the cent.</dd>
							</dl>
							<dl>
								<dt>ReceiverParty</dt>
								<dd>Your Org's shortcode here.</dd>
							</dl>
							<p>A successful callback will be as shown below:</p>
<pre>
{
	"Result":
	{
		"ResultType":0,
		"ResultCode":0,
		"ResultDesc":"The service request has been accepted successfully.",
		"OriginatorConversationID":"10819-695089-1",
		"ConversationID":"AG_20170727_00004efadacd98a01d15",
		"TransactionID":"LGR019G3J2",
		"ReferenceData":
		{
			"ReferenceItem":
			{
				"Key":"QueueTimeoutURL",
				"Value":"https://internalsandbox.safaricom.co.ke/mpesa/reversalresults/v1/submit"
			}
		}
	}
}
</pre>
							<p>Note the TransactionID. This is the transaction ID of the reversal request itself, not the original transaction which was being reversed. The reversal request itself gets its own transaction ID.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="panel panel-info tutorial_code" id="reversal_code" data-affix_target="reversal_text">
						<div class="panel-heading">Reversal API</div>
						<div class="panel-body">
							<ul class="nav nav-tabs">
								<li class="active">
									<a href="#reversal_code_test" data-toggle="tab">Try It</a>
								</li>
								<li>
									<a href="#reversal_password_encrypt" data-toggle="tab">Encrypt Test Password</a>
								</li>
								<li>
									<a href="#reversal_auth_refresh" data-toggle="tab">Refresh Token</a>
								</li>
							</ul>
							<div class="tab-content" style="background-color: #fff; padding: 10px;">
								<div id="reversal_code_test" class="panel panel-default tab-pane active">
									<div class="panel-body pre-scrollable" style="max-width: 400px; margin:auto">
										<form id="reversal_code_request">
											<div class="form-group">
												<label>Access Token</label>
												<input type="text" class="form-control" id="reversal_code_access_token" placeholder="Access Token" value = "Bearer [access token]">
											</div>
											
											<div class="form-group">
												<label>Initiator Name (API Operator's username)</label>
												<input type="text" class="form-control" id="reversal_code_initiator_username" placeholder="Initiator Username" value = "{{Credentials.SandboxInitiatorName1}}">
											</div>
											
											<div class="form-group">
												<label>Security Credential (Initiator's Encrypted Password)</label>
												<textarea id="reversal_code_password" rows="5" class="form-control" >{{Reversal.SandboxSecurityCredential}}</textarea>
											</div>
											
											<div class="form-group">
												<label>Transaction ID</label>
												<input type="text" class="form-control" id="reversal_code_trans_id" placeholder="Transaction ID">
											</div>
											
											<div class="form-group">
												<label>Amount</label>
												<input type="text" class="form-control" id="reversal_code_amount" placeholder="Amount">
											</div>

											<div class="form-group">
												<label>Receiver Party</label>
												<input type="text" class="form-control" id="reversal_code_shortcode1" placeholder="Receiver Party" value = "{{Credentials.SandboxShortcode1}}">
											</div>
											
											<div class="form-group">
												<label>Queue TimeOut URL</label>
												<input type="text" class="form-control" id="reversal_code_queue_timeout_url" placeholder="Queue TimeOut URL" value = "{{Credentials.CallbackURL}}">
											</div>
											
											<div class="form-group">
												<label>Result URL</label>
												<input type="text" class="form-control" id="reversal_code_result_url" placeholder="Result URL" value = "{{Credentials.CallbackURL}}">
											</div>
											
											<div class="form-group">
												<label>Remarks</label>
												<input type="text" class="form-control" id="reversal_code_remarks" placeholder="Remarks" value = "please">
											</div>
											
											
											<div class="form-group">
												<label>Occassion</label>
												<input type="text" class="form-control" id="reversal_code_occassion" placeholder="Occassion" value = "work">
											</div>
											
											<button type="submit" class="btn btn-primary request_submit" id="reversal_code_submit">Send Request</button>
										</form>
										<div class="panel panel-default">
											<div class="panel-heading">Request JSON</div>
											<div class="panel-body" id="reversal_code_body" style="max-width: 500px; word-wrap:break-word; display:inline-block;">
											</div>
										</div>
										
										<div class="panel panel-success" id="reversal_code_response_panel">
											<div class="panel-heading">Response</div>
											<div class="panel-body pre-scrollable" id="reversal_code_response">
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											</div>
										</div>
									
									</div>
								</div>
								<div id="reversal_password_encrypt" class="panel panel-default tab-pane">
									<div class="panel-body pre-scrollable" style="max-width: 400px; margin:auto">
										<form id="reversal_password_encrypt_request">
											<div class="form-group">
												<label>Plaintext Password</label>
												<input type="text" class="form-control" id="reversal_password_encrypt_plain_password" placeholder="Plain Password" value = "{{Credentials.SandboxSecurityCredential}}">
											</div>
											<button type="submit" class="btn btn-primary request_submit" id="reversal_password_encrypt_submit">Encrypt</button>
										</form>
										<div class="panel panel-default">
											<div class="panel-heading">Encrypted Password</div>
											<div class="panel-body">
												<textarea id="reversal_password_encrypt_response" class="form-control" rows="10" cols="50" style="max-width: 500px;"></textarea>
											</div>  
											<div class="panel-footer">
												<button class="btn btn-success request_submit" id="reversal_password_encrypt_copy">Copy to Clipboard</button>
											</div>
										</div>
									</div>
								</div>
								<div id="reversal_auth_refresh" class="panel panel-default tab-pane">
									<div class="panel-body">
										<form id="reversal_auth_refresh_request">
											<button type="submit" class="btn btn-primary request_submit" id="reversal_auth_refresh_submit">Refresh</button>
										</form>
										<div class="panel panel-default">
											<div class="panel-heading">Response</div>
											<div class="panel-body" id="reversal_auth_refresh_response">
											&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			
			<!--<div class="row" id="trans_status_tutorial" ng-controller="TransactionStatusController">
				<div class="col-md-6 col-md-offset-2">
					<div class="panel panel-primary tutorial_text" id="trans_status_text">
						<div class="panel-heading">
							<h3 class="panel-title">Transaction Status API</h3>
						</div>
						<div class="panel-body">
							Coming soon...
						</div>
					</div>
				</div>
			</div>-->
			
			<div class="row" id="go_live_tutorial">
				<div class="col-md-10 col-md-offset-2">
					<div class="panel panel-primary tutorial_text" id="go_live_text">
						<div class="panel-heading">
							<h3 class="panel-title">Go Live</h3>
						</div>
						<div class="panel-body">
							<p>This is one process which has had several people scratching their heads on the portal. It is the process which one uses to enable their application to carry out requests on the live API and begin processing client payments. For this process, you require at least the following two items already existing:
							</p>
							<dl>
								<dt>Paybill Number</dt>
								<dd>This is the shortcode which you received after you registered to use MPesa services.</dd>
							</dl>
							<dl>
								<dt>Business Administrator/Business Manager</dt>
								<dd>These are admin users on your MPesa Organization portal who have the roles of either the Business Administrator or the Business Manager assigned to them. To confirm who this is, you can try to follow the steps below on the Mpesa Org Portal: 
									<ul class="list-group">
										<li class="list-group-item">- Log into the Org portal using the shortcode which you shall use in the Go Live process using an admin user.</li>
										<li class="list-group-item">- Check if you have the <strong>Browse Organization</strong> menu at the top of the screen. If not, you are not an admin, log out. If you have it, click on it.
											<p class="thumbnail">
												<img src="images/browse_org_screenshot.png">
												<div class="caption">
													<p><strong>Browse Org Menu Item</strong></p>
												</div>
											</p>
										</li>
										<li class="list-group-item">- Click on the <strong>Operators</strong> sub-menu on the bar that appears on the left of the screen
											<p class="thumbnail">
												<img src="images/operators_menu.png">
												<div class="caption">
													<p><strong>Operators Menu Item</strong></p>
												</div>
											</p>
										</li>
										<li class="list-group-item">- A list will appear showing all the users on your portal, and their roles. From this list, check on the <strong>Role</strong> column and see if anyone has the <strong>Business Administrator/Manager</strong> role on them. You can also click on the Operation icon at their far right on the list to see their profile and the complete list of roles assignable to them. That user with the Business Administrator/Manager role is the required one for the Go Live process.
											<p class="thumbnail">
												<img src="images/roles_list.png">
												<div class="caption">
													<p><strong>Roles List</strong></p>
												</div> 
											</p>
										</li>
										<li class="list-group-item">- Open the Business Administrator/Manager user's details by clicking the Operation icon at the far right. Once there, click on the KYC tab and confirm that the following details are there:
											<ul>
												<li>Identity Status is <strong>Active</strong></li>
												<li>Email</li>
												<li>Preferred Contact Phone Number (starting with 2547XX)</li>
												<li>Notification Receiving MSISDN (starting with 2547XX)</li>
												<li>Notification Receiving E-Mail</li>
												<li>ID type and Number</li>
											</ul>
											<p class="thumbnail">
												<img src="images/operator_kyc.png">
												<div class="caption">
													<p><strong>Operator Details</strong></p>
												</div>
											</p>
											<p>These details will be used for verification during the Go Live journey.</p>
										</li>
									</ul>
								</dd>
							</dl>
							<p>After confirming the above details, you may start the process. On the [first step](https://developer.safaricom.co.ke/production_profile/form_production_profile) of the Go Live  process, you shall be required to download and fill in a form specifying how your tests went along. These cases consist of the possible scenarios which you shall encounter as you test your application. The test cases just need a simple <strong>Success</strong> or <strong>Fail</strong> response on the Actual Results tab. I doubt you will have a Fail on that file anyways :)</p>
							<p class="thumbnail">
								<img src="images/testcases.png" />
								<div class="caption">
									<p><strong>How to fill Test Cases form</strong></p>
								</div>
							</p>
							<p>Once downloaded and filled, go back to the same Page and upload the form via the <strong>Upload Test Results</strong> form, click on <strong>Upload</strong>, then after the form has been picked up, check the <strong>Terms and Conditions</strong> checkbox, then click on Next.</p>
							<p class="thumbnail">
								<img src="images/testcasesnext.png" />
							</p>
							<p>On the <strong>Verification</strong> section, you shall need to confirm your ownership of the paybill you are taking live. This will require you to enter your paybill and your contact details, receive a One Time Pin (OTP) on your registered Mobile Phone, then put that OTP on the portal to confirm your authenticity. On that page, you shall select Verification type as Short Code (only one supported for now), Organization Name as the name of the Organization as registered on MPesa, your Organization ShortCode, and the username of either the Business Administrator or Business Manager as filled in on the Org Portal (that's why I had you confirm the details exist first). Without either of these, the process will fail as there will be no contact phone to send you the OTP or the email to send the production URLs. 
							</p>
							<p class="thumbnail">
								<img src="images/verification.png">
							</p>
							<p>Once you click on Submit, and MPesa confirms the details you put as correct, it will send an OTP to the Phone Number registered on the Org Portal under the User whose username was filled on the verification form. Once you get the OTP on your phone (you might need a few retries), you shall fill it on the next section, the <strong>OTP Confirmation</strong> section. From the docs, the OTP has an expiry timeout of 3 minutes, thus you need to be fast, or you can just click on Resend OTP. Once the OTP has been confirmed, you shall then be given the chance to select the APIs you are applying for (note the limitations mentioed in the API Apps section). After completing the section, there shall also be created automatically the production apps for your account. These apps need to be approved internally, then after approval, you shall have the production URLs sent to the email registered against the same user who applied for Verification in step 2 of the process. You will then have the new Consumer Keys and Consumer Secrets for your app ready for use in production. More on this process can be found on the [official site](https://developer.safaricom.co.ke/docs#going-live). For password creation, you can follow the steps given in the [B2C](#b2c_tutorial) section above</p>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row" id="errors_tutorial">
				<div class="col-md-10 col-md-offset-2">
					<div class="panel panel-primary tutorial_text" id="errors_text">
						<div class="panel-heading">
							<h3 class="panel-title">API Errors</h3>
						</div>
						<div class="panel-body">
							<p>These are some of the errors you will meet on the API. More are being added as they are found. If you meet an error not in the list below, feel free to drop it in the comments, will be glad to add it to the list.</p>
							<table class="table table-bordered">
								<tr class="success">
									<th>Error Message</th>
									<th>Description and Possible Causes</th>
									<th>Solutions</th>
								</tr>
								<tr>
									<td>(STK_CB) DS Timeout</td>
									<td>
										Applies to Lipa Na Mpesa API. It means that the STK Push Prompt never got to the user. Causes include:
										<ul>
											<li>The user not having an updated SIM Card, thus needs an update</li>
											<li>The SIM card being too old (3+ years) to have received the STK Update to allow access to this service.</li>
											<li>Mobile phone is offline.</li>
										</ul>
									</td>
									<td>
										<ul>
											<li>Update SIM card via <strong>*234*1*6#</strong> or Upgrade SIM card</li>
											<li>Make sure target SIM card's mobile phone is online.</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>SMSC ACK Timeout</td>
									<td>
										Also applies to Lipa Na Mpesa API. It means that the STK Push Prompt got to the customer but the response by the customer was not sent back on time. This is a backend API issue, not a user issue.
									</td>
									<td>
										<ul>
											<li>Simply retry again after receiving the callback. Make sure to notify the user that the request failed.</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>(STK_CB) Request Cancelled By User</td>
									<td>
										Also applies to Lipa Na Mpesa API. Means that STK Push Prompt was cancelled from user end. Causes are:
										<ul>
											<li>STK Prompt timed out waiting for user input (takes between 1-3 minutes depending on phone model).</li>
											<li>User literally cancelled the request on their phones.</li>
										</ul>
									</td>
									<td>
										<ul>
											<li>Depending on scenario, either inform the user that they did not respond, or just cancel the transaction, then retry again.</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>Unable To Lock Subscriber, A Transaction Is Already In Process For The Current Subscriber</td>
									<td>Means the user already has another STK Prompt currently active on their mobile phones.</td>
									<td>Inform the user, then retry after 2-3 minutes (time taken to automatically cancel an STK Prompt)</td>
								</tr>
								<tr>
									<td>The Initiator Information Is Invalid</td>
									<td>This error and the rest of the "information is invalid" errors usually applies to Reversal, Transaction Status, Account Balance, B2B and B2C APIs. It means there is a mismatch in the data provided by the user in the request. These include:
										<ul>
											<li>Incorrect Initiator username for above API requests</li>
											<li>Incorrect Initiator password, or password not encrypted, or wrongly encrypted, for above API requests</li>
											<li>Incorrect values for Parties A and B, and Identifier Types where used</li>
										</ul>
									</td>
									<td>
										<ul>
											<li>Make sure the Initiator username is correct. This can be checked against what you have on your credentials page or the username that was assigned to you from the MPesa Portal</li>
											<li>For APIs with Initiator Identifier Types parameter, ensure the Initiator value matches the Initiator Type value e.g. for paybills, Initiator Identifier type is 11. For the Sender/Party A and Receiver/Party B Identifier types, Paybills have identifier type 4, Till Numbers have identifier type 2, and MSISDNs/Phone numbers have Identifier type 1.</li>
											<li>For operators, make sure the password is encrypted using the correct public key certificate, and that the encryption algorithm used actually produces the correct result. You can also just encrypt the password using the provided portal tools and use it as a static value in your API calls to make work easier. Also make sure the initiator belongs to the shortcode being used, as the initiator has a direct relation to the shortcode used in the transaction. Also, make you do not copy paste additional spaces during password encryption. This causes alot of issues as the resulting password is completely different from the expected one.</li>
											<li>In the API calls, the Sender/PartyA represents the Debit party (party being debited the cash), and the Receiver/PartyB represents the credit party (party receiving the cash value). Make sure you use the correct value for each e.g. for B2C, the sender is the Shortcode, the receiver is the MSISDN/Phone number. In B2B requests, both the sender and receiver are shortcode numbers, but <strong>NOT</strong> the same shortcode.</li>
											<li>For reversal calls, make sure the Initiator belongs to the shortcode reversing the transaction, and that the transaction being reversed was not debited from the initiator's paybill. You cannot reverse a transaction debited from your own account.</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>The Receiver Information Is Invalid</td>
									<td>See above</td>
									<td>See above</td>
								</tr>
								<tr>
									<td>Credit Party Customer Type (Unregistered Or Registered Customer) Can't Be Supported By The Service</td>
									<td>This applies to C2B, B2C and Lipa na MPesa API. It means the number in the request is not recorded with MPesa, whether as a registered or unregistered customer</td>
									<td>Ensure the phone number being used in the transaction is registered with MPesa.</td>
								</tr>
								<tr>
									<td>Invalid Access Token Error</td>
									<td>Applies to all APIs. Means the access token used in the API calls (usually preceded by the word <strong>Bearer</strong>) is expired or invalid.</td>
									<td>On Sandbox, the token usually lasts for 1 hour, so refresh the token again by sending a new <a href="#get_token_tutorial">Generate Token</a> API call.</td>
								</tr>
								
								<tr>
									<td>Invalid Amount</td>
									<td>Means you have entered a weird value as the amount</td>
									<td>Make sure the amount makes sense and is actually valid for the transaction e.g. C2B requests cannot have amounts greater than Ksh. 70K in the request, and all APIs cannot have amounts below Ksh. 0. Also, all APIs cannot have amounts going above Ksh. 999,999,999 in value. I also don't think you got such an amount in your account :)</td>
								</tr>
								<tr>
									<td>Transaction Failed, Mpesa Cannot Complete Payment </td>
									<td>MPesa was not able to complete the transaction in the back end.This is usually due to an MPesa rule not being fulfilled in the back end, thus depends on the API being used.</td>
									<td>For each API, you need to make sure all prerequisites are fulfilled before making the request. These include:
										<ul>
											<li>For B2C requests, the client has to make sure the transaction does not cause their accounts to exceed the maximum allowed limit of 100K.</li>
											<li>For C2B, it means the paybill being used may have external validation enabled, and that it failed, thus confirm external validation is disabled, or that it went through and was accepted.</li>
											<li>Otherwise, means there was an error on the backend we are not aware of. So try again later.</li>
										</ul>
									</td>
								</tr>
								<tr>
									<td>Paybill Verification Failed Due To The Following Reason: No Paybill Verification Data Found Service Request For Registration...</td>
									<td>Occurs during the Go Live process. Means M-Pesa could not find the required data on the paybill to verify the person taking the shortcode to production.</td>
									<td>Follow the instructions in the <a href="#go_live_tutorial">Go Live</a> process above to update your KYC data on the MPesa Portal, then try again.</td>
								</tr>
								<tr>
									<td>Merchant Not Allowed To Carry Out Transaction Type CustomerPayBillOnline </td>
									<td>Occurs in Lipa na Mpesa API, mostly production. Means the shortcode (paybill or till number) being used by the merchant is not allowed to perform Lipa na MPesa API calls using the CustomerPayBillOnline Command ID. Same goes for CustomerBuyGoodsOnline Command ID. It could also mean you are using the wrong command ID for your shortcode.</td>
									<td>You need to request to have the Command ID enabled on your shortcode. Send the request to apifeedback@safaricom.co.ke requesting for your shortcode to have the shortcode enabled for Lipa na Mpesa API. You will then also receive a passkey to use in your requests. Also make sure you are using the correct command ID for your shortcode i.e. CustomerPayBillOnline for Paybill numbers, CustomerBuyGoodsOnline for Till numbers.</td>
								</tr>
								<tr>
									<td>Missing ICCID value in request</td>
									<td>Occurs on Lipa na MPesa API. Means the number you have entered is not a Safaricom registered number, or it's blocked/inactive/dead.</td>
									<td>Ensure the number you are using is actually a Safaricom number, it is registered, and is not blocked/inactive e.t.c.</td>
								</tr>
								<tr>
									<td>Internal Server Error In Crq Creation, Please Try Again</td>
									<td>Happens on the Go Live process. This is an error on the back-end</td>
									<td>Nothing you can do about this. Just keep retrying till it works.</td>
								</tr>
								<tr>
									<td>System Internal Error</td>
									<td>Also an error on the back-end</td>
									<td>Also keep retrying till it works. If it persists, escalate to the support team.</td>
								</tr>
							</table>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row" id="utilities_tutorial">
				<div class="col-md-10 col-md-offset-2">
					<div class="panel panel-primary tutorial_text" id="utilities_text">
						<div class="panel-heading">
							<h3 class="panel-title">Utilities</h3>
						</div>
						<div class="panel-body">
							<p>Some utilities to assist you:</p>
							<ul class="list-group">
								<li class="list-group-item"><a href="export.php" target="_blank">Test Cases Form</a>  for quickly filling and downloading the <strong>most common</strong> test cases. Still a Work-in-Progress</li>
								<li class="list-group-item">
									<p>Production Password Encryption tool. Password is encrypted on the browser, never saved and never leaves your machine. Check out source code for how it is done in JS:<p>
									<form id="production_password_encrypt">
										<div class="form-group">
											<label>Plaintext Password</label>
											<input type="text" class="form-control" id="production_password_encrypt_plain_password" placeholder="Plain Password" >
										</div>
										<div class="form-group">
											<button type="submit" class="btn btn-primary request_submit" id="production_password_encrypt_submit">Encrypt</button>
										</div>
									</form>
									<div class="panel panel-default">
										<div class="panel-heading">Encrypted Password</div>
										<div class="panel-body">
											<textarea id="production_password_encrypt_response" class="form-control" rows="10" cols="50" style="max-width: 500px;"></textarea>
										</div>  
										<div class="panel-footer"><button class="btn btn-success request_submit" id="production_password_encrypt_copy">Copy to Clipboard</button></div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-primary tutorial_text">
						<div class="panel-footer">
							<p>&copy; <?php echo date("Y"); ?> Peter Njeru.</p>
						</div>
					</div>
				</div>
			</div>
			
			
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-primary tutorial_text">
						<div class="panel-heading">
							<h3 class="panel-title">Comments</h3>
						</div>
						<div class="panel-body">
							<div id="disqus_thread"></div>
								<script>
								(function() { // DON'T EDIT BELOW THIS LINE
								var d = document, s = d.createElement('script');
								s.src = 'https://safaricom-api-tutorial.disqus.com/embed.js';
								s.setAttribute('data-timestamp', +new Date());
								(d.head || d.body).appendChild(s);
								})();
								</script>
								<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
															
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- ######################################################### -->
			
			
		<script src="res/js/jquery.js"></script>
		<script src="res/js/jquery.storageapi.js"></script>
		<script src="res/js/angular.min.js"></script>
		<script src="res/bootstrap/js/bootstrap.min.js"></script>
		<script src="res/bootstrap/js/sidebar.js"></script>
		<script src="res/js/jsencrypt.js"></script>
		<script src="res/js/jquery.replace.js"></script>
		<script src="res/js/index.js"></script>
		<script src="res/js/controllers.js"></script>
	</body>
</html>
