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
                         <img  src="{{asset('img/heart-red.png')}}" class="btn-dislike"/>
                        @else
                       <img  src="{{asset('img/heart-black.png')}}" class="btn-like"/>
                        @endif
                        <span class="number_likes">{{count($image->likes)}}</span> 
                    </div>

                    <div class="comments">
                        <a href="" class="btn btn-sm btn-warning btn-comentarios">Comentarios ({{count($image->comments)}})</a>
                        <!--contar cometarios-->

                    </div>

                </div>
                {{--
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
@endsection

