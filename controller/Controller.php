<?php 
include_once("model/Model.php");  
class Controller {
	private $lightingFileName = "http://192.168.1.147:6161/Infomap/XML/Light/Lighting.xml";
	public function invoke(){
		$modelObject = new Model();
		if(!isset($_GET['page'])){
			include("view/index.php");
		}else{
			//$access = $this->model;
			//$model = "http://192.168.1.234:6161/Infomap/XML/Light/Lighting.xml";
			$pageValue = $_GET['page'];
			$page = strtolower($pageValue);
			switch ($page){
				case "lighting":
				$lightConArr = $modelObject -> lighting($this->lightingFileName);
				include("view/light.php");
				break;
				default:
				echo "The requested URL ".$_SERVER["PHP_SELF"]."?page=".$page." was not found on this server.";
				exit();
				break;
			}
		}
	}
}
?>
