<?php

namespace Valpuia\FilaStyle\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Valpuia\FilaStyle\FilaStyle
 */
class FilaStyle extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \Valpuia\FilaStyle\FilaStyle::class;
    }
}
