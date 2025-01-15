enum zustand_t {
  Anfang,
  Entnahme,
  Ausgabe,
  Kaffepulver,
  Bruehen,
}

zustand_t Zustand = anfang;

void setup() {
  Serial.begin(115200);
}

void loop() {
  kaffeautomat();
}

void kaffeautomat() {
  switch(Zustand) {
    case Anfang:
      summer = LOW;
      Menge = 0;
      break;
    case Kaffepulver:
      Zeit = 0;
      Ventil_wasser = HIGH;
      Menge++;
      break;
    case Bruehen:
      break;
    case Ausgabe:
      if(Tasse==0) {
        Zustand = Anfang;
      }
      else if(Zeit==B)
      break;
    case Entnahme:
      summer =+ 1;
      break;
  }
}