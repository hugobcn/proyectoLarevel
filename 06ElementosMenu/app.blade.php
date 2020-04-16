/resources/views/auth/layouts


   <!--<title>{{ config('app.name', 'Laravel') }}</title>-->
        <title>InstaLaravel</title>
    


 <a class="navbar-brand" href="{{ url('/') }}">
                    <!--{{ config('app.name', 'Laravel') }}-->
                    InstaLaravel
                </a>
------------------------------------------
l 56/7
     @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <!--li inicio añadido-->
                        <li class="nav-item">
                            <a class="nav-link" href="">Inicio</a>
                        </li>
                        
                         <li class="nav-item">
                            <a  class="nav-link" href="">Subir Imagen</a>
                        </li>
                        
                         <!--li final añadido-->
                            <li class="nav-item dropdown">

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                       
-------------------------------------
L 71
 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  
                                      <!-- Inico pestanya dropout añadido -->
                                    
                                    <a class="dropdown-item" href="">
                                       Mi perfil
                                    </a>
                                    
                                    <a class="dropdown-item" href="">
                                       Configuracion
                                    </a>
                                    
                                    <!-- final pestanya dropout añadido -->
                                    
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                            

