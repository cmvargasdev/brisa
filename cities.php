<?php
require 'vendor/autoload.php';
use Illuminate\Support\Str;

$printcities = [
'Newark',
'Elizabeth',
'Hillside',
'Union',
'Roselle',
'Springfield',
'Kenilworth',
'Irvington',
'Maplewood',
'Millburn',
'Perth Amboy',
];


/*
foreach($printcities as $city){
    echo "['city'=>'$city New Jersey', 'slug' => '" . Str::slug($city."  New Jersey")."'], <br>";

}*/


$allcities = [
    ['city'=>'Newark New Jersey', 'slug' => 'newark-new-jersey',      'lat'=>'40.735657','long'=>'-74.172367','region'=>'US-NJ'],
    ['city'=>'Elizabeth New Jersey', 'slug' => 'elizabeth-new-jersey',      'lat'=>'40.663992','long'=>'-74.210701','region'=>'US-NJ'],
    ['city'=>'Hillside New Jersey', 'slug' => 'hillside-new-jersey',      'lat'=>'40.701213','long'=>'-74.230146','region'=>'US-NJ'],
    ['city'=>'Union New Jersey', 'slug' => 'union-new-jersey',      'lat'=>'40.690466','long'=>'-74.250841','region'=>'US-NJ'],
    ['city'=>'Roselle New Jersey', 'slug' => 'roselle-new-jersey',      'lat'=>'40.650392','long'=>'-74.260883','region'=>'US-NJ'],
    ['city'=>'Springfield New Jersey', 'slug' => 'springfield-new-jersey',      'lat'=>'40.698551','long'=>'-74.332848','region'=>'US-NJ'],
    ['city'=>'Kenilworth New Jersey', 'slug' => 'kenilworth-new-jersey',      'lat'=>'40.676023','long'=>'-74.289262','region'=>'US-NJ'],
    ['city'=>'Irvington New Jersey', 'slug' => 'irvington-new-jersey',      'lat'=>'40.732324','long'=>'-74.234868','region'=>'US-NJ'],
    ['city'=>'Maplewood New Jersey', 'slug' => 'maplewood-new-jersey',      'lat'=>'40.731212','long'=>'-74.273481','region'=>'US-NJ'],
    ['city'=>'Millburn New Jersey', 'slug' => 'millburn-new-jersey',      'lat'=>'40.724444','long'=>'-74.306907','region'=>'US-NJ'], 
    ['city'=>'Perth Amboy New Jersey', 'slug' => 'perth-amboy-new-jersey',      'lat'=>'40.520019','long'=>'-74.274521','region'=>'US-NJ'],     
];


/*
['city'=>'Oak Park Illinois', 'slug' => 'oak-park-illinois',      'lat'=>'41.887815','long'=>'-87.788761','region'=>'US-IL'], 
['city'=>'Berwyn Illinois', 'slug' => 'berwyn-illinois',      'lat'=>'41.850587','long'=>'-87.793668','region'=>'US-IL'], 
['city'=>'Forest Park Illinois', 'slug' => 'forest-park-illinois',      'lat'=>'41.879499','long'=>'-87.8137','region'=>'US-IL'], 
['city'=>'Elmwood Park Illinois', 'slug' => 'elmwood-park-illinois',      'lat'=>'41.920593','long'=>'-87.816017','region'=>'US-IL'], 
['city'=>'River Forest Illinois', 'slug' => 'river-forest-illinois',      'lat'=>'41.897809','long'=>'-87.813948','region'=>'US-IL'], 
['city'=>'Lincolnwood Illinois', 'slug' => 'lincolnwood-illinois',      'lat'=>'42.005599','long'=>'-87.735572','region'=>'US-IL'], 
['city'=>'Lyons Illinois', 'slug' => 'lyons-illinois',      'lat'=>'41.811108','long'=>'-87.823269','region'=>'US-IL'], 
['city'=>'Maywood Illinois', 'slug' => 'maywood-illinois',      'lat'=>'41.878994','long'=>'-87.843641','region'=>'US-IL'], 
['city'=>'River Grove Illinois', 'slug' => 'river-grove-illinois',      'lat'=>'41.925864','long'=>'-87.835894','region'=>'US-IL'], 
['city'=>'Summit Illinois', 'slug' => 'summit-illinois',      'lat'=>'41.788088','long'=>'-87.810334','region'=>'US-IL'], 
['city'=>'Burbank Illinois', 'slug' => 'burbank-illinois',      'lat'=>'41.741406','long'=>'-87.768608','region'=>'US-IL'], 
['city'=>'Evergreen Park Illinois', 'slug' => 'Evergreen-park-illinois',      'lat'=>'41.720136','long'=>'-87.701326','region'=>'US-IL'], 
['city'=>'Norridge Illinois', 'slug' => 'norridge-illinois',      'lat'=>'41.963364','long'=>'-87.827284','region'=>'US-IL'], 
['city'=>'Melrose Park Illinois', 'slug' => 'melrose-park-illinois',      'lat'=>'41.900299','long'=>'-87.856974','region'=>'US-IL'], 

];
*/



