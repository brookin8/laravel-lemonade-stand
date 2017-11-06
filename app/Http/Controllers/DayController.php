<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class DayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $dayUp = \App\Day::where('game_id', $id)->orderBy('id', 'desc')->first();
        if ($dayUp->day < 7) {
            $newDay = $dayUp->day + 1;
            // Increment Day by 1
            $day = new \App\Day;
            $day->game_id = $id;
            $day->condition_id = 1;
            $day->temperature = 3;
            $day->day = $newDay;
            $day->save();
            return redirect()->route('game', ['id' => $day->game_id]);
        }
        else {
            $endGame = \App\Game::where('id', $id)->first();
            $endGame->is_done = true;
            $endGame->save();
            return redirect('home');
        }
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}