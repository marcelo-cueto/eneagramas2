<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pregunta;

class preguntas extends Controller
{
    public function listado(){
      $preguntas=pregunta::all();

      return view('/prueba', compact('preguntas'));
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
           $eneat1==$eneat1+1;
        }
        elseif ($re=5) {
           $eneat5=$eneat5+1;
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
           $eneat5=$eneat5+1;
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
           $eneat5=$eneat5+1;
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
           $eneat5=$eneat5+1;
        }
        elseif ($re==45) {
           $eneat5=$eneat5+1;
        }

      }


    if ($eneat1>$eneat2 &&$eneat1>$eneat3&&$eneat1>$eneat4&&$eneat1>$eneat5&&$eneat1>$eneat6&&$eneat1>$eneat7 &&$eneat1>$eneat8 &&$eneat1>$eneat9) {
       $final='Eneatipo 1';
    }
    elseif ($eneat1==$eneat2 &&$eneat1>$eneat3&&$eneat1>$eneat4&&$eneat1>$eneat5&&$eneat1>$eneat6&&$eneat1>$eneat7 &&$eneat1>$eneat8 &&$eneat1>$eneat9) {
       $final='Eneatipo 1 y Eneatipo 2';
    }
    elseif ($eneat1>$eneat2 &&$eneat1==$eneat3&&$eneat1>$eneat4&&$eneat1>$eneat5&&$eneat1>$eneat6&&$eneat1>$eneat7 &&$eneat1>$eneat8 &&$eneat1>$eneat9) {
       $final='Eneatipo 1 y Eneatipo 3';
    }
    elseif ($eneat1>$eneat2 &&$eneat1>$eneat3&&$eneat1==$eneat4&&$eneat1>$eneat5&&$eneat1>$eneat6&&$eneat1>$eneat7 &&$eneat1>$eneat8 &&$eneat1>$eneat9) {
       $final='Eneatipo 1 y Eneatipo 4';
    }
    elseif ($eneat1>$eneat2 &&$eneat1>$eneat3&&$eneat1>$eneat4&&$eneat1==$eneat5&&$eneat1>$eneat6&&$eneat1>$eneat7 &&$eneat1>$eneat8 &&$eneat1>$eneat9) {
       $final='Eneatipo 1 y Eneatipo 5';
    }
    elseif ($eneat1>$eneat2 &&$eneat1>$eneat3&&$eneat1>$eneat4&&$eneat1>$eneat5&&$eneat1==$eneat6&&$eneat1>$eneat7 &&$eneat1>$eneat8 &&$eneat1>$eneat9) {
       $final='Eneatipo 1 y Eneatipo 6';
    }
    elseif ($eneat1>$eneat2 &&$eneat1>$eneat3&&$eneat1>$eneat4&&$eneat1>$eneat5&&$eneat1>$eneat6&&$eneat1==$eneat7 &&$eneat1>$eneat8 &&$eneat1>$eneat9) {
       $final='Eneatipo 1 y Eneatipo 7';
    }
    elseif ($eneat1>$eneat2 &&$eneat1>$eneat3&&$eneat1>$eneat4&&$eneat1>$eneat5&&$eneat1>$eneat6&&$eneat1>$eneat7 &&$eneat1==$eneat8 &&$eneat1>$eneat9) {
       $final='Eneatipo 1 y Eneatipo 8';
    }
    elseif ($eneat1>$eneat2 &&$eneat1>$eneat3&&$eneat1>$eneat4&&$eneat1>$eneat5&&$eneat1>$eneat6&&$eneat1>$eneat7 &&$eneat1>$eneat8 &&$eneat1==$eneat9) {
       $final='Eneatipo 1 y Eneatipo 9';
    }
    elseif ($eneat2>$eneat1 &&$eneat2>$eneat3&&$eneat2>$eneat4&&$eneat2>$eneat5&&$eneat2>$eneat6&&$eneat2>$eneat7 &&$eneat2>$eneat8 &&$eneat2>$eneat9) {
       $final='Eneatipo 2';
    }
    elseif ($eneat2>$eneat1 &&$eneat2==$eneat3&&$eneat2>$eneat4&&$eneat2>$eneat5&&$eneat2>$eneat6&&$eneat2>$eneat7 &&$eneat2>$eneat8 &&$eneat2>$eneat9) {
       $final='Eneatipo 2 y Eneatipo 3';
    }
    elseif ($eneat2>$eneat1 &&$eneat2>$eneat3&&$eneat2==$eneat4&&$eneat2>$eneat5&&$eneat2>$eneat6&&$eneat2>$eneat7 &&$eneat2>$eneat8 &&$eneat2>$eneat9) {
       $final='Eneatipo 2 y Eneatipo 4';
    }
    elseif ($eneat2>$eneat1 &&$eneat2>$eneat3&&$eneat2>$eneat4&&$eneat2==$eneat5&&$eneat2>$eneat6&&$eneat2>$eneat7 &&$eneat2>$eneat8 &&$eneat2>$eneat9) {
       $final='Eneatipo 2 y Eneatipo 5';
    }
    elseif ($eneat2>$eneat1 &&$eneat2>$eneat3&&$eneat2>$eneat4&&$eneat2>$eneat5&&$eneat2==$eneat6&&$eneat2>$eneat7 &&$eneat2>$eneat8 &&$eneat2>$eneat9) {
       $final='Eneatipo 2 y Eneatipo 6';
    }
    elseif ($eneat2>$eneat1 &&$eneat2>$eneat3&&$eneat2>$eneat4&&$eneat2>$eneat5&&$eneat2>$eneat6&&$eneat2==$eneat7 &&$eneat2>$eneat8 &&$eneat2>$eneat9) {
       $final='Eneatipo 2 y Eneatipo 7';
    }
    elseif ($eneat2>$eneat1 &&$eneat2>$eneat3&&$eneat2>$eneat4&&$eneat2>$eneat5&&$eneat2>$eneat6&&$eneat2>$eneat7 &&$eneat2==$eneat8 &&$eneat2>$eneat9) {
       $final='Eneatipo 2 y Eneatipo 8';
    }
    elseif ($eneat2>$eneat1 &&$eneat2>$eneat3&&$eneat2>$eneat4&&$eneat2>$eneat5&&$eneat2>$eneat6&&$eneat2>$eneat7 &&$eneat2>$eneat8 &&$eneat2==$eneat9) {
       $final='Eneatipo 2 y Eneatipo 9';
    }
    elseif ($eneat3>$eneat2 &&$eneat3>$eneat1&&$eneat3>$eneat4&&$eneat3>$eneat5&&$eneat3>$eneat6&&$eneat3>$eneat7 &&$eneat3>$eneat8 &&$eneat3>$eneat9) {
       $final='Eneatipo 3';
    }
    elseif ($eneat3>$eneat2 &&$eneat3>$eneat1&&$eneat3==$eneat4&&$eneat3>$eneat5&&$eneat3>$eneat6&&$eneat3>$eneat7 &&$eneat3>$eneat8 &&$eneat3>$eneat9) {
       $final='Eneatipo 3 y Eneatipo 4';
    }
    elseif ($eneat3>$eneat2 &&$eneat3>$eneat1&&$eneat3>$eneat4&&$eneat3==$eneat5&&$eneat3>$eneat6&&$eneat3>$eneat7 &&$eneat3>$eneat8 &&$eneat3>$eneat9) {
       $final='Eneatipo 3 y Eneatipo 5';
    }
    elseif ($eneat3>$eneat2 &&$eneat3>$eneat1&&$eneat3>$eneat4&&$eneat3>$eneat5&&$eneat3==$eneat6&&$eneat3>$eneat7 &&$eneat3>$eneat8 &&$eneat3>$eneat9) {
       $final='Eneatipo 3 y Eneatipo 6';
    }
    elseif ($eneat3>$eneat2 &&$eneat3>$eneat1&&$eneat3>$eneat4&&$eneat3>$eneat5&&$eneat3>$eneat6&&$eneat3==$eneat7 &&$eneat3>$eneat8 &&$eneat3>$eneat9) {
       $final='Eneatipo 3 y Eneatipo 7';
    }
    elseif ($eneat3>$eneat2 &&$eneat3>$eneat1&&$eneat3>$eneat4&&$eneat3>$eneat5&&$eneat3>$eneat6&&$eneat3>$eneat7 &&$eneat3==$eneat8 &&$eneat3>$eneat9) {
       $final='Eneatipo 3 y Eneatipo 8';
    }
    elseif ($eneat3>$eneat2 &&$eneat3=$eneat1&&$eneat3>$eneat4&&$eneat3>$eneat5&&$eneat3>$eneat6&&$eneat3>$eneat7 &&$eneat3>$eneat8 &&$eneat3==$eneat9) {
       $final='Eneatipo 3 y Eneatipo 9';
    }
    elseif ($eneat4>$eneat2 &&$eneat4>$eneat3&&$eneat4>$eneat1&&$eneat4>$eneat5&&$eneat4>$eneat6&&$eneat4>$eneat7 &&$eneat4>$eneat8 &&$eneat4>$eneat9) {
       $final='Eneatipo 4';
    }
    elseif ($eneat4>$eneat2 &&$eneat4>$eneat3&&$eneat4>$eneat1&&$eneat4==$eneat5&&$eneat4>$eneat6&&$eneat4>$eneat7 &&$eneat4>$eneat8 &&$eneat4>$eneat9) {
       $final='Eneatipo 4 y Eneatipo 5';
    }
    elseif ($eneat4>$eneat2 &&$eneat4>$eneat3&&$eneat4>$eneat1&&$eneat4>$eneat5&&$eneat4==$eneat6&&$eneat4>$eneat7 &&$eneat4>$eneat8 &&$eneat4>$eneat9) {
       $final='Eneatipo 4 y Eneatipo 6';
    }
    elseif ($eneat4>$eneat2 &&$eneat4>$eneat3&&$eneat4>$eneat1&&$eneat4>$eneat5&&$eneat4>$eneat6&&$eneat4==$eneat7 &&$eneat4>$eneat8 &&$eneat4>$eneat9) {
       $final='Eneatipo 4 y Eneatipo 7';
    }
    elseif ($eneat4>$eneat2 &&$eneat4>$eneat3&&$eneat4>$eneat1&&$eneat4>$eneat5&&$eneat4>$eneat6&&$eneat4>$eneat7 &&$eneat4==$eneat8 &&$eneat4>$eneat9) {
       $final='Eneatipo 4 y Eneatipo 8';
    }
    elseif ($eneat4>$eneat2 &&$eneat4=$eneat3&&$eneat4>$eneat1&&$eneat4>$eneat5&&$eneat4>$eneat6&&$eneat4>$eneat7 &&$eneat4>$eneat8 &&$eneat4==$eneat9) {
       $final='Eneatipo 4 y Eneatipo 9';
    }
    elseif ($eneat5>$eneat2 &&$eneat5>$eneat3&&$eneat5>$eneat4&&$eneat5>$eneat1 &&$eneat5>$eneat6&&$eneat5>$eneat7 &&$eneat5>$eneat8 &&$eneat5>$eneat9) {
       $final='Eneatipo 5';
    }
    elseif ($eneat5>$eneat2 &&$eneat5>$eneat3&&$eneat5>$eneat4&&$eneat5>$eneat1 &&$eneat5==$eneat6&&$eneat5>$eneat7 &&$eneat5>$eneat8 &&$eneat5>$eneat9) {
       $final='Eneatipo 5 y Eneatipo 6';
    }
    elseif ($eneat5>$eneat2 &&$eneat5>$eneat3&&$eneat5>$eneat4&&$eneat5>$eneat1 &&$eneat5>$eneat6&&$eneat5==$eneat7 &&$eneat5>$eneat8 &&$eneat5>$eneat9) {
       $final='Eneatipo 5 y Eneatipo 7';
    }
    elseif ($eneat5>$eneat2 &&$eneat5>$eneat3&&$eneat5>$eneat4&&$eneat5>$eneat1 &&$eneat5>$eneat6&&$eneat5>$eneat7 &&$eneat5==$eneat8 &&$eneat5>$eneat9) {
       $final='Eneatipo 5 y Eneatipo 8';
    }
    elseif ($eneat5>$eneat2 &&$eneat5=$eneat3&&$eneat5>$eneat4&&$eneat5>$eneat5 &&$eneat5>$eneat6&&$eneat5>$eneat7 &&$eneat5>$eneat8 &&$eneat5==$eneat9) {
       $final='Eneatipo 5 y Eneatipo 9';
    }
    elseif ($eneat6>$eneat2 &&$eneat6>$eneat3&&$eneat6>$eneat4&&$eneat6>$eneat5&&$eneat6>$eneat1&&$eneat6>$eneat7 &&$eneat6>$eneat8 &&$eneat6>$eneat9) {
       $final='Eneatipo 6';
    }
    elseif ($eneat6>$eneat2 &&$eneat6>$eneat3&&$eneat6>$eneat4&&$eneat6>$eneat5&&$eneat6>$eneat1&&$eneat6==$eneat7 &&$eneat6>$eneat8 &&$eneat6>$eneat9) {
       $final='Eneatipo 6 y Eneatipo 7';
    }
    elseif ($eneat6>$eneat2 &&$eneat6>$eneat3&&$eneat6>$eneat4&&$eneat6>$eneat5&&$eneat6>$eneat1&&$eneat6>$eneat7 &&$eneat6==$eneat8 &&$eneat6>$eneat9) {
       $final='Eneatipo 6 y Eneatipo 8';
    }
    elseif ($eneat6>$eneat2 &&$eneat6=$eneat3&&$eneat6>$eneat4&&$eneat6>$eneat5&&$eneat6>$eneat1&&$eneat6>$eneat7 &&$eneat6>$eneat8 &&$eneat6==$eneat9) {
       $final='Eneatipo 6 y Eneatipo 9';
    }
    elseif ($eneat7>$eneat2 &&$eneat7>$eneat3&&$eneat7>$eneat4&&$eneat7>$eneat5&&$eneat7>$eneat6&&$eneat7>$eneat1 &&$eneat7>$eneat8 &&$eneat7>$eneat9) {
       $final='Eneatipo 7';
    }
    elseif ($eneat7>$eneat2 &&$eneat7>$eneat3&&$eneat7>$eneat4&&$eneat7>$eneat5&&$eneat7>$eneat6&&$eneat7>$eneat1 &&$eneat7==$eneat8 &&$eneat7>$eneat9) {
       $final='Eneatipo 7 y Eneatipo 8';
    }
    elseif ($eneat7>$eneat2 &&$eneat7=$eneat3&&$eneat7>$eneat4&&$eneat7>$eneat5&&$eneat7>$eneat6&&$eneat7>$eneat1 &&$eneat7>$eneat8 &&$eneat7==$eneat9) {
       $final='Eneatipo 7 y Eneatipo 9';
    }
    elseif ($eneat8>$eneat2 &&$eneat8>$eneat3&&$eneat8>$eneat4&&$eneat8>$eneat5&&$eneat8>$eneat6&&$eneat8>$eneat7 &&$eneat8>$eneat1 &&$eneat8>$eneat9) {
       $final='Eneatipo 8';
    }
    elseif ($eneat8>$eneat2 &&$eneat8=$eneat3&&$eneat8>$eneat4&&$eneat8>$eneat5&&$eneat8>$eneat6&&$eneat8>$eneat7 &&$eneat8>$eneat1 &&$eneat8==$eneat9) {
       $final='Eneatipo 8 y Eneatipo 9';
    }
    elseif ($eneat9>$eneat2 &&$eneat9>$eneat3&&$eneat9>$eneat4&&$eneat9>$eneat5&&$eneat9>$eneat6&&$eneat9>$eneat7 &&$eneat9>$eneat1 &&$eneat9>$eneat8) {
       $final='Eneatipo 9';
    }
    return view('/devolucion', compact('final'));

    }
}
