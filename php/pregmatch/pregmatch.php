<?php
// Replace text in string for wordpress

$string1 = '[related articles="57175,57243,57305" title="Related Reading" position="right"]';
$string2 = '<p>&nbsp;<img path="2ecd420cd225e05a978a6891a05713d0"></p><a href="">some text here</a>';
$string3 = '<p><span style="font-family: inherit">__</span></p><div id="article-text"><p><em>Jeremy. You can follow him on Twitter at&</em></p><p><em>For more, follow us on Twitter at&nbsp;<a href="http://www.twitter.com/torontostandard">@torontostandard</a>, and&nbsp;subscribe to our&nbsp;<a href="http://www.torontostandard.com/page/newsletter">newsletter</a>.</em></p>';
$string4 = 'kasum<p class="normal">____</p><p class="normal">Thomas Rankin<a href="/page/newsletter/" target="_blank">Newsletter</a>.</em></p>boom';
echo "<br />Before conversion " . $string4;
echo "<br />After conversion " . cleanupArticles($string4);


/*
$sequence1 = "[caption]text inside caption info[/caption]";
preg_match("/\[caption\](.*?)\[\/caption\]/", $sequence1, $sequence1R);

echo "<br /> Seq 1 = " .$sequence1;
echo "<br /> After pattern matching Seq 1 = ".$sequence1R[1];
var_dump($sequence1R);

$sequence2 = '[video brightcove_id="1403043187001"]';
preg_match("/\[video\sbrightcove_id=\"(.*?)\"\]/", $sequence2, $sequence2R);

echo "<br /> Seq 2 = " .$sequence2;
echo "<br /> After pattern matching Seq 2 = ".$sequence2R[1];
var_dump($sequence2R);

//[video youtube_id="g25G1M4EXrQ"]
$sequence3 = '[video youtube_id="1403043187001"]';
preg_match("/\[video\syoutube_id=\"(.*?)\"\]/", $sequence3, $sequence3R);

echo "<br /> Seq 3 = " .$sequence3;
echo "<br /> After pattern matching Seq 3 = ".$sequence3R[1];
var_dump($sequence3R);

// Pattern replace

$sequence4 = 'Hello Channel [video youtube_id="1403043187001"] down the alley';
$sequence4 = preg_replace("/\[video\syoutube_id=\"(.*?)\"\]/", "hellow", $sequence4);

echo "<br /> Seq 4 replace = " .$sequence4;
*/


function cleanupArticles($passArticles){

   $passArticles = preg_replace("/\[related articles=\"(.*?)\"\]/", "", $passArticles);
   //$passArticles = preg_replace("/\<img\spath=\"(.*?)\"\>/", "", $passArticles);
   //$passArticles = preg_replace("/\<img\salt=\"(.*?)\"\>/", "", $passArticles);
   $passArticles = preg_replace("/\<img\>/", "", $passArticles);
   $passArticles = preg_replace("/\<p\>(.*?)\<img\spath=\"(.*?)\"\>\<\/p\>/", "", $passArticles);
   $passArticles = preg_replace("/\<p(.*?)____(.*?)Newsletter\<\/a\>.\<\/em\>\<\/p\>/", "", $passArticles);
	
   return $passArticles;
}