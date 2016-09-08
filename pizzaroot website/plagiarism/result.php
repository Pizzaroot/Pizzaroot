<?php
function ncd($x, $y) { 
	$cx = strlen(gzcompress($x));
	$cy = strlen(gzcompress($y));
	return (strlen(gzcompress($x . $y)) - min($cx, $cy)) / max($cx, $cy);
}

/*$search_results_json = file_get_contents('https://www.googleapis.com/customsearch/v1?key=AIzaSyAn7_m_3TZc2JFVGSGzx_Jp50kiX2sNQtk&cx=000229057339129572873:ztrit4tsxzi&q='.$_POST['text']);
$search_results = json_decode($search_results_json);
$url = $search_results->items[0]->link;
$contents = file_get_contents($url);
*/
$unique = floor(100 * ncd($_POST['text'], $_POST['text2']));
echo $unique.'% Unique';

?>