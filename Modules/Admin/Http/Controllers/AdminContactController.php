<?php

namespace Modules\Admin\Http\Controllers;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;

class AdminContactController extends Controller
{
    
    public function index()
    {
         $contacts =Contact::paginate(10);
        $viewData =[
        'contacts' =>$contacts,
         ];
        return view('admin::contact.index',$viewData);
    }

  
}
