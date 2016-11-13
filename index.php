<!DOCTYPE html>
<html>
<head>
    <title>Bookz</title>
</head>
<body>
<h2>See our bookz</h2>
<p>Associative Array</p>
<ul>
    <?php
    require_once 'get_bookz.php';
    $bookz = getBookzAssociativeArray();

    foreach ($bookz as $book) {
        echo '<li>';
        echo $book['title'] . ',' . $book['author'] . ',' . $book['releasedate'];
        echo '</li>';
    }
    ?>
</ul>

<p>Standard Array</p>
<ul>
    <?php
        $standardArrayBooks = getBookzStandardArray();

        foreach($standardArrayBooks as $book)
        {
            echo '<li>';
            echo $book[0] . ',' . $book[1] . ',' . $book[2];
            echo '</li>';
        }
    ?>
</ul>

<p>Objektiv Array</p>
<ul>
    <?php
    $objectiveArray = getBooksAsObjects();

    foreach($objectiveArray as $book)
    {
        echo '<li>';
        echo $book->title . ',' . $book->author . ',' . $book->releaseDate;
        echo '</li>';
    }
    ?>
</ul>
</body>
</html>