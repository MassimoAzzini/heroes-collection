# Heroes Colection

Iniziamo a creare un'applicazione per organizzare e generare i nostri PG di un gioco D&D-like.

Avremo una tabella `Character` che raccoglierà tutte le caratteristiche dei nostri Personaggi.
Una Tabella `Race` con le varie razze in cui annotare anche  i modificatori di caratteristica. 
Una tabella `Skills` Con le abilità disponibili

Ogni personaggio può avere una `Race`
Ogni personaggio può avere molte `Skill`

Scrivete Migration e Seeder relativi per iniziare a popolare la vostra collezione di personaggi giocabili ;)  
Alla fine create una view che mostra una lista dei vostri personaggi generati

## Character
- Nome
- Altezza 
- Peso
- Background
- Immagine
- Race
- Classe_Armatura
- FOR
- DES
- COS
- INT
- SAG
- CAR

## Race
- Nome
- Descrizione
- Mod_FOR
- Mod_DES
- Mod_COS
- Mod_INT
- Mod_SAG
- Mod_CAR


## Skill
 - Nome
 - Descrizione
 - Caratteristica peculiare


### Note sui campi

## Character

**Background:** questo campo contiene la storia di un personaggio quindi può essere un testo anche molto lungo

**Immagine** quando farete il seeder per ora usate un link statico oppure il buon vecchio lorem picsum (o servizi similari)

**Classe Armatura** Un valore numerico che può andare da 10 a 20

**FOR DES COS INT SAG CAR** sono tutti valori numerici che sono inclusi in un range tra 3 e 18

## Race

**MOD_FOR MOD_DES MOD_COS MOD_INT MOD_SAG MOD_CAR** valori numerici che possono essere positivi o negatvi, oscillano tra -3 e +3

## Skill

**Caratteristica peculiare** il modificatore di quale caratteristica si applica: i valori possibili sono `FOR DES COS INT SAG CAR`
