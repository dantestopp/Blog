<?php
/**
* Util Model
*
* @author happyoniens
* @author coeci
*
*/
class util{
  /**
  * Default Layout render
  */
  public function render($viewname, $args=array()){
      Flight::render($viewname.".php",$args,'body_content');
      Flight::render('layout');
  }
}
