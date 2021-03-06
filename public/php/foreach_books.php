<?php
$books = array(
    'The Hobbit' => array(
        'published' => 1937,
        'author' => 'J. R. R. Tolkien',
        'pages' => 310
    ),
    'Game of Thrones' => array(
        'published' => 1996,
        'author' => 'George R. R. Martin',
        'pages' => 835
    ),
    'The Catcher in the Rye' => array(
        'published' => 1951,
        'author' => 'J. D. Salinger',
        'pages' => 220
    ),
    'A Tale of Two Cities' => array(
        'published' => 1859,
        'author' => 'Charles Dickens',
        'pages' => 544
    )
);

foreach ($books as $key => $details) {
	if ($details['published'] > 1950) {
		echo $key .PHP_EOL;
		echo "Published in: {$details['published']}" .PHP_EOL;
		echo "By: {$details['author']}" .PHP_EOL;
		echo "Pages: {$details['pages']}" .PHP_EOL.PHP_EOL;
	}
}
?>