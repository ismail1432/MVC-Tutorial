<?php

/**
 * Created by PhpStorm.
 * User: smainemilianni
 * Date: 07/07/2017
 * Time: 23:33
 */
require ('AbstractEntityRepository.php');

class ArticleRepository extends AbstractEntityRepository
{


    /**
     * @param Article $article
     */
    public function add(Article $article)
    {
        $req = $this->_db->prepare('INSERT INTO article(author, title, content, resume, dateCreation) VALUES(:author, :title, :content, :resume, NOW())');

        $req->bindValue(':author', $article->getAuthor());
        $req->bindValue(':title', $article->getTitle());
        $req->bindValue(':content', $article->getContent());
        $req->bindValue(':resume', $article->getResume());
        $req->execute();
    }
}