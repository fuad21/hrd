<?php
namespace App\Http\Controllers;

use App\Shift;
use Exception;
use App\Remark;
use App\Karyawan;
use App\Worktime;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use DB;

class WorktimeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $worktimes = Worktime::all();
        return view('worktime.index', compact('worktimes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $remarks = Remark::all()->reduce(function ($out, $item){
            return $out->put($item->id,"$item->kode $item->nama");
        },collect())->toArray();
        $shifts = Shift::pluck('nama', 'id');
        $karyawans = Karyawan::all()->reduce(function ($out, $item){
            return $out->put($item->id, "$item->nik $item->nama");
        },collect())->toArray();
        return view('worktime.add', compact('worktime', 'remarks', 'shifts', 'karyawans'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
             'karyawan_id'=>'required',
             'tgl'=>'required|date_format:Y-m-d',
             'remark_id'=>'required',
             'shift_id'=>'required',
             'hmin'=>'required|integer',
             'hmout'=>'required|integer',
             'in'=>'required',
             'out'=>'required',
             'rest'=>'required|integer',
             'lambat'=>'required|integer',
         ]);
        try{
            $worktime = new Worktime($request->only([
                'karyawan_id',
                'tgl',
                'remark_id',
                'shift_id',
                'hmin',
                'hmout',
                'in',
                'out',
                'rest',
                'lambat',
            ]));
            $shift = Shift::where('id',$worktime->shift_id)->firstOrFail();
            $jamIn = Carbon::createFromFormat('H:i', $request->in);
            $jamOut = Carbon::createFromFormat('H:i', $request->out);
            $totaljk = $jamIn->diffInHours($jamOut,false) - $request->get('rest',0);
            $worktime->totaljk = $totaljk < 0 ? 0 : $totaljk;
            $worktime->totalhm = $request->get('hmout',0)- $request->get('hmin', 0);
            $worktime->ot = 0;
            
            if(!$worktime->save()){
                throw new Exception("Data Gagal di simpan", 1);
            }
            return redirect()->route('worktime.index');
        }catch (Exception $e){
            return redirect()->back()->withInput()->withErrors(['err'=> $e->getMessage()]);
        }
        
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
        $worktime = Worktime::find($id);
        $remarks = Remark::all()->reduce(function ($out, $item){
            return $out->put($item->id,"$item->kode $item->nama");
        },collect())->toArray();
        $karyawans = Karyawan::all()->reduce(function ($out, $item){
            return $out->put($item->id, "$item->nik $item->nama");
        },collect())->toArray();
        $datas = DB::table('karyawans')->select('id', 'nama')->where('nama', 'LIKE', '%$cari%')->get();
        $shifts = Shift::pluck('nama', 'id');

        return view('worktime.edit', compact('worktime', 'remarks', 'karyawans', 'shifts', 'datas'));
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
        $request->validate([
            'karyawan_id'=>'required',
            'tgl'=>'required|date_format:Y-m-d',
            'remark_id'=>'required',
            'shift_id'=>'required',
            'hmin'=>'required|integer',
            'hmout'=>'required|integer',
            'in'=>'required',
            'out'=>'required',
            'rest'=>'required|integer',
            'lambat'=>'required|integer',
        ]);
        try{
            $worktime = Worktime::find($id)->fill($request->only([
                'karyawan_id',
                'tgl',
                'remark_id',
                'shift_id',
                'hmin',
                'hmout',
                'in',
                'out',
                'rest',
                'lambat',
            ]));
            $shift = Shift::findOrFail($request->shift_id);

            $jamIn = Carbon::createFromFormat('H:i:s', $request->in);
            $jamOut = Carbon::createFromFormat('H:i:s', $request->out);
            $totaljk = $jamIn->diffInHours($jamOut,false) - $request->get('rest',0);
            $worktime->totaljk = $totaljk < 0 ? 0 : $totaljk;
            $worktime->totalhm = $request->get('hmout',0)- $request->get('hmin', 0);
            $worktime->ot = 0;
            if(!$worktime->save()){
                throw new Exception("Data Gagal di simpan", 1);
            }
            return redirect()->route('worktime.index');
        }catch (Exception $e){
            return redirect()->back()->withInput()->withErrors(['err'=> $e->getMessage()]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $worktime = worktime::find($id);
        $worktime->delete();   
        return redirect('worktime')->with('Success', 'Data Sudah Di Hapus');
    }
    
    public function loadData(Request $request)
    {
    	if ($request->has('q')) {
    		$cari = $request->q;
    		$data = DB::table('karyawans')->select('id', 'nama')->where('nama', 'LIKE', '%$cari%')->get();
    		return response()->json($data);
    	}
    }
}