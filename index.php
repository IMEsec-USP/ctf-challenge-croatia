<html>
<head>
<style type="text/css">body{margin:40px auto;max-width:650px;line-height:1.6;font-size:18px;color:#333;padding:0 10px}h1,h2,h3{line-height:1.2}img {max-width: 100%; display: block; margin: .75em auto;}
</style>
</head>
<body>
</html>
<?php
if (isset($_GET['file'])) {
    $file = str_replace('..', '', $_GET['file']);
} else {
    $file = 'main';
}

include('./files/' . $file . '.php');
?>
</body>
</html>