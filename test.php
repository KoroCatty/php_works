<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <!-- <link rel="stylesheet" href="css/style.css"> -->
  <!-- <link rel="stylesheet" href="./dist/app.css" /> -->
  <link rel="stylesheet" href="./dist/main.css"/>
  <title>Document</title>

<style>

#target {
	width: 100px;
	height: 100px;
	margin: 10px 0;
	align-items: center;
	justify-content: center;
	background: #9E9E9E;
	border-radius: 50%;
	color: #FFF;
	font-weight: bold;
}
</style>


</head>
<body>
  <div id="target"></div>

<ul>
  <li>
    <a href="#" id="red">Red
  </li>

  <li>
    <a href="#" id="blue">Blue
  </li>

  <li>
    <a href="#" id="yellow">Yellow
  </li>
</ul>

</body>
</html>

<script>
"use strict"; 

//要素を指定
const red = document.getElementById('red');
const blue = document.getElementById('blue');
const yellow = document.getElementById('yellow');

const target = document.getElementById('target');

//blueボタンが押された時
blue.addEventListener('click', function () {
	target.style.background = 'blue';
}, false);

//redボタンが押された時
red.addEventListener('click', function () {
	target.style.background = 'red';
}, false);

//redボタンが押された時
yellow.addEventListener('click', function () {
	target.style.background = 'yellow';
}, false);

</script>