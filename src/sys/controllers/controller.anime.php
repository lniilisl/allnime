<?php

class Controller extends BaseController {

  public function process() {
    $this->loadAccount();
    $this->styler->setTitle('AllNimes - Anime');
    $this->styler->init();
    $this->styler->setTemplate('anime');
    $this->styler->render();
  }
}

?>