/*  I2C-Bus, Bustrainer-platine
Adressen einstellen nach Vorgabe
Baustein    7-Bit Bausteinadresse
I2C_DIP     0b 0100 101
I2C_LED     0b 0111 010
I2C_Temp    0b 0101 111
I2C_EEPROM  0b 1010 000
 */

#include "Wire.h"
#define I2C_DIP 0b0100101
const long interval = 500;
unsigned long previousMillis = 0;

void setup() {
  // Bus starten
  Wire.begin();  // Bus starten
  Serial.begin(115200);
}

void loop() {
  unsigned long currentMillis = millis(); 
  if (currentMillis - previousMillis >= interval) {
    previousMillis = currentMillis;

    byte Daten2 = 0;
    Wire.requestFrom(I2C_DIP, 1);
    if(Wire.available() >= 1) {
      Daten2 = Wire.read(); // Daten lesen
      Serial.printf("Schalter: %02X\n", Daten2);
    }

    Wire.beginTransmission(0b0111010);
    Wire.write(Daten2);  // Datenbyte oder Registeradresse
    Wire.endTransmission();

    Wire.requestFrom(0b1001111, 2);
    if(Wire.available() >= 2) {
      int8_t tempHigh = Wire.read();
      byte tempLow = Wire.read();
      int16_t rawTemp = (tempHigh << 1) | (tempLow >> 7);
      float temperatur = rawTemp * 0.5;
      Serial.printf("%.1f°C\n", temperatur);
    }
    }
  }

