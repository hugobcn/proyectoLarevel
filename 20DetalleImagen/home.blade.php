/resources/views/


@extends('layouts.app')

@section('content')


  @endif
                    <div class ="data-user">
                        <a href="{{route('image.detail',['id'=>$image->id])}}">
                            {{$image->user->name.' '.$image->user->surname.' | '.$image->user->image }}
                            <span class=" nickname">
                                {{' | @ '.$image->user->nick}}
                            </span>
                        </a>
                    </div>

@endsection

