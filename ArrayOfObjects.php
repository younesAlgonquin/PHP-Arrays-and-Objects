
<html>

    <head>
    
    <title>Array of objects</title>
    <link type= "text/css" href="StyleSheet.css" rel="StyleSheet">
    
    </head>
    
    <body>
    
    
                <?php
                include_once "Header.php";
                include_once "Footer.php";
                include_once "Menu.php";
                include_once "Employee.php";
                include_once "Supervisor.php";
                
               
                ?>
    			
    			
    			<div id="content">
    						
    				
    				
    				
    				<?php
    				
    				    $employee1 = new Employee();
    				    $employee1->setEmployeeId(1);
    				    $employee1->setFirstName("Chris");
    				    $employee1->setLastName("Rogers");
    				    
    				    
    				    $employee2 = new Employee();
    				    $employee2->setEmployeeId(2);
    				    $employee2->setFirstName("Matt");
    				    $employee2->setLastName("Prior");
    				    
    				    
    				    $employee3 = new Employee();
    				    $employee3->setEmployeeId(3);
    				    $employee3->setFirstName("Cindy");
    				    $employee3->setLastName("Burnskill");
    				    
    				    
    				    $employee4 = new Employee();
    				    $employee4->setEmployeeId(4);
    				    $employee4->setFirstName("Elizabeth");
    				    $employee4->setLastName("Ford");
    				    
    				    
    				    $employee5 = new Employee();
    				    $employee5->setEmployeeId(5);
    				    $employee5->setFirstName("Doug");
    				    $employee5->setLastName("May");
    				    
    				    
    				    $employee6 = new Employee();
    				    $employee6->setEmployeeId(6);
    				    $employee6->setFirstName("John");
    				    $employee6->setLastName("Hopkins");
    				    
    				    $employees1 = array($employee1, $employee2, $employee3);
    				    $employees2 = array($employee4, $employee5, $employee6);
    				    
    				    $supervisor1 = new Supervisor();
    				    $supervisor1->setEmployeeId(7);
    				    $supervisor1->setFirstName("Adam");
    				    $supervisor1->setLastName("Phillip");
    				    $supervisor1->setEmployees($employees1);
    				    
    				    $supervisor2 = new Supervisor();
    				    $supervisor2->setEmployeeId(8);
    				    $supervisor2->setFirstName("Nicolas");
    				    $supervisor2->setLastName("Jones");
    				    $supervisor2->setEmployees($employees2);
    				    
    				    $supervisors = array($supervisor1, $supervisor2);
    				    

    				        
    				    foreach($supervisors as $supervisor){
    				        
        				    foreach($supervisor->getEmployees() as $employee){
        				        printf("Employee Id: %d, Name: %s %s, Supervisor: %s %s", $employee->getEmployeeId(), $employee->getFirstName(), 
        				               $employee->getLastName(), $supervisor->getFirstName(), $supervisor->getLastName());
        				        
        				        echo "<br>";
    				            }
    				        echo "<br>";
    				    }
    				        
    
    				?>
    				
    			</div>
    			
    			
    </body>
	
</html>