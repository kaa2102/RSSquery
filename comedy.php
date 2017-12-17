<?php

$xml[0]="https://www.youtube.com/feeds/videos.xml?user=adultswim";
$logo[0]='<img align="center" src="images/adultswim.jpg" class="img-responsive"  width="100" /></br>';

$xml[1]="https://www.youtube.com/feeds/videos.xml?user=comedycentral";
$logo[1]='<img align="center" src="images/comedy-central.png" class="img-responsive"  width="100" /></br>';

$xml[2]="https://www.youtube.com/feeds/videos.xml?user=FunnyorDie";
$logo[2]='<img align="center" src="images/funny-or-die.png" class="img-responsive"  width="100" /></br>';

$xml[3]="https://www.youtube.com/feeds/videos.xml?channel_id=UCwWhs_6x42TyRM4Wstoq8HA";
$logo[3]='<img align="center" src="images/dailyshow.png" class="img-responsive"  width="100" /></br>';

$xml[4]="https://www.youtube.com/feeds/videos.xml?user=latenight";
$logo[4]='<img align="center" src="images/latenight-jf.png" class="img-responsive"  width="100" /></br>';

$xml[5]="https://www.youtube.com/feeds/videos.xml?user=LastWeekTonight";
$logo[5]='<img align="center" src="images/lastweek.jpg" class="img-responsive"  width="100" /></br>';

$xml[6]="https://www.youtube.com/feeds/videos.xml?channel_id=UCMtFAi84ehTSYSE9XoHefig";
$logo[6]='<img align="center" src="images/late-show.png" class="img-responsive"  width="100" /></br>';

$xml[7]="https://www.youtube.com/feeds/videos.xml?user=LateNightSeth";
$logo[7]='<img align="center" src="images/late-night.png" class="img-responsive"  width="100" /></br>';

$xml[8]="https://www.youtube.com/feeds/videos.xml?user=SaturdayNightLive";
$logo[8]='<img align="center" src="images/SNL.png" class="img-responsive"  width="100" /></br>';

$xml[9]="https://www.youtube.com/feeds/videos.xml?channel_id=UC18vz5hUUqxbGvym9ghtX_w";
$logo[9]='<img align="center" src="images/full-frontal.png" class="img-responsive"  width="100" /></br>';

$xml[10]="https://www.youtube.com/feeds/videos.xml?channel_id=UCJ7hqXLdgXlzjKpZY-K_6HA";
$logo[10]='<img align="center" src="images/chelsea.jpg" class="img-responsive"  width="100" /></br>';

$xml[11]="https://www.youtube.com/feeds/videos.xml?user=teamcoco";
$logo[11]='<img align="center" src="images/team-coco.jpg" class="img-responsive"  width="100" /></br>';

for ($k=0; $k<12; $k++) {
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