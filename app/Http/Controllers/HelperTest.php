<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelperTest extends Controller
{
    public function checkHelper()
    {
        $val = getMyText();
        $arrayVal = myArray($val);
        return $arrayVal;
    }

}
