const int LED = 1;
unsigned long previousMillis = 0; // speichert den letzten Zeitstempel
const long interval = 500;       // Intervall in Millisekunden
bool ledState = LOW;             // Zustand der LED (HIGH oder LOW)

void setup() {
  Serial.begin(115200);
  pinMode(LED, OUTPUT);
}

void loop() {
  unsigned long currentMillis = millis(); // aktuelle Zeit abfragen

  // Überprüfen, ob das Intervall abgelaufen ist
  if (currentMillis - previousMillis >= interval) {
    previousMillis = currentMillis; // Zeitstempel aktualisieren

    // LED-Zustand umschalten
    ledState = !ledState;
    digitalWrite(LED, ledState);
  }
}
