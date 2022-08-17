<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=T">
    <title>Cuenta Regresiva</title>
</head>
<body>
    <?php 
    $date = date('2022-08-18');
    $time = ('12:30:00');
    $date_today = $date . ' '. $time;
    echo '<p>correra hasta la fecha</p>';
    echo '<P>'.$date_today;'</p>';
     ?>
    <script type ="text/javascript">
        var count_id = "<?php echo $date_today;?>";
        var countDownDate = new Date(count_id).getTime();
        var x = setInterval(function(){
            var now = new Date().getTime();
            var distance = countDownDate - now;
            var days = Math.floor(distance/(1000 * 60 * 60 *24));
            var hours = Math.floor((distance%(1000*60*60*24))/(1000*60*60));
            var minutes = Math.floor((distance%(1000*60*60*24))/(1000*60));

            document.getElementById("demo").innerHTML = days + "d" + " "+hours + "h" + " "+minutes + "min";
            if(distance <0){
                clearInterval(x);
                document.getElementById("demo").innerHTML="Expirado";
            }
        }, 1000);
    </script>
    <?php 
        echo '<p id= "demo" ></p>';
    ?>
</body>
</html>