<?php

namespace models;

/**
 * Class Book
 * @package models
 */
class Book
{
    protected $id;
	protected $title;
    protected $author;
    protected $description;
	
	public function __construct(int $id, string $title, string $author, string $description)
    {
        try
        {
            $this->setId($id);
            $this->setTitle($title);
            $this->setAuthor($author);
            $this->setDescription($description);
        }
        catch (\Exception $exception)
        {
            throw new $this('por favor, verifique a entrada dos dados.');
        }
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setId(string $value)
    {
        $this->id = $value;
    }

    public function setTitle(string $value)
    {
        $this->title = $value;
    }

    public function setAuthor(string $value)
    {
        $this->author = $value;
    }

    public function setDescription(string $value)
    {
        $this->description = $value;
    }

}
