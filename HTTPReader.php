<?php

class HTTPReader implements ReaderInterface
{
    /**
     * @inheritDoc
     */
    public function read(string $input): OfferCollectionInterface
    {
        return new OfferCollection(json_decode($input, true));
    }
}