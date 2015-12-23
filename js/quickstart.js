

//stores the reference to the XMLHttpReqeust object
var xmlHttp = createXmlHttpRequestObject();

//retrieves the XMLHttpReqeust object
function createXmlHttpRequestObject(){

	//stores the reference to XMLHttpReqeuest object
	var xmlHttp;

	//if running IE 6 or older
	if(window.ActiveXObject){
		try{
			xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
		}
		catch (e) {
			xmlHttp = false;
		}
	} //if running Mozilla or other browsers
		else{

			try{
				xmlHttp = new XMLHttpRequest();
			}
			catch (e){
				xmlHttp = false;
			}
		}
		// return the create object or display an error message
		if(!xmlHttp)
			alert("Error creating the XMLHttpRequest object");
		else
			return xmlHttp;

}


//make asynchronous HTTP request using the XMLHttpRequest object
function process(){

	// proceed only if the xmlHttp object isn't busy
	if(xmlHttp.readyState == 4 || xmlHttp.readyState == 0){

		//retrieve the name typed by user
		name = encodeURIComponent(
			document.getElementById("myName").value);

		// execute the quickstart.php page from the server
		xmlHttp.open("GET", "../ajax-php/includes/quickstart.php?name=" + name, true);

		//define the method to handle server responses
		xmlHttp.onreadystatechange = handleServerResponse;

		// make the server request
		xmlHttp.send(null);

	} else

	// if the connection is busy, try again one second
	setTimeout('process()', 5000);
}

// callback function executed when a message is received from the server
function handleServerResponse(){

	//move forward only if the transaction has completed
	if (xmlHttp.readyState == 4){

		//status of 200 indicates the transaction completed successfully
		if (xmlHttp.status == 200){

			//extract the XML
			xmlResponse = xmlHttp.responseXML;

			//get the document root element of XML structure
			xmlDocumentElement = xmlResponse.documentElement;

			//get the text message, which is in the first child of the document element
			helloMessage = xmlDocumentElement.firstChild.data;

			//display the data received from the server
			document.getElementById("divMessage").innerHTML = '<i>' + helloMessage + '</i>';

			//restart sequence
			setTimeout('process()', 1000);
		} // a HTTP satus different than 200 signals an error
			else {

				alert("There was a problem accessing the server: " + xmlHttp.statusText);
			}
	}

}










