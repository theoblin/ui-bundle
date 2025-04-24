<?php

namespace TheoBlin\UiBundle;

use TheoBlin\UiBundle\DependencyInjection\UiBundleExtension;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class UiBundle extends Bundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        if (null === $this->extension) {
            return new UiBundleExtension();
        }

        return $this->extension ?: null;
    }
}