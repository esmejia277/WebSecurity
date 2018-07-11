<?php

  class Entry{

    private $id;
    private $author_id;
    private $title;
    private $text;
    private $date;
    private $active;

    public function __construct($id, $author_id, $title, $text, $date, $active){
      $this -> id = $id;
      $this -> author_id = $author_id;
      $this -> title = $title;
      $this -> text = $text;
      $this -> date = $date;
      $this -> active = $active;
    }

    public function setID($id){
      $this -> id = $id;
    }

    public function getID(){
      return $this -> id;
    }

    public function setAuthor_ID($id){
      $this -> id = $id;
    }

    public function getAuthor_ID(){
      return $this -> author_id;
    }

    public function setTitle($title){
      $this -> title = $title;
    }

    public function getTitle(){
      return $this -> title;
    }

    public function setText($text){
      $this -> text = $text;
    }

    public function getText(){
      return $this -> text;
    }

    public function getDate(){
      return $this -> date;
    }

    public function setActive($active){
      $this -> active = $active;
    }

    public function getActive(){
      return $this -> active;
    }
  }

 ?>
