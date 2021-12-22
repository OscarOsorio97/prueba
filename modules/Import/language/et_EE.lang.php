<?php
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
/*********************************************************************************

 * Description:    Defines the English language pack for the base application.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 ********************************************************************************/
global $timedate;
 
$mod_strings = array (
    'LBL_GOOD_FILE' => 'Imporditud faili on edukalt loetud',
    'LBL_RECORD_CONTAIN_LOCK_FIELD' => 'Imporditud kirje osaleb protsessis ja seda ei saa redigeerida, sest osad väljad on protsessi poolt redigeerimiseks lukustatud.',
    'LBL_RECORDS_SKIPPED_DUE_TO_ERROR' => 'leiti mitu tõrget. Vaadake tõrgete vahekaarti ridade puhul, mida ei imporditud tõrke tõttu',
    'LBL_UPDATE_SUCCESSFULLY' => 'kirjed on edukalt värskendatud',
    'LBL_SUCCESSFULLY_IMPORTED' => 'kirjed loodi',
    'LBL_STEP_4_TITLE' => 'Etapp {0}: faili importimine',
    'LBL_STEP_5_TITLE' => 'Etapp {0}: imporditud tulemuste vaatamine',
    'LBL_CUSTOM_ENCLOSURE' => 'Väljad on kitsendanud:',
    'LBL_ERROR_UNABLE_TO_PUBLISH' => 'Ei saa avaldada. Samanimeline importkaart on juba avaldatud.',
    'LBL_ERROR_UNABLE_TO_UNPUBLISH' => 'Teise kasutaja kaardi avaldamist ei saa tühistada. Teil on samanimeline importkaart.',
    'LBL_ERROR_IMPORTS_NOT_SET_UP' => 'Importimisi pole selle mooduli tüübi puhul määratud',
    'LBL_IMPORT_TYPE' => 'Mida sooviksite teha imporditud andmetega?',
    'LBL_IDM_IMPORT_TYPE_CREATE' => 'Create New Records',
    'LBL_IDM_IMPORT_TYPE_UPDATE' => 'Update Existing Records',
    'LBL_IMPORT_BUTTON' => 'Loo ainult uued kirjed',
    'LBL_UPDATE_BUTTON' => 'Loo uued kirjed ja värskenda olemasolevaid kirjeid',
    'LBL_CREATE_BUTTON_HELP' => 'Kasutage seda suvandit uute kirjete loomiseks. Märkus: imporditud faili ridu, mis sisaldavad olemasolevate kirjete ID-dega ühtivaid väärtusi, ei impordita, kui väärtused on vastendatud välja ID-ga.',
    'LBL_UPDATE_BUTTON_HELP' => 'Kasutage seda suvandit olemasolevate kirjete värskendamiseks. Imporditud faili andmed vastendatakse olemasolevate kirjetega imporditud faili kirje ID põhjal.',
    'LBL_NO_ID' => 'ID on nõutav',
    'LBL_PRE_CHECK_SKIPPED' => 'Eelkontroll on vahele jäetud',
    'LBL_NOLOCALE_NEEDED' => 'Ühtegi lokaati pole vaja teisendada',
    'LBL_FIELD_NAME' => 'Välja nimi',
    'LBL_VALUE' => 'Väärtus',
    'LBL_ROW_NUMBER' => 'Rea number',
    'LBL_NONE' => 'Ükski',
    'LBL_REQUIRED_VALUE' => 'Nõutav väärtus on puudu',
    'LBL_ERROR_SYNC_USERS' => 'Sobimatu meilikliendiga sünkroonitav väärtus: ',
    'LBL_ID_EXISTS_ALREADY' => 'ID on selles tabelis juba olemas',
    'LBL_ASSIGNED_USER' => 'Kui kasutajat pole olemas, kasutage praegust kasutajat',
    'LBL_SHOW_HIDDEN' => 'Näita välju, mis pole tavaliselt imporditavad',
    'LBL_UPDATE_RECORDS' => 'Värskenda olemasolevaid kirjeid nende importimise asemel (tagasi võtmine puudub)',
    'LBL_TEST'=> 'Katseta importi (ära salvesta või muuda andmeid)',
    'LBL_TRUNCATE_TABLE' => 'Tühjenda tabel enne importi (kustuta kõik kirjed)',
    'LBL_RELATED_ACCOUNTS' => 'Ära loo seotud kontosid',
    'LBL_NO_DATECHECK' => 'Jäta kuupäeva kontroll vahele (kiirem, kuid ebaõnnestub, kui mõni kuupäev on vale)',
    'LBL_NO_WORKFLOW' => 'Ära käivita töövoogu selle importimise käigus',
    'LBL_NO_EMAILS' => 'Ära saada e-kirja teavitusi selle importimise käigus',
    'LBL_NO_PRECHECK' => 'Omavormingu režiim',
    'LBL_STRICT_CHECKS' => 'Kasuta ranget reeglistikku (kontrolli ka meiliaadresse ja telefoninumbreid)',
    'LBL_ERROR_SELECTING_RECORD' => 'Tõrge kirje valimisel:',
    'LBL_ERROR_DELETING_RECORD' => 'Tõrge kirje kustutamisel:',
    'LBL_NOT_SET_UP' => 'Importimist pole selle mooduli tüübi puhul määratud',
    'LBL_ARE_YOU_SURE' => 'Kas olete kindel? See kustutab kõik selle mooduli andmed.',
    'LBL_NO_RECORD' => 'Selle ID-ga värskendatavad kirjed puuduvad',
    'LBL_NOT_SET_UP_FOR_IMPORTS' => 'Importimist pole selle mooduli tüübi puhul määratud',
    'LBL_DEBUG_MODE' => 'Luba silumisrežiim',
    'LBL_ERROR_INVALID_ID' => 'Antud ID on väljale mahtumiseks liiga pikk (maksimaalne pikkus on 36 märki)',
    'LBL_ERROR_INVALID_PHONE' => 'Kehtetu telefoninumber',
    'LBL_ERROR_INVALID_NAME' => 'String on väljale mahtumiseks liiga pikk',
    'LBL_ERROR_INVALID_VARCHAR' => 'String on väljale mahtumiseks liiga pikk',
    'LBL_ERROR_INVALID_DATETIME' => 'Kehtetu kuupäev',
    'LBL_ERROR_INVALID_DATETIMECOMBO' => 'Kehtetu kuupäev',
    'LBL_ERROR_INVALID_INT' => 'Kehtetu täisarvuline väärtus',
    'LBL_ERROR_INVALID_NUM' => 'Sobimatu arvväärtus',
    'LBL_ERROR_INVALID_TIME' => 'Sobimatu aeg',
    'LBL_ERROR_INVALID_EMAIL'=>'Kehtetu meiliaadress',
    'LBL_ERROR_INVALID_BOOL'=>'Sobimatu väärtus (peaks olema 1 või 0)',
    'LBL_ERROR_INVALID_DATE'=>'Sobimatu kuupäeva string',
    'LBL_ERROR_INVALID_USER'=>'Sobimatu kasutajanimi või ID',
    'LBL_ERROR_INVALID_TEAM' => 'Sobimatu meeskonna nimi või ID',
    'LBL_ERROR_INVALID_ACCOUNT' => 'Sobimatu kontonimi või ID',
    'LBL_ERROR_INVALID_RELATE' => 'Sobimatu seostatud väli',
    'LBL_ERROR_INVALID_CURRENCY' => 'Sobimatu valuuta väärtus',
    'LBL_ERROR_INVALID_FLOAT' => 'Sobimatu ujuvpunktide arv',
    'LBL_ERROR_NOT_IN_ENUM' => 'Väärtust pole ripploendis. Lubatud väärtused on: ',
    'LBL_ERROR_ENUM_EMPTY' => 'Väärtust pole ripploendis. Ripploend on tühi',
    'LBL_NOT_MULTIENUM' => 'Pole MultiEnum',
    'LBL_IMPORT_MODULE_NO_TYPE' => 'Importimist pole selle mooduli tüübi puhul määratud',
    'LBL_IMPORT_MODULE_NO_USERS' => 'HOIATUS: teie süsteemis pole kasutajaid määratud. Kui impordite esmalt kasutajaid lisamata, kuuluvad kõik kirjed administraatorile.',
    'LBL_IMPORT_MODULE_MAP_ERROR' => 'Ei saa avaldada. Samanimeline importkaart on juba avaldatud.',
    'LBL_IMPORT_MODULE_MAP_ERROR2' => 'Teise kasutaja kaardi avaldamist ei saa tühistada. Teil on samanimeline importkaart.',
    'LBL_IMPORT_MODULE_NO_DIRECTORY' => 'Kataloogi ',
    'LBL_IMPORT_MODULE_NO_DIRECTORY_END' => ' pole olemas või see pole kirjutatav',
    'LBL_IMPORT_MODULE_ERROR_NO_UPLOAD' => 'Faili üleslaadimine ebaõnnestus. Säte upload_max_filesize teie php.ini failis võib olla seadistatud väiksele arvule',
    'LBL_IMPORT_MODULE_ERROR_LARGE_FILE' => 'Fail on liiga suur. Max:',
    'LBL_IMPORT_MODULE_ERROR_LARGE_FILE_END' => 'baiti. Muutke sätet $sugar_config[&#39;upload_maxsize&#39;] failis config.php',
    'LBL_MODULE_NAME' => 'Import',
    'LBL_MODULE_NAME_SINGULAR' => 'Import',
    'LBL_TRY_AGAIN' => 'Proovi uuesti',
    'LBL_START_OVER' => 'Alusta uuesti',
    'LBL_ERROR' => 'Tõrge:',
    'LBL_IMPORT_ERROR_MAX_REC_LIMIT_REACHED' => 'Imporditud fail sisaldab {0} rida. Optimaalne ridade arv on {1}. Suurem ridade arv võib importimist aeglustada. Importimise jätkamiseks klõpsake nuppu OK. Imporditud faili kontrollimiseks ja uuesti üleslaadimiseks klõpsake nuppu Tühista.',
    'ERR_IMPORT_SYSTEM_ADMININSTRATOR'  => 'Te ei saa importida süsteemi administraatorist kasutajat',
    'ERR_REPORT_LOOP' => 'Süsteem tuvastas aruandlustsükli. Kasutaja ei saa endale aru anda ja ükski nende juhatajatest ei saa neile aru anda.',
    'ERR_MULTIPLE' => 'Mitmel veerul on sama välja nimi.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Puuduvad nõutavad väljad:',
    'ERR_MISSING_MAP_NAME' => 'Puudub kohandatud kaardistamisnimi',
    'ERR_USERS_IMPORT_DISABLED_TO_IDM_MODE' => 'Kasutajate importimine on IDM-režiimi jaoks keelatud.',
    'ERR_SELECT_FULL_NAME' => 'Te ei saa valida täisnime, kui valitud on eesnimi ning perekonnanimi.',
    'ERR_SELECT_FILE' => 'Valige üleslaaditav fail.',
    'LBL_SELECT_FILE' => 'Vali fail:',
    'LBL_CUSTOM' => 'Kohanda',
    'LBL_CUSTOM_CSV' => 'Kohandatud komaeraldusega fail',
    'LBL_CSV' => 'fail minu arvutis',
    'LBL_EXTERNAL_SOURCE' => 'väline rakendus või teenus',
    'LBL_TAB' => 'Tabeleraldusega fail',
    'LBL_CUSTOM_DELIMITED' => 'Kohandatud eraldatud fail',
    'LBL_CUSTOM_DELIMITER' => 'Valjad on eraldatud:',
    'LBL_FILE_OPTIONS' => 'Faili suvandid',
    'LBL_CUSTOM_TAB' => 'Kohandatud tabeleraldusega fail',
    'LBL_DONT_MAP' => '-- Ära kaardista seda välja --',
    'LBL_STEP_MODULE' => 'Millisesse moodulisse soovite andmeid importida?',
    'LBL_STEP_1_TITLE' => '1. etapp: andmeallika valimine',
    'LBL_CONFIRM_TITLE' => 'Etapp {0}: imporditud faili atribuutide kinnitamine',
    'LBL_CONFIRM_EXT_TITLE' => 'Etapp {0}: välisallika atribuutide kinnitamine',
    'LBL_WHAT_IS' => 'Minu andmed on järgmises kohas:',
    'LBL_MICROSOFT_OUTLOOK' => 'Microsoft Outlook',
    'LBL_MICROSOFT_OUTLOOK_HELP' => 'Microsoft Outlooki kohandatud vastendused tuginevad komaeraldusega (.csv) imporditud failile. Kui teie imporditud fail on tabeleraldusega, ei rakendata vastendusi ootuspäraselt.',
    'LBL_ACT' => 'Act!',
    'LBL_SALESFORCE' => 'Salesforce.com',
    'LBL_MY_SAVED' => 'Salvestatud impordisätete kasutamiseks valige allolevate suvandite hulgast:',
    'LBL_PUBLISH' => 'Avalda',
    'LBL_DELETE' => 'Kustuta',
    'LBL_PUBLISHED_SOURCES' => 'Eelseadistatud impordisätete kasutamiseks valige allolevate suvandite hulgast:',
    'LBL_UNPUBLISH' => 'Tühista avaldamine',
    'LBL_NEXT' => 'Edasi >',
    'LBL_BACK' => '< Tagasi',
    'LBL_STEP_2_TITLE' => 'Etapp {0}: imporditud faili üleslaadimine',
    'LBL_HAS_HEADER' => 'Päiserida:',
    'LBL_NUM_1' => '1.',
    'LBL_NUM_2' => '2.',
    'LBL_NUM_3' => '3.',
    'LBL_NUM_4' => '4.',
    'LBL_NUM_5' => '5.',
    'LBL_NUM_6' => '6.',
    'LBL_NUM_7' => '7.',
    'LBL_NUM_8' => '8.',
    'LBL_NUM_9' => '9.',
    'LBL_NUM_10' => '10.',
    'LBL_NUM_11' => '11.',
    'LBL_NUM_12' => '12.',
    'LBL_NOTES' => 'Märkused:',
    'LBL_NOW_CHOOSE' => 'Nüüd valige imporditav fail:',
    'LBL_IMPORT_OUTLOOK_TITLE' => 'Microsoft Outlook 98 ja 2000 saavad eksportida andmeid vormingus <b>Komaeraldusega väärtused</b>, mida saab kasutada andmete importimiseks teie süsteemi. Andmete eksportimiseks Outlookist järgige järgmisi alltoodud etappe:',
    'LBL_OUTLOOK_NUM_1' => 'Käivitage <b>Outlook</b>',
    'LBL_OUTLOOK_NUM_2' => 'Valige menüü <b>Fail</b> ja seejärel menüüsuvand <b>Import ja eksport ...</b>',
    'LBL_OUTLOOK_NUM_3' => 'Valige <b>Ekspordi faili</b> ja klõpsake nuppu Edasi',
    'LBL_OUTLOOK_NUM_4' => 'Valige <b>Komaeraldusega väärtused (Windows)</b> ja klõpsake nuppu <b>Edasi</b>.<br> Märkus: teil võidakse paluda installida ekspordikomponent',
    'LBL_OUTLOOK_NUM_5' => 'Valige kaust <b>Kontaktid</b> ja klõpsake nuppu <b>Edasi</b>. Kui teie kontaktid on salvestatud mitmesse kausta, saate valida erinevad kontaktide kaustad',
    'LBL_OUTLOOK_NUM_6' => 'Valige faili nimi ja klõpsake nuppu <b>Edasi</b>',
    'LBL_OUTLOOK_NUM_7' => 'Klõpsake nuppu <b>Lõpeta</b>',
    'LBL_IMPORT_SF_TITLE' => 'Salesforce.com saab eksportida andmeid vormingus <b>Komaeraldusega väärtused</b>, mida saab kasutada andmete importimiseks teie süsteemi. Andmete eksportimiseks Salesforce.com-ist järgige järgmisi alltoodud etappe:',
    'LBL_SF_NUM_1' => 'Avage oma brauser, minge lehele http://www.salesforce.com ja logige sisse oma e-posti aadressi ja parooliga',
    'LBL_SF_NUM_2' => 'Klõpsake ülamenüüs vahekaarti <b>Aruanded</b>',
    'LBL_SF_NUM_3' => '<b>Kontode eksportimiseks tehke järgmist:</b> klõpsake linki <b>Aktiivsed kontod</b> <br><b>Kontaktide eksportimiseks tehke järgmist:</b> klõpsake linki <b>Meililist</b>',
    'LBL_SF_NUM_4' => '<b>1. etapis: valige oma aruande tüüp</b>, valige <b>Tabelaruanne</b> klõpsake nuppu <b>Edasi</b>',
    'LBL_SF_NUM_5' => '<b>2. etapis: valige aruande veerud</b>, valige veerud, mida soovite eksportida ja klõpsake nuppu <b>Edasi</b>',
    'LBL_SF_NUM_6' => '<b>3. etapis: valige summeeritav teave</b>, lihtsalt klõpsake nuppu <b>Edasi</b>',
    'LBL_SF_NUM_7' => '<b>4. etapis: järjestage aruande veerud</b>, lihtsalt klõpsake nuppu <b>Edasi</b>',
    'LBL_SF_NUM_8' => '<b>5. etapis: valige oma aruande kriteeriumid</b> suvandist <b>Alguskuupäev</b>, valige piisavalt kauge möödunud kuupäev kõigi oma kontode hõlmamiseks. Saate eksportida ka kontode alamkogumi, kasutades täpsemaid kriteeriumeid. Kui olete lõpetanud, klõpsake suvandit <b>Käivita aruanne</b>',
    'LBL_SF_NUM_9' => 'Aruanne luuakse ja lehel kuvatakse <b>Aruande loomise olek: lõpetatud.</b> Nüüd klõpsake nuppu <b>Ekspordi Excelisse</b>',
    'LBL_SF_NUM_10' => 'Valige suvandis <b>Ekspordi aruanne:</b> käsu <b>Ekspordi failivorming:</b> puhul suvand <b>Komaeraldusega .csv</b>. Klõpsake nuppu <b>Ekspordi</b>.',
    'LBL_SF_NUM_11' => 'Ekspordifaili salvestamiseks teie arvutisse kuvatakse hüpikaken.',
    'LBL_IMPORT_ACT_TITLE' => 'Act! saab eksportida andmeid vormingus <b>Komaeraldusega väärtused</b>, mida saab kasutada andmete importimiseks teie süsteemi. Andmete eksportimiseks Act!-ist järgige järgmisi alltoodud etappe:',
    'LBL_ACT_NUM_1' => 'Käivitage <b>ACT!</b>',
    'LBL_ACT_NUM_2' => 'Valige menüü <b>Fail</b>, menüüsuvand <b>Andmevahetus</b> ja seejärel menüüsuvand <b>Ekspordi ...</b>',
    'LBL_ACT_NUM_3' => 'Valige failitüüp <b>Tekstieraldusega</b>',
    'LBL_ACT_NUM_4' => 'Valige eksporditud andmete puhul faili nimi ja asukoht ja klõpsake nuppu <b>Edasi</b>',
    'LBL_ACT_NUM_5' => 'Valige <b>Ainult kontakti kirjed</b>',
    'LBL_ACT_NUM_6' => 'Klõpsake nuppu <b>Suvandid ...</b>',
    'LBL_ACT_NUM_7' => 'Vali väljaeraldusmärgina <b>Koma</b>',
    'LBL_ACT_NUM_8' => 'Märkige ruut <b>Jah, ekspordi välja nimed</b> ja klõpsake nuppu <b>OK</b>',
    'LBL_ACT_NUM_9' => 'Klõpsake nuppu <b>Edasi</b>',
    'LBL_ACT_NUM_10' => 'Valige <b>Kõik kirjed</b> ja klõpsake seejärel nuppu <b>Lõpeta</b>',
    'LBL_IMPORT_CUSTOM_TITLE' => 'Paljud rakendused lubavad teil eksportida andmeid <b>Komaeraldusega tekstifaili (.csv)</b>, järgides neid üldisi samme:',
    'LBL_CUSTOM_NUM_1' => 'Käivitage rakendus ja avage andmefail',
    'LBL_CUSTOM_NUM_2' => 'Valige menüüsuvand <b>Salvesta nimega ...</b> või <b>Ekspordi ...</b>',
    'LBL_CUSTOM_NUM_3' => 'Salvestage fail vormingus <b>CSV</b> või <b>Komaeraldusega väärtused</b>',
    'LBL_IMPORT_TAB_TITLE' => 'Paljud rakendused lubavad teil eksportida andmeid <b>Tabeleraldusega tekstifaili (.tsv või .tab)</b>, järgides neid üldisi samme:',
    'LBL_TAB_NUM_1' => 'Käivitage rakendus ja avage andmefail',
    'LBL_TAB_NUM_2' => 'Valige menüüsuvand <b>Salvesta nimega ...</b> või <b>Ekspordi ...</b>',
    'LBL_TAB_NUM_3' => 'Salvestage fail vormingus <b>TSV</b> või <b>Tabeleraldusega väärtused</b>',
    'LBL_STEP_3_TITLE' => 'Etapp {0}: välja vastenduste kinnitamine',
    'LBL_STEP_DUP_TITLE' => 'Etapp {0}: võimalike duplikaatide kontrollimine',
    'LBL_SELECT_FIELDS_TO_MAP' => 'Valige allolevast loendist imporditud faili väljad, mis tuleks importida süsteemi igale väljale. Kui olete lõpetanud, klõpsake nuppu <b>Edasi</b>:',
    'LBL_DATABASE_FIELD' => 'Mooduli väli',
    'LBL_HEADER_ROW' => 'Päiserida',
    'LBL_HEADER_ROW_OPTION_HELP' => 'Valige, kui imporditud faili ülemine rida on päiserida, mis sisaldab välja silte.',
    'LBL_ROW' => 'Rida',
    'LBL_SAVE_AS_CUSTOM' => 'Salvesta kui kohandatud vastendamine:',
    'LBL_SAVE_AS_CUSTOM_NAME' => 'Kohandatud vastendamise nimi:',
    'LBL_CONTACTS_NOTE_1' => 'Kas perekonnanimi või täisnimi peavad olema vastendatud.',
    'LBL_CONTACTS_NOTE_2' => 'Kui täisnimi on vastendatud, siis eesnime ja perekonnanime ignoreeritakse.',
    'LBL_CONTACTS_NOTE_3' => 'Kui täisnimi on vastendatud, siis andmebaasi sisestamisel jagatakse Täisnime andmed Eesnime ja Perekonnanime vahel.',
    'LBL_CONTACTS_NOTE_4' => 'Andmebaasi sisestamsel liidetakse need väljad, mis lõpevad suvanditega Aadressi tänav 2 ja Aadressi tänav 3 kokku aadressi tänava väljaga.',
    'LBL_ACCOUNTS_NOTE_1' => 'Andmebaasi sisestamsel liidetakse need väljad, mis lõpevad suvanditega Aadressi tänav 2 ja Aadressi tänav 3 kokku aadressi tänava väljaga.',
    'LBL_REQUIRED_NOTE' => 'Kohustuslik väli/väljad: ',
    'LBL_IMPORT_NOW' => 'Impordi nüüd',
    'LBL_' => '',
    'LBL_CANNOT_OPEN' => 'Imporditud faili ei saa lugemiseks avada',
    'LBL_NOT_SAME_NUMBER' => 'Teie failis polnud rea kohta sama arv välju',
    'LBL_NO_LINES' => 'Teie imporditud failis ei tuvastatud ridu. Veenduge, et teie failis poleks tühje ridu ja proovige uuesti.',
    'LBL_FILE_ALREADY_BEEN_OR' => 'Imporditud faili on juba töödeldud või seda ei eksisteeri',
    'LBL_SUCCESS' => 'Õnnestus:',
	'LBL_FAILURE' => 'Import ebaõnnestus:',
    'LBL_SUCCESSFULLY' => 'Edukalt imporditud',
    'LBL_LAST_IMPORT_UNDONE' => 'Import võeti tagasi.',
    'LBL_NO_IMPORT_TO_UNDO' => 'Tagasi võetav import puudus.',
    'LBL_FAIL' => 'Ebaõnnestumine:',
    'LBL_RECORDS_SKIPPED' => 'Kirjed jäeti vahele, kuna üks või enam kohustuslikku välja oli puudu',
    'LBL_IDS_EXISTED_OR_LONGER' => 'Kirjed jäeti vahele, kuna ID-d kas ei eksisteerinud või see oli pikem kui 36 märki',
    'LBL_RESULTS' => 'Tulemused',
    'LBL_CREATED_TAB' => 'Loodud kirjed',
    'LBL_DUPLICATE_TAB' => 'Duplikaadid',
    'LBL_ERROR_TAB' => 'Tõrked',
    'LBL_IMPORT_MORE' => 'Impordi uuesti',
    'LBL_FINISHED' => 'Lõpetatud',
    'LBL_UNDO_LAST_IMPORT' => 'Tühista viimane import',
    'LBL_LAST_IMPORTED'=>'Loodud',
    'ERR_MULTIPLE_PARENTS' => 'Saae määrata ainult ühe vanema ID',
    'LBL_DUPLICATES' => 'Leiti duplikaadid',
    'LNK_DUPLICATE_LIST' => 'Duplikaatide allalaadimiste loend',
    'LNK_ERROR_LIST' => 'Tõrgete allalaadimiste loend',
    'LNK_RECORDS_SKIPPED_DUE_TO_ERROR' => 'Laadi alla loend ridadest, mida ei saanud importida',
    'LBL_UNIQUE_INDEX' => 'Vali indeks duplikaatide võrdluseks',
    'LBL_VERIFY_DUPS' => 'Imporditud failis olevate andmetega ühtivate olemasolevate kirjete kontrollimiseks valige kontrollitavad väljad.',
    'LBL_INDEX_USED' => 'Kontrollitavad väljad:',
    'LBL_INDEX_NOT_USED' => 'Saadaolevad väljad:',
    'LBL_IMPORT_MODULE_ERROR_NO_MOVE' => 'Faili üleslaadimine ebaõnnestus. Kontrollige faili õiguseid oma Sugari installatsiooni vahemälu kataloogis.',
    'LBL_IMPORT_FIELDDEF_ID' => 'Ainulaadne ID-number',
    'LBL_IMPORT_FIELDDEF_RELATE' => 'Nimi või ID',
    'LBL_IMPORT_FIELDDEF_PHONE' => 'Telefoninumber',
    'LBL_IMPORT_FIELDDEF_TEAM_LIST' => 'Meeskonna nimi või ID',
    'LBL_IMPORT_FIELDDEF_NAME' => 'Suvaline tekst',
    'LBL_IMPORT_FIELDDEF_VARCHAR' => 'Suvaline tekst',
    'LBL_IMPORT_FIELDDEF_TEXT' => 'Suvaline tekst',
    'LBL_IMPORT_FIELDDEF_TIME' => 'Aeg',
    'LBL_IMPORT_FIELDDEF_DATE' => 'Kuupäev',
    'LBL_IMPORT_FIELDDEF_DATETIME' => 'Kuupäev',
    'LBL_IMPORT_FIELDDEF_ASSIGNED_USER_NAME' => 'Kasutajanimi või ID',
    'LBL_IMPORT_FIELDDEF_BOOL' => '0 või 1',
    'LBL_IMPORT_FIELDDEF_ENUM' => 'Loend',
    'LBL_IMPORT_FIELDDEF_EMAIL' => 'E-posti aadress',
    'LBL_IMPORT_FIELDDEF_INT' => 'Numbriline (mitte kümnendarv)',
    'LBL_IMPORT_FIELDDEF_DOUBLE' => 'Numbriline (mitte kümnendarv)',
    'LBL_IMPORT_FIELDDEF_NUM' => 'Numbriline (mitte kümnendarv)',
    'LBL_IMPORT_FIELDDEF_CURRENCY' => 'Numbriline (kümnendikud lubatud)',
    'LBL_IMPORT_FIELDDEF_FLOAT' => 'Numbriline (kümnendikud lubatud)',
    'LBL_DATE_FORMAT' => 'Kuupäeva formaat:',
    'LBL_TIME_FORMAT' => 'Aja formaat:',
    'LBL_TIMEZONE' => 'Ajavöönd:',
    'LBL_ADD_ROW' => 'Lisa väli',
    'LBL_REMOVE_ROW' => 'Eemalda väli',
    'LBL_DEFAULT_VALUE' => 'Vaikeväärtus',
    'LBL_SHOW_ADVANCED_OPTIONS' => 'Kuva imporditud faili atribuudid',
    'LBL_HIDE_ADVANCED_OPTIONS' => 'Peida imporditud faili atribuudid',
    'LBL_SHOW_NOTES' => 'Vaata märkuseid',
    'LBL_HIDE_NOTES' => 'Peida märkused',
    'LBL_SHOW_PREVIEW_COLUMNS' => 'Näita veergude eelvaadet',
    'LBL_HIDE_PREVIEW_COLUMNS' => 'Peida veergude eelvaade',
    'LBL_SAVE_MAPPING_AS' => 'Impordisätete salvestamiseks esitage salvestatud sätete nimi:',
    'LBL_OPTION_ENCLOSURE_QUOTE' => 'Üksisjutumärk (&#39;)',
    'LBL_OPTION_ENCLOSURE_DOUBLEQUOTE' => 'Kaksisjutumärk (")',
    'LBL_OPTION_ENCLOSURE_NONE' => 'Ükski',
    'LBL_OPTION_ENCLOSURE_OTHER' => 'Muud:',
    'LBL_IMPORT_COMPLETE' => 'Välju',
    'LBL_IMPORT_COMPLETED' => 'Importimine on lõpetatud',
    'LBL_IMPORT_ERROR' => 'Importimisel ilmnesid tõrked',
    'LBL_IMPORT_RECORDS' => 'Kirjete importimine',
    'LBL_IMPORT_RECORDS_OF' => '/',
    'LBL_IMPORT_RECORDS_TO' => 'kohta',
    'LBL_CURRENCY' => 'Valuuta:',
    'LBL_SYSTEM_SIG_DIGITS' => 'Süsteemi olulised numbrid',
    'LBL_NUMBER_GROUPING_SEP' => '1000ndike eraldaja:',
    'LBL_DECIMAL_SEP' => 'Kümnendkoha sümbol:',
    'LBL_LOCALE_DEFAULT_NAME_FORMAT' => 'Nime kuvavorming',
    'LBL_LOCALE_EXAMPLE_NAME_FORMAT' => 'Näide',
    'LBL_LOCALE_NAME_FORMAT_DESC' => '<i>"s" Tervitus, "f" Eesnimi, "l" Perekonnanimi</i>',
    'LBL_CHARSET' => 'Faili kodeering:',
    'LBL_MY_SAVED_HELP' => 'Kasutage seda suvandit teie eelseadistatud impordisätete, sealhulgas impordi atribuutide, vastenduste ja duplikaatide kontrolli sätete rakendamiseks sellesse importi.<br><br>Klõpsake nuppu <b>Kustuta</b> vastenduse kustutamiseks kõigi kasutajate puhul.',
    'LBL_MY_SAVED_ADMIN_HELP' => 'Kasutage seda suvandit teie eelseadistatud impordisätete, sealhulgas impordi atribuutide, vastenduste ja duplikaatide kontrolli sätete rakendamiseks sellesse importi.<br><br>Klõpsake nuppu <b>Avalda</b> vastenduse teistele kasutajatele kättesaadavaks muutmiseks.<br>Klõpsake nuppu <b>Tühista avaldamine</b> vastenduse teistele kasutajatele kättesaamatuks muutmiseks.<br>Klõpsake nuppu <b>Kustuta</b> vastenduse kustutamiseks kõigi kasutajate puhul.',
    'LBL_MY_PUBLISHED_HELP' => 'Kasutage seda suvandit eelseadistatud impordisätete, sealhulgas impordi atribuutide, vastenduste ja duplikaatide kontrolli sätete rakendamiseks sellesse importi.',
    'LBL_ENCLOSURE_HELP' => '<p><b>Täpsusti märki</b> kasutatakse plaanitud välja sisu, sealhulgas mis tahes eraldajatena kasutatud märkide sulgemiseks.<br><br>Näide: kui eraldajaks on koma (,) ja täpsusti on jutumärk ("), imporditakse <br><b>"Cupertino, California"</b> rakenduses ühele väljale ja kuvatakse kujul <b>Cupertino, California</b>.<br>Kui täpsusti märgid puuduvad või täpsustiks on teistsugune märk, imporditakse <br><b>"Cupertino, California"</b> kahte kõrvutiasuvasse välja kui <b>"Cupertino</b> ja <b>"California"</b>.<br><br>Märkus: impordifail ei pruugi sisaldada ühtegi täpsusti märki.<br>Vaikimisi täpsusti märk koma- ja tabeleraldusega Excelis loodud märkide puhul on jutumärk.</p>',
    'LBL_DELIMITER_COMMA_HELP' => 'Kasutage seda suvandit arvutustabeli faili valimieks ja üleslaadimiseks, mis sisaldab andmeid, mida sooviksite importida. Näited: komaeraldusega .csv fail või ekspordifail Microsoft Outlookist.',
    'LBL_DELIMITER_TAB_HELP' => 'Valige see suvand, kui impordifaili välju eraldavaks märgiks on <b>TABELDUSMÄRK</b> ja faililaiend on .txt.',
    'LBL_DELIMITER_CUSTOM_HELP' => 'Valige see suvand, kui impordifaili välju eraldavaks märgiks pole koma või TABELDUSMÄRK ja sisestage märk kõrvalvälja.',
    'LBL_DATABASE_FIELD_HELP' => 'Selles veerus kuvatakse kõik mooduli väljad. Valige väli, mida vastendada impordifaili ridadel olevate andmetega.',
    'LBL_HEADER_ROW_HELP' => 'Selles veerus kuvatakse impordifaili päiserea sildid.',
    'LBL_DEFAULT_VALUE_HELP' => 'Viidake loodud või värskendatud kirje välja puhul kasutatavale väärtusele, kui impordifaili välja andmed puuduvad.',
    'LBL_ROW_HELP' => 'Selles veerus kuvatakse andmed impordifaili esimeses mitte päise reas. Kui selles veerus kuvatakse päiserea sildid, klõpsake nuppu Tagasi päiserea määramiseks suvandis Impordifaili atribuudid.',
    'LBL_SAVE_MAPPING_HELP' => 'Sisestage impordisätete salvestamiseks nimi, sealhulgas duplikaatide kontrolliks kasutatavad välja vastendused ja indeksid. Salvestatud impordisätteid saab kasutada edaspidisteks importideks.',
    'LBL_IMPORT_FILE_SETTINGS_HELP' => 'Teie impordifaili üleslaadimisel võidi mõne faili atribuudid automaatselt tuvastada. Saate vaadata ja hallata neid atribuute <br>vajaduse järgi. Märkus: siin esitatud sätted puudutavad seda importi<br> ja ei alista teie üldisi kasutajasätteid.',
    'LBL_VERIFY_DUPLCATES_HELP' => 'Leidke süsteemist olemasolevad kirjed, mida võidakse pidada imporditavate kirjete duplikaatideks, tehes vastendatud andmete duplikaatide kontrolli. Veergu Kontrolli andmed lohistatud välju kasutatakse duplikaatide kontrolliks. Vatendamise andmeid sisaldava impordifaili read loetletakse järgmisel lehel ja saate valida, millised read importida',
    'LBL_IMPORT_STARTED' => 'Import alustatud:',
    'LBL_IMPORT_FILE_SETTINGS' => 'Impordifaili sätted',
    'LBL_IDM_RECORD_CANNOT_BE_CREATED' => 'Kirjet ei lisatud. Uued kasutajad tuleb lisada SugarCloudi sätetes',
    'LBL_RECORD_CANNOT_BE_UPDATED' => 'Kirjet ei saa värskendada loaprobleemi tõttu',
    'LBL_DELETE_MAP_CONFIRMATION' => 'Kas olete kindel, et soovite seda salvestatud impordisätete kogumit kustutada?',
    'LBL_THIRD_PARTY_CSV_SOURCES' => 'Kui impordifaili andmed eksporditi järgmisest allikast, valige, millisest.',
    'LBL_THIRD_PARTY_CSV_SOURCES_HELP' => 'Valige allikas kohandatud vastenduste automaatseks rakendamiseks vastendusprotsessi lihtsustamiseks (järgmine etapp).',
    'LBL_EXTERNAL_SOURCE_HELP' => 'Kasutage seda suvandit andmete importimiseks otse välisest rakendusest või teenusest, nagu Gmail.',
    'LBL_EXAMPLE_FILE' => 'Laadi alla impordifaili mall',
    'LBL_CONFIRM_IMPORT' => 'Olete valinud kirjete värskendamise importimise käigus. Olemasolevate kirjete värskendusi ei saa tagasi võtta. Siiski saab importimise käigus loodud kirjeid soovi korral tagasi võtta (kustutada). Ainult uute kirjete loomise valimiseks klõpsake nuppu Tühista või jätkamiseks klõpsake nuppu OK.',
    'LBL_IDM_CONFIRM_IMPORT' => 'Updates made to existing records during the import process cannot be undone. Click Cancel to create new records, or click OK to continue.',
    'LBL_CONFIRM_MAP_OVERRIDE' => 'Hoiatus: olete selle impordi puhul kohandatud vastendamise juba valinud, kas soovite jätkata?',
    'LBL_EXTERNAL_FIELD' => 'Väline väli',
    'LBL_SAMPLE_URL_HELP' => 'Laadige alla näidis-impordifail, mis sisaldab mooduli väljade päiserida. Faili saab kasutada mallina impordifaili loomiseks, mis sisaldab andmeid, mida soovite importida.',
    'LBL_AUTO_DETECT_ERROR' => 'Impordifaili väljaeraldajat ja täpsustit polnud võimalik tuvastada. Kontrollige sätteid suvandis Impordifaili atribuudid.',
    'LBL_MIME_TYPE_ERROR_1' => 'Valitud fail ei näi sisaldavat eraldusloendit. Kontrollige faili tüübi. Soovitame komaeraldusega faile (.csv).',
    'LBL_MIME_TYPE_ERROR_2' => 'Valitud faili importimise jätkamiseks klõpsake nuppu OK. Uue faili üleslaadimiseks klõpsake Proovi uuesti',
    'LBL_FIELD_DELIMETED_HELP' => 'Väljaeraldaja määrab välja veergude eraldamiseks kasutatava märgi.',
    'LBL_FILE_UPLOAD_WIDGET_HELP' => 'Valige fail, mis sisaldab andmeid, mis on eraldatud eraldaja, näiteks koma- või tabeleraldusega failiga. Soovitatavad on failid tüübiga .csv.',
    'LBL_EXTERNAL_ERROR_NO_SOURCE' => 'Allika adaprit ei saa otsida, proovige hiljem uuesti.',
    'LBL_EXTERNAL_ERROR_FEED_CORRUPTED' => 'Välisvoogu ei saa otsida, proovige hiljem uuesti.',
    'LBL_ERROR_IMPORT_CACHE_NOT_WRITABLE' => 'Impordi vahemälu kaust pole kirjutatav.',
    'LBL_ADD_FIELD_HELP' => 'Kasutage seda suvandit väärtuse lisamiseks kõigi loodud ja/või värskendatud kirjete väljale. Valige väli ja sisestage või valige seejärel välja väärtus veerust Vaikeväärtus.',
    'LBL_MISSING_HEADER_ROW' => 'Ühtegi päiserida ei leitud',
    'LBL_CANCEL' => 'Tühista',
    'LBL_SELECT_DS_INSTRUCTION' => 'Kas olete valmis importimist alustama? Valige andmeallikas, mida soovite importida.',
    'LBL_SELECT_UPLOAD_INSTRUCTION' => 'Valige oma arvutist fail, mis sisaldab andmeid, mida soovite importida, või laadige alla mall impordifaili loomisel edumaa saamiseks.',
    'LBL_SELECT_IDM_CREATE_INSTRUCTION' => 'Uute kirjete loomiseks minge <a href="{0}" target="_blank">SugarCloudi sätetesse</a>.',
    'LBL_SELECT_IDM_UPLOAD_INSTRUCTION' => 'Olemasolevate kirjete värskendamiseks valige oma arvutist fail, mis sisaldab andmeid, mida soovite importida.',
    'LBL_SELECT_PROPERTY_INSTRUCTION' => 'Siin on toodud, kuidas kuvatakse impordifaili mitu esimest rida tuvastatud failiatribuutidega. Kui tuvastati päiserida, kuvatakse see tabeli ülemises reas. Tuvastatud atribuutide muutmiseks ja täiendavate atribuutide määramiseks vaadake impordifaili atribuute. Sätete värskendamine värskendab tabelis olevad andmed.',
    'LBL_SELECT_MAPPING_INSTRUCTION' => 'Järgmine tabel sisaldab kõiki mooduli välju, mida saab vastendada impordifaili andmetega. Kui fail sisaldab päiserida, on faili veerud ühtivate väljadega vastendatud. Kui imporditavad andmed sisaldavad kuupäevi, peab aasta olema vormingus AAAA. Kontrollige vastendusi, veendumaks, et need on ootuspärased ja vajaduse korral tehke muudatusi. Vastenduste kontrollimise hõlbustamiseks kuvatakse rea 1 andmed failis. Vastendage kindlasti kõigi nõutud väljadega (märgitud tärniga).',
    'LBL_IDM_SELECT_MAPPING_INSTRUCTION' => 'The table below contains all of the editable fields in the module that can be mapped to the data in the import file. If the file contains a header row, the columns in the file have been mapped to matching fields. If the import data contain dates, the year must be in YYYY format. Check the mappings to make sure that they are what you expect, and make changes, as necessary. To help you check the mappings, Row 1 displays the data in the file. Be sure to map to all of the required fields (noted by an asterisk).',
    'LBL_IDM_SELECT_MAPPING_FIELDS_INSTRUCTION' => '<a href="{0}" target="_blank">Fields</a> that are only editable in SugarIdentity via the SugarCloud Settings console will not be available to map.',
    'LBL_SELECT_DUPLICATE_INSTRUCTION' => 'Duplikaatkirjete loomise vältimiseks valige, milliseid vastendatud välju sooviksite duplikaatide kontrolliks kasutada, kui andmeid imporditakse. Valitud väljade olemasolevate kirjete väärtusi kontrollitakse impordifaili andmetega. Ühtivate andmete leidmisel kuvatakse andmeid sisaldava impordifaili read koos impordi tulemustega (Järgmine lehekülg). Seejärel saate valida, milliste nende ridade importimist jätkata.',
    'LBL_EXT_SOURCE_SIGN_IN' => 'Logi sisse',
    'LBL_EXT_SOURCE_SIGN_OUT' => 'Logi välja',
    'LBL_DUP_HELP' => 'Järgmiselt on toodud impordifaili read, mida ei imporditud, kuna need sisaldavad andmeid, et ühtivad põhineb duplikaatide kontrolli põhjal olemasolevate kirjete väärtustega. Ühtivad andmed on esile tõstetud. Nende ridade uuesti importimiseks laadige loend alla, tehke muudatused ja klõpsake nuppu <b>Impordi uuesti</b>.',
    'LBL_DESELECT' => 'tühista valik',
    'LBL_SUMMARY' => 'Kokkuvõte',
    'LBL_OK' => 'OK',
    'LBL_ERROR_HELP' => 'Järgmiselt on toodud impordifaili read, mida ei imporditud tõrgete tõttu. Nende ridade uuesti importimiseks laadige loend alla, tehke muudatused ja klõpsake nuppu <b>Impordi uuesti</b>',
    'LBL_EXTERNAL_MAP_HELP' => 'Järgmine tabel sisaldab välise allika välju ja mooduli välju, millega need on vastendatud. Kontrollige vastendusi, veendumaks, et need on ootuspärased ja vajaduse korral tehke muudatusi. Vastendage kindlasti kõigi nõutud väljadega (märgitud tärniga).',
    'LBL_EXTERNAL_MAP_NOTE' => 'Importida proovitakse kõiki Google&#39;i kontaktide rühmades olevaid kontakte.',
    'LBL_EXTERNAL_MAP_NOTE_SUB' => 'Vastloodud kasutajate kasutajanimed on vaikimisi Google&#39;i kontakti täisnimed. Kasutajanimesid saab muuta pärast kasutaja kirjete loomist.',
    'LBL_EXTERNAL_MAP_SUB_HELP' => 'Importimise alustamiseks klõpsake nuppu <b>Impordi nüüd</b>. Kirjed luuakse ainult kannete puhul, mis sisaldavad perekonnanimesid. Kirjeid ei looda andmete puhul, mis on tuvastatud duplikaadina olemasolevate kirjetega ühtivate nimede ja/või e-posti aadresside põhjal.',
    'LBL_EXTERNAL_FIELD_TOOLTIP' => 'Selles veerus kuvatakse välise allika väljad, mis sisaldavad andmeid, mida kasutatakse uute kirjete loomiseks.',
    'LBL_EXTERNAL_DEFAULT_TOOPLTIP' => 'Viidake loodud kirje välja puhul kasutatavale väärtusele, kui välise allika välja andmed puuduvad.',
    'LBL_EXTERNAL_ASSIGNED_TOOLTIP' => 'Uute kirjete määramiseks muule kasutajale kui endale kasutage teise kasutaja valimiseks veergu Vaikeväärtus.',
    'LBL_EXTERNAL_TEAM_TOOLTIP' => 'Uute kirjete määramiseks muudele meeskondadelele kui enda vaikemeeskonnale/-meeskondadele kasutage teiste meeskondade valimiseks veergu Vaikeväärtus.',
    'LBL_SIGN_IN_HELP' => 'Sellele teenuse lubamiseks logige sisse oma kasutajasätete lehe vahekaardil Väliskontod.',
    'LBL_NO_EMAIL_DEFS_IN_MODULE' => "Püütakse käsitleda oa e-posti aadresse, mis seda ei toeta.",
);
