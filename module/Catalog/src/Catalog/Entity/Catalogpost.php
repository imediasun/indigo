<?php
namespace Catalog\Entity;

use Doctrine\ORM\Mapping as ORM;
use Zend\InputFilter\InputFilter;
use Zend\InputFilter\Factory as InputFactory;
use Zend\InputFilter\InputFilterAwareInterface;
use Zend\InputFilter\InputFilterInterface; 
  
/**
 * A catalog of products.
 *
 * @ORM\Entity
 * @ORM\Table(name="catalog")
 * @property int $id
 * @property string $product_name
 */

class Catalogpost
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
  protected $product_name;

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
   * Get product_name.
   *
   * @return string
   */
  public function getProduct_name()
  {
    return $this->product_name;
  }

  /**
   * Set product_name.
   *
   * @param string $product_name
   *
   * @return void
   */
  public function setProduct_name($product_name)
  {
    $this->product_name = $product_name;
  }

}