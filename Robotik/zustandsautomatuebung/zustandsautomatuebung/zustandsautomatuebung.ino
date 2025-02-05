enum Zustaende {
  Aus, Blinken, GrAn, RotAn
};
Zustaende Zustand = Aus;
const int Gr_LED = 33;
const int Rot_LED = 32; 
const int Taster = 2;
bool TGedrueckt = false;
void Automat();
void Einlesen();

void setup() {
  // put your setup code here, to run once:
  ledcAttachChannel(Gr_LED, 5, 8, 1);
  ledcAttachChannel(Rot_LED, 5, 8, 3);
  pinMode(Taster, INPUT_PULLUP);

  Serial.begin(115200);
}

void loop() {
  Einlesen();
  Serial.println(Zustand);
  Automat();
}
void Einlesen() {
  static bool talt = 1;
  bool tneu = digitalRead(Taster);
  if (talt == 1 && tneu == 0) {
    TGedrueckt = true;
    delay(20);
  }
  else {
    TGedrueckt = false;
  }
  talt = tneu;

}

void Automat() {
  // put your main code here, to run repeatedly:
  switch (Zustand) {
    case Aus:
      ledcWriteChannel(1, 255);
      ledcWriteChannel(3, 255);
        if (TGedrueckt) {// 0 weil LOW-ACTIVE
          Zustand = GrAn; }
      break;

    case GrAn:
      ledcWriteChannel(1, 0);
        if (TGedrueckt) { 
          Zustand = RotAn; }
      break;

    case RotAn:
      ledcWriteChannel(3, 0);
        if (TGedrueckt) {
          Zustand = Blinken; }
      break;
    case Blinken:
      // Pwm 1hz
      ledcWriteChannel(3, 128);
      ledcWriteChannel(1, 128);
        if (TGedrueckt) {
          Zustand = Aus; }
      break;
  }
}
