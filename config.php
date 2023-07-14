<?php
use Illuminate\Support\Str;
include('cities.php');
$cities =   json_decode(json_encode($allcities));

return [
    'production' => false,
    'phoneprinc' => ['(908)409-9246','9084099246'],
    'baseUrl' => 'http://localhost:8000',
    'title' => 'Notaría New Jersey',
    'description' => 'Website description.',
    'collections' => [
        
        'apostilla-de-documentos' => [//******************** */
            'extends' => 'apostilla-de-documentos',   'path' => 'apostilla-de-documentos/{slug}',   
            'items' => function ($config) use ($cities) {
                return collect($cities)->map(function ($city) { return (array)$city;  });
            },
        ],
        
        'carta-poder-notarial' => [//******************** */
            'extends' => 'carta-poder-notarial',   'path' => 'carta-poder-notarial/{slug}',   
            'items' => function ($config) use ($cities) {
                return collect($cities)->map(function ($city) { return (array)$city;  });
            },
        ],
        
        'traduccion-de-documentos' => [//******************** */
            'extends' => 'traduccion-de-documentos',   'path' => 'traduccion-de-documentos/{slug}',   
            'items' => function ($config) use ($cities) {
                return collect($cities)->map(function ($city) { return (array)$city;  });
            },
        ],
        
        'notario-publico' => [//******************** */
            'extends' => 'notario-publico',   'path' => 'notario-publico/{slug}',   
            'items' => function ($config) use ($cities) {
                return collect($cities)->map(function ($city) { return (array)$city;  });
            },
        ],
        
        'declaracion-jurada-affidavit' => [//******************** */
            'extends' => 'declaracion-jurada-affidavit',   'path' => 'declaracion-jurada-affidavit/{slug}',   
            'items' => function ($config) use ($cities) {
                return collect($cities)->map(function ($city) { return (array)$city;  });
            },
        ],
        
        'carta-simple' => [//******************** */
            'extends' => 'carta-simple',   'path' => 'carta-simple/{slug}',   
            'items' => function ($config) use ($cities) {
                return collect($cities)->map(function ($city) { return (array)$city;  });
            },
        ],
        
        'contratos' => [//******************** */
            'extends' => 'contratos',   'path' => 'contratos/{slug}',   
            'items' => function ($config) use ($cities) {
                return collect($cities)->map(function ($city) { return (array)$city;  });
            },
        ],
        
        'matrimonios' => [//******************** */
            'extends' => 'matrimonios',   'path' => 'matrimonios/{slug}',   
            'items' => function ($config) use ($cities) {
                return collect($cities)->map(function ($city) { return (array)$city;  });
            },
        ],

        


        //** landing **/
        'landing-notaria' => [
            'extends' => 'landing.notaria',   
            'path' => 'landing/notaria-{slug}',   
            'items' => [ ['slug'=>1], ['slug'=>2], ['slug'=>3], ['slug'=>1]  ],
        ],
        'landing-apostillas' => [
            'extends' => 'landing.apostillas',   
            'path' => 'landing/apostillas-{slug}',   
            'items' => [ ['slug'=>1], ['slug'=>2], ['slug'=>3], ['slug'=>1]  ],
        ],
        'landing-poderes' => [
            'extends' => 'landing.poderes',   
            'path' => 'landing/poderes-{slug}',   
            'items' => [ ['slug'=>1], ['slug'=>2], ['slug'=>3], ['slug'=>1]  ],
        ],
        'landing-traducciones' => [
            'extends' => 'landing.traducciones',   
            'path' => 'landing/traducciones-{slug}',   
            'items' => [ ['slug'=>1], ['slug'=>2], ['slug'=>3], ['slug'=>1]  ],
        ],
    ],

    

    'isActive' => function ($page, $path) {
        return Str::endsWith(trimPath($page->getPath()), trimPath($path));
    },
];
