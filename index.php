<!DOCTYPE html>
<html>
<head>   
<title>Rossella Video</title>
<meta name="description" content="geny media, digital media, news, investigative journalism, box breaker media" />
<meta name="keywords" content="news, digital media, digital news, critical thinking, truth, discovery, justice, investigate, investigative, investigative journalism" />
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap-3.3.1/dist/css/bootstrap.min.css">
    <!-- Custom styles for this template -->
    <link href="bootstrap-3.3.1/docs/examples/jumbotron/jumbotron.css" rel="stylesheet">
<style>
/* The navigation bar */
.navbar {
    background:transparent!important;
    overflow: hidden;
    background-color: gray;
    position: fixed; /* Set the navbar to fixed position */
    top: 0; /* Position the navbar at the top of the page */
    width: 100%; /* Full width */
}

.parent {
  display: flex;
  justify-content: center;
  align-items: center;
}

</style>
<script>

function money(){
document.getElementById("box").innerHTML="";
   if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttpB=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttpB=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttpB.onreadystatechange=function() {
    if (xmlhttpB.readyState==4 && xmlhttpB.status==200) {
    
      document.getElementById("box").innerHTML=xmlhttpB.responseText;
    }
  }
  xmlhttpB.open("POST","money.php",true);
  xmlhttpB.send();
}

function tech(){
document.getElementById("box").innerHTML="";
   if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttpB=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttpB=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttpB.onreadystatechange=function() {
    if (xmlhttpB.readyState==4 && xmlhttpB.status==200) {
    
      document.getElementById("box").innerHTML=xmlhttpB.responseText;
    }
  }
  xmlhttpB.open("POST","tech.php",true);
  xmlhttpB.send();
}

function sport(){

document.getElementById("box").innerHTML="";

   if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttpB=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttpB=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttpB.onreadystatechange=function() {
    if (xmlhttpB.readyState==4 && xmlhttpB.status==200) {
    
      document.getElementById("box").innerHTML=xmlhttpB.responseText;
    }
  }
  xmlhttpB.open("POST","sports.php",true);
  xmlhttpB.send();

}

function forward(){

document.getElementById("box").innerHTML="";

   if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttpB=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttpB=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttpB.onreadystatechange=function() {
    if (xmlhttpB.readyState==4 && xmlhttpB.status==200) {
    
      document.getElementById("box").innerHTML=xmlhttpB.responseText;
    }
  }
  xmlhttpB.open("POST","forward.php",true);
  xmlhttpB.send();

}

function weather(){

document.getElementById("box").innerHTML="";

   if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttpB=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttpB=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttpB.onreadystatechange=function() {
    if (xmlhttpB.readyState==4 && xmlhttpB.status==200) {
    
      document.getElementById("box").innerHTML=xmlhttpB.responseText;
    }
  }
  xmlhttpB.open("POST","weather.php",true);
  xmlhttpB.send();


}

function world(){

document.getElementById("box").innerHTML="";

   if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttpB=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttpB=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttpB.onreadystatechange=function() {
    if (xmlhttpB.readyState==4 && xmlhttpB.status==200) {
    
      document.getElementById("box").innerHTML=xmlhttpB.responseText;
    }
  }
  xmlhttpB.open("POST","world.php",true);
  xmlhttpB.send();

}

function sci(){

document.getElementById("box").innerHTML="";
   if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttpB=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttpB=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttpB.onreadystatechange=function() {
    if (xmlhttpB.readyState==4 && xmlhttpB.status==200) {
    
      document.getElementById("box").innerHTML=xmlhttpB.responseText;
    }
  }
  xmlhttpB.open("POST","science.php",true);
  xmlhttpB.send();

}

function comedy(){

document.getElementById("box").innerHTML="";
   if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttpB=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttpB=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttpB.onreadystatechange=function() {
    if (xmlhttpB.readyState==4 && xmlhttpB.status==200) {
    
      document.getElementById("box").innerHTML=xmlhttpB.responseText;
    }
  }
  xmlhttpB.open("POST","comedy.php",true);
  xmlhttpB.send();

}

function home(){

window.location.href="../index.php";

}


function news() {

   if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttpB=new XMLHttpRequest();
  } else {  // code for IE6, IE5
    xmlhttpB=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttpB.onreadystatechange=function() {
    if (xmlhttpB.readyState==4 && xmlhttpB.status==200) {
    
      document.getElementById("box").innerHTML=xmlhttpB.responseText;
    }
  }
  xmlhttpB.open("POST","news.php",true);
  xmlhttpB.send();
  

}


</script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-102243121-2', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body onload="news()" style="background:white!important;">
<nav class="navbar navbar-default navbar-static-top" role="navigation">
        <div class="container-fluid">
           <div id="navbar">
         <ul class="nav navbar-nav">
      <img align="left" src="images/rossellavideo.png" width="350" class="img-responsive" alt="Rossella Video`" />
	</ul>


        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
<ul class="nav navbar-nav">
      <li><button type="button" onclick="home()" ondblclick="home()" class="btn btn-default">About</button>&nbsp;
     
       <button type="button" onclick="comedy()" ondblclick="comedy()" class="btn btn-default">Comedy</button>&nbsp;
              <button type="button" onclick="forward()" ondblclick="forward()" class="btn btn-default">Forward</button>&nbsp;
              <button type="button" onclick="money()" ondblclick="money()" class="btn btn-default">Money</button>&nbsp; 
              <button type="button"  onclick="news()" ondblclick="news()" class="btn btn-default">News</button>&nbsp;
              <button type="button" onclick="sci()" ondbleclick="sci()" class="btn btn-default">Science</button>&nbsp;
              <button type="button" onclick="tech()" ondblclick="tech()" class="btn btn-default">Tech</button>&nbsp;
              <button type="button" onclick="sport()" ondblclick="sport()" class="btn btn-default">Sports</button>&nbsp;
              <button type="button" onclick="weather()" ondblclick="weather()" class="btn btn-default">Weather</button>&nbsp;
              <button type="button" onclick="world()" ondblclick="world()" class="btn btn-default">World News</button>

      </li>   
      
    </ul>
       
                      

	</div>
	</div>
</nav>
<div class="jumbotron" style="background:white!important;margin-top:10px!important">
<div class="container-fluid" style="background:white!important;">
<div class="row" style="background:white!important;">
<div align="center" class="col-md-12">
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- ROSSELLA -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-5164556671790422"
     data-ad-slot="7071628597"
     data-ad-format="auto"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>
</div></div></div>

<div class="jumbotron" style="background:white!important;margin-top:0px!important">
<div class="container-fluid" style="background:white!important;">
<div id="box" class="row" style="background:white!important;">
</div></div></div>

 <div id="bottom" class="container-fluid"  style="border-top:thin silver solid!important;background:white!important;" >
<div class="col-md-4" style="background:white!important;" align="center">
<div align="center">
<img class="img-responsive" src="images/Rossella-Logo.png" width="150" />
</div>

</div>

<div class="col-md-4" style="background:white!important;color:white!important;">

<div align="center">
<img class="img-responsive" src="images/Rossella-Icon.png" width="75" />
</div>
</div>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});
</script>


<div id="contact" class="col-md-4" style="background:white!important;">
<table align="right" style="text-align:left">
	      <tr>
	      <td >
	      <h3> Rossella </h3>
	      <h4>A SpendCast&reg; Brand</h4>      
              <h4><?php include('mail.php'); ?></h4>              
              </td>
              <td width="30%"> &nbsp;</td>     
	      </td></tr>
	      </table>
 </div>
</div>	   


	<div class="container" style="background:white!important;">

	 <p align="center"><i>Rossella - A SpendCast&reg; Brand &#169; 2017. All Rights Reserved.</i></p>
	
	 
	 </div>
      <!-- Bootstrap core JavaScript
      ================================================== -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
      <script src="bootstrap-3.3.1/js/tests/vendor/jquery.min.js"></script>
    <script src="bootstrap-3.3.1/dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="bootstrap-3.3.1/js/ie10-viewport-bug-workaround.js"></script>

</body>
 
</html>
