<?php 

namespace App\Models;


use Illuminate\Support\Arr;

class Post 
{
    public static function all()
    {
        return [
            [
                'id' => '1',
                'slug' =>'Application Website 1',
                'sentot' => 'Application Website 1',
                'author' => 'Budi Utomo',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque accusamus ut consectetur. Odit, deleniti praesentium aperiam optio et consequuntur repellat id labore, cum laudantium ex cupiditate laborum adipisci dolorem saepe harum veritatis inventore eaque. Facere ad nihil animi veniam, magnam sed aliquam et. Expedita, nihil voluptate praesentium aliquid eius nemo provident facere veniam quidem tempore laudantium ipsum commodi quaerat omnis explicabo, aspernatur debitis officia autem mollitia? Tenetur delectus eligendi corporis quaerat, aspernatur mollitia eveniet d
                           oloribus aperiam deserunt perferendis adipisci beatae voluptatibus fuga, sint ipsam itaque nam sed sequi. 
                           Autem voluptatibus officia doloremque ad pariatur qui. Impedit magni enim facere autem.'
            ],
    
            [
                'id' => '2',
                'slug' =>'Application Website 2',
                'sentot' => 'Application Website 2',
                'author' => 'Budi Utomo',
                'body' => ' psum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque accusamus ut consectetur. Odit, deleniti praesentium aperiam optio et consequuntur repellat id labore, cum laudantium ex cupiditate laborum adipisci dolorem saepe harum veritatis inventore eaque. Facere ad nihil animi veniam, magnam sed aliquam et. Expedita, nihil voluptate praesentium aliquid eius nemo provident facere veniam quidem tempore laudantium ipsum commodi quaerat omnis explicabo, aspernatur debitis officia autem mollitia? Tenetur delectus eligendi corporis quaerat, aspernatur mollitia eveniet doloribus aperiam deserunt perferendis adipisci beatae voluptatibus fuga, sint ipsam itaque nam sed sequi. 
                            Autem voluptatibus officia doloremque ad pariatur qui. Impedit magni enim facere autem.Cupiditate nobis sapiente libero ipsa cumque maiores sit quas, 
                            nisi atque quidem voluptas id numquam commodi hic dolor beatae natus! Cumque, corporis!'
            ],
    
            [
                'id' => '3',
                'slug' =>'Application Website 3',
                'sentot' => 'Application Website 3',
                'author' => 'Budi Utomo',
                'body' => ' psum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque accusamus ut consectetur. Odit, deleniti praesentium aperiam optio et consequuntur repellat id labore, cum laudantium ex cupiditate laborum adipisci dolorem saepe harum veritatis inventore eaque. Facere ad nihil animi veniam, magnam sed aliquam et. Expedita, nihil voluptate praesentium aliquid eius nemo provident facere veniam quidem tempore laudantium ipsum commodi quaerat omnis explicabo, aspernatur debitis officia autem mollitia? Tenetur delectus eligendi corporis quaerat, aspernatur mollitia eveniet doloribus aperiam deserunt perferendis adipisci beatae voluptatibus fuga, sint ipsam itaque nam sed sequi. 
                            Autem voluptatibus officia doloremque ad pariatur qui. Impedit magni enim facere autem.Cupiditate nobis sapiente libero ipsa cumque maiores sit quas, 
                            nisi atque quidem voluptas id numquam commodi hic dolor beatae natus! Cumque, corporis!'
            ],
    
            [
                'id' => '4',
                'slug' =>'Application Website 4',
                'sentot' => 'Application Website 4',
                'author' => 'Budi Utomo',
                'body' => ' psum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque accusamus ut consectetur. Odit, deleniti praesentium aperiam optio et consequuntur repellat id labore, cum laudantium ex cupiditate laborum adipisci dolorem saepe harum veritatis inventore eaque. Facere ad nihil animi veniam, magnam sed aliquam et. Expedita, nihil voluptate praesentium aliquid eius nemo provident facere veniam quidem tempore laudantium ipsum commodi quaerat omnis explicabo, aspernatur debitis officia autem mollitia? Tenetur delectus eligendi corporis quaerat, aspernatur mollitia eveniet doloribus aperiam deserunt perferendis adipisci beatae voluptatibus fuga, sint ipsam itaque nam sed sequi. 
                            Autem voluptatibus officia doloremque ad pariatur qui. Impedit magni enim facere autem.Cupiditate nobis sapiente libero ipsa cumque maiores sit quas, 
                            nisi atque quidem voluptas id numquam commodi hic dolor beatae natus! Cumque, corporis!'
            ],
            [
                'id' => '5',
                'slug' =>'Application Website 5',
                'sentot' => 'Application Website 5',
                'author' => 'Budi Utomo',
                'body' => ' psum dolor sit amet consectetur adipisicing elit. Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque accusamus ut consectetur. Odit, deleniti praesentium aperiam optio et consequuntur repellat id labore, cum laudantium ex cupiditate laborum adipisci dolorem saepe harum veritatis inventore eaque. Facere ad nihil animi veniam, magnam sed aliquam et. Expedita, nihil voluptate praesentium aliquid eius nemo provident facere veniam quidem tempore laudantium ipsum commodi quaerat omnis explicabo, aspernatur debitis officia autem mollitia? Tenetur delectus eligendi corporis quaerat, aspernatur mollitia eveniet doloribus aperiam deserunt perferendis adipisci beatae voluptatibus fuga, sint ipsam itaque nam sed sequi. 
                            Autem voluptatibus officia doloremque ad pariatur qui. Impedit magni enim facere autem.Cupiditate nobis sapiente libero ipsa cumque maiores sit quas, 
                            nisi atque quidem voluptas id numquam commodi hic dolor beatae natus! Cumque, corporis!'
            ]
            ];
    }

    public static function find($slug): array
    {
        $post = Arr::first(static:: all(), function($post) use ($slug) {
            return $post['slug'] == $slug;
        }); 

        if( ! $post) {
            abort(404);
        }

        return $post;
    }
}

