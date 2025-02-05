enum Zustaende_t { An, Halten, Aus, Loslassen }
const int Taster = 1;
const int LED_Rot = 2, LED_Gruen = 3, LED_Gelb = 4;
Zustaende_t Zustand = Aus;

void setup {
  pinMode(Taster, INPUT);
  pinMode(LED_Rot, OUTPUT);
  pinMode(LED_Gruen, OUTPUT);
  pinMode(LED_Gelb, OUTPUT);
}

void loop() {
    Einlesen();
    delay(10);
    Verarbeiten();
    delay(10);
    Ausgabe();
    delay(10);
}

void Einlesen() {
    // Flankenerkennung
    if (digitalRead(Taster) == HIGH) {
        // Wenn Taster gedrückt und davor Aus dann Halten
        if (Zustand == An) {
            Zustand = Halten;
        }
        // Wenn Taster gedrückt und davor Aus dann Loslassen
        else if(Zustand == Aus) { 
            Zustand == Loslassen;
        }
    else if (digitalRead(Taster) == LOW) {
        if (Zustand == Halten) {
            Zustand = Aus;
        }
        else if (Zustand == Loslassen) {
            Zustand = An;
        
        }} 
    }
    }
