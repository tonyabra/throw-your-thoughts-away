<?php

	$numberOfShapes = 60;
	$maxPic = 5;
	$maxTime = 35;
        $page = $_SERVER['PHP_SELF'];     	

	//header("Refresh: $maxTime; url=" . $page);

	function writePiece($animationIn){
		 
		 $shapes = array("slant", "round", "halfround", "line", "halfline");
		 $angles = array(0, 40, 90, 140, 180);

		 $name = $shapes[rand(0, 4)];        	 
		 $topIn = rand(200, 824);
		 $leftIn = rand(200, 824);
		 $rotateIn = $angles[rand(0, 4)];

		 global $numberOfShapes;
		 global $maxAn;
        	 global $maxPic;
        	 global $maxTime;	 
		 		 
        ?>

        <img src="images/letters/<?php echo $name; ?>0<?php echo rand(0,$maxPic); ?>.png" 
             style="position: absolute; top: <?php echo $topIn; ?>px; left: <?php echo $leftIn; ?>px;
             -webkit-animation-name: enter-<?php echo $animationIn; ?>;
             -webkit-animation-duration: <?php echo rand( ($maxTime / 2), $maxTime); ?>.<?php echo rand(0,99); ?>s;
             -webkit-animation-timing-function: linear;
             -webkit-animation-iteration-count: infinite;" />

        <?php   

	}

function prepAnimation($currNum){
        
        $startVals = array(-2500, 2500);
        $xVal = $yVal = $startRotation = $endRotation = 0;

        $xVal = $startVals[rand(0,1)];
        $yVal = $startVals[rand(0,1)];
        $startRotation = rand(-360, 360);
        $endRotation = rand(-360, 360);
	$midRotation = $startRotation - $endRotation;
	$scale = rand(45, 80);

                ?>
        @-webkit-keyframes enter-<?php echo $currNum; ?>{
            0% {-webkit-transform: rotate(<?php echo $startRotation; ?>deg) translate(<?php echo $xVal; ?>px, <?php echo $yVal; ?>px) scale(0.<?php echo $scale; ?>);}
            50% {-webkit-transform: rotate(<?php echo $midRotation; ?>deg) translate(0, 0)  scale(0.<?php echo $scale; ?>);}
            100% {-webkit-transform: rotate(<?php echo $endRotation; ?>deg) translate(<?php echo $xVal * -1; ?>px, <?php echo $yVal * -1; ?>px)  scale(0.<?php echo $scale; ?>)}
        }
        
                <?php 
   
}


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>throw your thoughts away</title>
  <style type="text/css">
  		html, body{
		   height: 100%;
		   overflow: hidden;
		}
		
		body{
		  background: black;
		}
		
		.screenView{
		  display: block;
		  height: 768px;
		  width: 1024px;
		  
		}
<?php
	for ( $counter = 0; $counter <= $numberOfShapes; $counter++) {
	    prepAnimation($counter);
	}
?>	
  </style>
  
</head>

<body>

<div class="screenView">

<?php
	for ( $counter = 0; $counter <= $numberOfShapes; $counter++) {
	  writePiece($counter);	    
	}
?>

<p style="position: absolute; z-index: 100; top: 1000px; left: 50%; margin-left: -250px; width: 500px; text-align: center; font-size: 65px; font-family: Helvetica; color: #ccc;">txt<br />978.242.5861</p>

</div>


</body>
</html>