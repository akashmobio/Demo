<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $collection = collect(['akash', 'agrawal', 'jay', 'mevada']);
        $collection1 = collect([1, 2, 3, 4, 5, 6, 7, 8, 9, 10]);
        $data = $collection->all();
        // dd($data);

        $data1 = $collection1->avg();

        $data1 = $collection1->chunk(3);
        // dd($data1->all());
        $col = collect([
            [1, 2, 3], [4, 5, 6]
        ]);
        $data1 = $col->collapse();
        // dd($data1);
        $collection = collect(['name', 'age']);
        $combined = $collection->combine(['George', 29]);
        // dd($combined->all());

        $collection = collect(['John Doe']);
        $concatenated = $collection->concat(['Jane Doe'])->concat(['name' => 'Johnny Doe']);
        // dd($concatenated->all());

        $data1 = $collection1->contains(function ($value, $key) {
            return $value > 5;
        });
        // dd($data1);

        $data1 = collect([])->isEmpty();
        $data1 = collect([])->isNotEmpty();
        $data1 = collect([1, 2, 2.5, 2.7, 3, 4])->last(function ($value, $key) {
            return $value < 3;
        });
        // dd($data1);

        $collection = collect([1, 2, 3, 4, 5]);

        $multiplied = $collection->map(function ($item, $key) {
            return $item * 2;
        });

        // dd($multiplied->all());

        $median = collect([2, 2, 4, 4])->median();
        dd($median);
    }
}
