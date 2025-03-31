enum zustand { 
  Z0, // Keine LEDs
  Z1, // Nur Rot
  Z2, // Nur Grün
  Z3  // Beide auf 50%
};

zustand zustande = Z0; 

const int taster2 = 2;
const int taster4 = 4;
const int LED_gruen = 33;
const int LED_rot = 32;

void setup() {
  Serial.begin(15200);
  pinMode(taster2, INPUT_PULLUP);
  pinMode(taster4, INPUT_PULLUP);
  ledcAttach(LED_gruen, 50, 10);
  ledcAttach(LED_rot, 50, 10);
}

void loop() {
  if (zustande == Z0 && digitalRead(taster2) == LOW) {
    zustande = Z1;
  } else if (zustande == Z1 && digitalRead(taster4) == LOW) {
    zustande = Z2;
  } else if (zustande == Z2 && digitalRead(taster2) == LOW) {
    zustande = Z3;
  } else if (zustande == Z3 && digitalRead(taster4) == LOW) {
    zustande = Z0;
  }

  switch (zustande) {
    case Z0:
      ledcWrite(LED_gruen, 1023);
      ledcWrite(LED_rot, 1023);
      break;
    case Z1:
      ledcWrite(LED_gruen, 1023);
      ledcWrite(LED_rot, 0);
      break;
    case Z2:
      ledcWrite(LED_gruen, 0);
      ledcWrite(LED_rot, 1023);
      break;
    case Z3:
      ledcWrite(LED_gruen, 800);
      ledcWrite(LED_rot, 800);
      break;
  }
}
