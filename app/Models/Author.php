<?php

namespace App\Models;

class Author {

    private $authors = [
        [
            'id' => 1,
            'name' => 'Tere Liye',
            'photo' => 'tere_liye.jpg',
            'bio' => 'Penulis novel Indonesia dengan karya bertema kehidupan dan keluarga.'
        ],
        [
            'id' => 2,
            'name' => 'Andrea Hirata',
            'photo' => 'andrea.jpg',
            'bio' => 'Penulis Laskar Pelangi yang inspiratif.'
        ],
        [
            'id' => 3,
            'name' => 'Raditya Dika',
            'photo' => 'radit.jpg',
            'bio' => 'Penulis dengan gaya humor dan cerita ringan.'
        ],
        [
            'id' => 4,
            'name' => 'Pramoedya Ananta Toer',
            'photo' => 'pram.jpg',
            'bio' => 'Sastrawan legendaris Indonesia.'
        ],
        [
            'id' => 5,
            'name' => 'Habiburrahman El Shirazy',
            'photo' => 'habib.jpg',
            'bio' => 'Penulis novel religi populer.'
        ],
    ];

    public function getAuthors() {
        return $this->authors;
    }
}