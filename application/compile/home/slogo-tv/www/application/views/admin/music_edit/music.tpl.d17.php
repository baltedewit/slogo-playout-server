<?php
/* template head */
/* end template head */ ob_start(); /* template body */ ;
'';// checking for modification in file:/home/slogo-tv/www/application/views/admin/music_edit/../layout.tpl
if (!("1449001427" == filemtime('/home/slogo-tv/www/application/views/admin/music_edit/../layout.tpl'))) { ob_end_clean(); return false; };?><html>
<head>
	<title>Muziek beheren - RTV Slogo</title>

	<link rel="icon" type="imge/png" href="<?php echo site_url();?>resources/icon.png">

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.11.3/jquery-ui.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=RobotoDraft:400,500,700,400italic" rel="stylesheet" type="text/css">
	<link href="<?php echo site_url();?>resources/admin_style.css" rel="stylesheet" type="text/css">
	
</head>
<body>

<div id="left-nav">
	<ul class="nav-list">
		<a href="<?php echo site_url();?>admin/dashboard"><li>Dashboard</li></a>
		<a href="<?php echo site_url();?>admin/programmering"><li>Programmering</li></a>
		<a href="<?php echo site_url();?>admin/teksttv"><li>Tekst TV</li></a>
		<a href="<?php echo site_url();?>admin/music"><li>Muziek</li></a>
		<a href="<?php echo site_url();?>admin/templates"><li>Templates</li></a>
		<a href="<?php echo site_url();?>admin/sources"><li>Sources</li></a>
		<a href="<?php echo site_url();?>admin/ads"><li>Reclames</li></a>
	</ul>
</div>
<div id="top-bar">
	<div id="top-bar-left-nav">
		<span class="image"></span>
	</div>
	<a href="<?php echo site_url();?>logout"><div id="logout">
		Log uit
	</div></a>
</div>

<div id="content">
<div style="position:inline-block; width:48%; margin-right:2%; float:left;">
	<div class="header">
		<span>Afspeellijsten</span>
	</div>
	<div class="clear"></div>

	<div class="list-content">
		<div class="listhead item">
			<span style="margin-left: 17px;">Naam</span>
		</div>
		<?php 
$_fh0_data = (isset($this->scope["playlists"]) ? $this->scope["playlists"] : null);
if ($this->isTraversable($_fh0_data) == true)
{
	foreach ($_fh0_data as $this->scope['playlist'])
	{
/* -- foreach start output */
?>
			<a href="<?php echo site_url();?>admin/music/playlist/<?php echo $this->scope["playlist"]["playlist_id"];?>"><div class="item">
				<span style="margin-left: 10px;"><?php echo $this->scope["playlist"]["name"];?></span>
			</div></a>
		<?php 
/* -- foreach end output */
	}
}?>

	</div>
	<div class="clear" style="height:10px;"></div>
	<button type="button"><a href="<?php echo site_url();?>admin/music/playlist/new">Afspeellijst toevoegen</a></button>
</div>

<div style="position:inline-block; width:48%; margin-right:2%; float:left;">
	<div class="header">
		<span>Livestreams</span>
	</div>
	<div class="clear"></div>

	<div class="list-content">
		<div class="listhead item">
			<span style="margin-left: 17px;">Naam</span>
		</div>
		<?php 
$_fh1_data = (isset($this->scope["streams"]) ? $this->scope["streams"] : null);
if ($this->isTraversable($_fh1_data) == true)
{
	foreach ($_fh1_data as $this->scope['stream'])
	{
/* -- foreach start output */
?>
			<a href="<?php echo site_url();?>admin/music/livestream/<?php echo $this->scope["stream"]["livestream_id"];?>"><div class="item">
				<span style="margin-left: 10px;"><?php echo $this->scope["stream"]["name"];?></span>
			</div></a>
		<?php 
/* -- foreach end output */
	}
}?>

	</div>
	<div class="clear" style="height:10px;"></div>
	<button type="button"><a href="<?php echo site_url();?>admin/music/livestream/new">Livestream toevoegen</a></button>
</div>
</div>

</body>
</html><?php  /* end template body */
return $this->buffer . ob_get_clean();
?>