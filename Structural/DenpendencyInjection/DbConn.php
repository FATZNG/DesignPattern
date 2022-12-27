<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\DenpendencyInjection;

class DbConn
{
    public function __construct(private DbConfig $configuration)
    {
    }

    public function getDsn(): string
    {
        // this is just for the sake of demonstration, not a real DSN
        // notice that only the injected config is used here, so there is
        // a real separation of concerns here

        return sprintf(
            '%s:%s@%s:%d',
            $this->configuration->getUsername(),
            $this->configuration->getPassword(),
            $this->configuration->getHost(),
            $this->configuration->getPort()
        );
    }
}
