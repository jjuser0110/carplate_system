
@extends('layouts.app')

@section('content')
<div class="container-xxl flex-grow-1 container-p-y">

    <h4 class="py-3 breadcrumb-wrapper mb-4">
        <a class="text-muted fw-light" href="{{ route('carplate_number.index') }}">
            Carplate Number /
        </a>
        @if (isset($carplateNumber))
            Edit
        @else
            Create
        @endif
    </h4>

    <div class="row">
        <div class="col-12">
            <div class="card">

                <h5 class="card-header">Carplate Number Details</h5>

                <div class="card-body">

                    <form
                        class="row g-3"
                        enctype="multipart/form-data"
                        @if (isset($carplateNumber))
                            method="post"
                            action="{{ route('carplate_number.update', $carplateNumber) }}"
                        @else
                            method="post"
                            action="{{ route('carplate_number.store') }}"
                        @endif
                        onsubmit="showLoading()"
                    >

                        @csrf

                        @if (isset($carplateNumber))
                            @method('PUT')
                        @endif

                        {{-- Plate Number --}}
                        <div class="col-md-6">
                            <label class="form-label" for="plate">
                                Plate Number
                            </label>

                            <input
                                type="text"
                                class="form-control"
                                id="plate"
                                name="plate"
                                placeholder="WXX 1234"
                                value="{{ old('plate', $carplateNumber->plate ?? '') }}"
                                required
                            />
                        </div>

                        {{-- Category --}}
                        <div class="col-md-6">
                            <label class="form-label" for="category_id">
                                Category
                            </label>

                            <select
                                name="category_id"
                                id="category_id"
                                class="form-control"
                            >
                                <option value="">-- Select Category --</option>

                                @foreach($categories as $category)
                                    <option
                                        value="{{ $category->id }}"
                                        {{ old('category_id', $carplateNumber->category_id ?? '') == $category->id ? 'selected' : '' }}
                                    >
                                        {{ $category->category_name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        {{-- Tags --}}
                        <div class="col-md-6">
                            <label class="form-label" for="tag_ids">
                                Tags
                            </label>

                            <select
                                name="tag_ids[]"
                                id="tag_ids"
                                class="form-control"
                                multiple
                            >
                                @php
                                    $selectedTags = old(
                                        'tag_ids',
                                        isset($carplateNumber)
                                            ? $carplateNumber->tags->pluck('id')->toArray()
                                            : []
                                    );
                                @endphp

                                @foreach($tags as $tag)
                                    <option
                                        value="{{ $tag->id }}"
                                        {{ in_array($tag->id, $selectedTags) ? 'selected' : '' }}
                                    >
                                        {{ $tag->tag_name }}
                                    </option>
                                @endforeach
                            </select>

                            <small class="text-muted">
                                Hold Ctrl (Windows) or Command (Mac) to select multiple tags.
                            </small>
                        </div>

                        {{-- Amount --}}
                        <div class="col-md-6">
                            <label class="form-label" for="amount">
                                Amount (RM)
                            </label>

                            <input
                                type="number"
                                step="0.01"
                                class="form-control"
                                id="amount"
                                name="amount"
                                placeholder="1000.00"
                                value="{{ old('amount', $carplateNumber->amount ?? '') }}"
                                required
                            />
                        </div>

                        {{-- Is Active --}}
                        @if(isset($carplateNumber))
                            <div class="col-md-6">
                                <label class="form-label" for="is_active">
                                    Is Active?
                                </label>

                                <select
                                    name="is_active"
                                    id="is_active"
                                    class="form-control"
                                >
                                    <option
                                        value="1"
                                        {{ $carplateNumber->is_active == 1 ? 'selected' : '' }}
                                    >
                                        Active
                                    </option>

                                    <option
                                        value="0"
                                        {{ $carplateNumber->is_active == 0 ? 'selected' : '' }}
                                    >
                                        Inactive
                                    </option>
                                </select>
                            </div>
                        @endif

                        <hr>

                        <div class="col-12">
                            <button
                                type="submit"
                                name="submitButton"
                                class="btn btn-primary"
                            >
                                Submit
                            </button>
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
