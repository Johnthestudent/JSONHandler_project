<?php
    $person_json = file_get_contents("listofblocks.json");

    //If the second parameter is false, then an object is returned.
    //Otherwise, an array is the return.
    $decoded_json = json_decode($person_json, true);
    
    //Helper variable for snatching data from the given object.
    $number_generated = $_GET["quantity"];

    //Grabbing the n-th block, depending on the n number given in the form.
    if($number_generated == 1)
    {
        if(!isset($decoded_json["blocks"][0]["blockDescription"])) 
        {
            echo "<h1>404</h1>";
            echo "<h3>Block cannot be found!</h3>";
            echo "<h4>Please go back to the forms section to create the block!</h4>";
            header("Status: 404 Not Found");
        }
        else
        {
            echo "<h1>The block is <i>$number_generated</i> :</h1>";
            $gettheblock = $decoded_json["blocks"][0]["name"];
            echo "<img src='saltblock.png', style='border: 1px solid black'>";
        }
    }
    else if ($number_generated == 2)
    {
        if(!isset($decoded_json["blocks"][1]["blockDescription"])) 
        {
            echo "<h1>404</h1>";
            echo "<h3>Block cannot be found!</h3>";
            echo "<h4>Please go back to the forms section to create the block!</h4>";
            header("Status: 404 Not Found");
        }
        else
        {
            echo "<h1>The block is <i>$number_generated</i> :</h1>";
            $gettheblock = $decoded_json["blocks"][1]["name"];
            echo "<img src='quartzblock.png', style='border: 1px solid black'>";
        }
    }
    else if ($number_generated == 3)
    {
        if(!isset($decoded_json["blocks"][2]["blockDescription"])) 
        {
            echo "<h1>404</h1>";
            echo "<h3>Block cannot be found!</h3>";
            echo "<h4>Please go back to the forms section to create the block!</h4>";
            header("Status: 404 Not Found");
        }
        else
        {
            echo "<h1>The block is <i>$number_generated</i> :</h1>";
            $gettheblock = $decoded_json["blocks"][2]["name"];
            echo "<img src='supermeselamp.png', style='border: 1px solid black'>";
        }
    }
    else if ($number_generated == 4)
    {
        if(!isset($decoded_json["blocks"][3]["blockDescription"])) 
        {
            echo "<h1>404</h1>";
            echo "<h3>Block cannot be found!</h3>";
            echo "<h4>Please go back to the forms section to create the block!</h4>";
            header("Status: 404 Not Found");
        }
        else
        {
            echo "<h1>The block is <i>$number_generated</i> :</h1>";
            $gettheblock = $decoded_json["blocks"][3]["name"];
            echo "<img src='darkstoneblock.png', style='border: 1px solid black'>";
        }
    }
    else if ($number_generated == 5)
    {
        if(!isset($decoded_json["blocks"][4]["blockDescription"])) 
        {
            echo "<h1>404</h1>";
            echo "<h3>Block cannot be found!</h3>";
            echo "<h4>Please go back to the forms section to create the block!</h4>";
            header("Status: 404 Not Found");
        }
        else
        {
            echo "<h1>The block is <i>$number_generated</i> :</h1>";
            $gettheblock = $decoded_json["blocks"][4]["name"];
            echo "<img src='lightstoneblock.png', style='border: 1px solid black'>";
        }
    }
    else if($number_generated == 6)
    {
        if(!isset($decoded_json["0"]["blockDescription"]))
        {
            echo "<h1>404</h1>";
            echo "<h3>Block cannot be found!</h3>";
            echo "<h4>Please go back to the forms section to create the block!</h4>";
            header("Status: 404 Not Found");
        }
        else
        {
            echo "<h1>The block is <i>$number_generated</i> :</h1>";
             $gettheblock = $decoded_json["0"]["name"];
        }
    }   
    else if($number_generated == 7)
    {
        if(!isset($decoded_json["1"]["blockDescription"]))
        {
            echo "<h1>404</h1>";
            echo "<h3>Block cannot be found!</h3>";
            echo "<h4>Please go back to the forms section to create the block!</h4>";
            header("Status: 404 Not Found");
        }
        else
        {
            echo "<h1>The block is <i>$number_generated</i> :</h1>";
             $gettheblock = $decoded_json["1"]["name"];
        }
    }
    else if($number_generated == 8)
    {
        if(!isset($decoded_json["2"]["blockDescription"]))
        {
            echo "<h1>404</h1>";
            echo "<h3>Block cannot be found!</h3>";
            echo "<h4>Please go back to the forms section to create the block!</h4>";
            header("Status: 404 Not Found");
        }
        else
        {
            echo "<h1>The block is <i>$number_generated</i> :</h1>";
             $gettheblock = $decoded_json["2"]["name"];
        }
    }
    else if($number_generated == 9)
    {
        if(!isset($decoded_json["3"]["blockDescription"]))
        {
            echo "<h1>404</h1>";
            echo "<h3>Block cannot be found!</h3>";
            echo "<h4>Please go back to the forms section to create the block!</h4>";
            header("Status: 404 Not Found");
        }
        else
        {
            echo "<h1>The block is <i>$number_generated</i> :</h1>";
             $gettheblock = $decoded_json["3"]["name"];
        }
    }
    else if($number_generated == 10)
    {
        if(!isset($decoded_json["4"]["blockDescription"]))
        {
            echo "<h1>404</h1>";
            echo "<h3>Block cannot be found!</h3>";
            echo "<h4>Please go back to the forms section to create the block!</h4>";
            header("Status: 404 Not Found");
        }
        else
        {
            echo "<h1>The block is <i>$number_generated</i> :</h1>";
             $gettheblock = $decoded_json["4"]["name"];
        }
    }

    //If the user is about to add a secret to the list of blocks.
    if(isset($_GET["addblock"]))
    {
        function get_data() 
        {
            $name = $_GET['name'];
            $file_name='listofblocks'. '.json';
    
            if(file_exists("$file_name")) 
            { 
                $current_data=file_get_contents("$file_name");
                $array_data=json_decode($current_data, true);
                
                $extra=array(
                    'name' => $_GET['name'],
                    'blockDescription' => $_GET['description'],
                    'blockLocation' => $_GET['location'],
                    'blockHardness' => $_GET['hardness'],
                    'createdAt' => date("Y.m.d"),
                );
                $array_data[]=$extra;
                echo "file exist<br/>"; //This echo is for checking.
                return json_encode($array_data);
            }
            else 
            {
                $datae=array();
                $datae[]=array(
                    'name' => $_GET['name'],
                    'blockDescription' => $_GET['description'],
                    'blockLocation' => $_GET['location'],
                    'blockHardness' => $_GET['hardness'],
                    'createdAt' => date("Y.m.d"),
                );
                echo "file not exist<br/>";
                return json_encode($datae);   
            }
        }
  
        //If it has the name like above, then the existing file will be overwritten in a way of getting expanded with the new data.
        $file_name='listofblocks'. '.json';
        
        if(file_put_contents("$file_name", get_data())) 
        {
            echo '<h3>Block created successfully! Please go back to the forms section!</h3>';
        }                
        else 
        {
            echo 'There is some error! Block could not be created!';                
        }
    }
?>