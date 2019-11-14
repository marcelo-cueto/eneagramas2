<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pregunta;

class preguntas extends Controller
{

  public function primerLista(){
     $preguntas=pregunta::whereBetween('id', [0, 5])->get();
     return view('/test/pag1t', compact('preguntas'));
  }
  public function segundaLista(Request $req){
     $preguntas=pregunta::whereBetween('id', [6, 10])->get();
     return view('/test/pag2t', compact('preguntas', 'req'));
  }
  public function tercerLista(Request $req){
     $preguntas=pregunta::whereBetween('id', [11, 15])->get();
     return view('/test/pag3t', compact('preguntas', 'req'));
  }
  public function cuartaLista(Request $req){
     $preguntas=pregunta::whereBetween('id', [16, 20])->get();
     return view('/test/pag4t', compact('preguntas', 'req'));
  }
  public function quintaLista(Request $req){
     $preguntas=pregunta::whereBetween('id', [21, 25])->get();
     return view('/test/pag5t', compact('preguntas', 'req'));
  }
  public function sextaLista(Request $req){
     $preguntas=pregunta::whereBetween('id', [26, 30])->get();
     return view('/test/pag6t', compact('preguntas', 'req'));
  }
  public function septimaLista(Request $req){
     $preguntas=pregunta::whereBetween('id', [31, 35])->get();
     return view('/test/pag7t', compact('preguntas', 'req'));
  }
  public function octavaLista(Request $req){
     $preguntas=pregunta::whereBetween('id', [36, 40])->get();
     return view('/test/pag8t', compact('preguntas', 'req'));
  }
  public function novenaLista(Request $req){
     $preguntas=pregunta::whereBetween('id', [41, 45])->get();
     return view('/test/pag9t', compact('preguntas', 'req'));
  }
    public function resultado(Request $req){

      $eneat1=0;
      $eneat2=0;
      $eneat3=0;
      $eneat4=0;
      $eneat5=0;
      $eneat6=0;
      $eneat7=0;
      $eneat8=0;
      $eneat9=0;


      $req->getPathInfo();

      foreach ($req->request as $re) {
        switch ($re) {
           case 1: $eneat1++; break;
           case 2: $eneat6++; break;
           case 3: $eneat2++; break;
           case 4: $eneat1++; break;
           case 5: $eneat5++; break;
           case 6: $eneat8++; break;
           case 7: $eneat7++; break;
           case 8: $eneat6++; break;
           case 9: $eneat9++; break;
           case 10: $eneat9++; break;
           case 11: $eneat7++; break;
           case 12: $eneat4++; break;
           case 13: $eneat4++; break;
           case 14: $eneat1++; break;
           case 15: $eneat6++; break;
           case 16: $eneat3++; break;
           case 17: $eneat4++; break;
           case 18: $eneat5++; break;
           case 19: $eneat4++; break;
           case 20: $eneat2++; break;
           case 21: $eneat7++; break;
           case 22: $eneat3++; break;
           case 23: $eneat9++; break;
           case 24: $eneat3++; break;
           case 25: $eneat9++; break;
           case 26: $eneat2++; break;
           case 27: $eneat4++; break;
           case 28: $eneat2++; break;
           case 29: $eneat2++; break;
           case 30: $eneat7++; break;
           case 31: $eneat8++; break;
           case 32: $eneat3++; break;
           case 33: $eneat3++; break;
           case 34: $eneat8++; break;
           case 35: $eneat6++; break;
           case 36: $eneat6++; break;
           case 37: $eneat9++; break;
           case 38: $eneat1++; break;
           case 39: $eneat5++; break;
           case 40: $eneat7++; break;
           case 41: $eneat8++; break;
           case 42: $eneat8++; break;
           case 43: $eneat1++; break;
           case 44: $eneat5++; break;
           case 45: $eneat5++; break;
           default:
           break;


        }

      }


      $porcentajes[]=($eneat1*100)/5;
      $porcentajes[]=($eneat2*100)/5;
      $porcentajes[]=($eneat3*100)/5;
      $porcentajes[]=($eneat4*100)/5;
      $porcentajes[]=($eneat5*100)/5;
      $porcentajes[]=($eneat6*100)/5;
      $porcentajes[]=($eneat7*100)/5;
      $porcentajes[]=($eneat8*100)/5;
      $porcentajes[]=($eneat9*100)/5;

    return view('/devolucion1', compact('porcentajes'));


    }
}
