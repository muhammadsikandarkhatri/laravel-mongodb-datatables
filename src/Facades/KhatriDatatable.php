<?php

namespace Khatri\MDatatable;

use Illuminate\Support\Facades\Facade;

class KhatriDatatable extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor() {
        return 'khatri_datatable';
    }
}
