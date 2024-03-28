<?php

declare(strict_types=1);

namespace Buku\Controller;

use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class BukuController extends AbstractActionController
{

    public function indexAction()
    {

        $view = new ViewModel();

        $view->setTemplate('buku/buku/index');
    }


    public function AddAction()
    {

        $view = new ViewModel();

        $view->setTemplate('buku/buku/add');
    }


    public function EditAction()
    {
        $view = new ViewModel();

        $view->setTemplate('buku/buku/edit');
    }


    public function DeleteAction()
    {
        $view = new ViewModel();

        $view->setTemplate('buku/buku/delete');
    }
}
