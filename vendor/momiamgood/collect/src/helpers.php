<?php

namespace Momiamgood\Collect;

function collection(array $array = []): Collect
{
    return new Collect($array);
}
