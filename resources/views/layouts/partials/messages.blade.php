<!-- Mostrando los mensajes que hemos asignados a la variable de sesión 'info' (ver TestController) -->
@if(session('info')) 
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="alert alert-success">
                            <div>
                                {{session('info')}}
                            </div>                    
                        </div>                
                    </div>            
                </div>
            </div>
        @endif

        <!-- Manejo de los errores -->
        @if(count($errors)) 
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <li>
                                    {{$error}}
                                </li>
                            @endforeach                    
                        </div>                
                    </div>            
                </div>
            </div>
        @endif
        