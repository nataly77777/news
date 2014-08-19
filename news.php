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
	<div class="news_list">
	<h1>Последние новости</h1>
			<div class="news_item">

			<?php while($news=$query->fetch()):?>
			<div class="title"><a href="/test.php?id=<?php echo news['id']?>"<?php echo $news['title'];?></a></div>
			<div class="date"><?php echo $news['publish_date']; ?></div>
			<div class="anounce"> <?php echo $news['text']; ?></div>
			<?php endwhile; ?> 

		</div>
		</div><div class="footer">Все права защищены, 2005-2014</div></body></html>
