<?php

if (TL_MODE == 'FE') {
    if ($GLOBALS['TL_LANGUAGE'] == 'de') {

        $GLOBALS['TL_LANG']['SEC']['question1'] = 'Bitte addiere %d und %d.';
        $GLOBALS['TL_LANG']['SEC']['question2'] = 'Bitte addiere %d und %d.';
        $GLOBALS['TL_LANG']['SEC']['question3'] = 'Bitte rechne %d plus %d.';

        $GLOBALS['TL_LANG']['MSC']['confirmation']     = 'Passwort bestätigen';
        $GLOBALS['TL_LANG']['MSC']['emailSubject']     = 'Deine Registrierung auf %s';
        $GLOBALS['TL_LANG']['MSC']['accountActivated'] = 'Dein Konto wurde aktiviert.';

        $GLOBALS['TL_LANG']['ERR']['captcha']      = 'Bitte beantworte die Sicherheitsfrage!';
        $GLOBALS['TL_LANG']['ERR']['date']         = 'Bitte gib das Datum im Format &quot;%s&quot; ein!';
        $GLOBALS['TL_LANG']['ERR']['mandatory']    = 'Bitte fülle das Feld &quot;%s&quot; aus!';
        $GLOBALS['TL_LANG']['ERR']['mdtryNoLabel'] = 'Bitte fülle dieses Feld aus!';

        $GLOBALS['TL_LANG']['tl_member']['firstname'][1]   = 'Bitte gib den Vornamen ein.';
        $GLOBALS['TL_LANG']['tl_member']['lastname'][1]    = 'Bitte gib den Nachnamen ein.';
        $GLOBALS['TL_LANG']['tl_member']['dateOfBirth'][1] = 'Bitte gib das Geburtsdatum ein.';
        $GLOBALS['TL_LANG']['tl_member']['gender'][1]      = 'Bitte wähle das Geschlecht.';
        $GLOBALS['TL_LANG']['tl_member']['company'][1]     = 'Hier kannst du einen Firmennamen eingeben.';
        $GLOBALS['TL_LANG']['tl_member']['street'][1]      = 'Bitte gib den Straßennamen und die Hausnummer ein.';
        $GLOBALS['TL_LANG']['tl_member']['postal'][1]      = 'Bitte gib die Postleitzahl ein.';
        $GLOBALS['TL_LANG']['tl_member']['city'][1]        = 'Bitte gib den Namen des Ortes ein.';
        $GLOBALS['TL_LANG']['tl_member']['state'][1]       = 'Bitte gib den Namen des Staates ein.';
        $GLOBALS['TL_LANG']['tl_member']['country'][1]     = 'Bitte wähle ein Land.';
        $GLOBALS['TL_LANG']['tl_member']['phone'][1]       = 'Bitte gib die Telefonnummer ein.';
        $GLOBALS['TL_LANG']['tl_member']['mobile'][1]      = 'Bitte gib die Handynummer ein.';
        $GLOBALS['TL_LANG']['tl_member']['fax'][1]         = 'Bitte gib die Faxnummer ein.';
        $GLOBALS['TL_LANG']['tl_member']['email'][1]       = 'Bitte gib eine gültige E-Mail-Adresse ein.';
        $GLOBALS['TL_LANG']['tl_member']['website'][1]     = 'Hier kannst du eine Web-Adresse eingeben.';
        $GLOBALS['TL_LANG']['tl_member']['language'][1]    = 'Bitte wähle die Sprache.';
        $GLOBALS['TL_LANG']['tl_member']['groups'][1]      =
            'Hier kannst du das Mitglied einer oder mehreren Gruppen zuweisen.';
        $GLOBALS['TL_LANG']['tl_member']['homeDir'][1]     = 'Bitte wähle einen Ordner aus der Dateiübersicht.';

        $GLOBALS['TL_LANG']['tl_module']['emailText'][0] = 'Deine Registrierung auf %s';

        // $GLOBALS['TL_LANG']['tl_member'][''][1] = '';
    }
}
