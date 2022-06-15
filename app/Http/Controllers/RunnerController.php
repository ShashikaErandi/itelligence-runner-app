<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Run;
use \App\Models\Runner;
use \App\Models\EnrollRunner;
use Carbon\Carbon;
use Redirect;
use DB;

class RunnerController extends Controller
{
    public function index()
    {
        $runs = Run::where('start_date_time', '>=', Carbon::now())->get();

        $runners = Runner::get();

        return view ('runner.index', ['runs' => $runs, 'runners' => $runners]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'run' => 'required',
            'runner' => 'required',
        ]);

        $run = Run::find($request->run);
        $run_date_time = new Carbon($run->start_date_time);

        $runner_enroll = DB::table('enroll_runners')
                        ->where('run_id', $request->run)
                        ->where('runner_id', $request->runner)->get();

        // Check run has already started
        if($run_date_time <= Carbon::now())
        {
            return Redirect::back()->withErrors(['msg' => 'Run has already started']); 
        }
        // Check runner is already enrolled
        elseif($runner_enroll->isNotEmpty())
        {
            return Redirect::back()->withErrors(['msg' => 'Runner is already enrolled']); 
        }else{
            EnrollRunner::create([
                'run_id' => $request->run,
                'runner_id' => $request->runner
            ]);

            return redirect('/runner-enroll')->with('messege', 'Runner has enrolled');
        }

    }

    public function getRunsList()
    {
        $runs = Run::where('start_date_time', '>=', Carbon::now()->subDays(5))
                ->withwhereHas('enrollRunners')->get();
        
        return view('result.index', ['runs' => $runs]);
    }

    public function getRunnersList($id)
    {
        $enrolled_runners = EnrollRunner::where('run_id', $id)->with('runner')->get();
        return view('result.add', ['enrolled_runners' => $enrolled_runners]);
    }

    public function storeResult($id){
        
    }
}
