<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ImageFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        //slug: elimina espacios, mayúsculas pasa a minúsculas, etc.

        return [
            'url'=>'posts/'.$this->faker->image('public/storage/posts',640,480,null,false)//true: concatena la direccion dada con el nombre de la imagen
            //false: faker descarga la imagen y almacen a la url: imagen.jpg
            
        ];
    }
}
