<?php

class Movie
{
    private $title;
    private $original_title;
    private $year;
    private $genres = [];

    public function __construct(string $title, string $original_title, int $year, array $genres)
    {
        $this->title = $title;
        $this->original_title = $original_title;
        $this->year = $year;
        $this->genres = $genres;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getOriginalTitle()
    {
        return $this->original_title;
    }

    public function getYear()
    {
        return $this->year;
    }

    public function getGenres()
    {
        return $this->genres;
    }
}
