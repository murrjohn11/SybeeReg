<?php
	require_once 'dompdf/lib/html5lib/Parser.php';
	require_once 'dompdf/lib/php-font-lib/src/FontLib/Autoloader.php';
	require_once 'dompdf/lib/php-svg-lib/src/autoload.php';
	require_once 'dompdf/src/Autoloader.php';
	Dompdf\Autoloader::register();

	use Dompdf\Dompdf;
	use Dompdf\Options;

	include 'sql.php';

	$course = $_GET['course'];
	$page = $_GET['page'];

	$options = new Options();
	$options->set('defaultFont','Courier');

	$html = file_get_contents('table.html');
	
	$count = ($page-1)*25;
	$students = $SQL->retrieveTimeins($course);
	foreach($students as $student){
		if($count<25){
			$html = $html."<tr>"."<td class='td1'>".
				$count."</td><td class='td1'>".
				$student['idnum']."</td><td class='td1'>".
				$student['name']."</td><td class='td1'>".
				$student['courseyr']."-".$student['year']."</td><td class='td1'>".
				$student['timein']."</td></tr>";
		}
		$count++;
	}
	// $SQL->updateTable();

	$html = $html."</table></center></body></html>";

	$dompdf = new Dompdf($options);
	$dompdf->loadHtml($html);
	$dompdf->setPaper('Letter','portrait');
	$dompdf->render();
	$dompdf->stream("USC BA Convention 2018.pdf",array("Attachment" => false));
