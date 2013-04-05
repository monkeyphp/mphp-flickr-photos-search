<?php
/**
 * AdapterFactory.php
 *
 * PHP Version  PHP 5.3.10
 *
 * @category   MphpFlickrPhotosSearch
 * @package    MphpFlickrPhotosSearch
 * @subpackage MphpFlickrPhotosSearch\Adapter\Factory
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotosSearch\Adapter\Factory;

/**
 * AdapterFactory
 *
 * @category   MphpFlickrPhotosSearch
 * @package    MphpFlickrPhotosSearch
 * @subpackage MphpFlickrPhotosSearch\Adapter\Factory
 * @author     David White [monkeyphp] <git@monkeyphp.com>
 */
class AdapterFactory implements \MphpFlickrBase\Adapter\Factory\AdapterFactoryInterface
{

    /**
     * An array of formats that this AdapterFactory supports
     *
     * @var array
     */
    protected $formats = array('rest');

    /**
     * The default format
     *
     * @return string
     */
    public function getDefaultFormat()
    {
        return 'rest';
    }

    /**
     * Return an array of available formats that this AdapterFactory supports
     *
     * @return array
     */
    public function getFormats()
    {
        return $this->formats;
    }

    /**
     * Return an AdapterInterface instance
     *
     * @param string $format     The format of the results
     * @param mixed  $results    The results as returned from the web service
     * @param array  $parameters The parameters supplied to the Flickr api
     *
     * @throws \MphpFlickrBase\Exception\UnknownResponseFormatException
     * @return \MphpFlickrPhotosSearch\Adapter\Xml\Result\PhotosResultSetAdapter
     */
    public function makeAdapter($format, $results, $parameters)
    {
        switch($format) {
            case 'rest':
                return new \MphpFlickrPhotosSearch\Adapter\Xml\ResultSet\PhotosResultSetAdapter($results, $parameters);
            default:
                throw new \MphpFlickrBase\Exception\UnknownResponseFormatException();
        }
    }

}