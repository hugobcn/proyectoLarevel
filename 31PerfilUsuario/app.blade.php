/resources/views/layouts


 <li class="nav-item">
                            @include('includes.avatar')
                        </li>
                         <!--li final añadido-->
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  
                                      <!-- Inico pestanya dropout añadido -->
                                    
                                    <a class="dropdown-item" href="{{ route('profile',['id'=> Auth::user()->id]) }}">
                                       Mi perfil
                                    </a>
                                    
                                    <a class="dropdown-item" href="{{ route('config') }}">
                                       Configuracion
                                    </a>
