
	<html>
	<head>
		<title>Чудо-новости</title>
		<style type="text/css">
			body {
				width:500px;
				margin:0 auto;
				font-family:Georgia;
			}
			.header, .footer {
				background:#900;
				color:#FFF;
				padding:10px;
			}
			.header .logo a {font-size:35px; font-weight:bold; color:#FFF; text-decoration:none;}
			.header .slogan {color:#EEE;}
			
			.news_list .news_item {margin:35px 0;}
			.date {
				margin:5px 0;
				color:#999;
			}
		</style>
	</head>
	<div class="header">
		<div class="logo"><a href="/files/01.13/stazher/example.php">Чудо-новости.рф</a></div>
		<div class="slogan">только достоверные новости!</div>
	</div>
		<h1><?php echo $oneNews['title'];?></h1>
	<div class="date"><?php echo $oneNews['publish_date'];?>,
		 автор &mdash; <a href="/?r=authors&id=<?php echo $oneNews['author_id'];?>"><?php echo $authors['name'];?></a>
		 </div>	<div class="text"><p><img src="http://vtabloid.com/wp-content/uploads/2012/12/Biti.jpg"/><br/>
		 <?php echo $oneNews['text']?></p></div>
	<div class="footer">Все права защищены, 2005-2014</div></body></html>