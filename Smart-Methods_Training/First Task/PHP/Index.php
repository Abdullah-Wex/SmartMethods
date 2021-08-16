<?php

try {
    $servername = "localhost";
    $username = "iWexiL";
    $password = "1234";
    $DB = "smartmethod";
    // Create connection
    $conn = new mysqli($servername, $username, $password,$DB);
    $Table = "motors";    
    
    $SQuery = "select * from $Table;";
    $result = $conn->query($SQuery);

    if ($result->num_rows > 0) {
        while ($row2 = $result->fetch_assoc()) {
            $row=$row2;
            // echo "motor 1 : ".$row["Motor1"]." motor 2 : ".$row["Motor2"]." motor 3 : ".$row["Motor3"]." motor 4 : ".$row["Motor4"]." motor 5 : ".$row["Motor5"]." motor 6 : ".$row["Motor6"]."<br>";
        }
        
        $motor1=$row["Motor1"];
        $motor2=$row["Motor2"];
        $motor3=$row["Motor3"];
        $motor4=$row["Motor4"];
        $motor5=$row["Motor5"];
        $motor6=$row["Motor6"];
    }else {
        $motor1=0;
        $motor2=0;
        $motor3=0;
        $motor4=0;
        $motor5=0;
        $motor6=0;
    }
    

} catch (\Throwable $th) {
    $motor1=0;
    $motor2=0;
    $motor3=0;
    $motor4=0;
    $motor5=0;
    $motor6=0;
    //throw $th;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/Task.css">
    <title>First Task</title>    
</head>
<body>


<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <div class="container">
        <div class="card">
            <input name="motor1" id="motor1" type="range" min="0" max="180" value="<?php echo $motor1?>" oninput="ChangeSlider()" >
            <label id="label1"><?php echo $motor1?></label>
        </div>
        <div class="card">
            <input name="motor2" id="motor2" type="range" min="0" max="180" value="<?php echo $motor2?>" oninput="ChangeSlider()" >
            <label id="label2"><?php echo $motor2?></label>
        </div>
        <div class="card">
            <input name="motor3" id="motor3" type="range" min="0" max="180" value="<?php echo $motor3?>" oninput="ChangeSlider()" >
            <label id="label3"><?php echo $motor3?></label>
        </div>
        <div class="card">
            <input name="motor4" id="motor4" type="range" min="0" max="180" value="<?php echo $motor4?>" oninput="ChangeSlider()" >
            <label id="label4"><?php echo $motor4?></label>
        </div>
        <div class="card">
            <input name="motor5" id="motor5" type="range" min="0" max="180" value="<?php echo $motor5?>" oninput="ChangeSlider()" >
            <label id="label5"><?php echo $motor5?></label>
        </div>
        <div class="card">
            <input name="motor6" id="motor6" type="range" min="0" max="180" value="<?php echo $motor6?>" oninput="ChangeSlider()" >
            <label id="label6"><?php echo $motor6?></label>
        </div>
            <button type="submit" >Save</button>
    </div>
</form>
<button id="BackButton" ><a  href="../../Second Task/">Second Task</a></button>
    <div class="bg-svg">
        <img src="../SVG/Background.svg">
    </div>
    
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // collect value of input field
        $Motor1 = $_POST['motor1'];
        $Motor2 = $_POST['motor2'];
        $Motor3 = $_POST['motor3'];
        $Motor4 = $_POST['motor4'];
        $Motor5 = $_POST['motor5'];
        $Motor6 = $_POST['motor6'];
        $SQuery = "insert into motors(`Motor1`, `Motor2`, `Motor3`, `Motor4`, `Motor5`, `Motor6`) values('$Motor1','$Motor2','$Motor3','$Motor4','$Motor5','$Motor6');";
        $conn->query($SQuery);

        
        header("Location:/Smart-Methods_Training/First%20Task/php/");
      }
    ?>
    <script>
        
  
        var motor1 = document.getElementById("motor1");
        var label1 = document.getElementById("label1");
        label1.innerHTML = motor1.value;
        
        var motor2 = document.getElementById("motor2");
        var label2 = document.getElementById("label2");
        label2.innerHTML = motor2.value;
        
        var motor3 = document.getElementById("motor3");
        var label3 = document.getElementById("label3");
        label3.innerHTML = motor3.value;
        
        var motor4 = document.getElementById("motor4");
        var label4 = document.getElementById("label4");
        label4.innerHTML = motor4.value;
        
        var motor5 = document.getElementById("motor5");
        var label5 = document.getElementById("label5");
        label5.innerHTML = motor5.value;
        
        var motor6 = document.getElementById("motor6");
        var label6 = document.getElementById("label6");
        label6.innerHTML = motor6.value;
        
        function ChangeSlider(){
            label1.innerHTML = motor1.value 
            label2.innerHTML = motor2.value 
            label3.innerHTML = motor3.value 
            label4.innerHTML = motor4.value 
            label5.innerHTML = motor5.value 
            label6.innerHTML = motor6.value 
        }

  window.watsonAssistantChatOptions = {
      integrationID: "5b3a6989-b753-4ed1-bbb5-e2f17e85d7b3", // The ID of this integration.
      region: "eu-gb", // The region your integration is hosted in.
      serviceInstanceID: "3a0144d7-1089-4c3e-bc21-4cb00dcab0f6", // The ID of your service instance.
      onLoad: function(instance) { instance.render(); }
    };
  setTimeout(function(){
    const t=document.createElement('script');
    t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
    document.head.appendChild(t);
  });
    </script>
        



</body>
</html>