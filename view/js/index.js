$(document).ready(function() {

	  var height = $(window).height(); // New height
	  var width = $(window).width(); // New width
	  var width1 = parseInt(width)*0.75;
	  var width2 = parseInt(width)*0.41; 
	  var width4 = parseInt(width)*0.2860096485182633;
	  var totalwidth4 = parseInt(width)*0.124052377670572;
	  var width4Sec = width4+totalwidth4;
	  var width5 = parseInt(width)*0.5306685044796692;
	  var totalwidth5 = parseInt(width)*0.1033769813921433;
	  var width5Sec = width5+totalwidth5;
	  var width6 = parseInt(width)*0.8683666436940041;
	  var totalwidth6 = parseInt(width)*0.1171605789110958;
	  var width6Sec = width6+totalwidth6;
	  var width7 = parseInt(width)*0.1447277739490007;
	  var totalwidth7 = parseInt(width)*0.1171605789110958;
	  var width7Sec = width7+totalwidth7;
	  var width8 = parseInt(width)*0.4341833218470021;
	  var totalwidth8 = parseInt(width)*0.124052377670572;
	  var width8Sec = width8+totalwidth8;
	  var width9 = parseInt(width)*0.7257064093728463;
	  var totalwidth9 = parseInt(width)*0.1219848380427292;
	  var width9Sec = width9+totalwidth9;
	  var width10 = parseInt(width)*0.5789110957960028;
	  var totalwidth10 = parseInt(width)*0.1206064782908339;
	  var width10Sec = width10+totalwidth10;
	  var width11 = parseInt(width)*0.0241212956581668;
	  var totalwidth11 = parseInt(width)*0.087525844245348;
	  var width11Sec = width11+totalwidth11;
	  var width12 = parseInt(width)*0.1895244658855961;
	  var totalwidth12 = parseInt(width)*0.0999310820124052;
	  var width12Sec = width12+totalwidth12;
	  //265, 0, 420, 207
	  $("#centerMenu1").attr("coords" , ''+width1+', 114, 100');
	  $("#centerMenu2").attr("coords" , ''+width2+', 113, 100');
	  $("#centerMenu4").attr("coords" , ''+width4+', 285,'+width4Sec+', 323');
  	  $("#centerMenu5").attr("coords" , ''+width5+', 6,'+width5Sec+', 209');
  	  $("#centerMenu6").attr("coords" , ''+width6+', 2,'+width6Sec+', 206');
  	  $("#centerMenu7").attr("coords" , ''+width7+', 285,'+width7Sec+', 323');
  	  $("#centerMenu8").attr("coords" , ''+width8+', 285,'+width8Sec+', 324');
      $("#centerMenu9").attr("coords" , ''+width9+', 285,'+width9Sec+', 322');
      $("#centerMenu10").attr("coords" , ''+width10+', 285,'+width10Sec+', 325');
      $("#centerMenu11").attr("coords" , ''+width11+', 11,'+width11Sec+', 214');
      $("#centerMenu12").attr("coords" , ''+width12+', 0,'+width12Sec+', 207'); 
  
});

$(window).resize(function() {
	  // This will execute whenever the window is resized

	  var height = $(window).height(); // New height
	  var width = $(window).width(); // New width
	  var width1 = parseInt(width)*0.75;
	  var width2 = parseInt(width)*0.41; 
	  var width4 = parseInt(width)*0.2860096485182633;
	  var totalwidth4 = parseInt(width)*0.124052377670572;
	  var width4Sec = width4+totalwidth4;
	  var width5 = parseInt(width)*0.5306685044796692;
	  var totalwidth5 = parseInt(width)*0.1033769813921433;
	  var width5Sec = width5+totalwidth5;
	  var width6 = parseInt(width)*0.8683666436940041;
	  var totalwidth6 = parseInt(width)*0.1171605789110958;
	  var width6Sec = width6+totalwidth6;
	  var width7 = parseInt(width)*0.1447277739490007;
	  var totalwidth7 = parseInt(width)*0.1171605789110958;
	  var width7Sec = width7+totalwidth7;
	  var width8 = parseInt(width)*0.4341833218470021;
	  var totalwidth8 = parseInt(width)*0.124052377670572;
	  var width8Sec = width8+totalwidth8;
	  var width9 = parseInt(width)*0.7257064093728463;
	  var totalwidth9 = parseInt(width)*0.1219848380427292;
	  var width9Sec = width9+totalwidth9;
	  var width10 = parseInt(width)*0.5789110957960028;
	  var totalwidth10 = parseInt(width)*0.1206064782908339;
	  var width10Sec = width10+totalwidth10;
	  var width11 = parseInt(width)*0.0241212956581668;
	  var totalwidth11 = parseInt(width)*0.087525844245348;
	  var width11Sec = width11+totalwidth11;
	  var width12 = parseInt(width)*0.1895244658855961;
	  var totalwidth12 = parseInt(width)*0.0999310820124052;
	  var width12Sec = width12+totalwidth12;
	  $("#centerMenu1").attr("coords" , ''+width1+', 114, 100');
	  $("#centerMenu2").attr("coords" , ''+width2+', 113, 100');
	  $("#centerMenu4").attr("coords" , ''+width4+', 285,'+width4Sec+', 323');
	  $("#centerMenu5").attr("coords" , ''+width5+', 6,'+width5Sec+', 209');
	  $("#centerMenu6").attr("coords" , ''+width6+', 2,'+width6Sec+', 206');
	  $("#centerMenu7").attr("coords" , ''+width7+', 285,'+width7Sec+', 323');
	  $("#centerMenu8").attr("coords" , ''+width8+', 285,'+width8Sec+', 324');
      $("#centerMenu9").attr("coords" , ''+width9+', 285,'+width9Sec+', 322');
      $("#centerMenu10").attr("coords" , ''+width10+', 285,'+width10Sec+', 325');
      $("#centerMenu11").attr("coords" , ''+width11+', 11,'+width11Sec+', 214');
      $("#centerMenu12").attr("coords" , ''+width12+', 0,'+width12Sec+', 207'); 
	  
	  
	});