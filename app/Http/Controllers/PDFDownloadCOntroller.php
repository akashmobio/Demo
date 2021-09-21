<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PDFDownloadCOntroller extends Controller
{
    public function download_local(Request $request){
        if(Storage::disk('local')->exists("pdf/$request->file")){
            $path = Storage::disk('local')->path("pdf/$request->file");
            $content = file_get_contents($path);
            return response($content)->withHeaders([
                'Content-type'=>mime_content_type($path)
            ]);
        }
        return redirect('/');
    }

    public function download_public(Request $request){
        if(Storage::disk('public')->exists("pdf/$request->file")){
            $path = Storage::disk('public')->path("pdf/$request->file");
            $content = file_get_contents($path);
            return response($content)->withHeaders([
                'Content-type'=>mime_content_type($path)
            ]);
        }
        return redirect('/');
    }
}
