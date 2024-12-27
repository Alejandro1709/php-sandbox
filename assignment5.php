<?php
  class Article {
    public $title;
    public $content;
    private $published;

    public function __construct($title, $content) {
      $this->title = $title;
      $this->content = $content;
    }

    public function publish() {
      $this->published = true;
    }

    public function isPublished() {
      return $this->published;
    }
  }

  class StringUtility {
    public static function shout($string) {
      return strtoupper($string) . '!';
    }

    public static function whisper($string) {
      return strtolower($string) . '.';
    }

    public static function repeat($string, $times = 2) {
      for ($i = 1; $i <= $times; $i++) {
        echo $string;
      }
    }
  }

  $article1 = new Article('Article 1', 'Dummy text');
  $article2 = new Article('Article 2', 'Dummy text one more time');

  $article1->publish();

  $article1->isPublished();
  $article2->isPublished();

  var_dump($article2);

  echo StringUtility::shout('hola');
  echo '<br>';
  echo StringUtility::whisper('hola');
  echo '<br>';
  echo StringUtility::repeat('hola', 4);
?>