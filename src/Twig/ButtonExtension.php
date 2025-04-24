<?php


namespace TheoBlin\UiBundle\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;
use Twig\Environment;

class ButtonExtension extends AbstractExtension
{
    private $twig;

    public function __construct(Environment $twig)
    {
        $this->twig = $twig;
    }
    public function getFunctions()
    {
        // Déclaration d'une nouvelle fonction Twig qui peut être utilisée dans les templates
        return [
            new TwigFunction('button', [$this, 'renderButton']),
        ];
    }

    /**
     * Cette fonction sera appelée lorsque 'button()' sera utilisée dans un template Twig.
     */
    public function renderButton(string $label, string $type = 'primary', string $url = '#'): string
    {
        // Exemple basique de génération d'un bouton
        return $this->twig->render('@UiBundle/button.html.twig', [
            'label' => $label,
            'type'  => $type,
            'url'   => $url
        ]);
    }
}