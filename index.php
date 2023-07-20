<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Demo</title>
    <style>
        body{
        display: grid;
        place-items: center;
        height: 100vh;
        margin: 0;
        font-family: sans-serif;
        }
    </style>
</head>


<body>

<?php
    $books = [
            [
                    'name' => 'Harry Potter',
                    'author'=> 'J.K.Rowling',
                    'releaseYear' => 1997,
                    'purchaseUrl' => 'http://example.com'
            ],
            [
                    'name' => 'Lord of the Rings',
                    'author' => 'J.R.R. Tolkien',
                    'releaseYear' => 1954,
                    'purchaseUrl' => 'http://example'
            ]
    ];

 $filterByAuthor = function ($books, $author) {
    $filteredBooks = [];

    foreach ($books as $book) {
        if ($book['author'] === $author) {
        $filteredBooks[] = $book;
    }
}
    return $filteredBooks;
};

$filteredBooks = $filterByAuthor($books, 'J.K.Rowling')
?>

<ul>
    <?php foreach ($filteredBooks as $book) : ?>
            <li>
                <a href="<?= $book['purchaseUrl'] ?>">
                    <?= $book['name'];?>(<?= $book['releaseYear']?>)
                </a>
            </li>
      <?php endforeach; ?>
</ul>

</body>
</html>







