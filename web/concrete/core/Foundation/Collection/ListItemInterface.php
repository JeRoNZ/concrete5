<?
namespace Concrete\Core\Foundation\Collection;
interface ListItemInterface
{
    public function createQuery();
    public function getPagination();
    public function getTotalResults();
    public function getResult($mixed);
    public function getResults();

}