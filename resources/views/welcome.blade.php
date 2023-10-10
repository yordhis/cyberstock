@extends('layouts.index')


@section('title', 'Login')

@section('content')
<!-- partial:index.partial.html -->
<!-- Logo de la empresa -->
{{-- <a href="#" class="logo" target="_blank">
    
</a> --}}

<div class="section">
    <div class="container">
        <div class="row full-height justify-content-center">
            <div class="col-12 text-center align-self-center py-5">
                <div class="section pb-5 pt-5 pt-sm-2 text-center">

                    <!-- Boton que cambia el formulario de login a registro y viseversa -->
                    <h6 class="mb-0 pb-3">
                        <img src="assets/images/logo2.png" width="200" height="100" alt=""> <br>
                        <span>Sistema de Administración e Inventario</span>
                    </h6>
                    <!-- Cierre de Boton -->

                    <div class="card-3d-wrap mx-auto">
                        <div class="card-3d-wrapper">
                            <div class="card-front">
                                <div class="center-wrap">

                                    <div class="section text-center">
                                        <h4 class="mb-4 pb-3">Iniciar Sesión</h4>
                                        <!-- INICIO Formulario de Login-->
                                        <form action="login" method="post" target="_self">
                                            @csrf
                                            @method('POST')

                                            <div class="form-group">
                                                <input type="text" name="email" class="form-style"
                                                    placeholder="Ingrese Usuario" 
                                                    id="email" 
                                                    autocomplete="off"
                                                    required>
                                                <i class="input-icon fa-solid fa-envelope"></i>
                                            </div>

                                            <div class="form-group mt-2">
                                                <input type="password" 
                                                    name="password" 
                                                    class="form-style"
                                                    placeholder="Ingrese Contraseña" 
                                                    id="password" autocomplete="off"
                                                    required>
                                                <i class="input-icon uil uil-lock-alt"></i>
                                            </div>

                                            @error('password')
                                            <p>
                                                {{ $message }}
                                            </p>
                                            @enderror
                                            <button href="#" class="btn mt-4 text-white border border-white">Entrar</button>
                                        </form>

                                        {{-- <p class="mb-0 mt-4 text-center"><a href="#0" class="link">¿Olvidó su
                                                contraseña?</a>
                                        </p> --}}
                                       
                                        <p class="icss2023 ">Todo los derechos reservados @ Desarrollado por
                                            <br>Inversiones Cyber Staff Store C.A
                                        </p>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- partial -->

@endsection