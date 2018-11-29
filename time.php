<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<div id="qwe">test</div>

<script>
    var now = new Date(<?php echo time() * 1000 ?>);
    function startInterval(){
        setInterval('updateTime();', 1000);
    }
    startInterval();//start it right away
    function updateTime(){
        var nowMS = now.getTime();
        nowMS += 1000;
        now.setTime(nowMS);
        var clock = document.getElementById('qwe');
        if(clock){
            clock.innerHTML = now.toTimeString();//adjust to suit
        }
    }
</script>
</body>

</html>


<!-- https://stackoverflow.com/questions/14563234/php-with-javascript-code-live-clock -->
