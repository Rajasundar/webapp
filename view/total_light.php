<?php include("view/includes/header.php");?>
<script type="text/javascript" src="view/js/light.js"></script>
<body>
<?php include("includes/top_menu.php");?>
<div id="content">
<center>
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
						<div id='volume<?=$i?>' class='volume'><?php include("view/includes/slider_script.php")?><?php } else { ?>
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
		</center></div>
</body>
<?php include("includes/footer.php")?>
