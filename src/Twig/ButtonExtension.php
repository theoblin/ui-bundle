<?php
class ButtonExtension extends \Twig\Extension\AbstractExtension implements \Twig\Extension\GlobalsInterface
{
    public function getGlobals(): array
    {
        return [
            'btn_content' => 'Je suis le bouton',
            'ui_theme' => 'dark',
            'ui_version' => 'v1.2.3',
        ];
    }
}