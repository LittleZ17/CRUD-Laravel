<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;

class CloudinaryController extends Controller
{
    public function __construct()
    {
        Cloudinary::config([
            'cloud_name' => 'dxx0gdezb',
            'api_key' => '632975433134519',
            'api_secret' => '6eijwD83qBfXxaZVveBaPssF7WQ',
        ]);
    }

    // Controller actions go here...
    public function upload(Request $request)
{
    $file = $request->file('file');

    $response = Cloudinary::upload($file->getRealPath());

    return response()->json([
        'public_id' => $response->getPublicId(),
        'url' => $response->getSecurePath(),
    ]);
}

}

// This controller defines an upload method that expects a file upload request and uploads the file to Cloudinary using the Cloudinary PHP SDK. It then returns a JSON response with the URL of the uploaded file.