<?php

namespace App\Models;

class Genre {

    private $genres = [
        [
            'id' => 1,
            'name' => 'Fiksi',
            'description' => 'Cerita imajinatif yang tidak berdasarkan kejadian nyata.'
        ],
        [
            'id' => 2,
            'name' => 'Non-Fiksi',
            'description' => 'Buku berdasarkan fakta dan kejadian nyata.'
        ],
        [
            'id' => 3,
            'name' => 'Komedi',
            'description' => 'Buku dengan unsur humor dan menghibur.'
        ],
        [
            'id' => 4,
            'name' => 'Horor',
            'description' => 'Cerita yang menegangkan dan menyeramkan.'
        ],
        [
            'id' => 5,
            'name' => 'Romantis',
            'description' => 'Cerita yang berfokus pada hubungan percintaan.'
        ],
    ];

    public function getGenres() {
        return $this->genres;
    }
}