/resources/views/image

@extends('layouts.app')

@section('content')

                @endif
                            </p>
                            <button type="submit" class="btn btn-success">Enviar</button>
                        </form>
                        <hr>
                        <!-- mostrar listado comentario -->
                        @foreach($image->comments as $comment)

                        <div class="comment">

                            <span class='nickname'>{{'@'.$comment->user->nick}}</span>
                            <span class="nickname date">{{' | '.\FormatTime::LongTimeFilter($comment->created_at)}}</span>
                            <p>{{$comment->content}}
                            <br>
                            <!-- botton eliminar comentario -->
                            
                            @if(Auth::check() && ($comment->user_id == Auth::user()->id || $comment->image->user_id == Auth::user()->id))
                            <a href="{{route('comment.delete',['id'=>$comment->id])}}" class="btn btn-smn btn-danger">
                                Eliminar
                            </a>
                            @endif
                            </p>
                        </div>

                        @endforeach
                    </div>
                        
                   
@endsection



