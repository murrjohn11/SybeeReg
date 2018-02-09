<?php
	require_once 'dompdf/lib/html5lib/Parser.php';
	require_once 'dompdf/lib/php-font-lib/src/FontLib/Autoloader.php';
	require_once 'dompdf/lib/php-svg-lib/src/autoload.php';
	require_once 'dompdf/src/Autoloader.php';
	Dompdf\Autoloader::register();

	use Dompdf\Dompdf;
	use Dompdf\Options;

	include 'sql.php';

	$page = $_GET['page'];

	$options = new Options();
	$options->set('defaultFont','Courier');

	$html = file_get_contents('table.html');
	
	$count = 1;
	$students = $SQL->retrieveTimeins();
	foreach($students as $student){
		if($count > ($page - 1)*41 && $count <= $page*41){
			$html = $html."<tr>"."<td class='td1'>".
				$count."</td><td class='td1'>".
				$student['idnum']."</td><td class='td1'>".
				$student['name']."</td><td class='td1'>".
				$student['courseyr']."</td><td class='td1'>".
				$student['timein']."</td></tr>";
		}
		$count++;
	}

	$html = $html."</table></center></body></html>";

	$dompdf = new Dompdf($options);
	$dompdf->loadHtml($html);
	$dompdf->setPaper('Letter','landscape');
	$dompdf->render();
	$dompdf->stream("USC BA Convention 2018.pdf",array("Attachment" => false));
