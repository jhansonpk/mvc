<?php

namespace models;

/**
 * Class Book
 * @package models
 */
class Book
{
	protected $title;
    protected $author;
    protected $description;
	
	public function __construct(string $title, string $author, string $description)
    {
        try
        {
            $this->setTitle($title);
            $this->setAuthor($author);
            $this->setDescription($description);
        }
        catch (\Exception $exception)
        {
            throw new $this('por favor, verifique a entrada dos dados.');
        }
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

    public function setTitle(string $value): void
    {
        $this->title = $value;
    }

    public function setAuthor(string $value): void
    {
        $this->author = $value;
    }

    public function setDescription(string $value): void
    {
        $this->description = $value;
    }

}
