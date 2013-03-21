<?php
/**
 * Connector.php
 *
 * PHP Version  PHP 5.3.10
 *
 * @category   MphpFlickrPhotosSearch
 * @package    MphpFlickrPhotosSearch
 * @subpackage MphpFlickrPhotosSearch\Connector
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosSearch\Connector;

/**
 * Connector
 *
 * @category   MphpFlickrPhotosSearch
 * @package    MphpFlickrPhotosSearch
 * @subpackage MphpFlickrPhotosSearch\Connector
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
class Connector extends \MphpFlickrBase\Connector\AbstractConnector
{
    
    /**
     * The method name that this Connector will connect to
     * 
     * @var string
     */
    protected $method = 'flickr.photos.search';
    
    /**
     * The name of the adapter class that a call to dispatch should return
     * 
     * @var string
     */
    protected $resultAdapterClass = 'MphpFlickrPhotosSearch\Adapter\ResultSet\ResultSet';
    
    /**
     * 
     * @param array $parameters
     * 
     * @return array
     */
    protected function prepareParameters($parameters = array()) 
    {
        $parameters = parent::prepareParameters($parameters);
        
        return $parameters;
    }
    
}