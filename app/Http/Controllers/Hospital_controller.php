<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\paciente;
use App\Models\medicos;
use App\Models\citas_medicas;
use App\Models\usuarios;
use Symfony\Component\HttpKernel\Debug\VirtualRequestStack;

class Hospital_controller extends Controller
{
    public function vista()
    {
        return view('home');
    }

    public function sobre_nosotros()
    {
        return view('about');
    }

    public function agrega_paciente()
    {
        return view('agregar_paciente');



    }

    public function guardar(Request $request)
    {
        paciente::create($request->all());
        return redirect()->route('pacientes.mostrar')->with('success', 'Paciente eliminado correctamente');


    }

    public function guardar_medico(Request $request)
    {
        medicos::create($request->all());
        return redirect()->route('medicos.mostrar')->with('success', 'Medico guardado correctamente');



    }

    #mostrar medicos
    public function mostrar_medicos()
    {
        $medicos = medicos::all();
        return view('mostrar_medicos', compact('medicos'));
    }
    #mostrar pacientes
    public function mostrar_paciente()
    {
        $pacientes = paciente::all();

        return view('mostrar_paciente', compact('pacientes'));

    }

    public function eliminar_paciente($id)
    {
        $paciente = paciente::findOrFail($id);

        $paciente->delete();





        return redirect()->route('pacientes.mostrar')->with('success', 'Paciente eliminado correctamente');

    }

    #eliminar medicos
    public function eliminar_medico($id)
    {
        $medico = medicos::findOrFail($id);
        $medico->delete();

        return redirect()->route('medicos.mostrar')->with('success', 'Medico eliminado correctamente');
    }

    public function formulario_medico()
    {
        return view('agregar_medico');
    }

    public function vista_editar_medico($id)
    {
        $medico = medicos::findOrFail($id);

        return view('editar_medico', compact('medico'));

    }

    public function actualizar_medico(Request $request, $id)
    {
        $medico = medicos::findOrFail($id);

        $medico->nombre = $request->input('nombre');
        $medico->apellido = $request->input('apellido');

        $medico->especialidad = $request->input('especialidad');

        $medico->horario_consultas = $request->input('horario_consultas');
        $medico->telefono = $request->input('telefono');

        $medico->correo = $request->input('correo');

        $medico->save();

        return redirect()->route('medicos.mostrar')->with('success', 'Medico actualizado');

    }

    public function vista_editar_paciente($id)
    {
        $paciente = paciente::findOrFail($id);

        return view('editar_paciente', compact('paciente'));
    }

    public function actualizar_paciente(Request $request, $id)
    {
        $paciente = paciente::findOrFail($id);
        $paciente->nombre = $request->input('nombre');
        $paciente->apellido = $request->input('apellido');
        $paciente->fecha_nacimiento = $request->input('fecha_nacimiento');
        $paciente->genero = $request->input('genero');
        $paciente->direccion = $request->input('direccion');
        $paciente->telefono = $request->input('telefono');
        $paciente->correo = $request->input('correo');

        $paciente->save();

        return redirect('pacientes.mostrar')->with('Success', 'Paciente actualizado correctamente');
    }



    #citas

    public function hacer_cita()
    {

        $medicos = medicos::all();
        $pacientes = paciente::all();
        return view('hacer_cita', compact('medicos', 'pacientes'));
    }

    public function guardar_cita(Request $request)
    {
        $id_paciente = $request->paciente;
        $id_medico = $request->medico;

        $datos_paciente = paciente::findOrFail($id_paciente);
        $datos_medico = medicos::findOrFail($id_medico);


        $cita = new citas_medicas();
        $cita->id_paciente = $id_paciente;
        $cita->nombre_paciente = $datos_paciente->nombre . ' ' . $datos_paciente->apellido;
        $cita->nombre_medico = $datos_medico->nombre . ' ' . $datos_medico->apellido;
        $cita->fecha_cita = $request->input('fecha');
        $cita->comentarios = $request->input('comentarios');
        $cita->save();

        return redirect()->route('pacientes.mostrar_citas')->with('succes', 'cita realizada correctamente');

    }

    public function mostrar_citas()
    {

        $citas = citas_medicas::all();
        return view('mostrar_citas', compact('citas'));
    }


    #eliminar cita

    public function eliminar_cita($id)
    {
        $cita = citas_medicas::findOrFail($id);
        $cita->delete();

        return redirect()->route('pacientes.mostrar_citas')->with('success', 'Medico eliminado correctamente');
    }


    public function login()
    {
        return view('login');

    }

    public function crear_usuario(Request $request)
    {

    }

    public function crear_cuenta()
    {
        return view('crear_cuenta');
    }

    #guardar usuario

    public function guardar_usuario(Request $request)
    {

        $usuario = new usuarios();
        $usuario->usuario = $request->usuario;
        $usuario->contrasenna = Hash::make($request->contrasenna); // Hashear la contraseña
        $usuario->save();
        return redirect()->route('user.login')->with('Exito', 'El usuario se creo correctamente');
    }


    #login

    public function iniciar_sesion(Request $request)
    {
        $request->validate([
            'usuario' => ['required', 'string'],
            'contrasenna' => ['required', 'string'],
        ]);

        $user = usuarios::where('usuario', $request->usuario)->first();

        if ($user && Hash::check($request->contrasenna, $user->contrasenna)) {

            return redirect()->route('panel_administracion')->with('success', 'Medico eliminado correctamente');
        } else {

            return back()->withErrors([
                'usuario' => 'Las credenciales proporcionadas no coinciden con nuestros registros.',
            ]);
        }


    }

    #panel de administracion 

    public function administracion()
    {
        return view('dashboard');

    }


}


