var appletFlag = 0;

$(document).ready(function() 
{
	$("#signButton").click(function()
	{  
		$("#loaderDiv").fadeTo( "slow" , 0, function() 
		{
			$("#loaderDiv").empty();
			$("#loaderDiv").load("signUp.php");
			$("#loaderDiv").fadeTo("slow", 1, function(){});
		});
	});
	
	$("#logButton").click(function()
	{
		window.location('ABAHome.php');         
	});
});