<?php // content="text/plain; charset=utf-8"
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_line.php');

$datay1 = array(1984, 1984, 2002, 2168, 2154, 2130, 2086, 2086, 2082, 2086, 2086, 2086, 2086, 2086, 2101, 2103, 2110, 2099, 2096, 2089, 2073, 2092, 2087, 2009, 2009, 2053, 2099, 2076, 2043, 2000);


// Setup the graph
$graph = new Graph(800,500);
$graph->SetScale("textlin");

$theme_class= new UniversalTheme;
$graph->SetTheme($theme_class);

$graph->title->Set('TSH Vs USD Exchange Rate');
$graph->SetBox(true);

$graph->yaxis->HideZeroLabel();
$graph->yaxis->HideLine(false);
$graph->yaxis->HideTicks(false,false);

$graph->xaxis->SetTickLabels(array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30));
$graph->xaxis->HideTicks(false, false);
$graph->ygrid->SetFill(false);

$p1 = new LinePlot($datay1);
$graph->Add($p1);

$p1->SetColor("#55bbdd");
$p1->SetLegend('USD/TSH Rates');
$p1->mark->SetType(MARK_FILLEDCIRCLE,'',1.0);
$p1->mark->SetColor('#55bbdd');
$p1->mark->SetFillColor('#55bbdd');
$p1->SetCenter();


$graph->legend->SetFrameWeight(1);
$graph->legend->SetColor('#4E4E4E');
$graph->legend->SetMarkAbsSize(8);


// Output line
$graph->Stroke();

?>
