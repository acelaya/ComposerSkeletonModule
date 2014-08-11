<?php
namespace Acelaya\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

/**
 * Class SkeletonController
 * @author
 * @link
 */
class SkeletonController extends AbstractActionController
{
    public function indexAction()
    {
        return new ViewModel();
    }
}
