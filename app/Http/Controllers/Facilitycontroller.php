<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Facilitycontroller extends Controller
{
  public function index()
  {
      dd(Facility::all());
  }
}
