#include "Wire.h"

void setup() {
  Wire.begin();
  Serial.begin(115200);
}

void loop() {

  // Daten empfangen
  byte Daten1; // 1 Byte Deklarien
  Wire.requestFrom(0b0100000, 1);
  if(Wire.available() >= 1) {
    Daten1 = Wire.read(); // Daten Lesen
    Serial.println(Daten1); // dez
    Serial.println(Daten1, BIN); // bin
    Serial.println(Daten1, HEX); // hex
    Serial.println("<----------->");
      // Daten senden 
  Wire.beginTransmission(0b0111000);
  Wire.write(Daten1); // LEDs an und aus oder so
  Wire.endTransmission();
  delay(500);

  }
}
