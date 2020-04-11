<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class MovieCard extends Component
{
    public $movie;
    public $genres;

    /**
     * Create a new component instance.
     *
     * @param $movie
     * @param $genres
     */
    public function __construct($movie, $genres)
    {
        //
        $this->movie = $movie;
        $this->genres = $genres;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|string
     */
    public function render()
    {
        return view('components.movie-card');
    }
}
