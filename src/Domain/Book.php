<?php

namespace MyBooks\Domain;

class Book 
{
    /**
     * Book id.
     *
     * @var integer
     */
    private $id;

    /**
     * Book title.
     *
     * @var string
     */
    private $title;

    /**
     * Book summary.
     *
     * @var string
     */
    private $summary;

    /**
     * Book getIsbn
     *
     * @var string
     */
    private $isbn;

    /**
     * Book getIsbn
     *
     * @var integer
     */
    private $author_id;

    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getIsbn() {
        return $this->isbn;
    }

    public function getAuthor_id() {
        return $this->author_id;
    }

    public function getSummary() {
        return $this->summary;
    }

    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    public function setSummary($text) {
        $this->summary = $text;
        return $this;
    }

    public function setIsbn($text) {
        $this->isbn = $text;
        return $this;
    }

    public function setAuthorId($num) {
        $this->author_id = $num;
        return $this;
    }
}