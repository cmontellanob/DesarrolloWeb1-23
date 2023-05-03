<?php 
include('conexion.php');
$sql="select nombre as profesion,count(*) as cantidad from personas per
join profesiones pro on per.idprofesion=pro.id
group by nombre ";
$resultado = $con->query($sql);
if ($resultado->num_rows > 0) {
    $ydata=[];
    while ($row = $resultado->fetch_assoc()) {
        $ydata[]=intval($row['cantidad']);
        $leyenda[]=$row['profesion'];
    }
    
}
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_line.php');

$timer = new JpgTimer();
$timer->Push();
// Create the graph. These two calls are always required
$graph = new Graph(250,200);
$graph->SetScale("textlin");
$graph->SetMargin(40,20,20,60);
$graph->title->Set("Estadistica por Profesiones");
$graph->footer->right->SetFont(FF_COURIER,FS_ITALIC);

// Create the linear plot
$lineplot=new LinePlot($ydata);

// Add the plot to the graph
$graph->Add($lineplot);

$graph->xaxis->title->Set("Profesiones");
$graph->yaxis->title->Set("Cantidad");
$graph->title->SetFont(FF_FONT1,FS_BOLD);
$graph->yaxis->title->SetFont(FF_FONT1,FS_BOLD);
$graph->xaxis->title->SetFont(FF_FONT1,FS_BOLD);
$lineplot->SetColor("blue");
$lineplot->SetWeight(2);
$graph->yaxis->SetColor("red");
$graph->yaxis->SetWeight(2);
$graph->SetShadow();
// Display the graph
$graph->Stroke();
?>
