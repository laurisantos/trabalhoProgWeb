<?php
class Controller {
    public function view(string $view)
    {
      require 'app/view/criticas' . $view . '.php';
    }

    public function ver() {
        $this->view('/visualizacao');
    }

    public function principal() {
        $this->view('/principal');
    }
}
?>