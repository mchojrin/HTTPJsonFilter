<?php

class PriceFilterIterator extends FilterIterator
{
    private float $priceFrom, $priceTo;

    public function __construct(Iterator $iterator, float $priceFrom, float $priceTo)
    {
        parent::__construct($iterator);
        $this->priceFrom = $priceFrom;
        $this->priceTo = $priceTo;
    }

    /**
     * @inheritDoc
     */
    public function accept() : bool
    {
        $currentPrice = parent::current()->getPrice();

        return $currentPrice >= $this->priceFrom && $currentPrice <= $this->priceTo;
    }
}