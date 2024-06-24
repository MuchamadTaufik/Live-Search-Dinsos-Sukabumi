<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Supplier;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class BarangController extends Controller
{

    public function search(Request $request){

        if($request->ajax()){
    
            $data=Barang::where('nip','like','%'.$request->search.'%')->get();
    
    
            $output='';
        if(count($data)>0){
    
            $output ='
                <table class="table">
                <thead>
                <tr>
                    <th scope="col">NIP</th>
                    <th scope="col">Nama Pekerja</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody>';
    
                    foreach($data as $row){
                        $output .='
                        <tr>
                        <th scope="row">'.$row->nip.'</th>
                        <td>'.$row->nama.'</td>
                        <td><a href="/barang/' . $row->id . '" class="btn btn-info btn-circle btn-sm lihat-btn"><i class="fas fa-eye"></i></a></td>
                        </tr>
                        ';
                    }
    
    
    
                $output .= '
                    </tbody>
                    </table>';
    
    
    
        }
        else{
    
            $output .='No results';
    
        }
    
        return $output;
    
        }
    
    
    
    
    }

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role: isAdmin');

        $this->middleware(function ($request, $next) {
            if (session('success')) {
                Alert::success(session('success'));
            }

            if (session('error')) {
                Alert::error(session('error'));
            }

            return $next($request);
        });
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('barang.index', [
            'barangs' => Barang::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.create', [
            'suppliers' => Supplier::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'supplier_id' => 'required',
            'pendidikan' => 'required',
            'ijazah' => 'required|in:SMP,SMA,S1,S2,S3',
            'ttl' => 'required',
            'jenis_kelamin' => 'required|in:L,P',
        ]);

        Barang::create($validatedData);

        return redirect('/barang')->with('success', 'Data Pekerja berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Barang $barang)
    {
        return view('barang.show', [
            'suppliers' => Supplier::all(),
            'barang' => $barang
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Barang $barang)
    {
        return view('barang.edit', [
            'suppliers' => Supplier::all(),
            'barang' => $barang
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barang $barang)
    {
        $validatedData = $request->validate([
            'nip' => 'required',
            'nama' => 'required',
            'supplier_id' => 'required',
            'pendidikan' => 'required',
            'ijazah' => 'required|in:SMP,SMA,S1,S2,S3',
            'ttl' => 'required',
            'jenis_kelamin' => 'required|in:L,P',
        ]);

        Barang::where('id', $barang->id)->update($validatedData);

        return redirect('/barang')->with('success', 'Data Pekerja Berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Barang $barang)
    {
        Barang::destroy($barang->id);

        return redirect('/barang')->with('success', 'Data Pekerja berhasil dihapus!');
    }
}
