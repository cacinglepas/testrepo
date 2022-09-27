<?php

namespace App\Controllers;
use App\Models\EventModel;

class EventController extends BaseController
{
    protected $event_model;
    public function __construct()
    {
        $this->event_model=new EventModel();
    }
    
    public function index ()
    {
        $data = [
            'title'=> 'Event'
        ];

        $event= $this->event_model->findAll();
        $data['event']=$event;
        
        return view('pages/event',$data);
    }

    public function detail ()
    {
        $data = [
            'title'=>'Event single'
        ];

        $event= $this->event_model->findAll();
        $data["event"]= $event;

        return view('pages/event-single',$data);
    }
    
}
?>
  