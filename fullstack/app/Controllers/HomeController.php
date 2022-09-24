<?php

namespace App\Controllers;
// use App\Models\BlogModel;
// use App\Models\EventModel;
// use App\Models\PortfolioModel;
// use App\Models\PagesAdminModel;

class HomeController extends BaseController
{
    // protected $blog_model;
    // protected $event_model;
    // protected $portfolio_model;
    // protected $PagesAdminModel;
    public function __construct()
    {
        // $this->blog_model=new BlogModel();
        // $this->event_model=new EventModel();
        // $this->portfolio_model=new PortfolioModel();
        // $this->Pages_Admin_model=new PagesAdminModel();
    }
    
    public function index ()
    {
       $data = [
        'title'=>'Home | CV. GemilangPermata',
        'number' => 1,
        'partners' => [
            [
                'logo' => '/assets/img/clients/fraserplace menteng.png',
                'link' => 'link',
            ],
            [
                'logo' => '/assets/img/clients/aston.png',
                'link' => 'link2',
            ]
        ]
       ];
       
       return view('pages/home',$data) ;
    }
    
}
?>
  