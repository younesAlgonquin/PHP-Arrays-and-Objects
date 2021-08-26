<html>

	<head>
			<title>Arrays</title>
			<link type= "text/css" href="StyleSheet.css" rel="StyleSheet">
	</head>
	
	<body>
	
	
		            <?php
                    include_once "Header.php";
                    include_once "Footer.php";
                    include_once "Menu.php";
            
            ?>
			
			
			<div id="content">
			


                    <?php
                    
                    // No key array
                    
                    $noKeyArray = array(1, 2, 3, 4, 5);
                    
                    echo "<h3>No key Array - Output using var_dump</h3>";
                    echo var_dump($noKeyArray);
                    echo "<br>";
                    
                    echo "<h3>No key Array - Output using foreach</h3>";
                    foreach($noKeyArray as $key => $element){
                        
                        echo "key: " . $key . ", value: " . $element . ", key data type: " . gettype($key);
                        echo "<br>";
                    }
                    
                    // String Keys array
                    
                    $stringKeyArray = array(
                    
                        "program" => "Computer Engineering",
                        "course"  => "web programming",
                        "Language" => "PHP",
                        "Assignment" => "Lab7"
                    ); 
                    
                    echo "<h3>String key Array - Output using var_dump</h3>";
                    echo var_dump($stringKeyArray);
                    echo "<br>";
                    
                    echo "<h3>String key Array - Output using foreach</h3>";
                    foreach($stringKeyArray as $key => $element){
                        
                        echo "key: " . $key . ", value: " . $element . ", key data type: " . gettype($key);
                        echo "<br>";
                         
                    }
                    
                    //Integer key array
                    
                    $intKeyArray = array(
                    
                        0 => "A",
                        1 => 1,
                        3 => "B",
                        5 => "C"
                
                    );
                    
                    echo "<h3>Integer key Array - Output using var_dump</h3>";
                    echo var_dump($intKeyArray);
                    echo "<br>";
                    
                    echo "<h3>Integer key Array - Output using foreach</h3>";
                    foreach($intKeyArray as $key => $element){
                        
                        echo "key: " . $key . ", value: " . $element . ", key data type: " . gettype($key);
                        echo "<br>";
                        
                    }
                    
                    //Mixed key array
                    
                    $mixedKeyArray = array(
                    
                        0 => "A",
                        6 => "B",
                        3 => "C",
                        true => "T",
                        false => "F",
                        "D" => "D",
                        "5" => "E",
                        
                    );
                    
                    echo "<h3>Mixed key Array - Output using var_dump</h3>";
                    echo var_dump($mixedKeyArray);
                    echo "<br>";
                    
                    echo "<h3>Mixed key Array - Output using foreach</h3>";
                    foreach($mixedKeyArray as $key => $element){
                        
                        echo "key: " . $key . ", value: " . $element . ", key data type: " . gettype($key);
                        echo "<br>";
                        
                    }
                    
                    // Multi-dimensional (2-D) array
                    
                    $array1 = array(1, 2, 3, 4, 5);
                    $array2 = array(6, 7, 8, 9, 10);
                    $multiDimensionArray = array($array1, $array2);
                   
                    echo "<h3>Multi-dimensional (2-D) array - Output using var_dump</h3>";
                    echo var_dump($multiDimensionArray);
                    echo "<br>";
                    
                    echo "<h3>Multi-dimensional (2-D) array - Output using foreach</h3>";
                    foreach($multiDimensionArray as $key1 => $element1){
                        
                        echo "Level 1 key :" . $key1;
                        echo "<br>";
                        
                        foreach($element1 as $key2 => $element2){
                        
                        echo "Level 2 key: " . $key2 . ", value: " . $element2 . ", key data type: " . gettype($key2);
                        echo "<br>";
                        
                        }
                        
                    }
                    
                    ?>
                    
                    
 			</div>
	</body>
	
</html>