        <!-- Mostrando los mensajes que hemos asignados a la variable de sesión 'info' (ver TestController) -->
        @if(session('info')) 

        <div class="alert alert-success">
            <div>
                {{session('info')}}
            </div>                    
        </div>                
           
          
        @endif

        <!-- Manejo de los errores -->
        @if(count($errors)) 
         
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
                <li>
                    {{$error}}
                </li>
            @endforeach                    
        </div>                
                
        @endif
        