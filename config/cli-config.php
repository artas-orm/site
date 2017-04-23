<?php

use Doctrine\ORM\Tools\Console\ConsoleRunner;

require __DIR__ . '/../src/doctrine.php';

return ConsoleRunner::createHelperSet($entityManager);
