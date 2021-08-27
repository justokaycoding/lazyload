<?php
	include_once('lazyLoad.php');
	define("Title", "Grid Portfolio");
?>

<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo Title; ?></title>
  <link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/base.css">
  <meta name="description" content="Simple Grid Portfolio">
  <meta property="og:title" content="<?php echo Title; ?>">
</head>

<body>
	<main role="main">
		<div class="section">
				<div class="constraint">
					<div class="column width-12 text">
						<h1>Lazy Loading With JS Observer API</h1>
					</div>
					<div class="column width-12 grid">
						<?php echo placeHolder();?>
					</div>
				</div>
		</div>
	</main>
</body>
<script src="/js/observer.js"></script>
</html>
