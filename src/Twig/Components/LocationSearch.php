<?php

namespace App\Twig\Components;

use Symfony\Component\Form\FormView;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveAction;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent]
final class LocationSearch
{
    use DefaultActionTrait;
    
    #[LiveProp]
    public int $number = 0;
    
    #[LiveAction]    
    public function random(): void
    {
        $this->number = rand(1, 100);
    }
    
    #[LiveAction]
    public function reset(): void
    {
        $this->number = 0;
    }
}
