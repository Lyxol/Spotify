<?php

namespace App\Entity;

class Artist extends Model
{
    public int $id = 0;
    public function __construct(
        public string $id_Spotify,

        public string $name,

        public int    $followers,

        public array  $genders,

        public string $link,

        public string $picture,
    )
    {
        $this->table='artist';
    }

    public function getIdSpotify(): string
    {
        return $this->id_Spotify;
    }

    public function setIdSpotify(string $id_Spotify): self
    {
        $this->id_Spotify = $id_Spotify;
        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }

    public function setFollowers(int $followers): self
    {
        $this->followers = $followers;
        return $this;
    }

    public function getFollowers(): int
    {
        return $this->followers;
    }

    public function getGenders(): array
    {
        return $this->genders;
    }

    public function setGenders(array $genders): self
    {
        $this->genders = $genders;
        return $this;
    }

    public function getLink(): string
    {
        return $this->link;
    }

    public function setLink(string $link): self
    {
        $this->link = $link;
        return $this;
    }


    public function getPicture(): string
    {
        return $this->picture;
    }

    public function setPicture(string $picture): self
    {
        $this->picture = $picture;
        return $this;
    }


}