<?php
require_once '../lib/simple_html_dom.php';
header('Content-type: text/json; charset=utf-8' );

$html = file_get_html('http://news.dbanotes.net');

$feeds       = $html->find('td.title a');
$feeds_infos = $html->find('td.subtext');

$data = array();

for ($i=0; $i <= 31; $i += 1) {
	$news = array();
	$feed = $feeds[$i];

	$feed_info = $feeds_infos[$i];
	$infoChunks = explode(" ", $feed_info->plaintext);

	$news['title'] = $feed->innertext;
	$news['link']  = $feed->href;
	$news['points'] = $infoChunks[0];
	$news['by'] = $infoChunks[3];
	$news['time'] = $infoChunks[4].' '.$infoChunks[5];

	$data[] = $news;
}

echo json_encode($data);

?>