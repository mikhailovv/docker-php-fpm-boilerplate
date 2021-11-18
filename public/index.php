<?php

declare(strict_types=1);

$y = 1;

$summ = fn($x) => fn($z) => $x + $z;

assert(9 == $summ(5)(4));
assert(15 == $summ(5)($summ(4)(6)));

echo 'all Ok<br/>';

enum EntityStatus: string
{
    case CREATED = 'created';
    case READY = 'ready';
    case PROCESSING = 'processing';
    case COMPLETED = 'completed';
}


class Entity
{
    public function __construct(public readonly int $id, public EntityStatus $status)
    {
    }
}

echo sprintf('Before cycle: %s <br/>', memoryUsage());

for ($i = 0; $i < 10000; $i++) {
    $entity = new Entity($i, EntityStatus::cases()[array_rand(EntityStatus::cases())]);
}

echo sprintf('After cycle: %s <br/>', memoryUsage());

function memoryUsage(): string
{
    return sprintf(
        'Memory usage: <strong>%dKB</strong> Peak usage: <strong>%dKB</strong>',
        round(memory_get_usage() / 1024),
        round(memory_get_peak_usage() / 1024)
    );
}
