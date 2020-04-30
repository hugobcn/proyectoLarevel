/resources/views/layouts

@else
                        <!--li inicio añadido-->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('home') }}">Inicio</a>
                        </li>
                        
                        <li class="nav-item">
                            <a  class="nav-link" href="{{ route('likes') }}">Favoritos</a>
                        </li>
                        
                         <li class="nav-item">
                            <a  class="nav-link" href="{{ route('user.index') }}">Gente</a>
                        </li>
                        
                         <li class="nav-item">
                            <a  class="nav-link" href="{{ route('image.create') }}">Subir Imagen</a>
                        </li>
                        <li>
