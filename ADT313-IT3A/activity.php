<h1> Hands-on-Acticvity </h1>
<?php
$StudentID=0;
$table = array(
    "Header" => array(
        "StudentID",
        "Firstname",
        "Lastname",
        "Section",
        "Course",
        "Yearlevel"
    ),
    "Body" => [
        array(
            "Firstname" => "Cristan",
            "Middlename" => "Pardilla",
            "Lastname" => "Legaspi",
            "Section"=> "A",
            "Course" => "BSIT",
            "Yearlevel" => "3" 
        ),
        array(
            "Firstname" => "Regimon ",
            "Middlename" => "Arellano",
            "Lastname" => "Marcelo",
            "Section"=> "A",
            "Course" => "BSIT",
            "Yearlevel" => "3" 
        ),
         array(
            "Firstname" => "Trishia",
            "Middlename" => "Landicho",
            "Lastname" => "Manabat",
            "Section"=> "A",
            "Course" => "BSIT",
            "Yearlevel" => "3"  
        ), 
        array(
            "Firstname" => "Andrie",
            "Middlename" => "Pardilla",
            "Lastname" => "Legaspi",
            "Section"=> "A",
            "Course" => "BSIT",
            "Yearlevel" => "3"  
        ),
         array(
            "Firstname" => "Cristan",
            "Middlename" => "Pardilla",
            "Lastname" => "Legaspi",
            "Section"=> "A",
            "Course" => "BSIT",
            "Yearlevel" => "3" 
        ), 
        array(
            "Firstname" => "Cristan",
            "Middlename" => "Pardilla",
            "Lastname" => "Legaspi",
            "Section"=> "A",
            "Course" => "BSIT",
            "Yearlevel" => "3" 
        ), 
        array(
            "Firstname" => "Cristan",
            "Middlename" => "Pardilla",
            "Lastname" => "Legaspi",
            "Section"=> "A",
            "Course" => "BSIT",
            "Yearlevel" => "3"  
        ), 
        array(
            "Firstname" => "Cristan",
            "Middlename" => "Pardilla",
            "Lastname" => "Legaspi",
            "Section"=> "A",
            "Course" => "BSIT",
            "Yearlevel" => "3" 
        )
     ]
    
 );


   $StudentID = 0;

   echo "<table border = '5'>";
   echo "<tr>";

   foreach ($table["Header"] as $Header){
    echo "<th>$Header</th>";
   }
   echo "</tr>";

   foreach ($table["Body"]as $row){
    echo "<tr>";
    echo "<td>" .($StudentID + 1)."</td>";
    $StudentID++;
    foreach ($table["Header"] as $Header){
        if($Header !== "StudentID"){
            $x = str_replace(' ','',$Header);
            echo "<td>{$row[$x]}</td>";
        }
    }
echo "</tr>";
   }
   ?>




      



    





