/* ADS1115 über I2C Auslesen ohne Bibliothek
 * Frage an perplexity.ai: 
 * "wie kann ich mit einem Arduino Controller einen
 *  ADS1115 AD-Wandler auslesen ohne eine Bibliothek zu benutzen"
 */

 #include <Wire.h>
#define ADS1115_ADDR 0x48  // Standard-I2C-Adresse

void setup() {
  Wire.begin();
  Serial.begin(115200);
}

void startConversion() {
  Wire.beginTransmission(ADS1115_ADDR);
  Wire.write(0x01);  // Zeiger auf Config-Register
  // High-Byte: 10000100 (Single-Shot, A0, 6.144V)
  // Low-Byte:  10000011 (128 SPS, Comparator-Modus aus)
  Wire.write(0x84);  
  Wire.write(0x83);
  Wire.endTransmission();
}


int16_t readADC() {
  Wire.beginTransmission(ADS1115_ADDR);
  Wire.write(0x00);  // Zeiger auf Conversion-Register
  Wire.endTransmission();
  
  Wire.requestFrom(ADS1115_ADDR, 2);
  return (Wire.read() << 8) | Wire.read();
}


float convertToVoltage(int16_t raw) {
  return (raw * 6.144) / 32768.0;  // 16-Bit-Auflösung
}

void loop() {
  startConversion();
  delay(10);  // Wartezeit für 128 SPS
  int16_t raw = readADC();
  float voltage = convertToVoltage(raw);
  
  Serial.print("Spannung: ");
  Serial.print(voltage, 4);
  Serial.println(" V");
  delay(1000);
}