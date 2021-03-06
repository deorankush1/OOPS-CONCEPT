<?php
abstract class Polymorphism_Demo {
  protected $scores           = 0;
  protected $numberOfArticles = 0;
 
  public function setNumberOfArticles($int)
  {
    // Cast to integer type
    $numberOfArticles = (int)$int;    
    $this -> numberOfArticles = $numberOfArticles;
  }
   
  public function getNumberOfArticles()
  {
    return $this -> numberOfArticles;
  }
  
  // The abstract method.
  abstract public function calcScores();
}
class Author extends Polymorphism_Demo {
  public function calcScores()
  {
    return $this -> scores = $this -> numberOfArticles * 10 + 20;
  }
}
class Editor extends Polymorphism_Demo {
  public function calcScores()
  {
    return $this -> scores = $this -> numberOfArticles * 6 + 15;
  }
}
$author1 = new Author();
$author1 -> setNumberOfArticles(8);
echo $author1 -> calcScores();
$editor1 = new Editor();
$editor1 -> setNumberOfArticles(15);
echo $editor1 -> calcScores();