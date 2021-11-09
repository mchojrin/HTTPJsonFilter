<?php

class Offer implements OfferInterface
{
    private int $offerId;
    private string $productTitle;
    private int $vendorId;
    private float $price;

    public function __construct(int $offerId, string $productTitle, int $vendorId, float $price)
    {
        $this->offerId = $offerId;
        $this->productTitle = $productTitle;
        $this->vendorId = $vendorId;
        $this->price = $price;
    }

    public function getPrice() : float
    {
        return $this->price;
    }

    public function getVendorId(): int
    {
        return $this->vendorId;
    }
}