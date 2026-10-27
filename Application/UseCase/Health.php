<?php

declare(strict_types=1);

namespace CubaDevOps\Flexi\Modules\HealthCheck\Application\UseCase;

use Flexi\Contracts\Classes\PlainTextMessage;
use Flexi\Contracts\Interfaces\DTOInterface;
use Flexi\Contracts\Interfaces\HandlerInterface;
use Flexi\Contracts\Interfaces\MessageInterface;
use CubaDevOps\Flexi\Modules\HealthCheck\Domain\Interfaces\VersionRepositoryInterface;
use Flexi\Contracts\ValueObjects\Version;

class Health implements HandlerInterface
{
    private VersionRepositoryInterface $version_repository;

    public function __construct(VersionRepositoryInterface $version_repository)
    {
        $this->version_repository = $version_repository;
    }

    /**
     * @return PlainTextMessage
     *
     * @throws \JsonException
     */
    public function handle(DTOInterface $dto): MessageInterface
    {
        /** @var Version $version */
        $version = $this->version_repository->getVersion();

        return new PlainTextMessage((string) $version);
    }
}
