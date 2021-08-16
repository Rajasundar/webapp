 <!DOCTYPE html> 
<html> 
	<head> 
		<title>Milan Web Application</title> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0;"  />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<link rel="stylesheet" href="view/css/jquery.mobile-1.0.min.css" />
		<link rel="stylesheet" href="view/css/mobile.css" />
		<link rel="stylesheet" href="view/css/reset.css" />
		<script type="text/javascript" src="http://code.jquery.com/jquery-1.6.4.min.js"></script>
		<script type="text/javascript" src="http://code.jquery.com/mobile/1.0/jquery.mobile-1.0.min.js"></script>
	</head>
	<body>
	<div id="block-new-game">
			<div data-role="page" class="page blog">
			<div data-role="header" data-theme="b">
				<a href="javascript:history.back()"  data-icon="arrow-l" data-direction="reverse">Back</a>
				<a href="http://localhost/milanapp/index.php" data-icon="home" data-direction="reverse">Home</a>
				<h1>Play Spot 6 Diff - Paranorman</h1>
			</div><!--/header-->
			<div data-role="content" class="full-width" id="content">
				<div class="latest-post">
					<div class="post-content">
						
			<table class='gridtable' id='table12'>
				<tr>
					<!-- <th>Zone</th> -->
					<th>Device</th>
					<th>Level</th>
					<th>Status</th>
				</tr>
				<?php
				$room[] = "";
				$i=0;
				foreach ($lightConArr as $value){
					$roomVal = $value->Room;
					$currentLevel = $value->Current_Level;
					$controlType = $value->Control_Type;
					$lightId = $value->Light_Id;
					//echo "<br />";
					$trim = trim($roomVal);
					if(in_array($trim , $room)){ ?>
				<tr>
					<!-- <td><?=$value->Room?>
					</td>-->
					<td><?=$value->Light_Name?>
					</td>
					<td><?php if($controlType != "ON/OFF"){?>&nbsp; &nbsp; Dimmer :<span id='volume-value<?=$i?>'></span>%<br />
						<br />
						<div id='volume<?=$i?>' class='volume'><?php include("view/includes/slider_script.php")?><?php }
						 else { ?>
						<a href="javascript:void(0)" class="onoff" id="on<?=$i?>" onclick="getImage('<?php echo $i; ?>' , 'on')">ON</a>
						<a href="javascript:void(0)" class="onoff" id="off<?=$i?>" onclick="getImage('<?php echo $i; ?>' , 'off')">OFF</a>
						<?php } ?></div></td>
						
					<td id="status<?php echo $i;?>">  <?php if($currentLevel <= 25){
        	  echo '<img src="view/images/light_25.png" />';
              }else if(($currentLevel > 25) && ($currentLevel <= 50)) {
              echo '<img src="view/images/light_50.png" />';
                  }else if(($currentLevel > 50) && ($currentLevel <= 75)) {
              echo '<img src="view/images/light_75.png" />';
                  }else if(($currentLevel > 75) && ($currentLevel <= 100)) {
              echo '<img src="view/images/light_100.png" />';
                  } ?></td>
				</tr>
				<?php 	}else {
					array_push($room , $roomVal); ?>
				<tr>
					<!-- <td><?=$value->Room?>
					</td>-->
					<td><?=$value->Light_Name?>
					</td>
					<td><?php if($controlType != "ON/OFF"){?>&nbsp; &nbsp; Dimmer :<span id='volume-value<?=$i?>'></span>%<br />
						<br />
						<div id='volume<?=$i?>' class='volume'><?php include("view/includes/slider_script.php")?><?php } else { ?>
						&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
						<a href="javascript:void(0)" class="onoff" id="on<?=$i?>" onclick="getImage('<?php echo $i; ?>' , 'on')">ON</a>
						<a href="javascript:void(0)" class="onoff" id="off<?=$i?>" onclick="getImage('<?php echo $i; ?>' , 'off')">OFF</a>
						<?php  } ?></div></td>
					<td id="status<?php echo $i;?>">  <?php if($currentLevel <= 25){
        	  echo '<img src="view/images/light_25.png" />';
              }else if(($currentLevel > 25) && ($currentLevel <= 50)) {
              echo '<img src="view/images/light_50.png" />';
                  }else if(($currentLevel > 50) && ($currentLevel <= 75)) {
              echo '<img src="view/images/light_75.png" />';
                  }else if(($currentLevel > 75) && ($currentLevel <= 100)) {
              echo '<img src="view/images/light_100.png" />';
                  } ?></td>
					<?php }$i++;}?>
		</table>
					</div>
				</div>
				
		</div><!-- /page -->

	
	 </div>	 
  </div>
  </body>
  </html>
