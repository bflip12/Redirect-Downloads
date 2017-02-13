<html>
<head>
	<style>
	<!--StAuth10127: I Bobby Filippopoulos, 000338236 certify that this material is my original work. No other person's work has been used without due acknowledgement. I have not made my work available to anyone else.-->
			table {margin-top: 50px}
			table th {width: 100px}
			table td {text-align: center}
	</style>
</head>
<body>
	<h1>Logging PDF and other File downloads with HTTP Headers</h1></br>
	<p>Please feel free to download these PDF's and HTML files. Reload this page</p></br>
	<ul>
		<li><a href = "redirect.php?dl=mypdf1.pdf">mypdf1.pdf</a></li>
		<li><a href = "redirect.php?dl=mypdf2.pdf">mypdf2.pdf</a></li>
		<li><a href = "redirect.php?dl=mypdf3.pdf">mypdf3.pdf</a></li>
		<li><a href = "redirect.php?dl=page1.htm">page1.htm</a></li>
		<li><a href = "redirect.php?dl=page2.htm">page2.htm</a></li>
		<li><a href = "redirect.php?dl=kale.jpg">kale.jpg</a></li>
		<li><a href = "redirect.php?dl=noFileFound">No File Found</a></li>
		<br>
		<li>1. View the raw data <a href = "logfile.txt">logfile.txt</a></li>
		<li>Inline load into spreadsheet<a href = "redirect.php?dl=logfile.txt">logfile.csv</li>
		<li><a	href = "webpage.php?act=calc">See Calculated Results and Pie Chart</a></li>
		<?
		if (isset($_GET['act']))
		{
				$fileCountTotal=0;
				$fileCountPercentage = array();
		    $fileCount = array(
		    "mypdf1.pdf"   => 0,
		    "mypdf2.pdf"  => 0,
		    "mypdf3.pdf"  => 0,
		    "page1.htm" => 0,
		    "page2.htm"  => 0,
		    "kale.jpg"    => 0,
		);
		 if (($handle = fopen("logfile.txt", "r")) !== FALSE)
		 {
		     while (($data = fgetcsv($handle, 1000, ",")) !== FALSE)
		      {
		         $num = count($data);
		         for ($c=0; $c < $num; $c++)
		         {

		             if($data[$c] == 'mypdf1.pdf')
		             {
		               $fileCount["mypdf1.pdf"]++;

		             }
		             elseif($data[$c] == 'mypdf2.pdf')
		             {
		               $fileCount["mypdf2.pdf"]++;
		             }
		             elseif($data[$c] == 'mypdf3.pdf')
		             {
		               $fileCount["mypdf3.pdf"]++;
		             }
		             elseif($data[$c] == 'page1.htm')
		             {
		               $fileCount["page1.htm"]++;
		             }
		             elseif($data[$c] == 'page2.htm')
		             {
		               $fileCount["page2.htm"]++;
		             }
		             elseif($data[$c] == 'kale.jpg')
		             {
		               $fileCount["kale.jpg"]++;
		             }
		         }
		     }
		     fclose($handle);
				 $urlKeySeperated = implode('|', array_keys($fileCount));
				 $urlValueSeperated = implode(',', $fileCount);
				 $chartWebsite = 'https://chart.googleapis.com/chart?cht=p3&amp;chs=500x200&amp;chd=t:'.$urlValueSeperated.'&amp;chl='.$urlKeySeperated;
				 foreach ($fileCount as $value)
		 	   {
						$fileCountTotal += $value;
				 }
		 }
		echo '<img style = "float:left;" src="'.$chartWebsite.'">';
		echo '<table>';
		echo '<tbody>';
		echo '<tr>';
		echo '<th stlye = "width:100px;">Resource</th>';
		echo '<th stlye = "width:100px;">Percentage</th>';
		echo '</tr>';
		foreach ($fileCount as $key => $value)
		{
			echo '<tr>';
			echo '<td>' . $key . '</td>';
			echo '<td>' . round(($value/$fileCountTotal)*100) . '</td>';
			echo '</tr>';
		}
		echo '</body>';
		echo '</table>';
	 }
		 ?>
	</ul>
</body>
</html>
