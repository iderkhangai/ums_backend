<?php

namespace App\Http\Controllers;
use App\Models\Menu;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class MenuController extends Controller
{
    public function index(Request $request)
    {
        echo "im called";
        $data = [
            'count_user' => 0,
            'menu'       => 'dashboard.sidebar',
            'content'    => 'user.index',
            'title'    => 'Table Menu'
        ];

        if ($request->ajax()) {
            $q_user = Menu::select('*')->where('is_publish','!=', 0)->orderByDesc('created_at');
            return DataTables::of($q_user)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
     
                        $btn = '<div data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Edit" class="btn btn-sm btn-icon btn-outline-success btn-circle mr-2 edit editUser"><i class=" fi-rr-edit"></i></div>';
                        $btn = $btn.' <div data-toggle="tooltip"  data-id="'.$row->id.'" data-original-title="Delete" class="btn btn-sm btn-icon btn-outline-danger btn-circle mr-2 deleteUser"><i class="fi-rr-trash"></i></div>';
 
                         return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }

        return view('front.index',$data);
    }



}
