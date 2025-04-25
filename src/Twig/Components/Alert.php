<?php

namespace TheoBlin\UiBundle\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('alert', template: '@Ui/alert.html.twig')]
class Alert
{
    public string $type = 'success';
    public string $message;

    public function getIcon(): string
    {
        return match ($this->type) {
            'success' => 'bi:check-circle',
            'danger' => 'bi:exclamation-circle',
        };
    }
}
