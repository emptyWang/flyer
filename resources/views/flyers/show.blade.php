@extends('layout')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <h1>{{ $flyer->street }}</h1>
            <h2>{{ $flyer->price }}</h2>

            <hr>
         
            <div class="description">{{ $flyer->description }}</div>
        </div>
        <div class="col-md-8 gallery">
            @foreach($flyer->photos->chunk(4) as $set)
                <div class="row">
                    @foreach($set as $photo)
                        <div class="col-md-3 gallery__image">
                            @if ($user && $user->owns($flyer))
                                {!! link_to('Delete', "/photos/{$photo->id}", 'DELETE') !!}
                            @endif
                            <a href="{{ oss_photo_link($photo->path, '') }}" data-lity>
                                <img src="{{ oss_photo_link($photo->path) }}" alt="">
{{--                                <img src="/{{ $photo->thumbnail_path }}" alt="">--}}
                            </a>
                        </div>
                    @endforeach
                </div>
            @endforeach


            @if ($user && $user->owns($flyer))
                <hr>

                <form id="addPhotosForm"
                      action="{{ route('store_photo_path', [$flyer->zip, $flyer->street]) }}"
                      method="POST"
                      class="dropzone"
                >
                    {{ csrf_field() }}
                </form>
            @endif
        </div>
    </div>
@stop

@section('scripts.footer')
    <script src="/js/dropzone.js"></script>
    <script>
        Dropzone.options.addPhotosForm = {
            paramName: 'photo',
            maxFilesize: 3,
            acceptedFiles: '.jpg, .jpeg, .png, .bmp'
        }
    </script>
@stop 