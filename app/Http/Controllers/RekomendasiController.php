<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\laptopstree;

class RekomendasiController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('rekomendasi');
    }

    public function processAnswers(Request $request)
    {
        // Retrieve answers from the form
        $answer1 = $request->input('answer1');
        $answer2 = $request->input('answer2');
        $answer3 = $request->input('answer3');
        
        


        // Debugging to show values
        //dd($answer1, $answer2, $answer3);

        // Example query to fetch laptops based on answers
        $laptops = laptopstree::where('kebutuhan', $answer1)
            ->where('budget', $answer2)
            ->where('brand', $answer3)
            ->pluck('namaLaptop');


        $laptopsdetail = laptopstree::where('kebutuhan', $answer1)
            ->where('budget', $answer2)
            ->where('brand', $answer3)
            ->get();
          

        // Debugging statement
        // dd($laptops);
        //dd($laptopsdetail);

        // Pass the data to a view to display the results
        return view('rekomendasi-results', ['laptops' => $laptops, 'laptopsdetail' => $laptopsdetail]);
    }
}
