var App = angular.module("apitutorial", []);

App.controller("MainController", ['$scope', function($scope)
{
	var storage = $.localStorage;
	
	$scope.Credentials = 
	{
		SandboxConsumerKey: storage.get("SandboxConsumerKey") == null ? "SPLwLd2uA3onoPRXCJF6bWqWGxNvA8BZ" : storage.get("SandboxConsumerKey"),
		SandboxConsumerSecret: storage.get("SandboxConsumerSecret") == null ? "6WOghMAGTuEYKjX3" : storage.get("SandboxConsumerSecret"),
		LNMConsumerKey: storage.get("LNMConsumerKey") == null ? "A6U3ryasDir1GCozVKKefdtVGu53xz0J" : storage.get("LNMConsumerKey"),
		LNMConsumerSecret: storage.get("LNMConsumerSecret") == null ? "ZPWGWrJzsbW9ef6Y" : storage.get("LNMConsumerSecret"),
	
	    SecurityToken: getBase64("SPLwLd2uA3onoPRXCJF6bWqWGxNvA8BZ", "6WOghMAGTuEYKjX3"),
		SandboxShortcode1: storage.get("SandboxShortcode1") == null ? "601426" : storage.get("SandboxShortcode1"),
		SandboxInitiatorName1: storage.get("SandboxInitiatorName1") == null ? "apitest361" : storage.get("SandboxInitiatorName1"),
		SandboxSecurityCredential: storage.get("SandboxSecurityCredential") == null ? "361reset" : storage.get("SandboxSecurityCredential"),
		SandboxShortcode2: storage.get("SandboxShortcode2") == null ? "600000" : storage.get("SandboxShortcode2"),
		SandboxTestMSISDN: storage.get("SandboxTestMSISDN") == null ? "254708374149" : storage.get("SandboxTestMSISDN"),
		LNMShortcode: storage.get("LNMShortcode") == null ? "174379" : storage.get("LNMShortcode"),
		LNMPasskey: storage.get("LNMPasskey") == null ? "bfb279f9aa9bdbcf158e97dd71a467cd2e0c893059b10f78e6b72ada1ed2c919" : storage.get("LNMPasskey"),
		
		CallbackURL: storage.get("CallbackURL") == null ? "https://peternjeru.co.ke/safdaraja/api/callback.php" : storage.get("CallbackURL"),
		ConfirmationURL: storage.get("ConfirmationURL") == null ? "https://peternjeru.co.ke/safdaraja/api/confirmation.php" : storage.get("ConfirmationURL"),
		ValidationURL: storage.get("ValidationURL") == null ? "https://peternjeru.co.ke/safdaraja/api/validation.php" : storage.get("ValidationURL")
	};
}]);

App.controller("IntroController", ['$scope', function($scope)
{
	
}]);

App.controller("GetTokenController", ['$scope', function($scope)
{	
	$scope.GetToken = 
	{
		ConsumerCredentialsBase64: getBase64($scope.Credentials.SandboxConsumerKey, $scope.Credentials.SandboxConsumerSecret)
	};
}]);

App.controller("RegisterURLController", ['$scope', function($scope)
{
	$scope.RegisterURL = {
		ConsumerCredentialsBase64: "",
		ResponseType: "Completed"
	};
}]);

App.controller("C2BController", ['$scope', function($scope)
{
	
}]);

App.controller("B2CController", ['$scope', function($scope)
{
	$scope.B2C = {
		SandboxSecurityCredential: encrypt($scope.Credentials.SandboxSecurityCredential)
	};
}]);

App.controller("B2BController", ['$scope', function($scope)
{
	$scope.B2B = {
		SandboxSecurityCredential: encrypt($scope.Credentials.SandboxSecurityCredential)
	};
}]);

App.controller("LNMController", ['$scope', function($scope)
{
	var data = getEncodedPassword(
	$scope.Credentials.LNMShortcode, 
	$scope.Credentials.LNMPasskey);
	
	$scope.LNM = {
		EncodedPassword: data.password,
		Timestamp: data.timestamp
	};
}]);

App.controller("TransactionStatusController", ['$scope', function($scope)
{
	
}]);


App.controller("ReversalController", ['$scope', function($scope)
{
	$scope.Reversal = {
		SandboxSecurityCredential: encrypt($scope.Credentials.SandboxSecurityCredential)
	};
}]);