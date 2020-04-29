/resources/views/image



  
@extends('layouts.app')

@section('content')

@if($user_like)
                        <!-- data-id="{{$image->id}}"  para gestionar  mediante ajax-->
                        <img  src="{{asset('img/heart-red.png')}}" data-id="{{$image->id}}"  class="btn-dislike"/>
                        @else
                        <img  src="{{asset('img/heart-black.png')}}" data-id="{{$image->id}}"  class="btn-like"/>
                        @endif
                        <span class="number_likes">{{count($image->likes)}}</span>
                    </div>


<!-- si usuario existe y es el quie lo ha creado-->
                    <!-- https://getbootstrap.com/docs/4.0/components/modal/ -->
                    @if(Auth::user() &&  Auth::user()->id == $image->user->id)
                    <div class="action">
                        <a href="" class="btn btn-sm btn-primary">Actualizar</a>             

                        <!--<a href="{{ route('image.delete', ['id' => $image->id]) }}" class="btn btn-sm btn-danger">Borrar</a>-->

                        <!-- Button to Open the Modal -->
                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#myModal">
                            Eliminar
                        </button>

                        <!-- The Modal -->
                        <div class="modal" id="myModal">
                            <div class="modal-dialog">
                                <div class="modal-content">

                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">¿Estas seguro?</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>

                                    <!-- Modal body -->
                                    <div class="modal-body">
                                        Si eliminar esta imagen nunca podrás recuperarla, ¿estas seguro de querer borrarla?
                                    </div>

                                    <!-- Modal footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-success" data-dismiss="modal">Cancelar</button>
                                        <a href="{{ route('image.delete', ['id' => $image->id]) }}" class="btn btn-danger">Borrar definitivamente</a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    @endif

                    <div class="clearfix"></div>

                    <div class="comments">

@endsection

@endsection

