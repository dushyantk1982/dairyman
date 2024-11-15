<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
</head>
<body>
<a href="product_range_in.php" target="_parent"><img src="images/pr_range.jpg" alt="rotating image" name="rotator" width="250" height="25" id="rotator" /></a>

<!-- Images for Rotation-->
<script type="text/javascript">
	(function() {
	var rotator = document.getElementById('rotator');
	var imageDir = 'images/';
	var delayInSeconds = 3;
	var images = ['pr_range2.jpg','pr_range1.jpg','pr_range3.jpg','pr_range.jpg'];
	var num = 0;
	var changeImage = function() {
	var len = images.length;
	rotator.src = imageDir + images[num++];
	if (num == len) {
	num = 0;
	}
	};
	setInterval(changeImage, delayInSeconds * 200);
	})();
    </script>

</body>
</html>