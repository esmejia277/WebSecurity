<?php

class Comment{

  private $id;
  private $author_id;
  private $entry_id;
  private $title;
  private $text;
  private $date;

  public function __construct($id, $author_id, $entry_id, $title, $text, $date){
    $this -> id = $id;
    $this -> author_id = $author_id;
    $this -> entry_id = $entry_id;
    $this -> title =  $title;
    $this -> text = $text;
    $this -> date = $date;
  }

  public function getID(){
    return $this -> id;
  }

  public function getAuthor_ID(){
    return $this -> author_id;
  }

  public function getEntryID(){
    return $this -> entry_id;
  }

  public function getTitle(){
    return $this -> id;
  }

  public function getText(){
    return $this -> text;
  }

  public function getDate(){
    return $this -> date;
  }

  public function setTitle($title){
    $this -> title = $title;
  }

  public function setText($text){
    $this -> text = $text;
  }
}
