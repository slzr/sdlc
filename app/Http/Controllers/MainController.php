<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;

use App\Http\Requests;

class MainController extends Controller
{
  public $title = "Sistema de la Calidad 2016-II";
  public $descr = "Sistema de la Calidad 2016-II";
   
  // INICIO
  public function index()
  {
    return view('inicio')->with([
      'title' => $this->title." | Inicio",
      'desc'  => $this->descr,
      'slug'  => "inicio"
    ]);
  }   

  // BUZON
  public function buzon()
  {
    return view('buzon')->with([
      'title' => $this->title." | Buzon de Sugerencias/Comentarios",
      'desc'  => $this->descr,
      'slug'  => "buzon"
    ]);
  } 

  // BUZON POST
  public function buzonPost(Request $r)
  {
    return redirect()->route('buzon')->with('message', 'Comentario enviado <b>correctamente</b>.');
    return $r->all();
  } 

  // SOLICITUD
  public function solicitud()
  {
    return view('solicitud')->with([
      'title' => $this->title." | Solicitudes Adicion/Cambio de materias",
      'desc'  => $this->descr,
      'slug'  => "solicitud"
    ]);
  } 

  // SOLICITUD POST
  public function solicitudPost(Request $r)
  {
    // return $r->all();
    return redirect()->route('solicitud')->with('message', 'Solicitud enviada <b>correctamente</b>.');
  } 


  // NOSOTROS
  public function nosotros()
  {
    return view('nosotros')->with([
      'title' => $this->title." | Nosotros",
      'desc'  => $this->descr,
      'slug'  => "nosotros"
    ]);
  }

  // USER LOGIN
  public function Userlogin()
  {
    return view('login')->with([
      'title' => $this->title." | Inicio de Sesion",
      'desc'  => $this->descr,
      'slug'  => "user.login"
    ]);
  }
 

  // USER LOGIN
  public function userAuth(Request $r)
  {
    // return $r->all();
    return redirect()->route('user.login')->with('error', 'Usuario <b>invalido</b>.');
  } 
}
