/resources/views/image

@extends('layouts.app')

@section('content')

               </p>
                            <button type="submit" class="btn btn-success">Enviar</button>
                        </form>
                        <!-- Listar commentarios -->
                        <hr>
                        @foreach($image->comments as $comment)

                        <div class="comment">

                            <span class='nickname'>{{'@'.$comment->user->nick}}</span>
                            <span class="nickname date">{{' | '.\FormatTime::LongTimeFilter($comment->created_at)}}</span>
                            <p>{{$comment->content}}</

                        </div>

                        @endforeach
                    </div>     
                        
                   
@endsection



