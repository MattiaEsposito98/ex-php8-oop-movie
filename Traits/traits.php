<?php
trait vietatoAiMinori
{
  public int $pegi;

  public function setPegi(int $pegi)
  {
    $this->pegi = $pegi;
  }

  public function isForChild()
  {
    if ($this->pegi < 14) {
      return 'Questo film è adatto ai bambini';
    } else if ($this->pegi >= 14 && $this->pegi < 18) {
      return 'Visione consigliata con un adulto';
    } else {
      return 'Il film non è adatto ai bambini';
    }
  }
}
