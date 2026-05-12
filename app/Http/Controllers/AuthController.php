<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator; // Para validar que no vengan campos vacíos

class AuthController extends Controller
{
    // REGISTRAR UN NUEVO USUARIO
    public function register(Request $request)
    {
        // Validamos que los datos lleguen completos y el correo no esté repetido
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Error de validación',
                'errors' => $validator->errors()
            ], 422);
        }

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Usuario creado correctamente',
            'user' => $user
        ], 201);
    }

    // INICIAR SESIÓN
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            return response()->json([
                'success' => true,
                'message' => 'Login exitoso',
                'user' => $user
            ]);
        }

        return response()->json([
            'success' => false,
            'message' => 'Correo o contraseña incorrectos'
        ], 401);
    }

    // ACTUALIZAR CONTRASEÑA (Lo que te faltaba para Android)
    public function updatePassword(Request $request)
    {
        // Validamos que llegue el email y la nueva contraseña
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'new_password' => 'required|string|min:6',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Datos incompletos',
                'errors' => $validator->errors()
            ], 422);
        }

        // Buscamos al usuario por su correo
        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return response()->json([
                'success' => false,
                'message' => 'Usuario no encontrado'
            ], 404);
        }

        // Cambiamos la contraseña
        $user->password = Hash::make($request->new_password);
        $user->save();

        return response()->json([
            'success' => true,
            'message' => 'Contraseña actualizada correctamente'
        ]);
    }
    // ACTUALIZAR A PREMIUM
public function upgradePremium(Request $request)
{
    $validator = Validator::make($request->all(), [
        'email' => 'required|email',
    ]);

    if ($validator->fails()) {
        return response()->json([
            'success' => false,
            'message' => 'Email requerido'
        ], 422);
    }

    $user = User::where('email', $request->email)->first();

    if (!$user) {
        return response()->json([
            'success' => false,
            'message' => 'Usuario no encontrado'
        ], 404);
    }

    $user->is_premium = 1;
    $user->save();

    return response()->json([
        'success' => true,
        'message' => 'Suscripción Premium activada',
        'user' => $user
    ]);
}
}


