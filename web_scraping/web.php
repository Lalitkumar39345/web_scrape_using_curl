<?php
include 'simple_html_dom.php';
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,
	'https://www.ndtv.com/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$output = curl_exec($ch);
curl_close($ch);
echo '<body>';
echo '<h1>Web Scraping using cURL</h1>';
$data=file_get_html('https://www.ndtv.com/');

echo $data->find('.featured_cont',0)->innertext;

 ?>