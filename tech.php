<?php

$xml[0]="https://www.youtube.com/feeds/videos.xml?user=CNETTV";
$logo[0]='<img align="center" src="images/cnettv.jpg" class="img-responsive"  width="100" /></br>';

$xml[1]="https://www.youtube.com/feeds/videos.xml?user=engadget";
$logo[1]='<img align="center" src="images/engadget.png" class="img-responsive"  width="100" /></br>';

$xml[2]="https://www.youtube.com/feeds/videos.xml?user=techcrunch";
$logo[2]='<img align="center" src="images/techcrunch.png" class="img-responsive"  width="100" /></br>';

$xml[3]="https://www.youtube.com/feeds/videos.xml?channel_id=UCVLZmDKeT-mV4H3ToYXIFYg";
$logo[3]='<img align="center" src="images/tech-insider.png" class="img-responsive"  width="100" /></br>';

$xml[4]="https://www.youtube.com/feeds/videos.xml?user=testedcom";
$logo[4]='<img align="center" src="images/tested.png" class="img-responsive"  width="100" /></br>';

$xml[5]="https://www.youtube.com/feeds/videos.xml?user=TheVerge";
$logo[5]='<img align="center" src="images/the-verge.png" class="img-responsive"  width="100" /></br>';


for ($k=0; $k<6; $k++) {
$xmlDoc = new DOMDocument();
$xmlDoc->load($xml[$k]);
//get elements from "<channel>"
$channel=$xmlDoc->getElementsByTagName('entry')->item(0);
//get and output "<item>" elements
$x=$xmlDoc->getElementsByTagName('entry');
//New Row
echo '<div align="center">'.$logo[$k].'</div>';
echo '<div class="row">';
echo '<div class="col-md-2">&nbsp;</div>';
for ($i=0; $i<3; $i++) {
 if($item_title=$x->item($i)){
  $item_title=$x->item($i)->getElementsByTagName('title')
  ->item(0)->childNodes->item(0)->nodeValue;
  $item_link=$x->item($i)->getElementsByTagName('id')
  ->item(0)->childNodes->item(0)->nodeValue;
$key=substr($item_link,9);
echo '<div class="col-md-3">';
//Character count
echo $item_title.'</br><iframe width="280" height="157" src="https://www.youtube.com/embed/'.$key.'" frameborder="0" allowfullscreen></iframe></div>';
                }
        }
echo '<div class="col-md-1">&nbsp;</div></div>';
}x
?>