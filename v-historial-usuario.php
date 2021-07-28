<html>

<head>


<title></title>



</head>

<body>


<div id="header">
			<ul class="nav">
				
				<li><a href="c-menu.php">Inicio</a></li>
				<li><a href="c-historial-usuario.php">Realizar otra Busqueda</a></li>
			</ul>
		</div>
		</h1>


<form action="c-historial-usuario.php" method="POST">
            
        <div id = centrar> 


           
            <div class="field" id="buscar">

            
      <input type="text" id="buscar" name= "buscar" placeholder="Buscar Registro"/>

            </div>

            <div class = "bs">
              
            </div>


      

            <table class="table" border=2px>
      <thead><br>
      <div>
            <th>correo</th>
            <th>clave</th>
          
        </div>
   </thead>

<tbody>



<?php

include "v-busqueda-usuario.php";

while($row= mysqli_fetch_array($sql_query)){ $i+=1?>

<tr> 
                <td><?=$row['correo']; echo "    - $i";?></td>
                <td><?=$row['clave']?></td>
           
            </tr>


<?php }


?></table></form>

<!-- (2)(3)  (0)(1)   -->
<!-- (1)(2) -->

<?php 
    /**for($i = 0; $i<=8; $i++){
        for($j = 0; $j<=1; $j++){
            $b += 1;
            $a[$i][$j] = $b;
        }
    }
    var_dump($a);

    echo "<br1>".$a[2][0];**/
?>

<?php




?>
</body>
</html>

