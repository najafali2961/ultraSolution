@extends('admin.layouts.app')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5 class="card-title">Hero Section Update</h5>
                <h6 class="card-subtitle text-muted">Update hero section details</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.hero_section.update') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="title">Title</label>
                            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title"
                                name="title" value="{{ old('title', $hero->title) }}" required>
                            @error('title')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label" for="subtitle">Subtitle</label>
                            <input type="text" class="form-control @error('subtitle') is-invalid @enderror"
                                id="subtitle" name="subtitle" value="{{ old('subtitle', $hero->subtitle) }}" required>
                            @error('subtitle')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="button_text">Button Text</label>
                        <input type="text" class="form-control @error('button_text') is-invalid @enderror"
                            id="button_text" name="button_text" value="{{ old('button_text', $hero->button_text) }}"
                            required>
                        @error('button_text')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="description">Description</label>
                        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
                            rows="4" required>{{ old('description', $hero->description) }}</textarea>
                        @error('description')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>


                    <div class="mb-3">
                        <label class="form-label" for="image_1">Image 1</label>
                        <input type="file" class="form-control @error('image_1') is-invalid @enderror" id="image_1"
                            name="image_1">
                        @error('image_1')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        @if ($hero->image_1)
                            <img src="{{ asset('storage/' . $hero->image_1) }}" alt="Image 1" class="mt-2 img-thumbnail"
                                style="max-height: 150px;">
                        @endif
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="image_2">Image 2</label>
                        <input type="file" class="form-control @error('image_2') is-invalid @enderror" id="image_2"
                            name="image_2">
                        @error('image_2')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                        @if ($hero->image_2)
                            <img src="{{ asset('storage/' . $hero->image_2) }}" alt="Image 2" class="mt-2 img-thumbnail"
                                style="max-height: 150px;">
                        @endif
                    </div>


                    <button type="submit" class="btn btn-primary">Update</button>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.getElementById('image_1').addEventListener('change', function(event) {
            const [file] = event.target.files;
            if (file) {
                const preview = document.createElement('img');
                preview.src = URL.createObjectURL(file);
                preview.style.maxHeight = '150px';
                preview.classList.add('img-thumbnail', 'mt-2');

                const parent = event.target.parentElement;
                const existingPreview = parent.querySelector('img');
                if (existingPreview) {
                    parent.removeChild(existingPreview);
                }
                parent.appendChild(preview);
            }
        });

        document.getElementById('image_2').addEventListener('change', function(event) {
            const [file] = event.target.files;
            if (file) {
                const preview = document.createElement('img');
                preview.src = URL.createObjectURL(file);
                preview.style.maxHeight = '150px';
                preview.classList.add('img-thumbnail', 'mt-2');

                const parent = event.target.parentElement;
                const existingPreview = parent.querySelector('img');
                if (existingPreview) {
                    parent.removeChild(existingPreview);
                }
                parent.appendChild(preview);
            }
        });
    </script>
@endsection
