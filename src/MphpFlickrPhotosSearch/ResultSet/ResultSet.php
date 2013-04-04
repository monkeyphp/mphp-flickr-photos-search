<?php
/**
 * ResultSet.php
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
     * The name of the Result class to instantiate with each iteration
     *
     * @var string
     */
    protected $resultClass = 'MphpFlickrPhotosSearch\Result\Result';

    /**
     *
     * @param \MphpFlickrBase\Adapter\Interfaces\ResultSet\ResultSetAdapterInterface $adapter
     *
     * @throws \InvalidArgumentException
     * @return type
     */
    public function setAdapter(\MphpFlickrBase\Adapter\Interfaces\ResultSet\ResultSetAdapterInterface $adapter)
    {
        if ($adapter instanceof \MphpFlickrPhotosSearch\Adapter\Interfaces\ResultSet\PhotosResultSetAdapterInterface) {
            return parent::setAdapter($adapter);
        }
        throw new \InvalidArgumentException('Invalid adapter supplied');
    }

    /**
     * Return the page value
     *
     * The ResultSetAdapter::getPage() should return a numeric string
     * (or null) so before returning the page value we will cast it to an
     * integer
     *
     * @return integer|null
     */
    public function getPage()
    {
        return ($page = $this->getAdapter()->getPage())
            ? (integer)$page
            : null;
    }

    /**
     * Return the pages value
     *
     * The ResultSetAdapter::getPages() should return a numeric string or null,
     * so before returning the the pages value we will cast it to an integer
     *
     * @return integer|null
     */
    public function getPages()
    {
        return ($pages = $this->getAdapter()->getPages())
            ? (integer)$pages
            : null;
    }

    /**
     * Return the per page value
     *
     * The ResultSetAdapter::getPerPage() should return a numeric string or null,
     * so before returning the perpage value we will cast it to an integer
     *
     * @return integer|null
     */
    public function getPerPage()
    {
        return ($perPage = $this->getAdapter()->getPerPage())
            ? (integer)$perPage
            : null;
    }

    /**
     * Return the total value
     *
     * The ResultSetAdapter::getTotal() should return a numeric string or null,
     * so before returning the total value we will cast it to an integer
     *
     * @return integer|null
     */
    public function getTotal()
    {
        return ($total = $this->getAdapter()->getTotal())
            ? (integer)$total
            : null;
    }

}