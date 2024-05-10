<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function PHPUnit\Framework\isEmpty;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $competition_id,Request $request)
    {
        // return($request->competitionId);
        try {
            $event=Event::where('competition_id',$request->competitionId)->paginate(6);
            $comp=DB::table('competitions')->get();
            if($event->isEmpty()){
                return redirect()->back()->with('Erorr, there are no events avilable');
            }
            else{
            return view('event',['event'=>$event,'comp'=>$comp]);
        }
        } catch (\Throwable $e) {
            throw $e;
        }


    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
