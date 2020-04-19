/resources/views/include



@if(Auth::user()->image)
  <div class="container-avatar">
      <!--<img src="{{url('user/avatar/'.Auth::user()->image)}}"></img>-->
    <img src="{{route('user.avatar',['filename'=>Auth::user()->image])}}" class="avatar2"/>   
  </div>
  @endif
