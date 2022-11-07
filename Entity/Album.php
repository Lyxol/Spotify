<?php

namespace App\Entity;

class Album extends Model
{
    private int $id_DB;
    public function __construct(
        public string $id,
        public string $name,
        public array $artist,
        public string $release_date,
        public string $total_track,
        public string $picture
    )
    {
        $this->table='album';
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @param string $id
     */
    public function setId(string $id): void
    {
        $this->id = $id;
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
    public function getArtist(): array
    {
        return $this->artist;
    }

    /**
     * @param array $artist
     */
    public function setArtist(array $artist): void
    {
        $this->artist = $artist;
    }

    /**
     * @return string
     */
    public function getReleaseDate(): string
    {
        return $this->release_date;
    }

    /**
     * @param string $release_date
     */
    public function setReleaseDate(string $release_date): void
    {
        $this->release_date = $release_date;
    }

    /**
     * @return string
     */
    public function getTotalTrack(): string
    {
        return $this->total_track;
    }

    /**
     * @param string $total_track
     */
    public function setTotalTrack(string $total_track): void
    {
        $this->total_track = $total_track;
    }

    /**
     * @return string
     */
    public function getPicture(): string
    {
        return $this->picture;
    }

    /**
     * @param string $picture
     */
    public function setPicture(string $picture): void
    {
        $this->picture = $picture;
    }
}