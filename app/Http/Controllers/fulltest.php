<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\preguntas_largo;

class fulltest extends Controller
{
 public function primerLista(){
    $preguntas=preguntas_largo::whereBetween('id', [0, 20])->get();
    return view('fulltest/pag1', compact('preguntas'));
 }
 public function segundaLista(Request $req){
    $preguntas=preguntas_largo::whereBetween('id', [21, 40])->get();
    return view('fulltest/pag2', compact('preguntas', 'req'));
 }
 public function tercerLista(Request $req){
    $preguntas=preguntas_largo::whereBetween('id', [41, 60])->get();
    return view('fulltest/pag3', compact('preguntas', 'req'));
 }
 public function cuartaLista(Request $req){
    $preguntas=preguntas_largo::whereBetween('id', [61, 80])->get();
    return view('fulltest/pag4', compact('preguntas', 'req'));
 }
 public function quintaLista(Request $req){
    $preguntas=preguntas_largo::whereBetween('id', [81, 100])->get();
    return view('fulltest/pag5', compact('preguntas', 'req'));
 }
 public function sextaLista(Request $req){
    $preguntas=preguntas_largo::whereBetween('id', [101, 120])->get();
    return view('fulltest/pag6', compact('preguntas', 'req'));
 }
 public function septimaLista(Request $req){
    $preguntas=preguntas_largo::whereBetween('id', [121, 140])->get();
    return view('fulltest/pag7', compact('preguntas', 'req'));
 }
 public function octavaLista(Request $req){
    $preguntas=preguntas_largo::whereBetween('id', [141, 160])->get();
    return view('fulltest/pag8', compact('preguntas', 'req'));
 }
 public function novenaLista(Request $req){
    $preguntas=preguntas_largo::whereBetween('id', [161, 174])->get();
    return view('fulltest/pag9', compact('preguntas', 'req'));
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
         case 2: $eneat2++; break;
         case 3: $eneat1++; break;
         case 4: $eneat5++; break;
         case 5: $eneat1++; break;
         case 6: $eneat2++; break;
         case 7: $eneat8++; break;
         case 8: $eneat2++; break;
         case 9: $eneat7++; break;
         case 10: $eneat5++; break;
         case 11: $eneat6++; break;
         case 12: $eneat1++; break;
         case 13: $eneat9++; break;
         case 14: $eneat6++; break;
         case 15: $eneat1++; break;
         case 16: $eneat1++; break;
         case 17: $eneat1++; break;
         case 18: $eneat1++; break;
         case 19: $eneat3++; break;
         case 20: $eneat8++; break;
         case 21: $eneat2++; break;
         case 22: $eneat2++; break;
         case 23: $eneat3++; break;
         case 24: $eneat5++; break;
         case 25: $eneat6++; break;
         case 26: $eneat6++; break;
         case 27: $eneat3++; break;
         case 28: $eneat8++; break;
         case 29: $eneat2++; break;
         case 30: $eneat5++; break;
         case 31: $eneat8++; break;
         case 32: $eneat1++; break;
         case 33: $eneat3++; break;
         case 34: $eneat7++; break;
         case 35: $eneat6++; break;
         case 36: $eneat5++; break;
         case 37: $eneat9++; break;
         case 38: $eneat3++; break;
         case 39: $eneat4++; break;
         case 40: $eneat7++; break;
         case 41: $eneat7++; break;
         case 42: $eneat9++; break;
         case 43: $eneat8++; break;
         case 44: $eneat7++; break;
         case 45: $eneat7++; break;
         case 46: $eneat9++; break;
         case 47: $eneat6++; break;
         case 48: $eneat4++; break;
         case 49: $eneat7++; break;
         case 50: $eneat3++; break;
         case 51: $eneat4++; break;
         case 52: $eneat2++; break;
         case 53: $eneat4++; break;
         case 54: $eneat4++; break;
         case 55: $eneat9++; break;
         case 56: $eneat2++; break;
         case 57: $eneat4++; break;
         case 58: $eneat8++; break;
         case 59: $eneat6++; break;
         case 60: $eneat1++; break;
         case 61: $eneat3++; break;
         case 62: $eneat8++; break;
         case 63: $eneat8++; break;
         case 64: $eneat4++; break;
         case 65: $eneat1++; break;
         case 66: $eneat6++; break;
         case 67: $eneat9++; break;
         case 68: $eneat5++; break;
         case 69: $eneat7++; break;
         case 70: $eneat6++; break;
         case 71: $eneat5++; break;
         case 72: $eneat4++; break;
         case 73: $eneat2++; break;
         case 74: $eneat7++; break;
         case 75: $eneat3++; break;
         case 76: $eneat6++; break;
         case 77: $eneat9++; break;
         case 78: $eneat6++; break;
         case 79: $eneat5++; break;
         case 80: $eneat4++; break;
         case 81: $eneat7++; break;
         case 82: $eneat2++; break;
         case 83: $eneat9++; break;
         case 84: $eneat4++; break;
         case 85: $eneat1++; break;
         case 86: $eneat3++; break;
         case 87: $eneat5++; break;
         case 88: $eneat7++; break;
         case 89: $eneat3++; break;
         case 90: $eneat3++; break;
         case 91: $eneat2++; break;
         case 92: $eneat2++; break;
         case 93: $eneat7++; break;
         case 94: $eneat3++; break;
         case 95: $eneat4++; break;
         case 96: $eneat6++; break;
         case 97: $eneat9++; break;
         case 98: $eneat5++; break;
         case 99: $eneat7++; break;
         case 100: $eneat8++; break;
         case 101: $eneat2++; break;
         case 102: $eneat9++; break;
         case 103: $eneat2++; break;
         case 104: $eneat4++; break;
         case 105: $eneat1++; break;
         case 106: $eneat3++; break;
         case 107: $eneat2++; break;
         case 108: $eneat2++; break;
         case 109: $eneat9++; break;
         case 110: $eneat5++; break;
         case 111: $eneat2++; break;
         case 112: $eneat7++; break;
         case 113: $eneat2++; break;
         case 114: $eneat9++; break;
         case 115: $eneat8++; break;
         case 116: $eneat8++; break;
         case 117: $eneat2++; break;
         case 118: $eneat9++; break;
         case 119: $eneat5++; break;
         case 120: $eneat8++; break;
         case 121: $eneat8++; break;
         case 122: $eneat1++; break;
         case 123: $eneat8++; break;
         case 124: $eneat1++; break;
         case 125: $eneat1++; break;
         case 126: $eneat3++; break;
         case 127: $eneat1++; break;
         case 128: $eneat3++; break;
         case 129: $eneat6++; break;
         case 130: $eneat3++; break;
         case 131: $eneat8++; break;
         case 132: $eneat1++; break;
         case 133: $eneat5++; break;
         case 134: $eneat2++; break;
         case 135: $eneat5++; break;
         case 136: $eneat6++; break;
         case 137: $eneat8++; break;
         case 138: $eneat4++; break;
         case 139: $eneat9++; break;
         case 140: $eneat5++; break;
         case 141: $eneat7++; break;
         case 142: $eneat8++; break;
         case 143: $eneat8++; break;
         case 144: $eneat5++; break;
         case 145: $eneat7++; break;
         case 146: $eneat4++; break;
         case 147: $eneat6++; break;
         case 148: $eneat6++; break;
         case 149: $eneat4++; break;
         case 150: $eneat9++; break;
         case 151: $eneat6++; break;
         case 152: $eneat1++; break;
         case 153: $eneat4++; break;
         case 154: $eneat3++; break;
         case 155: $eneat6++; break;
         case 156: $eneat5++; break;
         case 157: $eneat7++; break;
         case 158: $eneat5++; break;
         case 159: $eneat7++; break;
         case 160: $eneat6++; break;
         case 161: $eneat7++; break;
         case 162: $eneat9++; break;
         case 163: $eneat8++; break;
         case 164: $eneat9++; break;
         case 165: $eneat4++; break;
         case 166: $eneat1++; break;
         case 167: $eneat9++; break;
         case 168: $eneat9++; break;
         case 169: $eneat3++; break;
         case 170: $eneat5++; break;
         case 171: $eneat4++; break;
         case 172: $eneat4++; break;
         case 173: $eneat3++; break;
         default:

            break;
      }
   }

   $porcentajes[]=($eneat1*100)/19;
   $porcentajes[]=($eneat2*100)/20;
   $porcentajes[]=($eneat3*100)/19;
   $porcentajes[]=($eneat4*100)/19;
   $porcentajes[]=($eneat5*100)/19;
   $porcentajes[]=($eneat6*100)/19;
   $porcentajes[]=($eneat7*100)/19;
   $porcentajes[]=($eneat8*100)/19;
   $porcentajes[]=($eneat9*100)/19;

 return view('/devolucion', compact('porcentajes'));
 }
}
