int Messwert;
unsigned long previousMillis = 0;
const long interval = 500;
const int LED = 33;
const int Taster2 = 2;
const int Taster4 = 4;
bool TGedrueckt = false;
bool TGedrueckt2 = false;
bool talt2 = false;
bool talt = false;
int Ausgabewert2 = 0;
int Ausgabewert4 = 0;

void setup() {
  Serial.begin(115200);
  
  pinMode(LED, OUTPUT);
  pinMode(Taster2, INPUT_PULLUP);
  pinMode(Taster4, INPUT_PULLUP);


  ledcSetup(0, 150, 12);
  ledcAttachPin(LED, 0); 
}

void loop() {
  Flankenerkennung();
  Zeitsteuerung();
  ausgabe();
}

void Flankenerkennung() {

  bool tneu2 = digitalRead(Taster2);
  if (talt2 == 1 && tneu2 == 0) {
    TGedrueckt2 = true;
    delay(20); // Entprellen
  } else {
    TGedrueckt2 = false;
  }
  talt2 = tneu2;


  bool tneu = digitalRead(Taster4);
  if (talt == 1 && tneu == 0) {
    TGedrueckt = true;
    delay(20); 
  } else {
    TGedrueckt = false;
  }
  talt = tneu;
}

void Zeitsteuerung() {
  unsigned long currentMillis = millis();
  if (currentMillis - previousMillis >= interval) {
    previousMillis = currentMillis;
  }
}

void ausgabe() {
  if (TGedrueckt) {
    Messwert = analogRead(A0); 
    Ausgabewert2 = map(Messwert, 4095, 0, 0, 4095);
    ledcWrite(0, Ausgabewert2); 
  }
  if (TGedrueckt2) {
    Messwert = analogRead(A0); 
    Ausgabewert4 = map(Messwert, 4095, 0, 0, 4095);
    ledcWrite(0, Ausgabewert4); 
  }
}
