<?php
// Autoriser l'accès depuis n'importe quelle origine (CORS)
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');

// Récupérer le chemin de la requête
$uri = isset($_SERVER['REQUEST_URI']) ? parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH) : '';
$uri = rtrim($uri, '/');

// Définir les données du CV
$contact = [
    "Qui suis-je ?" => [
        [
            "nom" => "Florino",
            "prenom" => "Simon",
            "email" => "florino.simon@hotmail.fr",
            "github" => "https://github.com/FlorinoSimon",
            "linkedin" => "https://www.linkedin.com/in/florino-simon/",
            "véhiculé" => "Permis B",
            "RQTH" => "oui",
            "age" => "32 ans",
            "disponibilité" => "immédiate"
        ]
    ]
];

$skills = [
    "Mes compétences" => [
        ["Tests" => ["manuels", "automatisés"], "outils" => ["Selenium", "Cypress", "Postman", "Robot Framework", "Soap UI"]],
        ["BDD" => ["MySQL", "MongoDB"]],
        ["versioning" => ["Git", "GitHub"]],
        ["languages web" => ["HTML 5", "CSS 3", "JavaScript", "ASP.NET", "PHP"]],
        ["languages back" => ["C#", "Python", "Java", "C++"]],
        ["mobile" => ["Android", "Windows Phone"]],
        ["OS" => ["Windows", "Linux"]],
        ["frameworks" => [".NET", "JQuery"]],
        ["langues" => ["Français", "Anglais"]],
    ]
];

$experiences = [
    "Mes expériences" => [
        [
            "titre" => "Développeur Fullstack",
            "entreprise" => "ProjetLys",
            "lieu" => "Lyon 9",
            "periode" => "2024",
            "description" => "Travail sur un logiciel de partage de note sur PDF",
            "details" => [
                "Mise en place du backend avec .NET",
                "Collaboration sur le frontend avec HTML, CSS et JavaScript"
            ]
        ],
        [
            "titre" => "Développeur mobile et fullstack",
            "entreprise" => "Odyssée Ingénierie",
            "lieu" => "Givors (69700)",
            "periode" => "2013-2015",
            "missions" => [
                [
                    "description" => "Conception (+ maintenance) d'applications mobiles de géolocalisation d'incident en lien avec le logiciel GED ECM de l'entreprise",
                    "details" => [
                        "Création d'application mobile Android",
                        "Création d'application mobile Windows Phone",
                        "Création d'un webservice SOAP"
                    ]
                ],
                [
                    "description" => "Réécriture de l'application en ASP.NET",
                    "details" => [
                        "Passage de la v3 à la v4, redesign de l'UI",
                        "Ajout de nouvelles fonctionnalités métiers"
                    ]
                ],
                [
                    "description" => "Création de programme externe à la demande du client",
                    "details" => [
                        "Programme en VB.NET pour traiter des données en lien avec le logiciel de l'entreprise"
                    ]
                ]
            ]
        ],
        [
            "titre" => "Développeur Windev",
            "entreprise" => "Goupil",
            "lieu" => "Rive-de-Gier (42800)",
            "periode" => "2013",
            "description" => "Création d'un logiciel de gestion locative de meuble réfrigéré",
            "details" => [
                "Projet de fin d'année de BTS afin de répondre à un réel besoin d'une entreprise locale",
                "Technologie : Windev"
            ]
        ],
        [
            "titre" => "Développeur C++",
            "entreprise" => "ComputaCenter",
            "lieu" => "Lyon 03",
            "periode" => "2012",
            "description" => "Développement d’un outil permettant de comparer deux fichiers LOG",
            "details" => [
                "Stage de 1ère année de BTS",
                "Technologie : Qt C++"
            ]
        ]
    ]
];

$formations = [
    "Mes formations" => [
        [
            "titre" => "Formation Testeur Logiciel",
            "ecole" => "IT-Akademy",
            "lieu" => "Charbonnières-les-bains, Campus de la Région AURA",
            "annee" => "2025"
        ],
        [
            "titre" => "Formation .NET",
            "ecole" => "Global Knowledge",
            "lieu" => "Lyon 03",
            "annee" => "2014"
        ],
        [
            "titre" => "Licence PRO SIL IEM",
            "ecole" => "IUT Lyon 1 Claude Bernard",
            "lieu" => "Bourg-en-Bresse",
            "annee" => "2015"
        ],
        [
            "titre" => "BTS IRIS",
            "ecole" => "Lycée Georges Brassens",
            "lieu" => "Rive-de-Gier (42800)",
            "annee" => "2012-2013"
        ],
        [
            "titre" => "Bac STI Génie Mécanique",
            "ecole" => "Lycée Louis Aragon",
            "lieu" => "Givors (69700)",
            "annee" => "2011"
        ]
    ],
    "Certifications" => [
        "ISTQB (2025)",
        "MCSD Web Apps (2015)"
    ]
];

// Routing simple
switch ($uri) {
    case '/CV.php/contact':
        echo json_encode($contact);
        break;
    case '/CV.php/skills':
        echo json_encode($skills);
        break;
    case '/CV.php/experiences':
        echo json_encode($experiences);
        break;
    case '/CV.php/formations':
        echo json_encode($formations);
        break;
    default:
        http_response_code(404);
        echo json_encode("Euh... je crois que vous vous êtes trompé d'adresse là...");
        break;
}
