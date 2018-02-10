<?php
/**
 * Created by IntelliJ IDEA.
 * User: nshahzad
 * Date: 12/19/17
 * Time: 8:13 PM
 */

namespace App\Models\Enums;


class PirepSource extends EnumBase
{
    public const MANUAL = 0;
    public const ACARS = 1;

    protected static $labels = [
        PirepSource::MANUAL => 'Manual',
        PirepSource::ACARS  => 'ACARS',
    ];
}
