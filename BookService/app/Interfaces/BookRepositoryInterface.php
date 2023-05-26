<?php

namespace App\Interfaces;

interface BookRepositoryInterface 
{
    //get all books
    public function getAllBooks();

    //get book by id
    public function getBookById($id);

    //get book free
    public function getBookFree();

    //get book paid
    public function getBookPaid();

    //get book by author
    public function getBookByAuthor($author_id);

    //get book by category
    public function getBookByCategory($category_id);

    //update book
    public function updateBook($id, $data);

    //delete book
    public function deleteBook($id);

    //search book
    public function searchBook($keyword);
}