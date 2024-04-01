<?php

declare(strict_types=1);

namespace Buku\Controller;

use Laminas\Db\Adapter\Adapter;
use Laminas\Db\Sql\Sql;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\View\Model\ViewModel;

class BukuController extends AbstractActionController
{

    protected $db;

    public function __construct()
    {
        $this->db = new Adapter([
            'driver' => 'Pdo_Mysql',
            'database' => 'manajement_buku',
            'username' => 'root',
            'password' => '',

        ]);
    }

    public function indexAction()
    {

        $query = new Sql($this->db);

        $select = $query->select()->from("buku");

        $statement = $query->prepareStatementForSqlObject($select);

        $result = $statement->execute();

        $view = new ViewModel();

        $view->setTemplate('buku/buku/index');

        return $view->setVariables(['data' => $result]);
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