/resources/views/includes

<!-- <div class="card pub_image">  -->
<div class="card  pub_image">
    <div class="card-header ">
        @if($image->user->image)
        <div class="container-avatar2">
            <img  src="{{route('user.file',['filename'=> $image->user->image])}}" class="avatar2"/> 
        </div>
        @endif
        <div class ="data-user">
            <a href="{{route('profile',['id'=>$image->user->id])}}">
                {{$image->user->name.' '.$image->user->surname.' | '.$image->user->image }}
                <span class=" nickname">
                    {{' | @ '.$image->user->nick}}
                </span>
            </a>
        </div>



------------------------------------------------------------


 <div class="comments">
            <a href="{{route('image.detail',['id'=>$image->id])}}" class="btn btn-sm btn-warning btn-comentarios">Comentarios ({{count($image->comments)}})</a>
            <!--contar cometarios-->

        </div>
