<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\missing_items_status;
use Illuminate\Http\Request;

class missing_items_statusController extends Controller
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
            $missing_items_status = missing_items_status::where('name', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $missing_items_status = missing_items_status::latest()->paginate($perPage);
        }

        return view('admin.missing_items_status.index', compact('missing_items_status'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.missing_items_status.create');
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
        
        missing_items_status::create($requestData);

        return redirect('admin/missing_items_status')->with('flash_message', 'missing_items_status added!');
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
        $missing_items_status = missing_items_status::findOrFail($id);

        return view('admin.missing_items_status.show', compact('missing_items_status'));
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
        $missing_items_status = missing_items_status::findOrFail($id);

        return view('admin.missing_items_status.edit', compact('missing_items_status'));
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
        
        $missing_items_status = missing_items_status::findOrFail($id);
        $missing_items_status->update($requestData);

        return redirect('admin/missing_items_status')->with('flash_message', 'missing_items_status updated!');
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
        missing_items_status::destroy($id);

        return redirect('admin/missing_items_status')->with('flash_message', 'missing_items_status deleted!');
    }
}
