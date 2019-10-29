<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pregunta;

class preguntas extends Controller
{
  public function primerLista(){
     $preguntas=pregunta::whereBetween('id', [0, 5])->get();
     return view('/test/pag1', compact('preguntas'));
  }
  public function segundaLista(Request $req){
     $preguntas=pregunta::whereBetween('id', [6, 10])->get();
     return view('/test/pag2', compact('preguntas', 'req'));
  }
  public function tercerLista(Request $req){
     $preguntas=pregunta::whereBetween('id', [11, 15])->get();
     return view('/test/pag3', compact('preguntas', 'req'));
  }
  public function cuartaLista(Request $req){
     $preguntas=pregunta::whereBetween('id', [16, 20])->get();
     return view('/test/pag4', compact('preguntas', 'req'));
  }
  public function quintaLista(Request $req){
     $preguntas=pregunta::whereBetween('id', [21, 25])->get();
     return view('/test/pag5', compact('preguntas', 'req'));
  }
  public function sextaLista(Request $req){
     $preguntas=pregunta::whereBetween('id', [26, 30])->get();
     return view('/test/pag6', compact('preguntas', 'req'));
  }
  public function septimaLista(Request $req){
     $preguntas=pregunta::whereBetween('id', [31, 35])->get();
     return view('/test/pag7', compact('preguntas', 'req'));
  }
  public function octavaLista(Request $req){
     $preguntas=pregunta::whereBetween('id', [36, 40])->get();
     return view('/test/pag8', compact('preguntas', 'req'));
  }
  public function novenaLista(Request $req){
     $preguntas=pregunta::whereBetween('id', [41, 45])->get();
     return view('/test/pag9', compact('preguntas', 'req'));
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

        if ($re==1) {
           $eneat1=$eneat1+1;
        }
        elseif ($re==2) {
           $eneat6=$eneat6+1;
        }
        elseif ($re==3) {
           $eneat2=$eneat2+1;
        }
        elseif ($re==4) {
           $eneat1=$eneat1+1;
        }
        elseif ($re=5) {
           $eneat5++;
        }
        elseif ($re=6) {
          $eneat8=$eneat8+1;
        }
        elseif ($re==7) {
           $eneat7=$eneat7+1;
        }
        elseif ($re=8) {
           $eneat6=$eneat6+1;
        }
        elseif ($re==9) {
          $eneat9=$eneat9+1;
        }
        elseif ($re==10) {
           $eneat9=$eneat9+1;
        }
        elseif ($re==11) {
           $eneat7=$eneat7+1;
        }
        elseif ($re==12) {
           $eneat4=$eneat4+1;
        }
        elseif ($re==13) {
           $eneat4=$eneat4+1;
        }
        elseif ($re==14) {
           $eneat1=$eneat1+1;
        }
        elseif ($re==15) {
           $eneat6=$eneat6+1;
        }
        elseif ($re==16) {
           $eneat3=$eneat3+1;
        }
        elseif ($re==17) {
           $eneat4=$eneat4+1;
        }
        elseif ($re==18) {
           $eneat5++;
        }
        elseif ($re==19) {
           $eneat4=$eneat4+1;
        }
        elseif ($re==20) {
           $eneat2=$eneat2+1;
        }
        elseif ($re==21) {
           $eneat7=$eneat7+1;
        }
        elseif ($re==22) {
           $eneat3=$eneat3+1;
        }
        elseif ($re==23) {
           $eneat9=$eneat9+1;
        }
        elseif ($re==24) {
           $eneat3=$eneat3+1;
        }
        elseif ($re==25) {
           $eneat9=$eneat9+1;
        }
        elseif ($re==26) {
           $eneat2=$eneat2+1;
        }
        elseif ($re==27) {
           $eneat4=$eneat4+1;
        }
        elseif ($re==28) {
           $eneat2=$eneat2+1;
        }
        elseif ($re==29) {
           $eneat2=$eneat2+1;
        }
        elseif ($re==30) {
           $eneat7=$eneat7+1;
        }
        elseif ($re==31) {
           $eneat8=$eneat8+1;
        }
        elseif ($re==32) {
           $eneat3=$eneat3+1;
        }
        elseif ($re==33) {
           $eneat3=$eneat3+1;
        }
        elseif ($re==34) {
           $eneat8=$eneat8+1;
        }
        elseif ($re==35) {
           $eneat6=$eneat6+1;
        }
        elseif ($re==36) {
           $eneat6=$eneat6+1;
        }
        elseif ($re==37) {
           $eneat9=$eneat9+1;
        }
        elseif ($re==38) {
           $eneat1=$eneat1+1;
        }
        elseif ($re==39) {
           $eneat5++;
        }
        elseif ($re==40) {
           $eneat7=$eneat7+1;
        }
        elseif ($re==41) {
           $eneat8=$eneat8+1;
        }
        elseif ($re==42) {
           $eneat8=$eneat8+1;
        }
        elseif ($re==43) {
           $eneat1=$eneat1+1;
        }
        elseif ($re==44) {
           $eneat5++;
        }
        elseif ($re==45) {
           $eneat5++;
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

    return view('/devolucion', compact('porcentajes'));


    }
}
