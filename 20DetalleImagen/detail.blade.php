/resources/views/image

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            @include('includes.message');

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
                    
                   
                    
                    
                    <div class='description'>
                        <span class='nickname'>{{'@'.$image->user->nick}}</span>
                        <p>{{$image->description}}</
                    </div>

                    <!-- botton comentios -->
                   
                    
                    <div class='likes'>
                        <img  src="{{asset('img/heart-black.png')}}"/>
                    </div>
                   
                    <div class="comments">
                        <a href="" class="btn btn-sm btn-warning btn-comentarios">Comentarios ({{count($image->comments)}})</a> 
                        <!--contar cometarios-->
                        
                    </div>
                     
                    
                    

                
                    </div>
               
            </div>
        </div>


    </div>



</div>
</div>
@endsection



