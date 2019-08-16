@extends('admin.layouts')

@section('content-head')
<h1 class="text-light">Submission {{ $competition->name }}</h1>
@endsection

@section('content-body')
<div class="row">
    <div class="col-xl-12 col-md-12 col-sm-12">
        <div class="nav-wrapper">
            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                @foreach($submissions as $key)
                <li class="nav-item">
                    <a class="nav-link mb-sm-3 mb-md-0" id="{{ $key->id }}-tab" data-toggle="tab" href="#{{ $key->id }}-text" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true">{{ $key->name }}</a>
                </li>
                @endforeach
            </ul>
        </div>

        <div class="card shadow">
            <div class="card-body">
                <div class="tab-content" id="myTabContent">
                    @foreach($submissions as $key)
                    <div class="tab-pane fade show" id="{{ $key->id }}-text" role="tabpanel" aria-labelledby="{{ $key->id }}-tab">
                        <div class="table-responsive">
                            <table id="" class="table table-striped table-bordered second" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Nama Tim</th>
                                        <th>Institusi</th>
                                        <th>Tanggal Upload</th>
                                        <th>Terakhir update</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($submissionsTeams as $key_1)
                                    @if($key->id == $key_1->submission_id)
                                    <tr>
                                        <td>{{ $key_1->team->name }}</td>
                                        <td>{{ $key_1->team->institution }}</td>
                                        <td>{{ $key_1->created_at }}</td>
                                        <td>{{ $key_1->updated_at }}</td>
                                        <td>{{ $key_1->status }}</td>
                                        <td>
                                            <a href="" class="btn btn-warning"><i class="cloud-download-95"></i></a>
                                            <a href="{{ $key->document }}">{{ $key->document }}</a>
                                        </td>
                                    </tr>
                                    @endif
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection