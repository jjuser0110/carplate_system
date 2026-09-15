@extends('layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 breadcrumb-wrapper mb-4">
        <a class="text-muted fw-light" href="{{route('tag.index')}}">Tag Setting /</a>
         @if (isset($tag)) Edit @else Create @endif
    </h4>
    <div class="row">
        <div class="col-12">
            <div class="card">
            <h5 class="card-header">Tag Details</h5>
            <div class="card-body">
                <form class="row g-3" enctype="multipart/form-data" @if (isset($tag)) method="post" action="{{ route('tag.update',$tag) }}" @else method="post" action="{{ route('tag.store') }}" @endif onsubmit="showLoading()">
                @csrf
                <div class="col-md-6">
                    <label class="form-label" for="tag_name">Tag Name</label>
                    <input
                    type="text"
                    class="form-control"
                    placeholder="Popular / Repeating / VIP"
                    name="tag_name"
                    value="{{$tag->tag_name??''}}"
                    required/>
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="color">Badge Color</label>
                    <input
                    type="color"
                    class="form-control form-control-color"
                    name="color"
                    value="{{$tag->color??'#696cff'}}"
                    />
                </div>
                <div class="col-md-6">
                    <label class="form-label" for="arrangement">Arrangement</label>
                    <input
                    type="text"
                    class="form-control"
                    placeholder="1"
                    name="arrangement"
                    value="{{$tag->arrangement??''}}"
                    required/>
                </div>

                @if(isset($tag))
                <div class="col-md-7">
                    <label class="form-label" for="is_active">Is Active?</label>
                    <select name="is_active" class="form-control">
                        <option value="1" <?php echo isset($tag)&&$tag->is_active == 1?'selected':'' ?>>Active</option>
                        <option value="0" <?php echo isset($tag)&&$tag->is_active == 0?'selected':'' ?>>Inactive</option>
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
