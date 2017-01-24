<?php
$Question = new Question;
?>
<!DOCTYPE html>
<html>
<head>
	<title>Q&A</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="static/style.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-sm-3">

		</div>
		<div class="col-sm-6">
			<div class="new-post-panel">
				<input class="question-search" type="text" name="question-search" placeholder="Got a question?">
			</div>
			<?php $Question->RandomQuestions(); ?>
		</div>
		<div class="col-sm-3">

		</div>
	</div>
</div>
</body>
<script type="text/javascript" src="static/app.js"></script>
</html>
