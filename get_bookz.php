<?php

require_once 'Book.php';

function getBooksAsObjects() {
    $books = [
        new Book('The Holy Bible', 'Unknown', 'Long ago'),
        new Book('Pride and Prejudice', 'Jane Austen', 'While back'),
        new Book('Nicholas Nickleby', 'Charles Dickens', 'Not long')
    ];

    return $books;
}

function getBookzStandardArray() {
    $books = [
        [
            'The Holy Bible', 'Unknown', 'Long ago'
        ],

        [
            'Pride and Prejudice', 'Jane Austen', 'While back'
        ],

        [
            'Nicholas Nickleby', 'Charles Dickens', 'Not long'
        ]
    ];

    return $books;
}

function getBookzAssociativeArray() {
    $bookz = [
        [
            'title' => 'The Holy Bible',
            'author' => 'Unknown',
            'releasedate' => 'Long ago'
        ],

        [
            'title' => 'Pride and Prejudice',
            'author' => 'Jane Austen',
            'releasedate' => 'While back'
        ],

        [
            'title' => 'Nicholas Nickleby',
            'author' => 'Charles Dickens',
            'releasedate' => 'Not long'
        ]
    ];

    return $bookz;


}