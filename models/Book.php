<?php

namespace mvc\models;

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

    /**
     * Book constructor.
     * @param int $id
     * @param string $title
     * @param string $author
     * @param string $description
     */
	public function __construct(int $id, string $title, string $author, string $description)
    {
        try
        {
            $this->setId($id);
            $this->setTitle($title);
            $this->setAuthor($author);
            $this->setDescription($description);
        }
        catch (\Throwable $exception)
        {
            throw new $this('por favor, verifique a entrada dos dados.');
        }
    }

    /**
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getAuthor(): string
    {
        return $this->author;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $value
     */
    public function setId(string $value)
    {
        $this->id = $value;
    }

    public function setTitle(string $value)
    {
        $this->title = $value;
    }

    /**
     * @param string $value
     */
    public function setAuthor(string $value)
    {
        $this->author = $value;
    }

    /**
     * @param string $value
     */
    public function setDescription(string $value)
    {
        $this->description = $value;
    }



}
