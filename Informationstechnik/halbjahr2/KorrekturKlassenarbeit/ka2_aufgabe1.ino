/* INFP Klassenarbeit 2025-01-17
 * Aufgabe 1
 * Ablaufsteuerung mit Ampel-LEDs
 * Name: Timo Hoppe
 */

// Pins für die Ampel-LEDs ergänzen

const int Taster2 = 2, Taster4 = 4;
const int ampelleds = 14;
bool fTaster2, fTaster4, InTaster2, InTaster4, Merker2, Merker4;
bool rot, gelb, gruen;
enum AmpelZustaende {Stop, Off, Go, Blink} ampelzustand;
ampelzustand = Off;


void setup( ) {
  pinMode(Taster2, 5);  // das funktioniert so
  pinMode(Taster4, 5);  // da muss man nix ändern...
  pinMode(LED_rot, 3);
  pinMode(LED_gelb, 3);
  pinMode(LED_gruen, 3);
}

void loop( ) {
  // Zeitsteuerung ergänzen
  Einlesen( );
  Ablauf( );
  Ausgeben( );
}

// Aufgabe 1.1 Flankenerkennung ergänzen
void Einlesen( ) {
  InTaster2 = digitalRead(Taster2);
  InTaster4 = digitalRead(Taster4);
  // wenn Flanke bei Taster 2 erkannt
  if (InTaster2 == LOW && Merker2 = true) { 
    ftaster2 = true;
	}
  // ansonsten
  else {
		ftaster2 = false;
	}
  // wenn Flanke bei Taster 4 erkannt
  if (InTaster4 == LOW && Merker4 = true) { 
    ftaster4 = true;
	}  
  // ansonsten
  else {
		ftaster4 = false;
	}

}

// Aufgabe 1.2 Ablauf fertigstellen
void Ablauf( ) {
  // Zustand abfragen, Folgezustand zuweisen
  switch (ampelzustand) {
    case Go:
      digitalWrite(LED_gruen, HIGH);
      digitalWrite(LED_gelb, LOW);
      digitalWrite(LED_rot, LOW);
      if (ftaster4 = true) {
        ampelzustand = Off;
      }
      else if (ftaster2 = true) {
        ampelzustand = Stop;
      }
      break;
  }
    case Stop:
      digitalWrite(LED_rot, HIGH);
      digitalWrite(LED_gruen, LOW);
      digitalWrite(LED_gelb, LOW);
      if (taster2 = true) {
        ampelzustand = Go;
      }
      break;
    case Off:
      digitalWrite(LED_rot, LOW);
      digitalWrite(LED_gruen, LOW);
      digitalWrite(LED_gelb, LOW);
      if (ftaster4 = true) {
        ampelzustand = Blink;
      }
      break;
    case Blink:
      digitalWrite(LED_rot, LOW);
      digitalWrite(LED_gruen, LOW);
      digitalWrite(LED_gelb, HIGH);
      if (ftaster4 = true) {
        ampelzustand = Off;
      }
      break;
}

// ***** Ausgabewerte an die Pins rausschreiben
// hier nichts ändern oder ergänzen!
void Ausgeben() {
  digitalWrite(LED_rot, rot);
  digitalWrite(LED_gelb, gelb);
  digitalWrite(LED_gruen, gruen);
}