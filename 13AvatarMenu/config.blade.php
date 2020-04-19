 /resources/views/users
   

 <!--inicio subir imagen-->
                         <div class="form-group row">
                            
                            <label for="image_path" class="col-md-4 col-form-label text-md-right">{{ __('Avatar') }}</label>

                            <div class="col-md-6">
                                
                                 <!--cargar imagen avatar amb asirven, 2 mas elegante-->
                            @include('includes.avatar')
                                
                                
                                <input id="image_path" type="file" class="form-control @error('image_path') is-invalid @enderror" name="image_path" />

                                @error('imagen_path')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                          <!--final subir imagen-->
