@extends('admin.layouts.app')
@section('breadcrumb')
    <x-breadcrumb pageone="testminial" class="py-2" pageoneRoute="{{ route('feature.index') }}" pagetwo="Create" />
@endsection

@section('content')
    <div class="flex flex-col gap-6 ">
        <div class="card">
            <div class="card-header">
                <div class="p-6">

                    <form action="{{ route('feature.update',$feature->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="grid grid-cols-12 gap-5 ">
                            <div class="col-span-12 lg:col-span-12 bg-white dark:bg-gray-800 p-4 rounded-lg">

                                <x-form.input label=" Name" name="title" value="{{$feature->title}}" />


                                <textarea name="description" class="ckeditor" id="myeditorinstance" cols="30" rows="10">{{$feature->description}}</textarea>
                                @error('description')
                                    <p class="text-sm text-red-600 mt-2">{{ $message }}</p>
                                @enderror

                                <div class="col-span-12 lg:col-span-4 bg-white dark:bg-gray-800 p-4 rounded-lg">
                                    <input class="dropify" type="file" id="myDropify" name="thumbnail" data-default-file="{{ asset('storage/' . $feature->thumbnail) }}" >
                                </div>
                            </div>
                        </div>
                        <x-form.submit-button />
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('styles')

    <link rel="stylesheet" href="{{ asset('css/dropify.min.css') }}">
    <style>
        .dropify-message p {
            font-size: 24px
        }

        .tox .tox-promotion-link {
            visibility: hidden;
        }
    </style>
@endpush

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script src="{{ asset('tinymce/js/tinymce/tinymce.min.js') }}"></script>
    <script>
        tinymce.init({
            license_key: 'gpl',
            selector: 'textarea#myeditorinstance', // Replace this CSS selector to match the placeholder element for TinyMCE
            plugins: 'code table lists image',
            toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code | table | image',
            image_title: true,
            file_picker_types: 'image',
            image_uploadtab: true,
            images_upload_url: '{{ route('editorimagestore') . '?_token=' . csrf_token() }}',
            automatic_uploads: true,
        });
    </script>
    <script src="{{ asset('js/dropify.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('.dropify').dropify({
                messages: {
                    'default': 'Drag and drop a file here or click',
                    'replace': 'Drag and drop or click to replace',
                    'remove': 'Remove',
                    'error': 'Ooops, something wrong happended.'
                }
            });

        });
    </script>
@endpush
