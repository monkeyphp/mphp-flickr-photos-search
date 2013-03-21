<?php
/**
 * ResultSetAdapter.php
 *
 * PHP Version PHP 5.3.10
 *
 * @category    MphpFlickrPhotosSearch
 * @package     MphpFlickrPhotosSearch
 * @subpackage  MphpFlickrPhotosSearch\ResultSet
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosSearch\ResultSet;

/**
 * ResultSet
 *
 * @category    MphpFlickrPhotosSearch
 * @package     MphpFlickrPhotosSearch
 * @subpackage  MphpFlickrPhotosSearch\ResultSet
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
class ResultSet extends \MphpFlickrBase\ResultSet\AbstractResultSet
{
    
    /**
     * 
     * @param \MphpFlickrPhotosSearch\Adapter\Interfaces\ResultSet\ResultSetAdapterInterface $adapter
     * 
     * @return \ResultSet
     */
    public function setAdapter(\MphpFlickrPhotosSearch\Adapter\Interfaces\ResultSet\ResultSetAdapterInterface $adapter) 
    {
        $this->adapter = $adapter;
        return $this;
    }  
    
    /**
     * Return the page value
     * 
     * @return string
     */
    public function getPage()
    {
        return $this->getAdapter()->getPage();
    }

    /**
     * Return the pages value
     * 
     * @return string|null
     */
    public function getPages()
    {
        return $this->getAdapter()->getPages();
    }

    /**
     * Return the per page value
     * 
     * @return string|null
     */
    public function getPerPage()
    {
        return $this->getAdapter()->getPerPage();
    }

    /**
     * Return the total value
     * 
     * @return string|null
     */
    public function getTotal()
    {
        return $this->getAdapter()->getTotal();
    }
    
}