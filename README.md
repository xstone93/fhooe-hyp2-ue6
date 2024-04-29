# Beschreibung

In den bisherigen Einheiten haben wir uns mit verschiedenen Aspekten von Datenbanken im Kontext von QuizQuest beschäftigt - wir haben Tabellen angelegt, Daten manipuliert und Zugriffe auf Datenbanken mittels PDO erstellt. Im Zuge dieser Übung (und des Assignments 3), möchten wir nun ein Datenmodell erstellen, das als Ausgangspunkt für die nächsten Übungen dienen soll. 

Im Zuge der [4. Vorlesung](https://www.youtube.com/watch?v=ZBZ_atZm6Pw) haben wir die Grundbegriffe der ER-Modellierung besprochen. Zu den wichtigsten Komponenten gehören:

- Entitäten
- Attribute
- Beziehungen 
- Kardinalitäten

# Teil 1: logisches ER-Modell erstellen (10 Punkte)
Verwenden Sie für alle Aufgaben von Teil 1 die Software draw.io [https://app.diagrams.net/](https://app.diagrams.net/). 
Es soll die sogenannte [Chen-Notation](https://de.wikipedia.org/wiki/Chen-Notation) (wie auch in der Vorlesung bzw. Übung besprochen) verwendet werden. 
Ein logisches Datenmodell beschreibt - im Vergleich zu einem physischen ER-Modell - Entitäten und Beziehungen auf einer abstrakten Ebene, ohne Datentypen, Trigger, Prozeduren, etc. 

1. Visualisieren Sie alle **Entitäten** von QuizQuest. Es soll die gesamte __Logik__ (auch inkl. Leaderboards, etc.) abgebildet werden.
2. Definieren Sie alle relevanten **Attribute** (auch Schlüsselattribute), die sich aus der Beschreibung ergeben. Zeichen Sie alle Attribute zu den jeweiligen Entitäten ein.
3. Spezifizieren Sie die **Beziehungen** zwischen den jeweiligen Entitäten. Geben Sie dazu an, wie diese in Beziehung stehen (z. B. “ist Teil von”, “hat”, etc.)
4. Geben Sie die **Kardinalität** (d. h. den Grad der Beziehung, 1:1, 1:m, m:n) zu den jeweiligen Entitäten an. Vergewissern Sie sich, dass die jeweilige Kardinalitätsangabe an der richtigen Seite der Entität angegeben wurde.
5. Das Modell soll gemäß der **dritten Normalform** modelliert werden. 

Exportieren Sie das gesamte ER-Modell als __er_modell.png__. Das Dokument soll im main-Branch ihres gemeinsam Repositories gepusht werden. Legen Sie dazu einen Ordner mit dem Titel __submission__ an, in dem die Datei gespeichert wird.  

# Teil 2: physisches ER-Modell erstellen (6 Punkte)
Neben dem logischen ER-Modell, soll ein weiteres Modell, ein physisches ER-Modell erstellt werden. Für dieses Modell soll das Tool [__MySQL Workbench__](https://dev.mysql.com/downloads/workbench/) verwendet werden. 
Die Software steht sowohl unter Windows als auch unter MacOS zur Verfügung. 

In MySQL Workbench wird eine andere Notation verwendet - diese wird in der Übungseinheit besprochen und präsentiert. Bei den physischen Modell sollen auch Informationen wie Datentypen, Primärschlüssel, etc. definiert werden. Machen Sie dazu alle relevanten Eingaben und Einstellungen gemäß der Spielelogik von __QuizQuest__. Als Basis für dieses Modell soll Ihnen das logische Modell von Teil 1 dienen. 

Importieren Sie die SQL-Datei schließlich über die Import-Funktion von PhpMyAdmin.

# Abgabe

Insgesamt sind drei Dateien abzugeben:

1. Das **logische ER-Modell** aus draw.io als *.svg-Datei. Mithilfe des Tools ist ein entsprechender Export unter Datei - Exportieren als möglich.
2. Das **physische ER-Modell** aus MySQL Workbench als *.svg-Datei. Dieses ist exportierbar unter File - Export - Export as SVG.
3. Das **physische ER-Modell** als *.sql-Datei. Dieses kann ebenso mit der Export-Funktion von MySQL Workbench erledigt werden.

Laden Sie die drei Dateien in Ihrem Repository in ein neues Verzeichnis __submission__ hoch.

**Information**: In den kommenden Einheiten werden wir die gesamte __QuizQuest__-Datenbank verwenden für die Programmierung. Dazu wird Ihnen eine Referenzdatenbank zur Verfügung von mir zur Verfügung gestellt, damit alle Tabellen und Spalten einheitlich sind. 
