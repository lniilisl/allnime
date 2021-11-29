<?php

class Controller extends BaseController {

  public function process() {
    $this->loadAccount();
    $this->styler->setTitle('AllNimes - Animes');
    $this->styler->init();
    $this->styler->setTemplate('animes');
    $this->styler->render();
  }
}

?>