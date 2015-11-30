<link
	href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css"
	rel="stylesheet" type="text/css" />
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script
	src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
<script type='text/javascript'>;
	$( "#volume<?=$i?>").slider({range: "min",
        value:  <?=$currentLevel?>,
        min: 0,
        max: 100,
        slide: function(event, ui) {
          $( "#volume-value<?=$i?>" ).text( ui.value );
          if(parseInt(ui.value) <= 25){
        	  $("#status<?=$i?>").html('<img src="view/images/light_25.png" />');
              }else if((parseInt(ui.value) > 25) && (parseInt(ui.value) <= 50)) {
              $("#status<?=$i?>").html('<img src="view/images/light_50.png" />');
                  }else if((parseInt(ui.value) > 50) && (parseInt(ui.value) <= 75)) {
              $("#status<?=$i?>").html('<img src="view/images/light_75.png"  />');
                  }else if((parseInt(ui.value) > 75) && (parseInt(ui.value) <= 100)) {
              $("#status<?=$i?>").html('<img src="view/images/light_100.png"  />');
                  }
        }
       });
	$( "#volume-value<?=$i?>").text( $( "#volume<?=$i?>" ).slider( "value" ));
	</script>
