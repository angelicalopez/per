<?php

namespace Tests\Feature;

use App\User;
use App\Egresado;
use App\Interes;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InteresesTest extends TestCase
{
    /**
     * Prueba de asignacion de intereses a un egresado
     *
     * @return void
     */
    public function testIntereses()
    {
        // Se crea un usuario
        $user = new User;
        $user->name = 'Usuario';
        $user->email = 'pruebaintereses@gmail.com';
        $user->password = bcrypt('12345678');
        $user->rol_id = 3;
        $user->estado = 'A';
        $user->save();

        // se crea el egresado
        $egresado = new Egresado;
        $egresado->apellidos = 'prueba';
        $egresado->dni = '1234678958750';
        $egresado->genero = 'Masculino';
        $egresado->manejo_datos = 1;
        $egresado->user_id = $user->id;
        $egresado->pais_id = 1;
        $egresado->save();

        // se agregan 3 intereses al egresado
        foreach(Interes::limit(3)->get() as $interes) {
            $egresado->intereses()->attach($interes);
        }

        // se verifica que el egresado tenga asignado 3 intereses
        $this->assertEquals($egresado->intereses()->count(), 3);

        // se borran los intereses
        $egresado->intereses()->detach();
        // se borra el egresado
        $egresado->delete();
        //se borra el usuario
        $user->delete();
    }
}
