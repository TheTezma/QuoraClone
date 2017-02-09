<?php

class Topic {

	public static function trendingtopics() {
		$db = Db::getInstance();
		$stmt = $db->query("SELECT * FROM topics ORDER BY post_count DESC limit 5");
		$trending = $stmt->fetchAll();

		foreach($trending as $trendtopic) { ?>
		<a href="/StackOverflow/topic/<?= $trendtopic['id'] ?>"><?= $trendtopic['name'] ?></a><br>
		<?php }
	}

}

?>