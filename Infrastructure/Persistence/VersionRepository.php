<?php

declare(strict_types=1);

namespace Flexi\Modules\HealthCheck\Infrastructure\Persistence;

use Flexi\Contracts\ValueObjects\Version;
use Flexi\Contracts\Classes\Traits\JsonFileReader;
use Flexi\Modules\HealthCheck\Domain\Interfaces\VersionRepositoryInterface;

class VersionRepository implements VersionRepositoryInterface
{
    use JsonFileReader;

    /**
     * @throws \JsonException
     */
    public function getVersion(): Version
    {
        $version_string = $this->readJsonFile('composer.json')['version'];
        [$major, $minor, $patch] = array_map('intval', explode('.', $version_string));

        return new Version($major, $minor, $patch);
    }
}
