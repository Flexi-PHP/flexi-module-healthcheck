<?php

declare(strict_types=1);

namespace CubaDevOps\Flexi\Modules\HealthCheck\Domain\Interfaces;

use Flexi\Contracts\ValueObjects\Version;

interface VersionRepositoryInterface
{
    public function getVersion(): Version;
}
