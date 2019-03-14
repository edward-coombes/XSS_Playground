function postComment(){
	console.log("Sending data...");
	//get the form data
	var comment = document.getElementById("comment").value;
	var sessionID = document.getElementById("sessionID").value;
	var parameters = "sessionID="+sessionID+"&comment="+comment;
	var http = new XMLHttpRequest(); //create the request object
	//http.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); //set some header metadata
	http.open('POST',"http://badguy.online/edward/xssDemo/playgroundv-2/handleComment.php",true);
	http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");	
	/*
	1.) The line about this is the error i thiknk, try globally referencing handle comment
	2.) ater this fix the query statement that brings up the comments
	*/ 
	http.onreadystatechange = function(){
	//whats gonna happen when we finish the request?
	if (this.readyState == 4){
			//something cool, probably
			console.log("call: " + parameters);
			console.log("response: \n");
			console.log(this.responseText);
			updateWebpage();
	} 
		console.log("ready state: " + this.readyState);
		console.log("status: " + this.status);
	}
	 //send request and parameters
	http.send(parameters);
	console.log("Data sent.");
}

function updateWebpage(){
	//just refresh come on
	location.reload();
}

//post the comment when you clikc the button
document.getElementById("theForm").addEventListener("submit",function(event){
	event.preventDefault();
	postComment();
	});
