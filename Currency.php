<html>

	<head>
			<title>Currency</title>
			<link type= "text/css" href="StyleSheet.css" rel="StyleSheet">
	</head>
	
	<body>
	
	
		    <?php
                    include_once "Header.php";
                    include_once "Footer.php";
                    include_once "Menu.php";
                    

                   
                    
            ?>
			
			
			<div id="content">
			

						
				<form action ="Currency.php" method ="get">
				
				
					<label for ="srcamt">Convert: </label>
					<input type ="number"  step="0.01" id="srcamt" name="srcamt" min="0" value="<?php echo $_GET['srcamt'];?>" />
					
				    <select name="basecurr" id="basecurr">
                        <option value="Canadian Dollar" <?php if ($_GET["basecurr"] =="Canadian Dollar") echo "selected";?>>Canadian Dollar</option>
                        <option value="New Zealand Dollar" <?php if ($_GET["basecurr"] =="New Zealand Dollar") echo "selected";?>>New Zealand Dollar</option>
                        <option value="US Dollar" <?php if ($_GET["basecurr"] =="US Dollar") echo "selected";?>>US Dollar</option>
                    </select>
                      
                    <label for ="destcurr">to: </label>
                    <select name="destcurr" id="destcurr">
                        <option value="Canadian Dollar" <?php if ($_GET["destcurr"] =="Canadian Dollar") echo "selected";?>>Canadian Dollar</option>
                        <option value="New Zealand Dollar" <?php if ($_GET["destcurr"] =="New Zealand Dollar") echo "selected";?>>New Zealand Dollar</option>
                        <option value="US Dollar" <?php if ($_GET["destcurr"] =="US Dollar") echo "selected";?>>US Dollar</option>
                    </select>
						
					<input type="submit" value="Convert">
					
				</form>
				
				
				<?php
				
				
				$currencies = array(
				    
				    "CAD" =>  "Canadian Dollar",
				    "NZD" => "New Zealand Dollar",
				    "USD" => "US Dollar"
				);
				
				
				$rates = array(
				    
				    "CAD" => 0.97645,
				    "NZD" => 1.20642,
				    "USD" => 1.0
				    
				);
				
				if(isset($_GET['srcamt'])){	
				    
				    $srcamt= $_GET["srcamt"];
				    $basecurr= $_GET["basecurr"];
				    $destcurr= $_GET["destcurr"];
				
    				foreach($currencies as $key1 => $element1){
    				    
    				    if ($element1 == $basecurr ){
    				        
    				        foreach($currencies as $key2 => $element2){
    				            
    				            if ($element2 == $destcurr ){
    				                
    				                $output_amount= ($srcamt/$rates[$key1]) * $rates[$key2];
    				                printf("%.2f %s converts to %.2f %s",$srcamt, $basecurr, $output_amount, $destcurr);
    				            }
    				        }
    				    }
				    
				}
				
				
				
				}//end if isset

				?>
				
			</div>
			
			
	</body>
	
</html>