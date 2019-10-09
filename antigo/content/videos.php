<table>
<tr>
<td><a href="index.php?url=videos&m=TAUFP09"><img src="content/defaultlite.jpg"></a></td>
<td><a href="index.php?url=videos&m=TAUFPbest09"><img src="content/defaultlite.jpg"></a></td>
</tr>
<tr>
<td><b>Video 1</b><br>Polonia 2009</td>
<td><b>Video 2</b><br>Polonia 2009</td>
</tr>
</table>

<br><br>

<div id="container"><a href="http://www.macromedia.com/go/getflashplayer">Get the Flash Player</a> to see this player.</div>
<script type="text/javascript" src="content/swfobject.js"></script>
	<script type="text/javascript">
		var s1 = new SWFObject("content/mediaplayer.swf","mediaplayer","480","360","8");
		s1.addParam("allowfullscreen","true");
		s1.addVariable("width","480");
		s1.addVariable("height","360");
		<?php 
		
		$moviestr = "m";
		
			$movie_flv = $_GET[$moviestr] . ".flv";
			$movie_img = $_GET[$moviestr] . ".jpg";
				
		if (!trim ($_GET[$moviestr]) || !trim ($movie_flv) || !trim ($movie_img) || preg_match('/\.\./', $_GET[$moviestr]) || !file_exists("content/".$movie_flv) || !file_exists("content/".$movie_img))

			{
				// DEFAULT (default.flv e default.jpg)
				$movie_flv = "default.flv";
				$movie_img = "default.jpg";
			}
			echo "\n";
			echo "s1.addVariable(\"file\", \"".$movie_flv."\");";
			echo "\n";
			echo "s1.addVariable(\"image\", \"content/".$movie_img."\");";
		?>
		s1.write("container");
	</script>
</div>