/* AD-Wandler INFP 2025-01-24

Funktion zur Verwendung des AD-Wandlers:
========================================
int analogRead ( analogEingang )
Liefert eine Zahl von 0 bis 2^12-1=4.095 
analogEingang kann alles genutzt werden, was im Pinout als ADC gekennzeichnet ist 

ADC0 => in Arduino A0 etc.
Warnung: wenn WLAN genutzt wird, sind Analogeingänge > A9 nicht mehr benutzbar!


Übungen
=========
1) Analogeingang A0 2mal pro Sekunde einlesen, in int Messwert speichern, den 
   Messwert im seriellen Terminal ausgeben (Optional auch seriellen Plotter probieren) fertig
2) Grüne LED mit dem Messwert dimmen, ledcAttach im Setup ergänzen, ledcWrite 
   in der Loop ergänzen.
   Der AD-Wandler liefert 12 Bit Messwerte, daher auch die PWM-Ausgabe mit 12 Bit konfigurieren. fertig
3) Beobachte den Messwert und die Helligkeit der LED - was fällt auf? Wie kann man den 
   Messwert umrechnen, dass die LED mit rechtsdrehung heller wird? fertig
4) Mit einem Tastendruck (fallende Flanke) auf Taster 2 wird der letzte Messwert in 
   int Ausgabewert2 gespeichert, mit Taster4 wird der letzte Messwert in int Ausgabwert4 
   gespeichert. Ausgabewert2 dimmt die rote LED, Ausgabewert4 dimmt die grüne LED. 



Abgabe der .ino-Datei bis Dienstag im Klassenkurs
*/