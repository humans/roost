<?php

declare(strict_types=1);

namespace App\Data;

use Spatie\LaravelData\Data;
use App\Data\SecurityData;

class SharedData extends Data
{
    public function __construct(
        public readonly SecurityData $security,
    ) {
    }
}
