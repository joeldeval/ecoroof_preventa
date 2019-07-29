<?php

namespace App\Http\Controllers\Prevent;

use App\Models\CCampaign;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    
    /**
     * Get data.
     *
     * @param  array  $data
     * @return View
     */
    protected function get(Request $request)
    {
        dd('dsadsa');
        $campaign = CCampaign::all();

        return view('prevent', compact('campaign'));
    }
}
