<?php
/**
 * Created by PhpStorm.
 * User: manuelmeister
 * Date: 12.05.15
 * Time: 22:52
 */

namespace Meister\MVC\Model;


/**
 * @Entity
 * @Table(name="Article")
 */
class Article {

    /**
     * @Id
     * @GeneratedValue(strategy="AUTO")
     * @Column(type="integer")
     */
    protected $id;

    /**
     * @Column(type="string")
     */
    protected $title;

    /**
     * @Column(type="string")
     */
    protected $excerpt;

    /**
     * @Column(type="string")
     */
    protected $content;

    /**
     * @return mixed
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
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
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
    public function getExcerpt()
    {
        return (empty($this->excerpt))? substr($this->getContent(),0,200) : $this->excerpt;
    }

    /**
     * @param mixed $excerpt
     */
    public function setExcerpt($excerpt)
    {
        $this->excerpt = $excerpt;
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

}