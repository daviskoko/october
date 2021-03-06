<?php

return [
    'app' => [
        'name' => 'October CMS',
        'tagline' => 'Zurück zum Wesentlichen',
    ],
    'locale' => [
        'en' => 'English',
        'nl' => 'Dutch',
        'ja' => 'Japanese',
        'se' => 'Swedish',
        'tr' => 'Turkish',
        'de' => 'German',
        'ru' => 'Russian',
        'fr' => 'French',
        'it' => 'Italian',
        'ro' => 'Romana',
        'pt-br' => 'Brazilian Portuguese',
        'fa' => 'Persian',
        'nb-no' => 'Norwegisch (Bokmål)'
    ],
    'directory' => [
        'create_fail' => "Konnte Verzeichnis: :name nicht erstellen",
    ],
    'file' => [
        'create_fail' => "Konnte Datei :name nicht erstellen",
    ],
    'combiner' => [
        'not_found' => "Die combiner Datei ':name' wurde nicht gefunden.",
    ],
    'system' => [
        'name' => 'System',
        'menu_label' => 'System',
    ],
    'plugin' => [
        'unnamed' => 'Unbenanntes Plugin',
        'name' => [
            'label' => 'Plugin-Name',
            'help' => 'Benennen Sie das Plugin eindeutig, zum Beispiel RainLab.Blog',
        ],
    ],
    'project' => [
        'name' => 'Projekt',
        'owner_label' => 'Besitzer',
        'attach' => 'Attach Project',
        'detach' => 'Detach Project',
        'none' => 'None',
        'id' => [
            'label' => 'Projekt-ID',
            'help' => 'Wie Sie Ihre Projekt-ID finden',
            'missing' => 'Bitte geben Sie eine Projekt-ID an.',
        ],
        'detach_confirm' => 'Are you sure you want to detach this project?',
        'unbind_success' => 'Projekt wurde erfolgreich getrennt (detached).',
    ],
    'settings' => [
        'menu_label' => 'Einstellungen',
        'missing_model' => 'Der Einstellungsseite fehlt eine Model-Definition.',
        'update_success' => 'Einstellung für :name wurde erfolgreich aktualisiert.',
        'return' => 'Return to system settings',
    ],
    'email' => [
        'menu_label' => 'Email Configuration',
        'menu_description' => 'Manage email configuration.',
        'general' => 'General',
        'method' => 'Email Method',
        'sender_name' => 'Sender Name',
        'sender_email' => 'Sender Email',
        'smtp' => 'SMTP',
        'smtp_address' => 'SMTP Address',
        'smtp_authorization' => 'SMTP authorization required',
        'smtp_authorization_comment' => 'Use this checkbox if your SMTP server requires authorization.',
        'smtp_username' => 'Username',
        'smtp_password' => 'Password',
        'smtp_port' => 'SMTP Port',
        'smtp_ssl' => 'SSL connection required',
        'sendmail' => 'Sendmail',
        'sendmail_path' => 'Sendmail Path',
        'sendmail_path_comment' => 'Please specify the path of the sendmail program.',
    ],
    'install' => [
        'project_label' => 'Mit Projekt verbinden',
        'plugin_label' => 'Plugin installieren',
        'missing_plugin_name' => 'Bitte geben Sie den Namen des zu installierenden Plugin an.',
        'install_completing' => 'Schließe Installationsprozess ab',
        'install_success' => 'Das Plugin wurde erfolgreich installiert.',
    ],
    'updates' => [
        'title' => 'Manage Updates',
        'name' => 'Software-Aktualisierung',
        'menu_label' => 'Aktualisierungen',
        'check_label' => 'Auf Aktualisierungen überprüfen',
        'retry_label' => 'Erneut versuchen',
        'plugin_name' => 'Name',
        'plugin_description' => 'Description',
        'plugin_version' => 'Version',
        'plugin_author' => 'Author',
        'core_build' => 'Aktueller Build',
        'core_build_old' => 'Aktueller Build :build',
        'core_build_new' => 'Build :build',
        'core_build_new_help' => 'Aktuellster Build ist verfügbar.',
        'core_downloading' => 'Applikationsdaten werden heruntergeladen',
        'core_extracting' => 'Applikationsdaten werden entpackt',
        'plugin_downloading' => 'Lade Plugin herunter: :name',
        'plugin_extracting' => 'Entpacke Plugin: :name',
        'plugin_version_none' => 'Neues Plugin',
        'plugin_version_old' => 'Aktuellste Version v:version',
        'plugin_version_new' => 'v:version',
        'update_label' => 'Aktualisieren',
        'update_completing' => 'Schließe Aktualisierung ab',
        'update_loading' => 'Lade verfügbare Aktualisierungen...',
        'update_success' => 'Aktualisierungsvorgang erfolgreich.',
        'update_failed_label' => 'Aktualisierungsvorgang fehlgeschlagen',
        'force_label' => 'Aktualisierung erzwingen',
        'found' => [
            'label' => 'Neue Aktualisierungen gefunden!',
            'help' => '"Aktualisieren" wählen um Prozess zu starten ',
        ],
        'none' => [
            'label' => 'Keine Aktualisierungen',
            'help' => 'Es wurden keine Aktualisierungen gefunden.',
        ],
    ],
    'server' => [
        'connect_error' => 'Fehler beim Verbinden mit dem Server.',
        'response_not_found' => 'Der Aktualisierungs-Server kann nicht gefunden werden.',
        'response_invalid' => 'Ungültige Antwort vom Server.',
        'response_empty' => 'Ergebnislose Antwort vom Server.',
        'file_error' => 'Server konnte Paket nicht zur Verfügung stellen.',
        'file_corrupt' => 'Angelieferte Datei ist fehlerhaft.',
    ],
    'behavior' => [
        'missing_property' => 'Klasse :class muss Eingenschaft $:property besitzen, da sie von Verhalten (behaviour) :behavior benötigt wird.',
    ],
    'config' => [
        'not_found' => 'Konnte Konfigurationsdatei :file definiert für :location nicht finden.',
        'required' => 'Konfiguration, die in :location benutzt wird, muss den Wert :property zur Verfügung stellen.',
    ],
    'zip' => [
        'extract_failed' => "Konnte Core-Datei ':file' nicht entpacken.",
    ],
];
