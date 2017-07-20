<?php

namespace App\Http\Controllers\AdminHome;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use DB;
use App\Home;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Input;
use Session;
use Illuminate\Contracts\Validation\Validator;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $home = Home::findOrFail(1);

        return view('admin/home.home.index', compact('home'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin/home.home.create');
    }

    public function postImage() {
			//echo "HIIIIII";

      $data = $_POST['image'];

			list($type, $data) = explode(';', $data);
			list(, $data)      = explode(',', $data);

			$data = base64_decode($data);
			$imageName = time().'.png';
			file_put_contents('resources/views/upload/'.$imageName, $data);

			echo "Image Uploaded";
		}

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        $this->validate($request, [
			'image' => 'required',
			'welcome_text' => 'required',
			'company_description' => 'required'
		]);
        $requestData = $request->all();

        if(Input::hasFile('image')){
          $file = Input::file('image');
          $file->move('uploads', $file->getClientOriginalName());
          $requestData['image'] = 'uploads/'.$file->getClientOriginalName();
        }

        Home::create($requestData);

        Session::flash('flash_message', 'Home added!');

        return redirect('admin/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $home = Home::findOrFail($id);

        return view('admin/home.home.show', compact('home'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $home = Home::findOrFail($id);

        return view('admin/home.home.edit', compact('home'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update($id, Request $request)
    {
        $this->validate($request, [
			'welcome_text' => 'required',
			'company_description' => 'required'
		]);

        if (Input::hasFile('image')) {
          $requestData = $request->all();

          $file = Input::file('image');
          $file->move('uploads', $file->getClientOriginalName());
          $requestData['image'] = 'uploads/'.$file->getClientOriginalName();
        } else {
          $requestData = $request->except('image');
        }



        $home = Home::findOrFail($id);
        $home->update($requestData);

        Session::flash('flash_message', 'Home updated!');

        return redirect('admin/home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Home::destroy($id);

        Session::flash('flash_message', 'Home deleted!');

        return redirect('admin/home');
    }
}
