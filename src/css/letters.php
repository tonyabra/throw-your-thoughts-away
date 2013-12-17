<?php

$maxAn = 30; /* Number of animations that are used for the letters */ 
$maxPic = 5;
$maxTime = 30;
$browser = "webkit";


// This function modified from: http://php.net/manual/en/function.get-browser.php
function browser_info($agent=null) {
	
	global $browser;
	
  // Declare known browsers to look for
  $known = array('msie', 'firefox', 'safari', 'webkit', 'opera', 'netscape',
    'konqueror', 'gecko');

  // Clean up agent and build regex that matches phrases for known browsers
  // (e.g. "Firefox/2.0" or "MSIE 6.0" (This only matches the major and minor
  // version numbers.  E.g. "2.0.0.6" is parsed as simply "2.0"
  $agent = strtolower($agent ? $agent : $_SERVER['HTTP_USER_AGENT']);
  $pattern = '#(?<browser>' . join('|', $known) .
    ')[/ ]+(?<version>[0-9]+(?:\.[0-9]+)?)#';

  // Find all phrases (or return empty array if none found)
  if (!preg_match_all($pattern, $agent, $matches)) return array();

  // Since some UAs have more than one phrase (e.g Firefox has a Gecko phrase,
  // Opera 7,8 have a MSIE phrase), use the last one found (the right-most one
  // in the UA).  That's usually the most correct.
  $i = count($matches['browser'])-1;
  $ua = array($matches['browser'][$i] => $matches['version'][$i]);

  if ($ua['firefox']){
	$browser = "moz";  
  }
}


function writePiece($name, $topIn, $leftIn, $rotateIn){
	global $maxAn;
	global $maxPic;
	global $maxTime;
	global $browser;
	
	?>

	<img src="images/letters/<?php echo $name; ?>0<?php echo rand(0,$maxPic); ?>.png" 
	     style="position: absolute; top: <?php echo $topIn; ?>px; left: <?php echo $leftIn; ?>px;
             -<?php echo $browser; ?>-transform: rotate(<?php echo $rotateIn; ?>deg);
             -webkit-animation-name: enter<?php echo $rotateIn; ?>-<?php echo rand(0,$maxAn); ?>;
             -webkit-animation-duration: <?php echo $maxTime; ?>.<?php echo rand(0,9); ?>s;
             -webkit-animation-timing-function: linear;
	     -webkit-animation-iteration-count: infinite;" />

	<?php	
}


function writeA(){
	
	?><div class="letter" style="width: 150px;" ><?php

		writePiece("slant", 0, 0, 0);
		writePiece("slant", 0, 60, 140);
		writePiece("quarterline", 70, 60, 90);

	?></div><?php
 
	return true; 
}

function writeB(){
	
	?><div class="letter" style="width: 115px;"><?php

		writePiece("line", 0, 0, 0);
		writePiece("halfround", 0, 10, 0);
		writePiece("halfround", 75, 10, 0);        
                  
	?></div><?php

	return true; 
}

function writeC(){
	
	?><div class="letter" style="width: 115px;" ><?php

		writePiece("round", 0, 0, 180);
	
	?></div><?php 

	return true; 
}

function writeD(){
	
	?><div class="letter" style="width: 120px;" ><?php 

		writePiece("line", 0, 0, 0);
		writePiece("round", 0, 13, 0);
        
	?></div><?php 

	return true; 
}

function writeE(){

	
	?><div class="letter" style="width: 95px;" ><?php

		writePiece("line", 0, 0, 0);
		writePiece("quarterline", -20, 35, 90);
		writePiece("quarterline", 50, 35, 90);
		writePiece("quarterline", 130, 35, 90);
        
	?></div><?php 

	return true; 
}

function writeF(){

	
	?><div class="letter" style="width: 95px;" ><?php 

		writePiece("line", 0, 0, 0);
		writePiece("quarterline", -20, 35, 90);
		writePiece("quarterline", 50, 35, 90);

	?></div><?php 

	return true; 
}

function writeG(){

	
	?><div class="letter" style="width: 150px;" ><?php 

		writePiece("round", 0, -5, 180);
		writePiece("halfround", 72, 55,0);

	?></div><?php 

	return true; 
}

function writeH(){
	
	?><div class="letter" style="width: 105px;" ><?php 

		writePiece("line", 0, 0, 0);
		writePiece("quarterline", 50, 35, 90);
		writePiece("line", 0, 60, 180);

	?></div><?php 

	return true; 
}

function writeI(){
	
	?><div class="letter" style="width: 45px;" ><?php

		writePiece("line", 0, 0, 0);

	?></div><?php 

	return true; 
}

function writeJ(){
	
	?><div class="letter" style="width: 115px;" ><?php

		writePiece("halfline", 0, 69, 0);
		writePiece("halfround", 80, 5, 90);

	?></div><?php 

	return true; 
}

function writeK(){
	
	?><div class="letter" style="width: 105px;" ><?php

		writePiece("line", 0, 0, 0);
		writePiece("halfline", 0, 35, 40);
		writePiece("halfline", 70, 35, 140);
	
	?></div><?php 

	return true; 
}

function writeL(){
	
	?><div class="letter" style="width: 85px;" ><?php 

		writePiece("line", 0, 0, 0);
		writePiece("quarterline", 130, 35, 90);

        ?></div><?php 

	return true; 
}

function writeM(){
	
	?><div class="letter" style="width: 150px;" ><?php


		writePiece("line", 0, 0, 0);
		writePiece("halfline", 0, 30, 140);
		writePiece("halfline", -5, 78, 40);
		writePiece("line", 0, 110, 0);
    
	?></div><?php 

	return true; 
}

function writeN(){
	
	?><div class="letter" style="width: 120px;" ><?php

		writePiece("line", 0, 0, 0);
		writePiece("slant", 0, 15, 140);
		writePiece("line", 0, 70, 0);

	?></div><?php
 
	return true; 
}

function writeO(){
	
	?><div class="letter" style="width: 150px;" ><?php

		writePiece("round", 0, -5, 180);
		writePiece("round", -3, 50, 0);

    	?></div><?php 

	return true; 
}

function writeP(){
	
	?><div class="letter" style="width: 110px;" ><?php

		writePiece("line", 0, 0, 0);
		writePiece("halfround", 0, 10, 0);
 
   	?></div><?php
 
	return true; 
}

function writeQ(){
	
	?><div class="letter" style="width: 150px;" ><?php

		writePiece("round", 0, -5, 180);
		writePiece("round", -3, 50, 0);
		writePiece("quarterline", 110, 90, 140);
	?></div><?php 

	return true; 
}

function writeR(){
	
	?><div class="letter" style="width: 135px;" ><?php 

		writePiece("line", 0, 0, 0);
		writePiece("halfround", 0, 10, 0);
		writePiece("halfline", 70, 60, 140);
	?></div><?php 

	return true; 
}

function writeS(){
	
	?><div class="letter" style="width: 120px;" ><?php 

		writePiece("halfround", 2, 0, 180);
		writePiece("halfround", 73, 20, 0);

    	?></div><?php 

	return true; 
}

function writeT(){
	
	?><div class="letter" style="width: 120px;" ><?php

		writePiece("line", 0, 35, 0);
		writePiece("halfline", -40, 35, 90);

	?></div><?php
 
	return true; 
}

function writeU(){
	
	?><div class="letter" style="width: 110px;" ><?php
		
		writePiece("halfline", 0, -11, 0);
		writePiece("halfline", 0, 64, 0);
		writePiece("halfround", 80, 0, 90);

	?></div><?php
 
	return true; 
}

function writeV(){
	
	?><div class="letter" style="width: 150px;" ><?php

		writePiece("slant", 0, 0, 140);
		writePiece("slant", 0, 60, 0);

	?></div><?php 

	return true; 
}

function writeW(){

	?><div class="letter" style="width: 150px;" ><?php

		writePiece("line", 0, 0, 0);
		writePiece("halfline", 65, 30, 40);
		writePiece("halfline", 65, 78, 140);        
		writePiece("line", 0, 110, 0);

	?></div><?php
 
	return true; 
}

function writeX(){
	
	?><div class="letter" style="width: 110px;" ><?php

		writePiece("slant", 0, 10, 0);
		writePiece("slant", 0, 10, 140);

	?></div><?php 

	return true; 
}

function writeY(){
	
	?><div class="letter" style="width: 150px;" ><?php

		writePiece("halfline", 70, 55, 0);
		writePiece("halfline", -10, 25, 140);
		writePiece("halfline", -10, 85, 40);

	?></div><?php 

	return true; 
}

function writeZ(){
	
	?><div class="letter" style="width: 110px;" ><?php

		writePiece("quarterline", -20, 35, 90);
		writePiece("slant", 0, 15, 0);
		writePiece("quarterline", 130, 50, 90);

	?></div><?php 

	return true; 
}

function write1(){

	?><div class="letter" style="width: 80px;" ><?php

		writePiece("line", 0, 30, 0);
		writePiece("quarterline", 0, 15, 40);

	?></div><?php 

	return true; 
}

function write2(){

	
	?><div class="letter" style="width: 120px;" ><?php

		writePiece("round", 0, 0, 0);
		writePiece("halfline", 110, 45, 90);

	?></div><?php 

	return true; 
}

function write3(){
	
	?><div class="letter" style="width: 105px;" ><?php

		writePiece("halfround", 0, 0, 0);
		writePiece("halfround", 75, 0, 0);

	?></div><?php 

	return true; 
}

function write4(){
	
	?><div class="letter" style="width: 120px;" ><?php

		writePiece("line", 0, 70, 0);
		writePiece("halfline", 50, 45, 90);
		writePiece("halfline", 0, 5, 0);
	?></div><?php 

	return true; 
}

function write5(){

	?><div class="letter" style="width: 120px;" ><?php

		writePiece("quarterline", -15, 30, 90);
		writePiece("halfline", 0, 0, 0);
		writePiece("halfround", 75, 0, 0);
	
	?></div><?php 
	
	return true; 
}

function write6(){
	
	?><div class="letter" style="width: 130px;" ><?php

		writePiece("round", 0, 0, 180);
		writePiece("halfround", 72, 25, 0);
		writePiece("quarterline", 51, 35, 90);

	?></div><?php 

	return true; 
}

function write7(){
	
	?><div class="letter" style="width: 105px;" ><?php

		writePiece("quarterline", -20, 35, 90);
		writePiece("slant", 0, 15, 0);
		writePiece("quarterline", 55, 35, 90);

	?></div><?php 

	return true; 
}

function write8(){
	
	?><div class="letter" style="width: 130px;" ><?php

		writePiece("halfround", 0, 25, 0);
		writePiece("halfround", 75, 25, 0);
		writePiece("halfround", 0, 0, 180);
		writePiece("halfround", 75, 0, 180);

	?></div><?php 

	return true; 
}

function write9(){
	
	?><div class="letter" style="width: 120px;" ><?php 

		writePiece("slant", 0, 25, 0);
		writePiece("halfround", 0, 0, 180);


	?></div><?php

	return true; 
}

function write0(){
	
	?><div class="letter" style="width: 150px;" ><?php

		writePiece("slant", 0, 35, 0);
		writePiece("round", 0, 0, 180);
		writePiece("round", -3, 45, 0);

	?></div><?php 

	return true; 
}

function writePeriod(){
	
	?><div class="letter" style="width: 35px;" ><?php

		writePiece("dot", 145, 0, 0);

    	?></div><?php 
		
	return true; 
}

function writeComma(){
	
	?><div class="letter" style="width: 35px;" ><?php

		writePiece("quarterline", 125, 0, 0);
    	
	?></div><?php 
		
	return true; 
}

function writeQuest(){

	
	?><div class="letter" style="width: 80px;" ><?php

		writePiece("quarterline", 70, 0, 0);
		writePiece("halfround", 0, -10, 0);
		writePiece("dot", 145, 0, 0);

    	?></div><?php 
		
	return true; 
}

function writeBang(){
	
	?><div class="letter" style="width: 40px;" ><?php

		writePiece("halfline", 10, -5, 0);
		writePiece("dot", 145, 0, 0);
    
	?></div><?php 
		
	return true; 
}

function writeColon(){
	
	?><div class="letter" style="width: 35px;" ><?php

		writePiece("dot", 55, 0, 0);
		writePiece("dot", 105, 0, 0);

    	?></div><?php 
		
	return true; 
}

function writeSemiColon(){
	
	?><div class="letter" style="width: 35px;" ><?php

		writePiece("dot", 55, 0, 0);
		writePiece("quarterline", 100, 0, 0);

    	?></div><?php 
		
	return true; 
}

function writeApostrophe(){

	?><div class="letter" style="width: 35px;" ><?php

		writePiece("quarterline", 0, 0, 0);

    	?></div><?php 
		
	return true; 
}

function writeQuote(){
	
	?><div class="letter" style="width: 70px;" ><?php

		writePiece("quarterline", 0, 0, 0);
		writePiece("quarterline", 0, 35, 0);
    	?></div><?php 
		
	return true; 
}

function writeDash(){
	
	?><div class="letter" style="width: 70px;" ><?php

		writePiece("quarterline", 55, 115, 90);

    	?></div><?php 
		
	return true; 
}

function writeDollar(){

	
	?><div class="letter" style="width: 120px;" ><?php

		writePiece("line", 0, 40, 0);
		writePiece("halfround", 8, 5, 180);
		writePiece("halfround", 70, 15, 0);

    	?></div><?php 
		
	return true; 
}

function writeSlash(){
	
	?><div class="letter" style="width: 85px;" ><?php

		writePiece("slant", 0, 0, 0);

	?></div><?php 
		
	return true; 
}

function writePlus(){
	
	?><div class="letter" style="width: 70px;" ><?php 

		writePiece("quarterline", 53, 15, 0);
		writePiece("quarterline", 55, 15, 90);
    	?></div><?php 
		
	return true; 
}

function writeAt(){
	
	?><div class="letter" style="width: 150px;" ><?php

		writePiece("round", 0, -5, 180);
		writePiece("halfround", 40, 25, 180);
		writePiece("round", -3, 50, 0);
		writePiece("halfline", 45, 75, 0);
    	?></div><?php 
		
	return true; 
}

function writeUnderscore(){
	
	?><div class="letter" style="width: 70px;" ><?php

		writePiece("quarterline", 130, 15, 90);

   	?></div><?php 
		
	return true; 
}

function printThought($thoughtIn){

	$lineLength = -75;	
	$widthArray = array(0, 50, 100, 150, 25, 75, 175);
	$randWidth = $widthArray[rand(0, 7)];
	$letterLength = array('A' => 150, 
						  'B' => 115, 
						  'C' => 115, 
						  'D' => 120, 
						  'E' => 95, 
						  'F' => 95, 
						  'G' => 150, 
						  'H' => 105, 
						  'I' => 45, 
						  'J' => 115, 
						  'K' => 105, 
						  'L' => 85, 
						  'M' => 150, 
						  'N' => 120, 
						  'O' => 150, 
						  'P' => 110, 
						  'Q' => 150, 
						  'R' => 135, 
						  'S' => 120, 
						  'T' => 120, 
						  'U' => 110, 
						  'V' => 150, 
						  'W' => 150, 
						  'X' => 110, 
						  'Y' => 150, 
						  'Z' => 110, 
						  '1' => 80, 
						  '2' => 120, 
						  '3' => 105, 
						  '4' => 120, 
						  '5' => 120, 
						  '6' => 130, 
						  '7' => 105, 
						  '8' => 130,
						  '9' => 120, 
						  '0' => 150, 
						  '.' => 35, 
						  ',' => 35, 
						  '?' => 80, 
						  '!' => 40, 
						  ':' => 35, 
						  ';' => 35,
						  '\'' => 35,
						  '"' => 70, 
						  '-' => 70, 
						  '$' => 120, 
						  '/' => 85, 
						  '&' => 70, 
						  '+' => 70, 
						  '@' => 150, 
						  '_' => 70);
	
		$thoughtIn = strtoupper($thoughtIn);
		$wordsIn = explode(" ", $thoughtIn);

                          ?><div class="strangeSpace" style="width: <?php echo $randWidth; ?>px;"></div><?php

                        echo "\\\\" . $lineLength . " crazy line length ocho";

		foreach ($wordsIn as $wordIn)	{
		                               echo "\\\\" . $lineLength . " crazy line deux";

		
			$array = str_split($wordIn);
		
			$wordlength = 10;
			foreach($array as $char) {
				$wordlength += $letterLength[$char];
			}
			
			$lineLength += $wordlength + 75;
			echo "\\\\" . $lineLength . " crazy line length";
				
				?> 
				<div class="word" style="width: <?php echo $wordlength; ?>px;" >
				<?php 
			
			foreach($array as $char) {
		
				if (ctype_alnum($char))
					call_user_func("write" . $char);
				else if ($char == '.')
					writePeriod();
				else if ($char == ',')
					writeComma();
				else if ($char == ';')
					writeSemiColon();
				else if ($char == ':')
					writeColon();
				else if ($char == '\'')
					writeApostrophe();
				else if ($char == '"')
					writeQuote();
				else if ($char == '?')
					writeQuest();
				else if ($char == '!')
					writeBang();
				else if ($char == '-')
					writeDash();
				else if  ($char == '$')
					writeDollar();
				else if ($char == '/')
					writeSlash();
				else if (($char == '&') || ($char == '+'))
					writePlus();
				else if ($char == '@')
					writeAt();
				else{

				}
				
		}
		
			?> 
			
			</div>

			<div class="space" ></div>

			<?php 

                        if ($lineLength > 1024){

                          $randWidth = $widthArray[rand(0,6)];

                          ?>
			  <div class="lineBreaker"></div>
                          <div class="strangeSpace" style="width: <?php echo $randWidth; ?>px;"></div>
                          <?php
                          $lineLength = $randWidth;
                        }



	}
}


function prepAnimation($currAngle, $currNum){
	
	$startVals = array(-4000, 4000);
	$xVal = $yVal = $startRotation = $endRotation = 0;
	$Hi = 15;
	$counter2 = 0;

	for ( $counter = 0; $counter <= $currNum; $counter++) {
		$xVal = $startVals[rand(0,1)];
		$yVal = $startVals[rand(0,1)];
		$startRotation = rand(-360, 360);
		$endRotation = rand(-360, 360);
		$timeIn = rand (10, 20);
		
		?>
        @-webkit-keyframes enter<?php echo $currAngle; ?>-<?php echo $counter; ?>{
            0% {-webkit-transform: rotate(<?php echo $startRotation; ?>deg) translate(<?php echo $xVal; ?>px, <?php echo $yVal; ?>px);}
            <?php echo $timeIn; ?>% {-webkit-transform: rotate(<?php echo $currAngle; ?>deg) translate(0, 0);} 
	    <?php

	    for ($counter2 = $timeIn + 1; $counter2 < 52; $counter2 = $counter2 + 2){
	    
	    echo $counter2; ?>% {-webkit-transform: rotate(<?php echo $currAngle; ?>deg) translate(<?php echo rand(0, $Hi); ?>px, <?php echo rand(0, $Hi); ?>px);}
	    <?php	   
	    
	    }

	    ?>
	    52% {-webkit-transform: rotate(<?php echo $currAngle; ?>deg) translate(0, 0);}
            72% {-webkit-transform: rotate(<?php echo $endRotation; ?>deg) translate(<?php echo $xVal; ?>px, <?php echo $yVal; ?>px);}
            100% {-webkit-transform: rotate(<?php echo $endRotation; ?>deg) translate(<?php echo $xVal; ?>px, <?php echo $yVal; ?>px);}
        }
        
		<?php 
	}
}

function printTrash(){

		    writeL();   
                    writeO();
                    writeA();
                    writeD();
                    writeI();
                    writeN();
                    writeG();
		    writePeriod();
		    writePeriod();
		    writePeriod();

		for ( $counter = 0; $counter <= $maxPic; $counter++) {

		               ?>

                    <img src="images/letters/round0<?php echo $counter; ?>.png" style="position: absolute; top: -250px; left: <?php echo rand(0, 800); ?>px;" />
                    <img src="images/letters/dot0<?php echo$counter; ?>.png" style="position: absolute; top: -250px; left: <?php echo rand(0, 800); ?>px;" />
 		    <img src="images/letters/halfline0<?php echo $counter; ?>.png" style="position: absolute; top: -250px; left: <?php echo rand(0, 800); ?>px;" />
    	     	    <img src="images/letters/quarterline0<?php echo $counter; ?>.png" style="position: absolute; top: -250px; left: <?php echo rand(0, 800); ?>px;" />
		    <img src="images/letters/line0<?php echo $counter; ?>.png" style="position: absolute; top: -250px; left: <?php echo rand(0, 800); ?>px;" />
                    <img src="images/letters/slant0<?php echo $counter; ?>.png" style="position: absolute; top: -250px; left: <?php echo rand(0, 800); ?>px;" />
                    <img src="images/letters/halfround0<?php echo $counter; ?>.png" style="position: absolute; top: -250px; left: <?php echo rand(0, 800); ?>px;" />

 		               <?php
		}
}

?>