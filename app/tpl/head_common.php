<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= $this->page;?></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<link rel="stylesheet" href="<?= APP_W.'pub/css/bootstrap.min.css'; ?>">
        <link rel="stylesheet" href="<?='pub/css/'.$this->page.'.css';?>">
        <script type="text/javascript" src="app/app.js"></script>
        <script type="text/javascript" src="pub/jQuery-MD5-master/jquery.md5.js"></script>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link rel="stylesheet" href="/maps/documentation/javascript/demos/demos.css">
        <!--<script type="text/javascript">
                $("document").ready(function(){
                        
                        $("#mostrar").click(function(){
                                if (navigator.geolocation) {
                                  navigator.geolocation.getCurrentPosition(coordenadas);
                                }else{
                                  alert('Este navegador es algo antiguo, actualiza para usar el API de localización');                  }
                        });
                        

                        function coordenadas(position) {
                                alert('EStoy aqui');
                              var lat = position.coords.latitude;
                              var lon = position.coords.longitude;
                              var map = document.getElementById("mapa");
                              map.src = "http://maps.google.com/maps/api/staticmap?center=" + lat + "," + lon + "&amp;zoom=15&amp;size=600x480&amp;markers=color:red|label:A|" + lat + "," + lon + "&amp;sensor=false";
                        }
                });
        </script>-->
</head>
