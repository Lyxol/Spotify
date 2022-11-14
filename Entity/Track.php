<?php

namespace App\Entity;

class Track extends Model
{
    private int $id;
    public function __construct(
        public string $id_Spotify,
        public string $name,
        public array  $artists,
        public string $duration
    )
    {
        $this->table ='track';
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getIdSpotify(): string
    {
        return $this->id_Spotify;
    }

    /**
     * @param string $id_Spotify
     */
    public function setIdSpotify(string $id_Spotify): void
    {
        $this->id_Spotify = $id_Spotify;
    }

    /**
     * @return array
     */
    public function getArtists(): array
    {
        return $this->artists;
    }

    /**
     * @param array $artists
     */
    public function setArtists(array $artists): void
    {
        $this->artists = $artists;
    }

    /**
     * @return string
     */
    public function getDuration(): string
    {
        return $this->duration;
    }

    /**
     * @param string $duration
     */
    public function setDuration(string $duration): void
    {
        $this->duration = $duration;
    }
}