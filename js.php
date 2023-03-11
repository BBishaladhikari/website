<!-- index.php -->
<?php
$major = "Computer Science";
$classes = array("Programming 101", "Data Structures and Algorithms", "Database Management");
$achievements = array("Dean's List", "Student Government Association President");

function displayClasses($classes) {
  foreach ($classes as $class) {
    echo "<li>$class</li>";
  }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Gobinda Sharma - Gandaki University</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
</head>
<body> {
      background-image: url('2877.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      background-position: center center;
    }
	<header>
		<h1>Gobinda Sharma</h1>
		<nav>
			<button class="nav-toggle" aria-label="toggle navigation">
				<span class="hamburger"></span>
			</button>
			<ul class="nav__list">
				<li class="nav__item"><a href="#" class="nav__link">Home</a></li>
				<li class="nav__item"><a href="#" class="nav__link">About</a></li>
				<li class="nav__item"><a href="#" class="nav__
