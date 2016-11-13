<?php

/**
 * Class Book A class representing a standard issue book
 */
class Book
{
    /**
     * @var The title of the book
     */
    public $title;
    /**
     * @var The author of the book
     */
    public $author;
    /**
     * @var The releasedate of the book
     */
    public $releaseDate;

    function __construct($title, $author, $releaseDate)
    {
        $this->title = $title;
        $this->author = $author;
        $this->releaseDate = $releaseDate;
    }

}