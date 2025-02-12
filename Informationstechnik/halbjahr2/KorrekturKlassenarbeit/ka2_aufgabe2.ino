/* INFP Klassenarbeit 2025-01-17
 * Aufgabe 2
 * Grüne LED mit PWM dimmen
 * Name: Timo Hoppe
 */

const int Taster2 = 2, Taster4 = 4, LED_gruen = 33 ; // Led Grün Pin noch ändern
int pwm_Wert = 2048; // 2^10 schätzung = 2048
const int frequenz = 8, bit = 10;
unsigned long previousMillis = 0;
const long interval = 200; // 0,2 Sekunden also 5 mal in der Minute   


void setup( ) {
  // PWM für grüne LED konfigurieren
  ledcAttach(LED_gruen, frequenz, bit);
  pwm_Wert = constrain(pwm_Wert, 0, 2048);
  Serial.print(pwm_Wert);
  pinMode(Taster2, 5);  // das funktioniert so
  pinMode(Taster4, 5);  // da muss man nix ändern...

  // PWM Anfangswert für 50%
  pwm_Wert = pwm_Wert / 0,5;
  ledcWrite(LED_gruen, pwm_Wert);

}

void loop( ) {
  // Zeitsteuerung ergänzen
  unsigned long currentMillis = millis();
  if (currentMillis - previousMillis >= interval) {
    previousMillis = currentMillis;
  }
    // Taster2 gedrückt: Wert um 100 erhöhen
  if (Taster2 == HIGH) {
    pwm_Wert = pwm_Wert += 100;
    ledcWrite(LED_gruen, pwm_Wert);
  }
    // Taster4 gedrückt: Wert um 100 verringern
  if (Taster4 == HIGH) {
    pwm_Wert = pwm_Wert -= 100;
    ledcWrite(LED_gruen, pwm_Wert);
  }


}

