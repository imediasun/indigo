<?php
namespace Menu\Entity;
use Doctrine\ORM\Mapping as ORM;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface; 

/**
 * Menu
 *
 * @ORM\Entity
 * @ORM\Table(name="categories")
 */
class Menu
{
  /**
  
   * @var int
   * @ORM\Id
   * @ORM\Column(type="integer")
   * @ORM\GeneratedValue(strategy="AUTO")
   */
  protected $id;

  /**
   * @var string
   * @ORM\Column(type="string", length=255, nullable=false)
   */
  protected $category;
  
   /**
   * @var string
   * @ORM\Column(type="string", length=255, nullable=false)
   */
  protected $name_menu;

  /**
   * Get id.
   *
   * @return int
   */
  public function getId()
  {
    return $this->id;
  }

  /**
   * Set id.
   *
   * @param int $id
   *
   * @return void
   */
  public function setId($id)
  {
    $this->id = (int) $id;
  }

  /**
   * Get category.
   *
   * @return string
   */
  public function getCategory()
  {
    return $this->category;
  }

  /**
   * Set category.
   *
   * @param string $category
   *
   * @return void
   */
  public function setCategory($category)
  {
    $this->category = $category;
  }

  
   /**
   * Get name_menu.
   *
   * @return string
   */
  public function getNamemenu()
  {
    return $this->name_menu;
  }

  /**
   * Set category.
   *
   * @param string $name_menu
   *
   * @return void
   */
  public function setNamemenu($name_menu)
  {
    $this->name_menu = $name_menu;
  }

}