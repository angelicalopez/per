<?php

namespace Tests\Feature;

use App\Administrador;
use App\Noticia;
use App\User;
use App\VideoNoticia;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class NoticiasTest extends TestCase
{
    /**
     * Prueba la creacion de una noticia y la asignacion de dos videos a ella.
     *
     * @return void
     */
    public function testNoticiasVideos()
    {
        // Se crea un usuario
        $user = new User;
        $user->name = 'Usuario';
        $user->email = 'pruebanoticia@gmail.com';
        $user->password = bcrypt('12345678');
        $user->rol_id = 2;
        $user->estado = 'A';
        $user->save();

        // se crea un admin
        $admin = new Administrador;
        $admin->apellidos = 'Prueba';
        $admin->dni = '123456789863';
        $admin->direccion = 'Pereira';
        $admin->telefono = '311293847';
        $admin->user_id = $user->id;
        $admin->pais_id = 1;
        $admin->save();

        // se crea una noticia

        $noticia = new Noticia;
        $noticia->nombre = 'Nueva noticia';
        $noticia->descripcion = 'probando los videos en la noticia';
        $noticia->administrador_id = $admin->id;
        $noticia->save();

        // se crea un video para la noticia
        $video_noticia1 = new VideoNoticia;
        $video_noticia1->url = 'KKpXpWCTlbo';
        $video_noticia1->noticia_id = $noticia->id;
        $video_noticia1->save();

        // se crea otro video para la noticia
        $video_noticia2 = new VideoNoticia;
        $video_noticia2->url = 'Ir6TvtdAmZg';
        $video_noticia2->noticia_id = $noticia->id;
        $video_noticia2->save();


        // se valida que la noticia tenga 2 videos
        $this->assertEquals($noticia->videos()->count(), 2);

        // borra videos existentes
        foreach($noticia->videos as $video) {
            $video->delete();
        }

        //borra la noticia
        $noticia->delete();
        // borra el admin
        $admin->delete();
        //borra el usuario
        $user->delete();


    }
}
