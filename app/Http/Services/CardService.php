<?php

namespace App\Http\Services;

use App\Http\Repositories\CardRepository;

class CardService
{
    private $cardRepository;

    public function __construct(CardRepository $cardRepository) {
        $this->cardRepository = $cardRepository;
    }
} 
