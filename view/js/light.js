/**
 * 
 */
function getImage(i , status){
	
	var status = status;
	if((status == 'on') || (status == 'ON')){
		$("#status"+i).html('<img src="view/images/on.png" alt="blank" />');
		} else if((status == 'off') || (status == 'OFF')){
		$("#status"+i).html('<img src="view/images/off.png" alt="blank" />');
		}
}

function getValue(i){
		
}

function getAllValues(i , lightId){
	var findTag = $("#status"+i).html();
	//alert(findTag);
	var source = $(findTag).attr("src");
	var findImage = source.indexOf(".png");
	var minusValue = parseInt(findImage)-2;
	var finlStatusStr = source.substr(12);
	//alert(finlStatusStr);
	var finlVal;
	if((finlStatusStr == 'on.png') || (finlStatusStr == 'ON.png') || (finlStatusStr == 'On.png')){
		finlVal = "ON";
		window.location = "http://192.168.1.234:6161/Infomap/XML/Light/Lighting.xml?lightID="+lightId+"type=ON/OFF&status="+finlVal;
		} else if((finlStatusStr == 'off.png') || (finlStatusStr == 'OFF.png') || (finlStatusStr == 'Off.png')) {
		finlVal = "OFF";
		window.location = "http://192.168.1.234:6161/Infomap/XML/Light/Lighting.xml?lightID="+lightId+"type=ON/OFF&status="+finlVal;
		} else {
			finlVal = finlStatusStr.substr(6 , 8);
			switch(finlVal){
			case ((finlVal = "25.png") || (finlVal = "light_25.png")):
			pushVal = 25;
			break;
			case ((finlVal = "50.png") || (finlVal = "light_50.png")):
			pushVal = 50;
			break;
			case ((finlVal = "75.png") || (finlVal = "light_75.png")):
			pushVal = 75;
			break;
			case ((finlVal = "100.png") || (finlVal = "light_100.png")):
			pushVal = 100;
			break;
			default:
			pushVal = "No value Found";
			alert(pushVal);
			break;
			}
			window.location = "http://192.168.1.234:6161/Infomap/XML/Light/Lighting.xml?lightID="+lightId+"type=ON/OFF&status="+pushVal;
			}
	
	
}