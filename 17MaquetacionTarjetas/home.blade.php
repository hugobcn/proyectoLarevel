/resources/views/


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @include('includes.message');
            

            @foreach($images  as $image)
            <!-- <div class="card pub_image">  -->
            <div class="card  pub_image">
                <div class="card-header ">
                    @if($image->user->image)
                    <div class="container-avatar2">
                        <img  src="{{route('user.file',['filename'=> $image->user->image])}}" class="avatar2"/> 
                    </div>
                    @endif
                    <div class ="data-user">
                        {{$image->user->name.' '.$image->user->surname.' | '.$image->user->image }}
                        <span class=" nickname">
                             {{' | @ '.$image->user->nick}}
                        </span>
                    
                    </div>
                    
                </div>

                <div class="card-body">
                    <div class='image-container'>
                         <img src ='{{route('image.file',['filename'=> $image->image_path])}}'/>
                    </div>
                    <div class='likes'>
                        
                    </div>
                    <div class='description'>
                        <span class='nickname'>{{'@'.$image->user->nick}}</span>
                       <p>{{$image->description}}</
                    </div>
                    
                    
                </div> 
                    {{--
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}

                @endif

                You are logged in!
                --}}
            </div>
        </div>
        @endforeach
    </div>
</div>
</div>
@endsection

