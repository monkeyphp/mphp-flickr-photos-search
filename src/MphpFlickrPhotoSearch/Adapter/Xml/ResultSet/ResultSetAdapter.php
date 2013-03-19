<?php
/**
 * ResultSetAdapter.php
 *
 * PHP Version PHP 5.3.10
 *
 * @category    MphpFlickrPhotoSearch
 * @package     MphpFlickrPhotoSearch
 * @subpackage  MphpFlickrPhotoSearch\Adapter\Xml\ResultSet
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
namespace MphpFlickrPhotoSearch\Adapter\Xml\ResultSet;

/**
 * ResultSetAdapter
 *
 * @category    MphpFlickrPhotoSearch
 * @package     MphpFlickrPhotoSearch
 * @subpackage  MphpFlickrPhotoSearch\Adapter\Xml\ResultSet
 * @author      David White [monkeyphp] <git@monkeyphp.com>
 */
class ResultSetAdapter extends \MphpFlickrBase\Adapter\Xml\ResultSet\AbstractResultSetAdapter implements \MphpFlickrPhotoSearch\Adapter\Interfaces\ResultSet\ResultSetAdapterInterface
{

    /**
     * The current resultset page
     *
     * @var string
     */
    protected $page;
    
    /**
     * The number of potential pages that are available
     *
     * @var string
     */
    protected $pages;

    /**
     * The number of results that are available per page
     *
     * @var string
     */
    protected $perPage;

    /**
     * The total number of results
     *
     * @var string
     */
    protected $total;
    
    /**
     * DOMXPath query string used to retrieve the page value
     * 
     * @var string
     */
    protected $pageQuery = '/rsp/photos/@page';

    /**
     * DOMXPath query string used to retrieve the pages value
     * 
     * @var string
     */
    protected $pagesQuery = '/rsp/photos/@pages';
    
    /**
     * DOMXPath query string used to retrieve the perpage value
     * 
     * @var string
     */
    protected $perPageQuery = '/rsp/photos/@perpage';
    
    /**
     * DOMXPath query string used to retrieve the total value
     * 
     * @var string
     */
    protected $totalQuery = '/rsp/photos/@total';
    
    /**
     * The class returned during each iteration of the ResultSet
     * 
     * @var string
     */
    protected $resultAdapterClasss = 'MphpFlickrPhotoSeach\Adapter\Xml\Result\ResultAdapter';
    
    /**
     * ResultSetAdapterInterface implementation
     * 
     * @return string|null
     */
    public function getPage()
    {
        if (! isset($this->page)) {
            $this->page = $this->getDomXPath($this->getDomDocument())->query($this->getPageQuery())->item(0)->value;
        }
        return $this->page;
    }
    
    /**
     * ResultSetAdapterInterface implementation
     * 
     * @return string
     */
    public function getPages()
    {
        if (! isset($this->pages)) {
            $this->pages = $this->getDomXPath($this->getDomDocument())->query($this->getPagesQuery())->item(0)->value;
        }
        return $this->pages;
    }
    
    /**
     * ResultSetAdapterInterface implementation
     * 
     * @return string
     */
    public function getPerPage()
    {
        if (! isset($this->perPage)) {
            $this->perPage = $this->getDomXPath($this->getDomDocument())->query($this->getPerPageQuery())->item(0)->value;
        }
        return $this->perPage;
    }
    
    /**
     * ResultSetAdapterInterface implementation
     * 
     * @return string
     */
    public function getTotal()
    {
        if (! isset($this->total)) {
            $this->total = $this->getDomXPath($this->getDomDocument())->query($this->getTotalQuery())->item(0)->value;
        }
        return $this->total;
    }
    
    /**
     * Return the DOMXPath query string used to retrieve the page value
     * 
     * @return string
     */
    protected function getPageQuery()
    {
        return $this->pageQuery;
    }
    
    /**
     * Return the DOMXPath query string used to retrieve the pages value
     * 
     * @return string
     */
    protected function getPagesQuery()
    {
        return $this->pagesQuery;
    }

    /**
     * Return the DOMXPath query string used to retrieve the per page query
     * 
     * @return string
     */
    protected function getPerPageQuery()
    {
        return $this->perPageQuery;
    }

    /**
     * Return the DOMXPath query string used to retrieve the total query
     * 
     * @return string
     */
    protected function getTotalQuery()
    {
        return $this->totalQuery;
    }

}