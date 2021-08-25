<?php


class Post {

	public $title;

	public $published;

	public function __construct($title, $published) {

		$this->title = $title;

		$this->published = $published;

	}

}

$posts = [

	new Post('My First Post', true),

	new Post('My Second Post', true),

	new Post('My Third Post', true),

	new Post('My Fourth Post', false)



];


//array filtering
// $unPublishedPosts = array_filter($posts, function ($post){
// 	return !$post->published;
// });

// $PublishedPosts = array_filter($posts, function ($post){
// 	return $post->published;
// });
//array map
// $modified = array_map(function ($post) {

// 	$post->published = true;

// 	return $post;

// }, $posts);

//array_column
$titles = array_column($posts, 'title');



echo "<pre>";
var_dump($titles);
echo "</pre>";

	<h1>Tasks / Todos</h1>

	<ul>
		
		<?php foreach($tasks as $task) : ?>

			<?php if($task->completed) : ?>

				<li><strike><?= $task->description; ?></strike></li>

			<?php else : ?>

				<li><?= $task->description; ?></li>

			<?php endif; ?>

		<?php endforeach; ?>

	</ul>