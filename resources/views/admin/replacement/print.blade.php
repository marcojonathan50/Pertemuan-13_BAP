@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header">replacement {{ $replacement->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/replacement') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('/admin/replacement/' . $replacement->id . '/edit') }}" title="Edit replacement"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>

                        <form method="POST" action="{{ url('admin/replacement' . '/' . $replacement->id) }}" accept-charset="UTF-8" style="display:inline">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-danger btn-sm" title="Delete replacement" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                        </form>

                        <a href="{{ url('/admin/replacement/' . $replacement->id . '/print') }}" title="Edit replacement"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Print</button></a>
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $replacement->id }}</td>
                                    </tr>
                                    <tr><th> Nama Lengkap </th><td> {{ $replacement->nama_lengkap }} </td></tr><tr><th> Mata Kuliah </th><td> {{ $replacement->mata_kuliah }} </td></tr><tr><th> Kelas </th><td> {{ $replacement->kelas }} </td></tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
