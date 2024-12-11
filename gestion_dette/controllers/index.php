<?php
//Fonctions Access aux donnees
define('DAYS_BEFORE_DUE_DATE', 31); # nb jours avant la date d'echéance
define('MAX_MONTANT', 1000000); # le montant maximun qui peut être pris ou déposer
define('MIN_MONTANT', 0); # le montant minimun qui peut être pris ou déposer
define('TAILLE_VALID_NUM', 9); # La taille d'un numéro valide
define('PREFIXE_VALID', ['77', '78', '70', '76']); # les prefixes de téléphones valides 

function selectClients(): array
{
    return
        [
            [
                "client_id" => 1,
                "nom" => "Wane",
                "prenom" => "Baila",
                "telephone" => "777661010",
                "adresse" => "FO"

            ],
            [
                "client_id" => 2,
                "nom" => "Wane1",
                "prenom" => "Baila1",
                "telephone" => "777661011",
                "adresse" => "FO1"

            ]
        ];
}

function selectDettes(): array
{
    return
        [
            [
                "ref_dette" => 1,
                "client_id" => 2,
                "mtn_dette" => 7000,
                "mtn_verse" => 7000,
                "datte_pris" => "22/11/2024",
                "datte_echeance" => "23/12/2025",
            ],
            [
                "ref_dette" => 2,
                "client_id" => 1,
                "mtn_dette" => 5000,
                "mtn_verse" => 2000,
                "datte_pris" => "01/12/2024",
                "datte_echeance" => "01/01/2025",
            ],
            [
                "ref_dette" => 3,
                "client_id" => 2,
                "mtn_dette" => 3000,
                "mtn_verse" => 1000,
                "datte_pris" => "05/12/2024",
                "datte_echeance" => "05/01/2025",
            ]
        ];
}

function selectPayements(): array
{
    return
        [
            [
                "ref_pay" => 1,
                "ref_dette" => 1,
                "mtn_pay" => 2000,
                "datte_pay" => "24/11/2024",
            ],
            [
                "ref_pay" => 2,
                "ref_dette" => 1,
                "mtn_pay" => 3000,
                "datte_pay" => "30/11/2024",
            ],
            [
                "ref_pay" => 3,
                "ref_dette" => 2,
                "mtn_pay" => 2000,
                "datte_pay" => "03/12/2024",
            ],
            [
                "ref_pay" => 4,
                "ref_dette" => 1,
                "mtn_pay" => 1000,
                "datte_pay" => "05/12/2024",
            ],
        ];
}

function selectClientByTel(array $clients, string $tel): array|null
{
    foreach ($clients as  $client) {
        if ($client["telephone"] == $tel) {
            return $client;
        }
    }
    return null;
}

function getDettesByClientId(array $dettes, int $clientId): array
{
    $dettesClient = [];
    foreach ($dettes as $dette) {
        if ($dette["client_id"] == $clientId) {
            $dettesClient[] = $dette;
        }
    }
    return $dettesClient;
}

function getLastDetteByClientId(array $dettes, int $clientId): array|null
{
    for ($i = count($dettes) - 1; $i >= 0; $i--) {
        if ($dettes[$i]["client_id"] == $clientId) {
            return $dettes[$i];
        }
    }
    return null;
}

function getPayementsByDetteRef(array $payements, int $detteRef): array
{
    $payementsDette = [];
    foreach ($payements as $payement) {
        if ($payement["ref_dette"] == $detteRef) {
            $payementsDette[] = $payement;
        }
    }
    return $payementsDette;
}

function insertInTable(array &$tabOrg, $newVal): void
{
    // array_push($tabOrg,$newVal);
    $tabOrg[] = $newVal;
}

function getTodayDate(): string
{
    return date("d/m/Y");
}

function getDueDate(): string
{
    return date("d/m/Y", strtotime("+" . DAYS_BEFORE_DUE_DATE . " days"));
}



//Fonctions Services ou Use Case  ou Metier
function  enregistrerClient(array &$tabClients, array $client): bool
{
    $result =  selectClientByTel($tabClients, $client["telephone"]);
    if ($result == null) {
        insertInTable($tabClients, $client);
        return true;
    }
    return false;
}
function checkIfHasDette(array $lastDette): bool
{
    if ($lastDette != null) {
        return differenceInt($lastDette["mtn_dette"], $lastDette["mtn_verse"]) != 0;
    }
    return false;
}
function enregistrerDette(array &$tabDettes, array $tabClients, array $client = null): void
{
    if ($client == null) { # si le client n'est pas donné
        $numero = saisieNumValide(sms: "Entrer le numéro du client: ");
        $client = selectClientByTel($tabClients, $numero);
        $lastDette = getLastDetteByClientId($tabDettes, $client["client_id"]);
        if (checkIfCanBuyDette($lastDette)) {
            $dette = saisieDette($tabDettes, $client);
            insertInTable(tabOrg: $tabDettes, newVal: $dette);
        }
    } else {
        $dette = saisieDette($tabDettes, $client);
        insertInTable(tabOrg: $tabDettes, newVal: $dette);
    }

    if ($client != null) {
        echo "Dette Enregistrer avec success \n";
    } else {
        echo "Erreur! la dette n'a pas été enregistrer \n";
        echo "Le client a déjà une dette en cours ou n'existe pas \n";
    }
}

function checkIfCanBuyDette(array $tabDette): bool
{
    if ($tabDette != null) {
        return differenceInt($tabDette["mtn_dette"], $tabDette["mtn_verse"]) == 0;
    }
    return true;
}

function enregistrerPayement(array &$tabPayements, array $tabClients, array $tabDettes, array $client = null, $lastdette = null): bool
{
    if ($client == null) { # si le client n'est pas donné
        $numero = saisieNumValide(sms: "Entrer le numéro du client: ");
        $client = selectClientByTel($tabClients, $numero);
        $lastDette = getLastDetteByClientId($tabDettes, $client["client_id"]);
        if (!checkIfCanBuyDette($lastDette)) {
            $payement = saisiePayement($tabPayements, $lastDette);
            insertInTable(tabOrg: $tabPayements, newVal: $payement);
            return true;
        }
    } else {
        $payement = saisiePayement($tabPayements, $lastdette);
        insertInTable(tabOrg: $tabPayements, newVal: $payement);
        return true;
    }
    return false;
}

function saveDette(array &$tabDettes, array $tabClients, array $client = null): void
{
    if (enregistrerDette($tabDettes, $tabClients, $client)) {
        echo "Dette Enregistrer avec success \n";
    } else {
        echo "Erreur! la dette n'a pas été enregistrer \n";
        echo "Le client a déjà une dette en cours ou n'existe pas \n";
    }
}

function listerClient(): array
{
    return selectClients();
}


function estVide(string $value): bool
{
    //$value=="" ou empty($value)
    return empty($value);
}

function differenceInt(int $valueA, int $valueB): int
{
    return $valueA - $valueB;
}

function getKeyMenuByIndex(array $menu, int $index): string
{
    return array_keys($menu)[$index - 1];
}

function delSpace(string $chaine): string
{
    return str_replace(" ", "", $chaine);
}

function checkNumero(string $num): bool
{
    return strlen($num) == TAILLE_VALID_NUM && checkPrefixNumero($num);
}

function checkPrefixNumero(string $num): bool
{
    $prefixe = substr($num, 0, 2);
    foreach (PREFIXE_VALID as $prefVal) {
        if ($prefixe == $prefVal) {
            return true;
        }
    }
    return false;
}

//Fonctions Presentation
function saisieChampObligatoire(string $sms): string
{
    do {
        $value = readline($sms);
    } while (estVide($value));
    return $value;
}
function telephoneIsUnique(array $clients, string $sms): string
{
    do {
        $value = saisieNumValide($sms);
    } while (selectClientByTel($clients, $value) != null);
    return $value;
}

function afficheClients(array $clients): void
{
    if (count(value: $clients) == 0) {
        echo "Pas de client a affiche";
    } else {
        foreach ($clients as  $client) {
            echo "-----------------------------------------\n";
            afficheClient($client);
        }
    }
}

function afficheClient(array $client): void
{
    echo "Identifiant : " . $client["client_id"] . "\t";
    echo "Telephone : " . $client["telephone"] . "\t";
    echo "Nom : " . $client["nom"] . "\t";
    echo "Prenom : " . $client["prenom"] . "\t";
    echo "Adresse : " . $client["adresse"] . "\n";
}

function afficheDettes(array $dettes): void
{
    if (count(value: $dettes) == 0){
        echo "Pas encore de dette";
    } else {
        foreach ($dettes as $la_dette) {
            echo "-----------------------------------------\n";
            afficheDette($la_dette);
        }
    }
}

function afficheDette(array $dette) : void
{
    echo "Reference : " . $dette["ref_dette"] . "\n";
    echo "Montant de la dette : " . $dette["mtn_dette"] . "\n";
    echo "Montant versé : " . $dette["mtn_verse"] . "\n";
    echo "Datte de la dette : " . $dette["datte_pris"] . "\n";
    echo "Datte écheance : " . $dette["datte_echeance"] . "\n";
}


function saisieNumValide(string $sms): string
{
    do {
        $value = readline($sms);
    } while (!checkNumero($value));
    return $value;
}

function saisieMontant(string $sms, float $max = MAX_MONTANT, float $min = MIN_MONTANT): float
{
    do {
        $value = (float)readline($sms);
    } while ($value < $min || $value > $max);
    return $value;
}

function saisieChoix(string $sms, int $max, int $min = 0): string
{
    do {
        $value = (int)readline(prompt: $sms);
    } while ($value < $min || $value > $max);
    return $value;
}

function saisieClient(array $clients): array
{
    return [
        "client_id" => count(value: $clients) + 1,
        "telephone" => saisieNumValide(sms : "Entrer le Telephone (numéro valide) : "),
        "nom" => saisieChampObligatoire(sms: " Entrer le Nom: "),
        "prenom" => saisieChampObligatoire(sms: " Entrer le Prenom: "),
        "adresse" => saisieChampObligatoire(sms: " Entrer l'Adresse: "),
    ];
}

function saisieDette(array $dettes, array $client): array
{
    return [
        "ref_dette" => count($dettes) + 1,
        "client_id" => $client['client_id'],
        "mtn_dette" => saisieMontant(sms: "Entrer le montant de la dette: "),
        "mtn_verse" => 0,
        "datte_pris" => getTodayDate(),
        "datte_echeance" => getDueDate(),
    ];
}

function saisiePayement(array $payements, array $dette): array
{
    if ($dette['datte_echeance'] == getTodayDate()) {
        $mtn_minimun = differenceInt($dette['mtn_dette'], $dette['mtn_verse']);
        $mtn_maximun = $mtn_minimun + 0.0001;
    } else {
        $mtn_minimun = MIN_MONTANT;
        $mtn_maximun = differenceInt($dette['mtn_dette'], $dette['mtn_verse']);
    }
    return [
        "ref_pay" => count($payements) + 1,
        "ref_dette" => $dette["ref_dette"],
        "mtn_pay" => saisieMontant(sms: "Entrer le montant du payement: ", max: $mtn_maximun, min: $mtn_minimun),
        "datte_pay" => getTodayDate(),
    ];
}

function miseAjourMontantVerse(array &$dettes, int $refDette, float $montantAdd): void
{
    $dettes[$refDette - 1]["mtn_verse"] += $montantAdd;
}

function confirmer(string $sms): bool
{
    do {
        $value = strtolower(readline($sms . "(o/n) "));
    } while ($value != "o" && $value != "n");
    return $value == "o";
}


define("MENU", [
    "Add_client" => "Ajouter client",
    "List_client" => "Lister les clients",
    "Research_client" => "Rechercher client par telephone",
    "Save_dette" => "Enregistrer une dette",
    "List_dette" => "Lister les dettes d'un client",
    "Save_payement" => "Enregistrer un payement",
    "Quitter" => "Quitter",
]);

function displayMenu(array $menu): void
{
    $i = 1;
    foreach ($menu as $fonctionnalite) {
        echo $i++ . " - " . $fonctionnalite . "\n";
    }
}


function savePayement(array &$payements, array $dette): void
{
    $payement = saisiePayement($payements, $dette);
    insertInTable(tabOrg: $payements, newVal: $payement);
}

function principal(): void
{
    $clients = selectClients();
    $dettes = selectDettes();
    $payements = selectPayements();
    do {
        displayMenu(menu: MENU);
        $choix = saisieChoix(sms: "Faites votre choix: ", max: count(MENU));
        $fonctionnalite = getKeyMenuByIndex(MENU, $choix);
        switch ($fonctionnalite) {
            case "Add_client":
                $client = saisieClient($clients);
                if (enregistrerClient($clients,  $client)) {
                    echo "Client Enregistrer avec success \n";
                    if (confirmer("Voulez-vous enregitrer une dette? ")) {
                        $dette = saisieDette($dettes, $client);
                        insertInTable(tabOrg: $dettes, newVal: $dette);
                        echo "Dette Enregistrer avec success \n";
                        if (confirmer("Il y a t'il un payement à enregistrer?")) {
                            $payement = saisiePayement($payements, $dette);
                            insertInTable(tabOrg: $payements, newVal: $payement);
                            miseAjourMontantVerse($dettes, $dette["ref_dette"], $payement["mtn_pay"]);
                            echo "Payement Enregistrer avec success \n";
                        }
                    }
                } else {
                    echo "Le numero Telephone  existe deja \n";
                }
                break;
            case "List_client":
                afficheClients($clients);
                break;
            case "Research_client":
                $numero = saisieNumValide(sms: "Entrer le numéro à rechercher: ");
                $client = selectClientByTel($clients, $numero);
                if ($client) {
                    afficheClient($client);
                } else {
                    echo "Le numero Telephone n'existe pas \n";
                }
                break;
            case "Save_dette":
                $numero = saisieNumValide(sms: "Entrer le numéro du client: ");
                $client = selectClientByTel($clients, $numero);
                if ($client) {
                    $lastDette = getLastDetteByClientId($dettes, $client["client_id"]);
                    if(!checkIfHasDette($lastDette)){
                        $dette = saisieDette($dettes, $client);
                        insertInTable(tabOrg: $dettes, newVal: $dette);
                        echo "Dette Enregistrer avec success \n";
                        if (confirmer("Il y a t'il un payement à enregistrer?")) {
                            $payement = saisiePayement($payements, $dette);
                            insertInTable(tabOrg: $payements, newVal: $payement);
                            miseAjourMontantVerse($dettes, $dette["ref_dette"], $payement["mtn_pay"]);
                            echo "Payement Enregistrer avec success \n";
                        }
                    } else {
                        echo "Ce client a déjà une dette actif  \n";
                    }
                } else {
                    echo "Le numero Telephone n'existe pas \n";
                }
                break;
            case "List_dette":
                $numero = saisieNumValide(sms: "Entrer le numéro du client: ");
                $client = selectClientByTel($clients, $numero);
                if ($client) {
                    $listeDettes = getDettesByClientId($dettes, $client["client_id"]);
                    afficheDettes($listeDettes);
                }else{
                    echo "Le numero Telephone n'existe pas \n";
                }
                break;
            case "Save_payement":
                $numero = saisieNumValide(sms: "Entrer le numéro du client: ");
                $client = selectClientByTel($clients, $numero);
                if ($client) {
                    $lastDette = getLastDetteByClientId($dettes, $client["client_id"]);
                    if(checkIfHasDette($lastDette)){
                        $payement = saisiePayement($payements, $lastDette);
                        insertInTable(tabOrg: $payements, newVal: $payement);
                        miseAjourMontantVerse($dettes, $lastDette["ref_dette"], $payement["mtn_pay"]);
                        echo "Payement Enregistrer avec success \n";
                    } else {
                        echo "Ce client n'a pas de dette actif \n";
                    }
                } else {
                    echo "Le numero Telephone n'existe pas \n";
                }
                break;
            case "Quitter":
                echo "Au revoir \n";
                return;
            default:
                echo "Veullez faire un bon choix: ";
                break;
        }
    } while ($fonctionnalite != "Quitter");
}
principal();
