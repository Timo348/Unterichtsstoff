import pyperclip

# Mapping normaler Zeichen zu ihren umgedrehten Unicode-Äquivalenten
flip_map = str.maketrans(
    "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890",
    "ɐqɔpǝɟƃɥᴉɾʞlɯuodbɹsʇnʌʍxʎz∀𐐒ƆᗡƎℲ⅁HIſʞ⅂WNOԀΌᴚS⊥∩ΛＭX⅄Z⇂Ɛᄅ߈9ㄥ860"
)

def flip_text(text):
    flipped = text[::-1].translate(flip_map)  # Umgedrehte Zeichen ersetzen
    pyperclip.copy(flipped)  # In die Zwischenablage kopieren
    print("Umgedrehter Text wurde in die Zwischenablage kopiert:\n", flipped)

# Eingabe
text = input("Gib den Text ein: ")
flip_text(text)
