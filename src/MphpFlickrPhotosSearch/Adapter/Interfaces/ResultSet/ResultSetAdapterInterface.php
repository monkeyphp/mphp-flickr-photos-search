<?php
/**
 * ResultSetInterface.php
 *
 * PHP Version  PHP 5.3.10
 *
 * @category   MphpFlickrPhotosSearch
 * @package    MphpFlickrPhotosSearch
 * @subpackage MphpFlickrPhotosSearch\Adapter\Interfaces\ResultSet
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosSearch\Adapter\Interfaces\ResultSet;

/**
 * ResultSetInterface
 * 
 * @category   MphpFlickrPhotosSearch
 * @package    MphpFlickrPhotosSearch
 * @subpackage MphpFlickrPhotosSearch\Adapter\Interfaces\ResultSet
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
interface ResultSetAdapterInterface
{
    
    /**
     * Return the current page
     *
     * @return string|null
     */
    public function getPage();

    /**
     * Return the total number of pages available
     *
     * @return string|null
     */
    public function getPages();

    /**
     * Return the number of results per page
     *
     * @return string|null
     */
    public function getPerPage();

    /**
     * Return the total number of results available
     *
     * @return string|null
     */
    public function getTotal();
    
}