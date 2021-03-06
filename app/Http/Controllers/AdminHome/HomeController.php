<?php

namespace App\Http\Controllers\AdminHome;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Cloudder;
use DB;
use App\Home;
use App\About;
use App\Contact;
use App\ServiceCatalogue;
use App\Social;
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
        $about = About::findOrFail(1);
        $contact = Contact::findOrFail(1);
        $servicecatalogue = ServiceCatalogue::findOrFail(1);
        $social = Social::findOrFail(1);

        // return view('admin/home.home.index', compact('home'));
        return view('admin/page-content', compact('home', 'about', 'contact', 'servicecatalogue', 'social'));
    }

    public function crop(Request $request)
    {
        $quality = 90;

        $src  = $request->input('image');
        $img  = imagecreatefromjpeg($src);
        $dest = ImageCreateTrueColor($request->input('w'),
            $request->input('h'));

        imagecopyresampled($dest, $img, 0, 0, $request->input('x'),
            $request->input('y'), $request->input('w'), $request->input('h'),
            $request->input('w'), $request->input('h'));
        imagejpeg($dest, $src, $quality);

        return view('admin/home.home.index', compact('src'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        $image = "uploads/41.jpg";
        return view('admin/home.home.create')->with('image');
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

        if (Input::hasFile('image')){
            $file = Input::file('image');
            $pictureName = 'home-'.time();
            Cloudder::upload($file->getPathName(), $pictureName,
              array(
                "width" => 1920, "height" => 752,
              ));
            $upload = Cloudder::getResult();
            $requestData['image'] = $upload['url'];
        }

        // if(Input::hasFile('image')){
        //   $file = Input::file('image');
        //   $file->move('uploads', $file->getClientOriginalName());
        //   $requestData['image'] = 'uploads/'.$file->getClientOriginalName();
        // }

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
        $home_en = Home::findOrFail(1);
        $home_id = Home::findOrFail(2);

        return view('admin/home.home.edit', compact('home_en', 'home_id'));
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
      'image' => 'image',
			'welcome_text' => 'required',
			'company_description' => 'required'
		]);

        if (Input::hasFile('image')) {
          $file = Input::file('image');
          $pictureName = 'home-'.time();
          Cloudder::upload($file->getPathName(), $pictureName,
            array(
              "width" => 1920, "height" => 752,
            ));
          $upload = Cloudder::getResult();
          $requestData['image'] = $upload['url'];
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
