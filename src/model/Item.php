<?php

require_once __DIR__ . "/Model.php";

class Item implements Model {
    private string $name = "";
    private string $uuid = "";
    private string $creator = "";
    private string $date = "";
    private string $description = "";
    private string $owningCollection = "";
    private string $thumbnail = "";

    private array $bitstreams = array();

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function setUUID($uuid): void
    {
        $this->uuid = $uuid;
    }


    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    public function setOwningCollection(string $owningCollection): void
    {
        $this->owningCollection = $owningCollection;
    }

    public function setThumbnail(string $thumbnail): void
    {
        $this->thumbnail = $thumbnail;
    }

    public function setAuthor(string $author): void
    {
        $this->creator = $author;
    }

    public function setBitstreams(array $bitstreams): void
    {
        $this->bitstreams = $bitstreams;
    }


    /**
     * @return array item metadata
     * <code>
     *     array("name" => string,
     *       "uuid" => string,
     *       "creator" => string,
     *       "date" => string,
     *       "description" => string,
     *       "owningCollection" => string,
     *       "logo" => string,
     *       "files" => array (
     *         "name" => string,
     *         "href" => string,
     *         "thumbnail" => string,
     *         "uuid" => string,
     *         "mimetype" => string
     *        )
     * )
     * </code>
     */
    public function getData(): array
    {
        return array(
            "name" => $this->name,
            "uuid" => $this->uuid,
            "creator" => $this->creator,
            "date" => $this->date,
            "description" => $this->description,
            "owningCollection" => $this->owningCollection,
            "thumbnail" => $this->thumbnail
        );
    }


}