<!DOCTYPE html>
<html lang="es">
        <!--  Sea el array definido abajo, crea una tabla por pantalla y muestra los datos del array -->
        <head>
        <meta charset="UTF-8" />
        <title>Ejemplo de formulario en la propia página</title>
        </head>
    <body>
        <?php
        $poblacion= array (
            "España"=> array(
                    "Palencia"=>80000,
                    "Valladolid" => 350000 ,
                    "Oviedo"=>120000),
            "Francia"=>array(
                    "Paris"=>7000000,
                    "Lyon"=>2100000),
            "Italia"=>array(
                    "Roma"=>17000000,
                    "Florencia"=>200000)         
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