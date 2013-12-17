function isConnected(redirectIn){

    var d = new Date;
    var time1 = d.getTime();
    var xmlReq = new XMLHttpRequest();
    var urlLink = "http://aplot.com/small.html?s=" + time1;

    xmlReq.open("GET", urlLink, false);
    xmlReq.timeout= 2000;
    xmlReq.ontimeout = timeoutFired;
    xmlReq.send(null);

    try{
	if (xmlReq.status==200){
    
	    window.location = redirectIn;
	    
            return;
        }
	
	else{
            alert("Problem retrieving XML data");
        }
    } catch(err){
	alert("Not connected?");
    }
    
}

function timeoutFired(){
    
}



