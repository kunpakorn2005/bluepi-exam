<?php

use App\Http\Repositories\CardRepository;

namespace App\Http\Services;

class CardService
{
    private $cardRepository;

    public function __construct(
        $cardRepository CardRepository
    ) {
        $this->cardRepository = $cardRepository;
    }
} 
