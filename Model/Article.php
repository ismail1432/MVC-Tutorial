<?php

/**
 * Created by PhpStorm.
 * User: smainemilianni
 * Date: 04/07/2017
 * Time: 21:04
 */
class Article
{

    /**
     * @var integer
     */
    protected   $id;

    /**
     * @var string
     */
    protected   $author;

    /**
     * @var string
     */
    protected   $title;

    /**
     * @var string
     */
    protected   $content;

    /**
     * @var string
     */
    protected   $resume;

    /**
     * @var datetime
     */
    protected   $dateCreation;

    /**
     * @var array
     */
    public      $donnees = [];

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return array
     */
    public function getDonnees(): array
    {
        return $this->donnees;
    }

    /**
     * @param array $donnees
     */
    public function setDonnees(array $donnees)
    {
        $this->donnees = $donnees;
    }

    /**
     * @return datetime
     */
    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    /**
     * @param mixed $dateCreation
     */
    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    }

    /**
     * @return string
     */
    public function getResume()
    {
        return $this->resume;
    }

    /**
     * @param mixed $resume
     */
    public function setResume($resume)
    {
        $this->resume = $resume;
    }


    public function __construct($donnees = [])
    {
        if (!empty($donnees)) // Si on a spécifié des valeurs, alors on hydrate l'objet.
        {
            $this->hydrate($donnees);
        }
    }

    public function hydrate(array $donnees)
    {
        foreach ($donnees as $key => $value)
        {
            $method = 'set'. ucfirst($key);

            if(method_exists($this, $method))
            {
                $this->$method($value);
            }
        }
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }


}