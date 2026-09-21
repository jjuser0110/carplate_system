@extends('layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 breadcrumb-wrapper mb-4">
        <span class="text-muted fw-light">Website /</span> Banner
    </h4>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Banners</h5>
            <a href="{{ route('banner.create') }}" class="btn btn-primary">Create</a>
        </div>
        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th>Preview</th>
                        <th>Title</th>
                        <th>Arrangement</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($banners as $banner)
                        <tr>
                            <td>
                                @if ($banner->media_type === 'video')
                                    <video src="{{ $banner->url }}" style="height:60px;" muted></video>
                                @else
                                    <img src="{{ $banner->url }}" style="height:60px;" alt="">
                                @endif
                            </td>
                            <td>{{ $banner->title }}</td>
                            <td>{{ $banner->arrangement }}</td>
                            <td>
                                <span class="badge bg-{{ $banner->is_active ? 'success' : 'secondary' }}">
                                    {{ $banner->is_active ? 'Active' : 'Inactive' }}
                                </span>
                            </td>
                            <td>
                                <a href="{{ route('banner.edit', $banner) }}" class="btn btn-sm btn-outline-primary">Edit</a>
                                <a href="{{ route('banner.destroy', $banner) }}" class="btn btn-sm btn-outline-danger"
                                   onclick="return confirm('Delete this banner?')">Delete</a>
                            </td>
                        </tr>
                    @empty
                        <tr><td colspan="5" class="text-center text-muted">No banners yet.</td></tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection