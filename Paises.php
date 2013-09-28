<html>
 <head>
  <title>Paises y ciudades</title>
  <link rel="stylesheet" href="color.css" type="text/css"/>
 </head>

 <body background="onu.jpg">
  <header>
   <h1>PAISES Y CIUDADES CON ARRAY</h1>
   <h4>Se pretende mostrar la impres&oacuten de un arreglo de 10 paises con 5 ciudades c/u.</h4>
  </header>
  
  <section>
   <?php
    $Pais=array();
	$Pais["Mexico"]=array("Monterrey","Tepic","Guadalajara","Puebla","Zapopan");
	$Pais["Espa&ntildea"]=array("Madrid","La Coru&ntildea","Bilbao","Granada","Oviedo");
	$Pais["Alemenia"]=array("Berlin","Bremen","Hamburgo","Sajonia","Sarre");
	$Pais["Cuba"]=array("Cardenas","Palma Soriano","Holguin","Habana","Florida");
	$Pais["Colombia"]=array("Santa Marta","Bogot&aacute","Armenia","Soledad","Bello");
	$Pais["Argentina"]=array("Rosario","Mendoza","Buenos Aires","Santa fe","San Juan");
	$Pais["Jap&oacute"]=array("Sahai","Sendai","Okayama","kumamoto","Niigata");
	$Pais["Libia"]=array("Derna","Tripoli","Nalut","Zauiya","Ghat");
	$Pais["Reino Unido"]=array("Londres","Bristol","Exeter","Eastburn","Telford");
	$Pais["Uruguay"]=array("Rivera","Las piedras","Melo","Rocha","Trinidad");
	
	
	foreach($Pais as $nombre=>$ciudades)//<array> as <nombreArray> => <parametros>
	{
	 echo "<dl><ul>";
	 echo "<dt><li><h3>".$nombre."</h3></li></dt>";
	 
	 foreach($Pais[$nombre] as $ciudad)
	 {
	   echo "<dd><li>".$ciudad."</li></dd>";
	 }
	 echo "</ul></dl>";
	}
   ?>
  </section>
  
 </body>
</html>