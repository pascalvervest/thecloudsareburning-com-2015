<?php

namespace CloudsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="page")
 */
class Page
{
	/**
	 * @ORM\Column(type="integer")
	 * @ORM\Id
	 * @ORM\GeneratedValue(strategy="AUTO")
	 *
	 */
	protected $id;
	
	/**
	 * @ORM\Column(type="string", length=100)
	 */
	private $title;
	
	/**
	 * @ORM\Column(type="string", length=100)
	 */
	private $slug;
	
	/**
	 * @ORM\Column(type="datetime")
	 */
	private $date;
	
	/**
	 * @ORM\Column(type="text")
	 */
	private $content;
	
	public function getId()
	{
		return $this->id;
	}
	
	public function setTitle($title)
	{
		$this->title = $title;
		return $this;
	}
	
	public function getTitle()
	{
		return $this->title;
	}
	
	public function setDate($date)
	{
		$this->date = $date;
		return $this;
	}
	
	public function getDate()
	{
		return $this->date;
	}
	
	public function setContent($content)
	{
		$this->content = $content;
		return $this;
	}
	
	public function getContent()
	{
		return $this->content;
	}
	
	public function setSlug($slug)
	{
		$this->slug = $slug;
		return $this;
	}
	
	public function getSlug()
	{
		return $this->slug;
	}
	
}
