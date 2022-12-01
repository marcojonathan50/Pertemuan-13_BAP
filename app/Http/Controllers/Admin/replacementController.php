<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\replacement;
use Illuminate\Http\Request;

class replacementController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $replacement = replacement::where('nama_lengkap', 'LIKE', "%$keyword%")
                ->orWhere('mata_kuliah', 'LIKE', "%$keyword%")
                ->orWhere('kelas', 'LIKE', "%$keyword%")
                ->orWhere('prodi', 'LIKE', "%$keyword%")
                ->orWhere('semester', 'LIKE', "%$keyword%")
                ->orWhere('tahun_akademik', 'LIKE', "%$keyword%")
                ->orWhere('tanggal', 'LIKE', "%$keyword%")
                ->orWhere('jadwal_kuliah', 'LIKE', "%$keyword%")
                ->orWhere('tanggal_replacement', 'LIKE', "%$keyword%")
                ->orWhere('jam_replacement', 'LIKE', "%$keyword%")
                ->orWhere('alasan_replacement', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $replacement = replacement::latest()->paginate($perPage);
        }

        return view('admin.replacement.index', compact('replacement'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.replacement.create');
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
        
        $requestData = $request->all();
        
        replacement::create($requestData);

        return redirect('admin/replacement')->with('flash_message', 'replacement added!');
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
        $replacement = replacement::findOrFail($id);

        return view('admin.replacement.show', compact('replacement'));
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
        $replacement = replacement::findOrFail($id);

        return view('admin.replacement.edit', compact('replacement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $replacement = replacement::findOrFail($id);
        $replacement->update($requestData);

        return redirect('admin/replacement')->with('flash_message', 'replacement updated!');
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
        replacement::destroy($id);

        return redirect('admin/replacement')->with('flash_message', 'replacement deleted!');
    }
}
