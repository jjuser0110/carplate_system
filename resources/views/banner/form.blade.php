@extends('layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="py-3 breadcrumb-wrapper mb-4">
        <a class="text-muted fw-light" href="{{ route('banner.index') }}">Banner /</a>
        @if (isset($banner)) Edit @else Create @endif
    </h4>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="row">
        <div class="col-12">
            <div class="card">
                <h5 class="card-header">Banner Details</h5>
                <div class="card-body">
                    <form class="row g-3" enctype="multipart/form-data" method="post"
                          @if (isset($banner)) action="{{ route('banner.update', $banner) }}"
                          @else action="{{ route('banner.store') }}" @endif
                          onsubmit="showLoading()">
                        @csrf

                        @if (isset($banner))
                        <div class="col-12">
                            <label class="form-label">Current Banner</label>
                            <div id="bannerPreview" class="border rounded p-2 bg-light text-center">
                                @if ($banner->media_type === 'video')
                                    <video src="{{ $banner->url }}" style="max-width:100%;max-height:260px;" controls muted></video>
                                @else
                                    <img src="{{ $banner->url }}" style="max-width:100%;max-height:260px;" alt="Banner">
                                @endif
                            </div>
                        </div>
                        @else
                        <div class="col-12"><div id="bannerPreview" class="text-center"></div></div>
                        @endif

                        <div class="col-md-6">
                            <label class="form-label" for="title">Title (optional)</label>
                            <input type="text" class="form-control" name="title" id="title"
                                   placeholder="Raya Promotion"
                                   value="{{ old('title', $banner->title ?? '') }}">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="description">Description (optional)</label>
                            <input type="text" class="form-control" name="description" id="description"
                                placeholder="Best plates in town"
                                value="{{ old('description', $banner->description ?? '') }}">
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="arrangement">Arrangement</label>
                            <input type="text" class="form-control" name="arrangement" id="arrangement"
                                   placeholder="1"
                                   value="{{ old('arrangement', $banner->arrangement ?? '') }}" required>
                        </div>

                        <div class="col-md-6">
                            <label class="form-label" for="media">
                                {{ isset($banner) ? 'Replace Banner (Image / Video)' : 'Banner (Image / Video)' }}
                            </label>
                            <input type="file" class="form-control" name="media" id="media"
                                   accept=".jpg,.jpeg,.png,.webp,.mp4,.webm"
                                   @if (!isset($banner)) required @endif>
                            <div class="form-text">JPG, PNG, WEBP, MP4 or WEBM. Max 20MB. Recommended 1920×700.</div>
                        </div>

                        @if (isset($banner))
                        <div class="col-md-6">
                            <label class="form-label" for="is_active">Is Active?</label>
                            <select name="is_active" id="is_active" class="form-control">
                                <option value="1" @selected($banner->is_active == 1)>Active</option>
                                <option value="0" @selected($banner->is_active == 0)>Inactive</option>
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
@endsection

@section('scripts')
<script>
document.getElementById('media').addEventListener('change', function () {
    const file = this.files[0];
    const box = document.getElementById('bannerPreview');
    if (!file) return;
    const url = URL.createObjectURL(file);
    box.innerHTML = file.type.startsWith('video/')
        ? `<video src="${url}" style="max-width:100%;max-height:260px;" controls muted></video>`
        : `<img src="${url}" style="max-width:100%;max-height:260px;" alt="Preview">`;
});
</script>
@endsection