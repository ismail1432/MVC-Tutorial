<?php

/**
 * Created by PhpStorm.
 * User: smainemilianni
 * Date: 04/07/2017
 * Time: 21:04
 */
class Article
{

    public function getArticle($id)
    {
        //SELECT * FROM MATABLE WHERE ARTICLE_ID = $id
        return $article = [
            'id' => $id,
            'titre' => 'super article',
            'content'=> 'lorem ipsulorem ipsulorem ipsulorem ipsulorem ipsulorem ipsulorem ipsulorem ipsulorem ipsulorem ipsulorem ipsum',
            'auteur' => 'Eniams Dev'
        ];

    }
}