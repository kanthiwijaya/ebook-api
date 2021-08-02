<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
  public function me() {
    return ['NIS' => 3103119097,
        'name' => 'Kanthi Prihastika Wijaya',
        'gender' => 'Female',
        'phone' => '085740457075',
        'class' => 'XII RPL 3'];
  }
}
