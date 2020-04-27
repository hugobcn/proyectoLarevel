/resources/views/


@extends('layouts.app')

@section('content')
  
<!-- botton comentios -->

                    <div class='likes'>
                        <!--{{var_dump($image->likes)}}-->
                        
                        <!--chequear si usuario ha dado like imagen-->
                         <?php $user_like = false;   ?>
                        @foreach($image->likes as $like)
                            @if($like->user->id == Auth::user()->id)
                                <?php $user_like = true;   ?>
                            @endif
                        @endforeach
                       
                         @if($user_like)
                         <!-- data-id="{{$image->id}}"  para gestionar  mediante ajax-->
                         <img  src="{{asset('img/heart-red.png')}}" data-id="{{$image->id}}"  class="btn-dislike"/>
                        @else
                       <img  src="{{asset('img/heart-black.png')}}" data-id="{{$image->id}}"  class="btn-like"/>
                        @endif
                        <span class="number_likes">{{count($image->likes)}}</span> 
                    </div>

                    <div class="comments">




@endsection

