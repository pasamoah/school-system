<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Library;
use View;

class LibraryController extends Controller
{

	    public function __construct()
    {
        $this->middleware('auth');
    }
    

    public function index(){
        return view('library');
    }


	public function addbook(Request $request)
	{
		
		$this->validate($request, [
        'document' => 'required|mimes:pdf,docx|max:100000',
    ]);

    $addbook = new Library;

     if($file = $request->hasFile('document')) {
        $file = $request->file('document') ;
        $fileName = $file->getClientOriginalName() ;
        $destinationPath = public_path().'/uploads/documents' ;
        $file->move($destinationPath,$fileName);
        $addbook->filebook = ''.$fileName ;
    }
        $addbook -> book_name = $request -> input('book_name');
        $addbook -> book_subject = $request -> input('book_subject');
        $addbook -> book_writer = $request -> input('book_writer');
        $addbook -> book_level = $request -> input('book_level');
        $addbook -> book_isbn = $request -> input('book_isbn');
        $addbook -> book_date = $request -> input('book_date');


    $addbook -> save();
    return redirect('/dashboard/librarystore') -> with('status', 'Book Added Successfully');


	}


	public function getbooks()
	{
		
		$allbooks = Library::latest()->paginate(150);
		return view('librarystore',[ 'getbooks' => $allbooks
		])->with('i', (request()->input('page',1) -1) * 150);

	}




	public function destroy(Library $library)
	{
		$library->delete();
		return redirect('/dashboard/librarystore') -> with('status', 'book removed');
	}



    public function getlibrary(Library $library){
        return view('library.libraryedit-form',[
            'loadlibrary' => $library
        ]);

    }



    public function savelibrary(Request $request, Library $library){

        $id = $library -> id;

     if($file = $request->hasFile('document')) {
        $file = $request->file('document') ;
        $fileName = $file->getClientOriginalName() ;
        $destinationPath = public_path().'/uploads/documents' ;
        $file->move($destinationPath,$fileName);
        $library-> filebook = ''.$fileName ;
    }
        $library -> book_name = $request -> get('book_name');
        $library -> book_subject = $request -> get('book_subject');
        $library -> book_writer = $request -> get('book_writer');
        $library -> book_level = $request -> get('book_level');
        $library -> book_isbn = $request -> get('book_isbn');
        $library -> book_date = $request -> get('book_date');
        $library ->save();

            return redirect('edit/library/' . $id) -> with('status', 'updated! <a href="/dashboard/librarystore">Go Back</a>');

    }

}
