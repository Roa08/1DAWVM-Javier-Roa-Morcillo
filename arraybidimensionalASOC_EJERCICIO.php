<!DOCTYPE html>
<html lang="es">
        <!--  Sea el array definido abajo, crea una tabla por pantalla y muestra los datos del array -->
        <head>
        <meta charset="UTF-8" />
        <title>Cambio para github</title>
        </head>
    <body>
        <?php
        $poblacion= array (
            "España"=> array(
                    "Madrid"=>80000,
                    "Valladolid" => 350000 ,
                    "Oviedo"=>120000),
            "Francia"=>array(
                    "Monaco"=>7000000,
            "Italia"=>array(
                    "Vicario"=>17000000,
                    "Juve"=>200000)         
                    );

        echo "<table border='1'>";
        echo "<tr><td>Pais</td><td>Ciudades</td><td>Poblacion</td>";
        foreach ($poblacion as $paises=>$arrays) {     
            echo "<tr><td>$paises</td>";//<td>Poblacion</td>";
            $bool=1;
            foreach ($arrays as $ciudades => $habitantes){
                if ($bool==1)
                {echo "<td>$ciudades</td><td>$habitantes</td></tr>";$bool=0;}
                else
                echo "<td></td><td>$ciudades</td><td>$habitantes</td></tr>";
                //echo "En el pais $paises La cantidad de habitantes en $habitantes es $v2 <br>";
                }    
    
    
    }
        
     
    
 
 ?>


 </body>
 </html>