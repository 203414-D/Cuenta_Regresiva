<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=T">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../wp-content/plugins/temporizador/css/style.css">
    <title>Cuenta Regresiva</title>
</head>

<body>
    <div>
        <?php
        $date = date('2022-08-22');
        $time = ('12:30:00');
        $date_today = $date . ' '. $time;
        echo '<h1>CORRERÁ HASTA LA FECHA</h1>';
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
                document.getElementById("demo").innerHTML = "<div class="+"container"+">"+days + "D/" + " "+hours + "H/" + " "+minutes + "MIN"+"</div>";
                if(distance <0){
                    clearInterval(x);
                    document.getElementById("demo").innerHTML="Expirado";
                }
            }, 1000);
        </script>
        <?php 
            echo '<p id= "demo" ></p>';
        ?>
    </div>
    

</body>
</html>