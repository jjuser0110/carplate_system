@extends('layouts.app')
@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">Feeds </span></h4>

        <!-- DataTable with Buttons -->
        <div class="card">
            <div class="card-header flex-column flex-md-row">
                <div class="head-label">
                    <h5 class="card-title mb-0">Feeds Listing</h5>
                </div>
                <div class="dt-action-buttons text-end pt-3 pt-md-0">
                    <div class="dt-buttons">
                        <a class="dt-button create-new btn btn-primary" type="button" href="{{route('feeds.create')}}" onclick="showLoading()">
                            <span><i class="bx bx-plus me-sm-1"></i>
                                <span class="d-none d-sm-inline-block">Add New Record</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-datatable text-nowrap">
                <table class="dt-column-search table table-bordered" id="mytable">
                    <thead>
                        <tr>
                            <th>Cover Photo</th>
                            <th>Arrangement</th>
                            <th>Title</th>
                            <th>Url</th>
                            <th>Is Active</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($feeds as $row)
                        <tr>
                            <td>
                                @if($row->coverPhoto)
                                    <img src="{{ asset('storage/'.$row->coverPhoto->file_path) }}" alt="{{$row->title}}" style="height:50px;width:50px;object-fit:cover;border-radius:4px;">
                                @else
                                    <span class="text-muted">No Image</span>
                                @endif
                            </td>
                            <td>{{$row->arrangement??""}}</td>
                            <td>{{$row->title??""}}</td>
                            <td>
                                @if($row->url)
                                    <a href="{{$row->url}}" target="_blank">{{ Str::limit($row->url, 30) }}</a>
                                @endif
                            </td>
                            <td>
                                @if($row->is_active == 1)
                                    <span class="badge bg-label-success me-1">Active</span>
                                @else
                                    <span class="badge bg-label-danger me-1">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <div class="btn-group">
                                <button
                                    type="button"
                                    class="btn btn-primary btn-sm dropdown-toggle"
                                    data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    Action
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="{{ route('feeds.edit',$row) }}" onclick="showLoading()">Edit</a></li>
                                    <li><a class="dropdown-item" style="color:red;cursor:pointer" onclick="if(confirm('Are you sure you want to delete?')){showLoading();window.location.href='{{ route('feeds.destroy',$row) }}'}">Delete</a></li>
                                    <li>
                                </ul>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- / Content -->

    @endsection
    @section('page-js')
    @endsection
    @section('scripts')
      <script>
    $(function(){
      var table = $('#mytable').DataTable({
        dom: '<"row"<"col-sm-12 col-md-6"l><"col-sm-12 col-md-6 d-flex justify-content-center justify-content-md-end"f>><"table-responsive"t><"row"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
        pageLength: 10,
        displayLength: 5,
        ordering:false,
        lengthMenu: [5, 10, 25, 50, 75, 100],
      });
    });
  </script>
    @endsection
