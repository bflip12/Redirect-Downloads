<?
/*StAuth10127: I Bobby Filippopoulos, 000338236 certify that this material is my original work. No other person's work has been used without due acknowledgement. I have not made my work available to anyone else.*/
function populateCsvArray()
{
    date_default_timezone_set('America/Toronto');
    $time = date("Y:m:d H:i:s");
    $csvList = array($_SERVER['REMOTE_ADDR'], $time, $_GET['dl'], $_SERVER['HTTP_REFERER'],$_SERVER['HTTP_USER_AGENT']);
    return $csvList;
}

function populateLogFile($csvList)
{
    $txtFile = fopen('logfile.txt', 'a');
    fputcsv($txtFile, $csvList);
    fclose($txtFile);
}

if ($_GET['dl'] == "mypdf1.pdf")
{
    header('Cache-control: private');
    header('Cache-Control: no-store, no-cache, must-revalidate');
    header('Cache-Control: pre-check=0, post-check=0, max-age=0');
    header('Pragma: anytextexeptno-cache', true);
    header('Content-type: application/pdf');
    header("Content-Disposition: attachment; filename=mypdf1.pdf"); //external
    header('Last-Modified: '.gmdate('D, d M Y H:i:s') . ' GMT');
    header('Expires: 0');
    readfile("hiddenfiles/mypdf1.pdf");
    populateLogFile(populateCsvArray());
}

else if ($_GET['dl'] == "mypdf2.pdf")
{
    header('Cache-control: private');
    header('Cache-Control: no-store, no-cache, must-revalidate');
    header('Cache-Control: pre-check=0, post-check=0, max-age=0');
    header('Pragma: anytextexeptno-cache', true);
    header('Content-type: application/pdf');
    header("Content-Disposition: attachment; filename=mypdf2.pdf"); //external
    header('Last-Modified: '.gmdate('D, d M Y H:i:s') . ' GMT');
    header('Expires: 0');
    readfile("hiddenfiles/mypdf2.pdf");
    populateLogFile(populateCsvArray());
}
else if ($_GET['dl'] == "mypdf3.pdf")
{
    header('Cache-control: private');
    header('Cache-Control: no-store, no-cache, must-revalidate');
    header('Cache-Control: pre-check=0, post-check=0, max-age=0');
    header('Pragma: anytextexeptno-cache', true);
    header('Content-type: application/pdf');
    header("Content-Disposition: attachment; filename=mypdf3.pdf"); //external
    header('Last-Modified: '.gmdate('D, d M Y H:i:s') . ' GMT');
    header('Expires: 0');
    readfile("hiddenfiles/mypdf3.pdf");
    populateLogFile(populateCsvArray());
}
else if ($_GET['dl'] == "page1.htm")
{
    header('Cache-control: private');
    header('Cache-Control: no-store, no-cache, must-revalidate');
    header('Cache-Control: pre-check=0, post-check=0, max-age=0');
    header('Pragma: anytextexeptno-cache', true);
    header('Content-type: txt/html');
    header("Content-Disposition: attachment; filename=page1.htm"); //external
    header('Last-Modified: '.gmdate('D, d M Y H:i:s') . ' GMT');
    header('Expires: 0');
    readfile("hiddenfiles/page1.htm");
    populateLogFile(populateCsvArray());
}
else if ($_GET['dl'] == "page2.htm")
{
    header('Cache-control: private');
    header('Cache-Control: no-store, no-cache, must-revalidate');
    header('Cache-Control: pre-check=0, post-check=0, max-age=0');
    header('Pragma: anytextexeptno-cache', true);
    header('Content-type: txt/html');
    header("Content-Disposition: attachment; filename=page2.htm"); //external
    header('Last-Modified: '.gmdate('D, d M Y H:i:s') . ' GMT');
    header('Expires: 0');
    readfile("hiddenfiles/page2.htm");
    populateLogFile(populateCsvArray());
}
else if ($_GET['dl'] == "kale.jpg")
{
    header('Cache-control: private');
    header('Cache-Control: no-store, no-cache, must-revalidate');
    header('Cache-Control: pre-check=0, post-check=0, max-age=0');
    header('Pragma: anytextexeptno-cache', true);
    header("Content-Type: image/jpeg");
    header("Content-Disposition: attachment; filename=kale.jpg"); //external
    header('Last-Modified: '.gmdate('D, d M Y H:i:s') . ' GMT');
    header('Expires: 0');
    readfile("hiddenfiles/kale.jpg");
    populateLogFile(populateCsvArray());
}
else if ($_GET['dl'] == "logfile.txt")
{
    header('Cache-control: private');
    header('Cache-Control: no-store, no-cache, must-revalidate');
    header('Cache-Control: pre-check=0, post-check=0, max-age=0');
    header('Pragma: anytextexeptno-cache', true);
    header("Content-Type: text/csv");
    header("Content-Disposition: attachment; filename=logfile.csv"); //external
    header('Last-Modified: '.gmdate('D, d M Y H:i:s') . ' GMT');
    header('Expires: 0');
    readfile("logfile.txt");
}
else if ($_GET['dl'] == "noFileFound")
{
  header('Cache-control: private');
  header('Cache-Control: no-store, no-cache, must-revalidate');
  header('Cache-Control: pre-check=0, post-check=0, max-age=0');
  header('Pragma: anytextexeptno-cache', true);
  header("Content-Type: text/html");
  header('Last-Modified: '.gmdate('D, d M Y H:i:s') . ' GMT');
  header('Expires: 0');
  echo '<html><body><h2>Error! No file with this name was available for download. <br> noFileFound  </h2> </body></html>';
}


?>
