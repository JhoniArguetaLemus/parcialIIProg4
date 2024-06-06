<?php
use App\Http\Controllers\Hospital_controller;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;


Route::get('/', [Hospital_controller::class, 'vista'])->name('home');
#pagina sobre nosotros
Route::get('/home/sobre_nosotros', [Hospital_controller::class, 'sobre_nosotros'])->name('sobre_nosotros');
#muestra interfaz para agregar paciente
Route::get('/agregar_paciente', [Hospital_controller::class, 'agrega_paciente'])->name('agregar_paciente');
#mostrar interfaz para agregar medico
Route::get('/agregar_medico', [Hospital_controller::class, 'formulario_medico'])->name('medicos.agregar');

#muestra los medicos
Route::get('/medicos', [Hospital_controller::class, 'mostrar_medicos'])->name('medicos.mostrar');
#muestra los pacientes 
Route::get('/pacientes/mostrar', [Hospital_controller::class, 'mostrar_paciente'])->name('pacientes.mostrar');
#guarda los pacientes
Route::post('/pacientes/guardar', [Hospital_controller::class, 'guardar'])->name('paciente.guardar');
#guarda medicos en la base de datos
Route::post('/guardar_medico', [Hospital_controller::class, 'guardar_medico'])->name('medico.guardar');

#eliminar paciente
Route::delete('/pacientes/{paciente}', [Hospital_controller::class, 'eliminar_paciente'])->name('pacientes.eliminar');

#eliminar medicos

Route::delete('medicos/{medico}', [Hospital_controller::class, 'eliminar_medico'])->name('medicos.eliminar');

#ediciion de registros

Route::get('/medicos/{id}/editar', [Hospital_controller::class, 'vista_editar_medico'])->name('medicos.editar');
Route::put('/medicos/{id}', [Hospital_controller::class, 'actualizar_medico'])->name('medicos.actualizar');

#paciente

Route::get('/pacientes/{id}/editar', [Hospital_controller::class, 'vista_editar_paciente'] )->name('paciente.editar');
Route::put('/pacientes/{id}', [Hospital_controller::class, 'actualizar_paciente'])->name('pacientes.actualizar');

##citas

Route::get('/pacientes/hacer_cita', [Hospital_controller::class, 'hacer_cita'])->name('pacientes.hacer_cita');

Route::post('/cita', [Hospital_controller::class, 'guardar_cita'])->name('cita.guardar');

Route::get('/pacientes/mostrar_citas', [Hospital_controller::class, 'mostrar_citas'])->name('pacientes.mostrar_citas');

#eliminar cita


Route::delete('/pacientes/mostrar_citas/{cita}', [Hospital_controller::class, 'eliminar_cita'])->name('citas.eliminar');


#ruta al login

Route::get('/login', [Hospital_controller::class, 'login'])->name('user.login');


#vista para crear cuenta

Route::get('usuarios/crear_cuenta', [Hospital_controller::class, 'crear_cuenta'])->name('usuario.crear_cuenta');
#guardar usuario
Route::post('usuarios/guardar_usuario', [Hospital_controller::class, 'guardar_usuario'])->name('guardar_usuario');

#iniciar sesion

Route::post('usuarios/login', [Hospital_controller::class, 'iniciar_sesion'])->name('iniciar_sesion');

#administracion
Route::get('/administracion', [Hospital_controller::class, 'administracion'])->name('panel_administracion');
