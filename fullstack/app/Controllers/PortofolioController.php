<?php

namespace App\Controllers;
use App\Models\PortfolioModel;

class PortofolioController extends BaseController
{
    protected $portfolio_model;
    public function __construct()
    {
        $this->portfolio_model=new PortfolioModel();
    }

    public function index ()
    {
        $data =[
            'title'=>'portfolio'
        ];

        $portfolio= $this->portfolio_model->findAll();
        $data['portfolio']= $portfolio;

        return view('pages/portfolio', $data);
    }
    
}
?>
  