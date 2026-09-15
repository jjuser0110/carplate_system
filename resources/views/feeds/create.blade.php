@extends('layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 breadcrumb-wrapper mb-4">
        <a class="text-muted fw-light" href="{{route('feeds.index')}}">Feeds /</a>
         @if (isset($feed)) Edit @else Create @endif
    </h4>
    <div class="row">
        <div class="col-12">
            <div class="card">
            <h5 class="card-header">Feed Details</h5>
            <div class="card-body">
                <form class="row g-3" enctype="multipart/form-data" @if (isset($feed)) method="post" action="{{ route('feeds.update',$feed) }}" @else method="post" action="{{ route('feeds.store') }}" @endif onsubmit="showLoading()">
                @csrf
                <div class="col-md-6">
                    <label class="form-label" for="title">Title</label>
                    <input
                    type="text"
                    class="form-control"
                    placeholder="Latest Promotion"
                    name="title"
                    value="{{$feed->title??''}}"
                    required/>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="url">Url</label>
                    <input
                    type="text"
                    class="form-control"
                    placeholder="https://example.com"
                    name="url"
                    value="{{$feed->url??''}}"
                    />
                </div>
                <div class="col-md-12">
                    <label class="form-label" for="description">Description</label>
                    <textarea
                    class="form-control"
                    placeholder="Description"
                    name="description"
                    rows="3">{{$feed->description??''}}</textarea>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="arrangement">Arrangement</label>
                    <input
                    type="text"
                    class="form-control"
                    placeholder="1"
                    name="arrangement"
                    value="{{$feed->arrangement??''}}"
                    required/>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="cover_photo">Cover Photo</label>
                    <input
                    type="file"
                    class="form-control"
                    name="cover_photo"
                    accept="image/*"
                    />
                    @if(isset($coverPhoto) && $coverPhoto)
                        <div class="mt-2">
                            <img src="{{ asset('storage/'.$coverPhoto->file_path) }}" alt="{{$feed->title}}" style="height:80px;width:80px;object-fit:cover;border-radius:4px;">
                        </div>
                    @endif
                </div>

                @if(isset($feed))
                <div class="col-md-7">
                    <label class="form-label" for="is_active">Is Active?</label>
                    <select name="is_active" class="form-control">
                        <option value="1" <?php echo isset($feed)&&$feed->is_active == 1?'selected':'' ?>>Active</option>
                        <option value="0" <?php echo isset($feed)&&$feed->is_active == 0?'selected':'' ?>>Inactive</option>
                    </select>
                </div>
                @endif
                <hr>
                <div class="col-12">
                    <button type="submit" name="submitButton" class="btn btn-primary">Submit</button>
                </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- / Content -->
@endsection

@section('scripts')
@endsection
