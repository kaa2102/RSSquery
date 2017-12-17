<?php

$xml[0]="https://www.youtube.com/feeds/videos.xml?user=AlJazeeraEnglish";
$logo[0]='<img align="center" src="images/aljazeera.png" class="img-responsive"  width="100" /></br>';

$xml[1]="https://www.youtube.com/feeds/videos.xml?user=bbcnews";
$logo[1]='<img align="center" src="images/bbc.png" class="img-responsive"  width="100" /></br>';

$xml[2]="https://www.youtube.com/feeds/videos.xml?user=NewsOnABC";
$logo[2]='<img align="center" src="images/abc-au.jpg" class="img-responsive"  width="100" /></br>';

$xml[3]="https://www.youtube.com/feeds/videos.xml?user=sabcdigitalnews";
$logo[3]='<img align="center" src="images/sabc-news.jpg" class="img-responsive"  width="100" /></br>';

$xml[4]="https://www.youtube.com/feeds/videos.xml?user=france24";
$logo[4]='<img align="center" src="images/france24.png" class="img-responsive"  width="100" /></br>';

$xml[5]="https://www.youtube.com/feeds/videos.xml?user=telemundotv";
$logo[5]='<img align="center" src="images/telemundo.jpg" class="img-responsive"  width="100" /></br>';

$xml[6]="https://www.youtube.com/feeds/videos.xml?user=channelsweb";
$logo[6]='<img align="center" src="images/channels.jpg" class="img-responsive"  width="100" /></br>';

$xml[7]="https://www.youtube.com/feeds/videos.xml?user=standardgroupkenya";
$logo[7]='<img align="center" src="images/standardgroup.png" class="img-responsive"  width="100" /></br>';

$xml[8]="https://www.youtube.com/feeds/videos.xml?channel_id=UCYPvAwZP8pZhSMW8qs7cVCw";
$logo[8]='<img align="center" src="images/indiatoday.jpg" class="img-responsive"  width="100" /></br>';

for ($k=0; $k<9; $k++) {
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