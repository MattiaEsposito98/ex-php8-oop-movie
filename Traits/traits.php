<?php
trait vietatoAiMinori
{
  private int $pegi;

  public function setPegi(int $pegi)
  {
    $this->pegi = $pegi;
  }

  public function isForChild()
  {
    if ($this->pegi < 14) {
      echo 'Questo film è adatto ai bambini';
    } else if ($this->pegi >= 14 && $this->pegi < 18) {
      echo 'Visione consigliata con un adulto';
    } else {
      echo 'Il film non è adatto ai bambini';
    }
  }
}
