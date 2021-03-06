<?php declare(strict_types=1);

namespace Wbm\TagManagerEcomm\Services;

interface DataLayerModulesInterface
{
    public function getModules(): array;

    public function getContainerId(): ?string;

    public function isActive(): ?bool;

    public function isTrackingProductClicks(): ?bool;
}
