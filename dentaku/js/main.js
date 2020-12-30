var Dentaku = document.dentaku;
var FlagNum = false;
var Accumulation = 0;
var Enzan = "";

function NumPress (Num) {
    if (FlagNum) { 
      Dentaku.readvalue.value = Num;
      FlagNum = false;
    }
    else {
      if (Dentaku.readvalue.value == "0") {
        Dentaku.readvalue.value = Num;
      } else {
        Dentaku.readvalue.value += Num;
      }
    }
  }

function Operation (Op) {
  var Readout = Dentaku.readvalue.value;
    if (FlagNum && Enzan != "=");
    else {
      FlagNum = true;
        if ( Enzan == '+' ) 
          Accumulation += parseFloat(Readout);
        else if ( '-' == Enzan ) 
          Accumulation -= parseFloat(Readout);
        else if ( '/' == Enzan ) 
          Accumulation /= parseFloat(Readout);
        else if ( '*' == Enzan )
          Accumulation *= parseFloat(Readout);
        else if ( '%' == Enzan )
          Accumulation %= parseFloat(Readout);
        else
          Accumulation = parseFloat(Readout);
          Dentaku.readvalue.value = Accumulation;
          Enzan = Op;
    }
}

function PlusMinus () {
  Dentaku.readvalue.value = parseFloat(Dentaku.readvalue.value) * -1;
}

function Shosuten () {
  var nowReadOut = Dentaku.readvalue.value;
  if (FlagNum) {
    nowReadOut = "0.";
    FlagNum = false;
  } else {
    if (nowReadOut.indexOf(".") == -1)
      nowReadOut += ".";
  }
  Dentaku.readvalue.value = nowReadOut;
}

function ClearEntry () {
  Dentaku.readvalue.value = "0";
  FlagNum = true;
}

function Clear () {
  Accumulation = 0;
  Enzan = "";
  ClearEntry();
}

function Percent () {
  if ( Enzan == '+' || Enzan == '-' ) 
  Dentaku.readvalue.value = (parseFloat(Dentaku.readvalue.value) / 100) * parseFloat(Accumulation);
  else if ( Enzan == '*' || Enzan == '/' )
  Dentaku.readvalue.value = parseFloat(Dentaku.readvalue.value) / 100;
}