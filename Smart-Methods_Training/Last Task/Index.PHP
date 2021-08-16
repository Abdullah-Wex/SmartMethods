<?php
$server = "localhost";
$username = "root";
$password = "";
$DB = "SmartMethod";
$con = new mysqli($server,$username,$password,$DB);
$SQuery = "SELECT * FROM motors";
$result = $con->query($SQuery);

    if ($result->num_rows > 0) {
        while ($row2 = $result->fetch_assoc()) {
            $row=$row2;
            // echo "motor 1 : ".$row["Motor1"]." motor 2 : ".$row["Motor2"]." motor 3 : ".$row["Motor3"]." motor 4 : ".$row["Motor4"]." motor 5 : ".$row["Motor5"]." motor 6 : ".$row["Motor6"]."<br>";
        }
        
        $s1=$row["Motor1"];
        $s2=$row["Motor2"];
        $s3=$row["Motor3"];
        $s4=$row["Motor4"];
        $s5=$row["Motor5"];
    }else{
    $s1 = 0;
$s2 = 0;
$s3 = 0;
$s4 = 0;
$s5 = 0;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Css/Style.css">
    <title>Last Task</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
        <div class="container">
            <div class="card">
                <input type="range" name="s1" id="s1" min="0" max="180" value="<?php echo $s1?>" oninput="SliderChange()">
                <label id="l1"></label>
            </div>
            <div class="card">
                <input type="range" name="s2" id="s2" min="0" max="180" value="<?php echo $s2?>" oninput="SliderChange()">
                <label id="l2"></label>
            </div>
            <div class="card">
                <input type="range" name="s3" id="s3" min="0" max="180" value="<?php echo $s3?>" oninput="SliderChange()">
                <label id="l3"></label>
            </div>
            <div class="card">
                <input type="range" name="s4" id="s4" min="0" max="180" value="<?php echo $s4 ?>" oninput="SliderChange()">
                <label id="l4"></label>
            </div>
            <div class="card">
                <input type="range" name="s5" id="s5" min="0" max="180" value="<?php echo $s5?>" oninput="SliderChange()">
                <label id="l5"></label>
            </div>
            <button type="submit">Save</button>
        </div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $Motor1 = $_POST['s1'];
            $Motor2 = $_POST['s2'];
            $Motor3 = $_POST['s3'];
            $Motor4 = $_POST['s4'];
            $Motor5 = $_POST['s5'];
            $Motor6 = 0;
            $IInsert = "INSERT INTO motors(Motor1, Motor2, Motor3, Motor4, Motor5, Motor6) VALUES ($Motor1,$Motor2,$Motor3,$Motor4,$Motor5,$Motor6);";
            $con->query($IInsert);
            header("Location: \Smart-Methods_Training\Third Task");
        }
        ?>
    </form>
    <script>
        var s1 = document.getElementById('s1');
        var l1 = document.getElementById('l1');
        l1.innerHTML = s1.value;

        
        var s2 = document.getElementById('s2');
        var l2 = document.getElementById('l2');
        l2.innerHTML = s2.value;
        var s3 = document.getElementById('s3');
        var l3 = document.getElementById('l3');
        l3.innerHTML = s3.value;
        var s4 = document.getElementById('s4');
        var l4 = document.getElementById('l4');
        l4.innerHTML = s4.value;
        var s5 = document.getElementById('s5');
        var l5 = document.getElementById('l5');
        l5.innerHTML = s5.value;

        function SliderChange(){
            l1.innerHTML = s1.value; 
            l2.innerHTML = s2.value; 
            l3.innerHTML = s3.value; 
            l4.innerHTML = s4.value; 
            l5.innerHTML = s5.value; 
        }

    </script>
</body>
</html>