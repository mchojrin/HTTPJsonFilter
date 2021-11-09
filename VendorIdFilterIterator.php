<?php

class VendorIdFilterIterator extends FilterIterator
{
    private int $vendorId;

    public function __construct(Iterator $iterator, int $vendorId)
    {
        parent::__construct($iterator);
        $this->vendorId = $vendorId;
    }

    /**
     * @inheritDoc
     */
    public function accept() : bool
    {
        return parent::current()->getVendorId() === $this->vendorId;
    }
}