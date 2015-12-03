<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="js/jquery-1.3.1.min.js"></script>

<script>

$(document).ready(function() {

	//move the image in pixel
	var move = -15;
	
	//zoom percentage, 1.2 =120%
	var zoom = 1.2;

	//On mouse over those thumbnail
	$('.zitem').hover(function() {
		
		//Set the width and height according to the zoom percentage
		width = $('.zitem').width() * zoom;
		height = $('.zitem').height() * zoom;
		
		//Move and zoom the image
		$(this).find('img').stop(false,true).animate({'width':width, 'height':height, 'top':move, 'left':move}, {duration:200});
		
		//Display the caption
		$(this).find('div.caption').stop(false,true).fadeIn(200);
	},
	function() {
		//Reset the image
		$(this).find('img').stop(false,true).animate({'width':$('.zitem').width(), 'height':$('.zitem').height(), 'top':'0', 'left':'0'}, {duration:100});	

		//Hide the caption
		$(this).find('div.caption').stop(false,true).fadeOut(200);
	});

});

</script>
<style>
body {
	font-family:arial;	
}

.zitem {
	width:125px;
	height:125px;	
	border:4px solid #222;	
	margin:5px 5px 5px 0;
	
	/* required to hide the image after resized */
	overflow:hidden;
	
	/* for child absolute position */
	position:relative;
	
	/* display div in line */
	float:left;
}

.zitem .caption {
	width:125px;
	height:30px;
	background:#000;
	color:#fff;
	font-weight:bold;
		
	/* fix it at the bottom */
	position:absolute;
	bottom:-1px; /* fix IE issue */
	left:0;

	/* hide it by default */
	display:none;

	/* opacity setting */
	filter:alpha(opacity=70);    /* ie  */
	-moz-opacity:0.7;    /* old mozilla browser like netscape  */
	-khtml-opacity: 0.7;    /* for really really old safari */  
	opacity: 0.7;    /* css standard, currently it works in most modern browsers like firefox,  */

}

.zitem .caption a {
	text-decoration:none;
	color:#fff;
	font-size:12px;	
	
	/* add spacing and make the whole row clickable*/
	padding:5px;
	display:block;
}

img {
	border:0;
	
	/* allow javascript moves the img position*/
	position:absolute;
}

.clear {
	clear:both;	
}
body
{
	width:125px;
}
</style>
</head>
<body>
<div class="zitem">
	<a href="#"><img src="images/Pictures/DayChuyen/SDM2KKRB100.000(682.000).jpg" alt="Dây Chuyền" title="" width="125" height="125"/></a>
	<div class="caption">
		<a href="">Dây Chuyền</a>
	</div>
</div>

<div class="zitem">
	<a href="#"><img src="images/Pictures/MatDayChuyen/SMD2KN12110.407(462.000).jpg" alt="Mặt Dây Chuyền" title="" width="125" height="125"/></a>
	<div class="caption">
		<a href="">Mặt Dây Chuyền</a>
	</div>
</div>
<div class="zitem">
	<a href="#"><img src="images/Pictures/LacChan/SLD2KK10921.100(325.000).jpg" alt="Lắc Chân" title="" width="125" height="125"/></a>
	<div class="caption">
		<a href="">Lắc Chân</a>
	</div>
</div>
<div class="zitem">
	<a href="#"><img src="images/Pictures/Lac/SLD2KN12119.400(1.237.000).jpg" alt="Lắc Tay" title="" width="125" height="125"/></a>
	<div class="caption">
		<a href="">Lắc Tay</a>
	</div>
</div>
<div class="zitem">
	<a href="#"><img src="images/Pictures/Nhan/SND2KN10595.400(436.000).jpg" alt="Nhẫn" title="" width="125" height="125"/></a>
	<div class="caption">
		<a href="">Nhẫn</a>
	</div>
</div>
<div class="zitem">
	<a href="#"><img src="images/Pictures/DH/GW-A1000A-1ADR(13.278.000).jpg" alt="Đồng Hồ" title="" width="125" height="125"/></a>
	<div class="caption">
		<a href="">Đồng Hồ</a>
	</div>
</div>
</body>
</html>>