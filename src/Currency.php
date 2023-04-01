<?php

namespace App;

class Currency
{
    public function __construct(private readonly IsoCodeEnum $isoCode)
    {
    }

    public function isoCode(): IsoCodeEnum
    {
        return $this->isoCode;
    }

    public function equals(Currency $currency): bool
    {
        return $this->isoCode() === $currency->isoCode();
    }

    public static function make(IsoCodeEnum $isoCode): Currency
    {
        return new self($isoCode);
    }
}
