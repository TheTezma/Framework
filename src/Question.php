<?php

class Question {

	public function RandomQuestions() {
		require 'Database.php';
		require 'Format.php';

		$Format = new Format;

		$stmt = $db->prepare("SELECT * FROM questions ORDER BY timestamp DESC LIMIT 15");
		$stmt->execute();

		foreach($stmt as $RandomQuestion):
		?>
		<div class="question-panel">
			<div class="question-panel-header">
				<?= $RandomQuestion['title'] ?>
			</div>
			<div class="question-panel-body">
				<?= $RandomQuestion['description'] ?>
			</div>
			<div class="question-panel-footer">
				<?= $Format->getTime($RandomQuestion['timestamp']) ?>
			</div>
		</div>
		<?php
		endforeach;
	}

	public function QuestionSearch($searchquery) {
		require 'Database.php';
		require 'Format.php';

		$Format = new Format;

		$stmt = $db->prepare("SELECT * FROM questions WHERE title LIKE :searchquery");
		$stmt-execute(array(":searchquery" => $searchquery));

		foreach($stmt as $SearchResult):
		?>
		<p><?= $SearchResult['title'] ?></p>
		<?php
		endforeach;
	}

}

?>