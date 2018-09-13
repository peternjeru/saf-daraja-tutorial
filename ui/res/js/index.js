$(document).ready(function()
{
	
	doAffix($("#get_token_code"));
	doAffix($("#register_url_code"));
	doAffix($("#c2b_code"));
	doAffix($("#b2c_code"));
	doAffix($("#b2b_code"));
	doAffix($("#lnm_code"));
	doAffix($("#reversal_code"));
	
	$(window).scroll(function()
	{
		checkAffix($("#get_token_code"));
		checkAffix($("#register_url_code"));
		checkAffix($("#c2b_code"));
		checkAffix($("#b2c_code"));
		checkAffix($("#b2b_code"));
		checkAffix($("#lnm_code"));
		checkAffix($("#reversal_code"));
    })
	
	$(".request_submit").click(function(event) 
	{
		event.preventDefault();
		switch($(this).attr("id"))
		{
			case "tutorials_save_credentials":
			{
				saveCredentials();
			}
			break;
			case "get_token_code_submit":
			{
				sendGetTokenRequest($("#get_token_code_response"));
			}
			break;
			case "register_url_auth_refresh_submit":
			{
				sendGetTokenRequest($("#register_url_auth_refresh_response"));
			}
			break;
			case "c2b_auth_refresh_submit":
			{
				sendGetTokenRequest($("#c2b_auth_refresh_response"));
			}
			break;
			case "b2c_auth_refresh_submit":
			{
				sendGetTokenRequest($("#b2c_auth_refresh_response"));
			}
			break;
			case "b2b_auth_refresh_submit":
			{
				sendGetTokenRequest($("#b2b_auth_refresh_response"));
			}
			break;
			case "reversal_auth_refresh_submit":
			{
				sendGetTokenRequest($("#reversal_auth_refresh_response"));
			}
			break;
			case "lnm_auth_refresh_submit":
			{
				sendLNMGetTokenRequest($("#lnm_auth_refresh_response"));
			}
			break;
			case "register_url_code_submit":
			{
				sendRegisterURLRequest($("#register_url_code_response"));
			}
			break;
			case "c2b_code_submit":
			{
				sendC2BRequest($("#c2b_code_response"));
			}
			break;
			case "b2c_code_submit":
			{
				sendB2CRequest($("#b2c_code_response"));
			}
			break;
			case "b2c_password_encrypt_submit":
			{
				encryptPassword($("#b2c_password_encrypt_response"));
			}
			break;
			case "b2c_password_encrypt_copy":
			{
				copyContent($("#b2c_password_encrypt_response"));
			}
			break;
			case "b2b_code_submit":
			{
				sendB2BRequest($("#b2b_code_response"));
			}
			break;
			case "b2b_password_encrypt_submit":
			{
				encryptPassword($("#b2b_password_encrypt_response"));
			}
			break;
			case "b2b_password_encrypt_copy":
			{
				copyContent($("#b2b_password_encrypt_response"));
			}
			break;
			case "lnm_code_submit":
			{
				sendLNMRequest($("#lnm_code_response"));
			}
			break;
			case "lnm_password_encrypt_submit":
			{
				encodePassword();
			}
			break;
			case "lnm_password_encrypt_copy":
			{
				copyContent($("#lnm_password_encrypt_response"));
			}
			break;
			case "reversal_code_submit":
			{
				sendReversalRequest($("#reversal_code_response"));
			}
			break;
			case "reversal_password_encrypt_submit":
			{
				encryptPassword($("#reversal_password_encrypt_response"));
			}
			break;
			case "reversal_password_encrypt_copy":
			{
				copyContent($("#reversal_password_encrypt_response"));
			}
			break;
			case "production_password_encrypt_submit":
			{
				encryptProdPassword($("#production_password_encrypt_response"));
			}
			break;
			case "production_password_encrypt_copy":
			{
				copyContent($("#production_password_encrypt_response"));
			}
			break;
			case "tutorials_clear_callbacks":
			{
				$("#tutorial_callbacks").html("No Callbacks Received");
			}
			break;
		}
	});
	
	$(".main-link").click(function(event)
	{
		event.preventDefault();
		$("html, body").animate(
		{ 
			scrollTop: $($(this).attr("href")).offset().top
		}, 
		1500);
	});
	
	var body = $("body").text();
	var matches = body.match(/(\[.*?\])([\(].*?[\)])/g);

	$.each(matches, function(id, el)
	{
		var val = el.split("]");
		
		var rawString = (val[0].replace("[", "\\[")) + "\\]";
		var rawUrl = val[1].replace("(", "\\(").replace(")", "\\)");
		
		var finalUrl = val[1].replace("(", "").replace(")", "");
		var finalStr = finalUrl.startsWith("http") ? '<a href="' + finalUrl + '" target="_blank">' + (val[0].replace("[", "")) + "</a>" : '<a href="' + finalUrl + '">' + (val[0].replace("[", "")) + "</a>";
		
		var reg1 = new RegExp(rawString, "g");
		var reg2 = new RegExp(rawUrl, "g");
		
		$("#body *").replaceText(reg1, finalStr);
		$("#body *").replaceText(reg2, "");
	});
	
	setInterval(getLogs, 10000);
});

function doAffix(obj)
{
	if(!obj.hasClass("col-xs-12") && !obj.hasClass("col-sm-12") && !obj.hasClass("col-md-12"))
	{
		obj.affix({offset: {top: obj.closest(".row").find(".tutorial_text").offset().top}});
	}
}

function checkAffix(obj)
{
	if(obj.hasClass("col-xs-12") || obj.hasClass("col-sm-12") || obj.hasClass("col-md-12"))
	{
		console.warn("small");
		obj.removeClass("affix").removeData("bs.affix");
		return;
	}

	var objTop = obj.closest(".row").find(".tutorial_text").offset().top;
	var objHeight = obj.closest(".row").find(".tutorial_text").innerHeight();

	if($(window).scrollTop() > (objTop + objHeight - 30)) 
	{
		obj.removeClass("affix")
			.removeData("bs.affix");
	}
	else
	{
		obj.affix({offset: {top: obj.closest(".row").find(".tutorial_text").offset().top}});
	}
}

function ajaxRequest(requestData, callback)
{
	$.ajax({
	url: "../api/api.php",
	type: 'POST',
	data: requestData,
	success: function(response, status, xhr)
	{
		callback(response);
	},
	error: function(xhr, status, error)
	{
		if(xhr.responseText)
		{
			callback(xhr.responseText);
		}
		else
		{
			callback("Error");
		}
	}});
}

function getBase64(key, secret)
{
	var base64 = btoa(key + ":" + secret);
	return base64;
}

function saveCredentials()
{
	$("body").scope().$apply(function()
	{
		var angObj = $("body").scope().Credentials;
		angObj.SandboxConsumerKey = $("#tutorial_sandbox_consumer_key").val();
		angObj.SandboxConsumerSecret = $("#tutorial_sandbox_consumer_secret").val();
		angObj.SandboxShortcode1 = $("#tutorial_sandbox_shortcode1").val();
		angObj.SandboxInitiatorName1 = $("#tutorial_sandbox_initiator_shortcode1").val();
		angObj.SandboxSecurityCredential = $("#tutorial_sandbox_sec_credential_shortcode1").val();
		angObj.SandboxShortcode2 = $("#tutorial_sandbox_shortcode2").val();
		angObj.SandboxTestMSISDN = $("#tutorial_sandbox_msisdn").val();
		angObj.LNMConsumerKey = $("#tutorial_lnm_consumer_key").val();
		angObj.LNMConsumerSecret = $("#tutorial_lnm_consumer_secret").val();
		angObj.LNMShortcode = $("#tutorial_lnm_shortcode").val();
		angObj.LNMPasskey = $("#tutorial_lnm_passkey").val();
		angObj.SecurityToken = getBase64(angObj.LNMConsumerKey, angObj.LNMConsumerSecret);
		
		var storage = $.localStorage;
		storage.set('SandboxConsumerKey', angObj.SandboxConsumerKey);
		storage.set('SandboxConsumerSecret', angObj.SandboxConsumerSecret);
		storage.set('SandboxShortcode1', angObj.SandboxShortcode1);
		storage.set('SandboxInitiatorName1', angObj.SandboxInitiatorName1);
		storage.set('SandboxSecurityCredential', angObj.SandboxSecurityCredential);
		storage.set('SandboxShortcode2', angObj.SandboxShortcode2);
		storage.set('SandboxTestMSISDN', angObj.SandboxTestMSISDN);
		storage.set('LNMConsumerKey', angObj.LNMConsumerKey);
		storage.set('LNMConsumerSecret', angObj.LNMConsumerSecret);
		storage.set('LNMShortcode', angObj.LNMShortcode);
		storage.set('LNMPasskey', angObj.LNMPasskey);
	});

	$('#tutorials_credentials_form').modal("hide");
}

function getLogs()
{
	$.ajax({
	url: "../api/logreader.php",
	success: function(response)
	{
		try
		{
		    if(response.length > 0)
		    {
		        $("#tutorial_callbacks").html(JSON.stringify(JSON.parse(response), null, '<br />') + "<br /><br />");
		    }
		    else
		    {
		        $("#tutorial_callbacks").html("No callbacks yet");
		    }
			
		}
		catch(err)
		{
		    if(response.length > 0)
		    {
		        $("#tutorial_callbacks").html(response);
		    }
		    else
		    {
		        $("#tutorial_callbacks").html("No callbacks yet");
		    }
		}
	},
	error: function(xhr, status, error)
	{
		
	}});
}

function encrypt(plain)
{
	var crypt = new JSEncrypt();
	crypt.setKey("-----BEGIN PUBLIC KEY-----" +
	"MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAqLcFdVcV7HdEOotsNLoM" +
	"PhD74CX1ejzcgfNuiJNy9pTySxbszRBCWxmok3Unul4rX/zyVD/6vDb9nbqRywZI" +
	"gR46UOn+tR3vGXXPX6igxgS6DYTaQV8W858yOGLuoYwRi5xeQJfczAMU4o+sCxlB" +
	"bMCqYs4nzW81fi8iF2OEUdrfJcbamhSnksdgfD/nomWy9MESAz1QufrOBnaRX2N0" +
	"CKsi8SNmzsghpfP15VLiIVV8YXPFKtd9sY37FpY28OKGjKG5wdije/bzFL8qEcPD" +
	"hqYGuVaGkhX1bkI0iH+UcFtYYrZv/Fyb5jRHXmNLiq4mMG0fMH8ENxNACFtRZTDI" +
	"IQIDAQAB" +
	"-----END PUBLIC KEY-----");
	
	var cipher = crypt.encrypt(plain);
	return cipher;
}

function encryptProd(plain)
{
	var crypt = new JSEncrypt();
	crypt.setKey(
	"-----BEGIN PUBLIC KEY-----" +
	"MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAoknIb5Tm1hxOVdFsOejA" +
	"s6veAai32Zv442BLuOGkFKUeCUM2s0K8XEsUt6BP25rQGNlTCTEqfdtRrym6bt5k" +
	"0fTDscf0yMCoYzaxTh1mejg8rPO6bD8MJB0cFWRUeLEyWjMeEPsYVSJFv7T58IdA" +
	"n7/RhkrpBl1dT7SmIZfNVkIlD35+Cxgab+u7+c7dHh6mWguEEoE3NbV7Xjl60zbD" +
	"/Buvmu6i9EYz+27jNVPI6pRXHvp+ajIzTSsieD8Ztz1eoC9mphErasAGpMbR1sba" +
	"9bM6hjw4tyTWnJDz7RdQQmnsW1NfFdYdK0qDRKUX7SG6rQkBqVhndFve4SDFRq6w" +
	"vQIDAQAB" +
	"-----END PUBLIC KEY-----");
	
	var cipher = crypt.encrypt(plain);
	return cipher;
}

function sendGetTokenRequest(callbackField)
{
	var credential = $("#get_token_code_client_credentials").val();
	var data = {
		url: "https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials",
		method: "GET",
		headers: 
		{
			"Content-Type": "application/json",
			"Authorization": credential
		},
		data: {}
	}
	ajaxRequest({requestData: data}, function(response)
	{
		// console.warn(response);
		try
		{
			callbackField.html(JSON.stringify(JSON.parse(response), null, '<br />'));
		}
		catch(err)
		{
			callbackField.html(response);
		}
	});
}


function sendRegisterURLRequest(callbackField)
{
	var credential = $("#register_url_code_auth_token").val();
	var shortcode = $("#register_url_code_shortcode").val();
	var validationURL = $("#register_url_code_validation_url").val();
	var confirmationURL = $("#register_url_code_confirmation_url").val();
	var respType = $("#register_url_code_response_type").val();
	
	var data = {
		url: "https://sandbox.safaricom.co.ke/mpesa/c2b/v1/registerurl",
		method: "POST",
		headers: 
		{
			"Content-Type": "application/json",
			"Authorization": credential
		},
		data: {
			ShortCode: shortcode,
			ResponseType: respType,
			ConfirmationURL: confirmationURL,
			ValidationURL: validationURL
		}
	}
	
	$("#register_url_code_body").html(JSON.stringify(data.data, null, '<br />'));
	
	ajaxRequest({requestData: data}, function(response)
	{
		// console.warn(response);
		try
		{
			callbackField.html(JSON.stringify(JSON.parse(response), null, '<br />'));
		}
		catch(err)
		{
			callbackField.html(response);
		}
		
		$("#register_url_code_test > div.panel-body").animate(
		{ 
			scrollTop: $('#register_url_code_test > div.panel-body').scrollTop() + $('#register_url_code_response_panel').position().top
		}, 
		1000);
		
	});
}

function sendC2BRequest(callbackField)
{
	var credential = $("#c2b_code_access_token").val();
	var shortcode = $("#c2b_code_shortcode").val();
	var commandID = $('#c2b_code_commandid option:selected').val();
	var amount = $("#c2b_code_amount").val();
	var msisdn = $("#c2b_code_msisdn").val();
	var accNo = $("#c2b_code_acc_no").val();
	
	var data;
	
	if(commandID == "CustomerBuyGoodsOnline")
	{
		data = 
		{
			url: "https://sandbox.safaricom.co.ke/mpesa/c2b/v1/simulate",
			method: "POST",
			headers: 
			{
				"Content-Type": "application/json",
				"Authorization": credential
			},
			data: {
				ShortCode: shortcode,
				CommandID: commandID,
				Amount: amount,
				Msisdn: msisdn
			}
		}
	}
	else
	{
		data = 
		{
			url: "https://sandbox.safaricom.co.ke/mpesa/c2b/v1/simulate",
			method: "POST",
			headers: 
			{
				"Content-Type": "application/json",
				"Authorization": credential
			},
			data: {
				ShortCode: shortcode,
				CommandID: commandID,
				Amount: amount,
				Msisdn: msisdn,
				BillRefNumber: accNo
			}
		}
	}

	$("#c2b_code_body").html(JSON.stringify(data.data, null, '<br />'));
	
	ajaxRequest({requestData: data}, function(response)
	{
		// console.warn(response);
		try
		{
			callbackField.html(JSON.stringify(JSON.parse(response), null, '<br />'));
		}
		catch(err)
		{
			callbackField.html(response);
		}
		
		$("#c2b_code_test > div.panel-body").animate(
		{ 
			scrollTop: $('#c2b_code_test > div.panel-body').scrollTop() + $('#c2b_code_response_panel').position().top
		}, 
		1000);
		
	});
}

function sendB2CRequest(callbackField)
{
	var token = $("#b2c_code_access_token").val();
	var init_username = $("#b2c_code_initiator_username").val();
	var init_password = $("#b2c_code_password").val();
	var commandID = $('#b2c_code_commandid option:selected').val();
	var amount = $("#b2c_code_amount").val();
	var shortcode = $("#b2c_code_shortcode").val();
	var msisdn = $("#b2c_code_msisdn").val();
	var remarks = $("#b2c_code_remarks").val();
	var queueURL = $("#b2c_code_queue_timeout_url").val();
	var resultURL = $("#b2c_code_result_url").val();
	var ocassion = $("#b2c_code_occassion").val();
	
	var data = 
	{
		url: "https://sandbox.safaricom.co.ke/mpesa/b2c/v1/paymentrequest",
		method: "POST",
		headers: 
		{
			"Content-Type": "application/json",
			"Authorization": token
		},
		data: {
			InitiatorName: init_username,
			SecurityCredential: init_password,
			CommandID: commandID,
			Amount: amount,
			PartyA: shortcode,
			PartyB: msisdn,
			Remarks: remarks,
			QueueTimeOutURL: queueURL,
			ResultURL: resultURL,
			Occassion: ocassion
		}
	}

	$("#b2c_code_body").html(JSON.stringify(data.data, null, '<br />'));
	
	ajaxRequest({requestData: data}, function(response)
	{
		// console.warn(response);
		try
		{
			callbackField.html(JSON.stringify(JSON.parse(response), null, '<br />'));
		}
		catch(err)
		{
			callbackField.html(response);
		}
		
		$("#b2c_code_test > div.panel-body").animate(
		{ 
			scrollTop: $('#b2c_code_test > div.panel-body').scrollTop() + $('#b2c_code_response_panel').position().top
		}, 
		1000);
		
	});
}

function sendB2BRequest(callbackField)
{
	var token = $("#b2b_code_access_token").val();
	var init_username = $("#b2b_code_initiator_username").val();
	var init_password = $("#b2b_code_password").val();
	var commandID = $('#b2b_code_commandid option:selected').val();
	var amount = $("#b2b_code_amount").val();
	var shortcode1 = $("#b2b_code_shortcode1").val();
	var shortcode2 = $("#b2b_code_shortcode2").val();
	var accountRef = $("#b2b_code_acc_ref").val();
	var remarks = $("#b2b_code_remarks").val();
	var queueURL = $("#b2b_code_queue_timeout_url").val();
	var resultURL = $("#b2b_code_result_url").val();
	
	var data = {};
	if(commandID == "BusinessPayBill")
	{
		data = 
		{
			url: "https://sandbox.safaricom.co.ke/mpesa/b2b/v1/paymentrequest",
			method: "POST",
			headers: 
			{
				"Content-Type": "application/json",
				"Authorization": token
			},
			data: {
				Initiator: init_username,
				SecurityCredential: init_password,
				CommandID: commandID,
				SenderIdentifierType: 4,
				RecieverIdentifierType: 4,
				Amount: amount,
				PartyA: shortcode1,
				PartyB: shortcode2,
				AccountReference: accountRef,
				Remarks: remarks,
				QueueTimeOutURL: queueURL,
				ResultURL: resultURL
			}
		}
	}
	else
	{
		data = 
		{
			url: "https://sandbox.safaricom.co.ke/mpesa/b2b/v1/paymentrequest",
			method: "POST",
			headers: 
			{
				"Content-Type": "application/json",
				"Authorization": token
			},
			data: {
				Initiator: init_username,
				SecurityCredential: init_password,
				CommandID: commandID,
				SenderIdentifierType: 4,
				RecieverIdentifierType: 4,
				Amount: amount,
				PartyA: shortcode1,
				PartyB: shortcode2,
				Remarks: remarks,
				QueueTimeOutURL: queueURL,
				ResultURL: resultURL
			}
		}
	}
	
	var data = 
	{
		url: "https://sandbox.safaricom.co.ke/mpesa/b2b/v1/paymentrequest",
		method: "POST",
		headers: 
		{
			"Content-Type": "application/json",
			"Authorization": token
		},
		data: {
			Initiator: init_username,
			SecurityCredential: init_password,
			CommandID: commandID,
			SenderIdentifierType: 4,
			RecieverIdentifierType: 4,
			Amount: amount,
			PartyA: shortcode1,
			PartyB: shortcode2,
			AccountReference: accountRef,
			Remarks: remarks,
			QueueTimeOutURL: queueURL,
			ResultURL: resultURL
		}
	}

	$("#b2b_code_body").html(JSON.stringify(data.data, null, '<br />'));
	
	ajaxRequest({requestData: data}, function(response)
	{
		// console.warn(response);
		try
		{
			callbackField.html(JSON.stringify(JSON.parse(response), null, '<br />'));
		}
		catch(err)
		{
			callbackField.html(response);
		}
		
		$("#b2b_code_test > div.panel-body").animate(
		{ 
			scrollTop: $('#b2b_code_test > div.panel-body').scrollTop() + $('#b2b_code_response_panel').position().top
		}, 
		1000);
	});
}

function sendLNMRequest(callbackField)
{
	var token = $("#lnm_code_access_token").val();
	var shortcode = $("#lnm_code_shortcode").val();
	var encPassword = $("#lnm_code_password").val();
	var timestamp = $("#lnm_code_timestamp").val();
	var transType = $('#lnm_code_transaction_type option:selected').val();
	var amount = $("#lnm_code_amount").val();
	var phone_num = $("#lnm_code_msisdn").val();
	
	var callbackURL = $("#lnm_code_callback_url").val();
	var accountRef = $("#lnm_code_acc_ref").val();
	var description = $("#lnm_code_trans_desc").val();
	
	
	var data = {};
	
	if(transType == "CustomerPayBillOnline")
	{
		data = 
		{
			url: "https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest",
			method: "POST",
			headers: 
			{
				"Content-Type": "application/json",
				"Authorization": token
			},
			data: {
				BusinessShortCode: shortcode,
				Password: encPassword,
				Timestamp: timestamp,
				TransactionType: transType,
				Amount: amount,
				PartyA: phone_num,
				PartyB: shortcode,
				PhoneNumber: phone_num,
				CallBackURL: callbackURL,
				AccountReference: accountRef,
				TransactionDesc: description
			}
		}
	}
	else
	{
		data = 
		{
			url: "https://sandbox.safaricom.co.ke/mpesa/stkpush/v1/processrequest",
			method: "POST",
			headers: 
			{
				"Content-Type": "application/json",
				"Authorization": token
			},
			data: {
				BusinessShortCode: shortcode,
				Password: encPassword,
				Timestamp: timestamp,
				TransactionType: transType,
				Amount: amount,
				PartyA: phone_num,
				PartyB: shortcode,
				PhoneNumber: phone_num,
				CallBackURL: callbackURL,
				TransactionDesc: description
			}
		}
	}
	
	$("#lnm_code_body").html(JSON.stringify(data.data, null, '<br />'));
	
	ajaxRequest({requestData: data}, function(response)
	{
		// console.warn(response);
		try
		{
			callbackField.html(JSON.stringify(JSON.parse(response), null, '<br />'));
		}
		catch(err)
		{
			callbackField.html(response);
		}
		
		$("#lnm_code_test > div.panel-body").animate(
		{ 
			scrollTop: $('#lnm_code_test > div.panel-body').scrollTop() + $('#lnm_code_response_panel').position().top
		}, 
		1000);
		
	});
}

function encryptPassword(callbackField)
{
	var plain = $("#b2c_password_encrypt_plain_password").val();
	var cipher = encrypt(plain);
	callbackField.val(cipher);
}

function encryptProdPassword(callbackField)
{
	var plain = $("#production_password_encrypt_plain_password").val();
	if(plain.length <= 0)
	{
		return;
	}
	var cipher = encryptProd(plain);
	callbackField.val(cipher);
}

function copyContent(contentField)
{
	contentField.select();
	document.execCommand("Copy");
}

function getEncodedPassword(shortcode, plain)
{
	var d = new Date();

    d = d.getFullYear() + ('0' + (d.getMonth() + 1)).slice(-2) + ('0' + d.getDate()).slice(-2) + ('0' + d.getHours()).slice(-2) + ('0' + d.getMinutes()).slice(-2) + ('0' + d.getSeconds()).slice(-2);
	
	var base64 = btoa(shortcode + plain + d);
	var data = {password: base64, timestamp: d};

    return data;
}
function encodePassword()
{
	var shortcode = $("#lnm_password_encrypt_shortcode").val();
	var passkey = $("#lnm_password_encrypt_plain_passkey").val();
	
	var encoded = getEncodedPassword(shortcode, passkey);
	$("#lnm_password_encrypt_result_timestamp").val(encoded.timestamp);
	$("#lnm_password_encrypt_result_passkey").val(encoded.password);
}

function sendLNMGetTokenRequest(callbackField)
{
	var angObj = $("body").scope().Credentials;
	
	var credential = "Basic " + getBase64(angObj.LNMConsumerKey, angObj.LNMConsumerSecret);
	var data = {
		url: "https://sandbox.safaricom.co.ke/oauth/v1/generate?grant_type=client_credentials",
		method: "GET",
		headers: 
		{
			"Content-Type": "application/json",
			"Authorization": credential
		},
		data: {}
	}
	ajaxRequest({requestData: data}, function(response)
	{
		// console.warn(response);
		try
		{
			callbackField.html(JSON.stringify(JSON.parse(response), null, '<br />'));
		}
		catch(err)
		{
			callbackField.html(response);
		}
	});
}

function sendReversalRequest(callbackField)
{
	
	var token = $("#reversal_code_access_token").val();
	var init_username = $("#reversal_code_initiator_username").val();
	var init_password = $("#reversal_code_password").val();
	var transID = $("#reversal_code_trans_id").val();
	var amount = $("#reversal_code_amount").val();
	var shortcode1 = $("#reversal_code_shortcode1").val();
	var queueURL = $("#reversal_code_queue_timeout_url").val();
	var resultURL = $("#reversal_code_result_url").val();
	var occassion = $("#reversal_code_occassion").val();
	var remark = $("#reversal_code_remarks").val();
	
	var data =
	{
		url: "https://sandbox.safaricom.co.ke/mpesa/reversal/v1/request",
		method: "POST",
		headers: 
		{
			"Content-Type": "application/json",
			"Authorization": token
		},
	
		data: {
			Initiator: init_username,
			SecurityCredential: init_password,
			CommandID: "TransactionReversal",
			TransactionID: transID,
			Amount: amount,
			ReceiverParty: shortcode1,
			RecieverIdentifierType: 4,
			ResultURL: resultURL,
			QueueTimeOutURL: queueURL,
			Remarks: remark,
			Occasion: occassion
		}
	}
	
	$("#reversal_code_body").html(JSON.stringify(data.data, null, '<br />'));
	
	ajaxRequest({requestData: data}, function(response)
	{
		// console.warn(response);
		try
		{
			callbackField.html(JSON.stringify(JSON.parse(response), null, '<br />'));
		}
		catch(err)
		{
			callbackField.html(response);
		}
		
		$("#reversal_code_test > div.panel-body").animate(
		{ 
			scrollTop: $('#reversal_code_test > div.panel-body').scrollTop() + $('#reversal_code_response_panel').position().top
		}, 
		1000);
	});
}