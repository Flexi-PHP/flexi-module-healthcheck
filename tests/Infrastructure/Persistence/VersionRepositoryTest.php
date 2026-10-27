<?php

declare(strict_types=1);

namespace Flexi\Modules\HealthCheck\Tests\Infrastructure\Persistence;

use Flexi\Contracts\ValueObjects\Version;
use Flexi\Modules\HealthCheck\Infrastructure\Persistence\VersionRepository;
use PHPUnit\Framework\TestCase;

class VersionRepositoryTest extends TestCase
{
    private VersionRepository $versionRepository;

    public function setUp(): void
    {
        $this->versionRepository = new VersionRepository();
    }

    public function testGetVersion(): void
    {
        $version = $this->versionRepository->getVersion();

        $this->assertInstanceOf(Version::class, $version);
        $this->assertIsString($version->getValue());
    }
}
