<?php

return array(
    'csv_uri'                           => 'URI',
    'csv_uri_desc'                      => "L'emplacement du fichier CSV, une URL ou un emplacement de fichier local.",
    'csv_title'                         => 'Titre',
    'csv_title_desc'                    => 'Un nom donné à la ressource.',
    'csv_description'                   => 'Description',
    'csv_description_desc'              => "Le texte descriptif ou d'information qui fournit un certain contexte pour vous publié des ensembles de données.",
    'csv_delimiter'                     => 'Séparateur',
    'csv_delimiter_desc'                => 'Le séparateur du fichier CSV.',
    'csv_has_header_row'                => 'Tête de rang',
    'csv_has_header_row_desc'           => "Un paramètre booléen qui définit si le fichier CSV contient une ligne d'en-tête de cette colonne contient les noms.",
    'csv_start_row'                     => 'Ligne de départ',
    'csv_start_row_desc'                => 'Définit la rangée à laquelle les données (et la ligne de titre si présent) commence dans le fichier.',
    'csv_pk'                            => 'Clé primaire',
    'csv_pk_desc'                       => "Ceci est un raccourci pour définir une clé primaire de cet ensemble de données.
                                 La valeur doit être l'indice de la colonne que vous voulez chaque rangée pour être plaqué.
                                 La propriété sélectionnée sera utilisée comme identifiant unique sur les objets qui seront mises en correspondance avec le format de sortie",
    'csv_map_property'                  => 'Carte propriété',
    'csv_map_property_desc'             => "La propriété (par exemple le nom de la colonne) de l'ensemble de données qui sera affiché Quand une visualisation de la carte est applicable.",
    'definition_date'                   => 'Date',
    'definition_date_desc'              => 'Un point ou une période de temps associée à un événement dans le cycle de vie de la ressource. La meilleure pratique consiste à utiliser le schéma de la norme ISO 8601.',
    'definition_language'               => 'Langue',
    'definition_language_desc'          => 'La langue de la ressource',
    'definition_rights'                 => 'Droits',
    'definition_rights_description'     => 'Informations sur les droits détenus dans et sur la ressource.',
    'definition_theme'                  => 'Thème',
    'definition_theme_description'      => "Le thème ou la catégorie que l'ensemble de données appartient.",
    'definition_cache_minutes'          => 'Cache',
    'definition_cache_minutes_desc'     => 'Combien de temps cette ressource devrait être mis en cache (en minutes).',
    'definition_draft'                  => 'Ebauche',
    'definition_draft_desc'             => "Ebauche de définitions ne sont pas présentés au public lors de sa création, mais l'espace URI qu'ils prennent est réservé.",
    'definition_publisher_uri'          => "URI de l'editeur",
    'definition_publisher_uri_desc'     => "L'URI de l'entité responsable de la publication du jeu de données (par exemple http://gov.be).",
    'definition_publisher_name'         => "Nom de l'editeur",
    'definition_publisher_name_desc'    => "Le nom de l'entité responsable de la publication du jeu de données.",
    'definition_keywords'               => 'Mots-clés',
    'definition_keywords_desc'          => "Une virgule liste de mots clés concernant l'ensemble de données séparée.",
    'definition_contact_point'          => 'Point de contact',
    'definition_contact_point_desc'     => 'Un lien sur lequel les gens peuvent fournir des commentaires.',
    'json_uri'                          => 'URI',
    'json_uri_desc'                     => "L'emplacement du fichier JSON, une URL ou un emplacement de fichier local.",
    'json_title'                        => 'Titre',
    'json_title_desc'                   => 'Un nom donné à la ressource.',
    'json_description'                  => 'Description',
    'json_description_desc'             => "Le texte descriptif ou d'information qui fournit un certain contexte pour vous publié des ensembles de données.",
    'json_map_property'                 => 'Carte propriété',
    'jsonld_uri'                        => 'URI',
    'jsonld_uri_desc'                   => "L'emplacement du fichier JSON-LD, une URL ou un emplacement de fichier local.",
    'jsonld_title'                      => 'Titre',
    'jsonld_title_desc'                 => 'Un nom donné à la ressource.',
    'jsonld_description'                => 'Description',
    'jsonld_description_desc'           => "Le texte descriptif ou d'information qui fournit un certain contexte pour vous publié des ensembles de données.",
    'mongo_description'                 => 'Description',
    'mongo_description_desc'            => "Le texte descriptif ou d'information qui fournit un certain contexte pour vous publié des ensembles de données.",
    'mongo_host'                        => 'Hôte',
    'mongo_host_desc'                   => "L'hôte de la base de données MongoDB.",
    'mongo_database'                    => 'Base de données',
    'mongo_database_desc'               => 'Le nom de la base de données où la collecte, qui doit être publié, réside.',
    'mongo_collection'                  => 'Collection',
    'mongo_collection_desc'             => 'Le nom de la collection MongoDB',
    'mongo_port'                        => 'Port',
    'mongo_port_desc'                   => 'Le port de la base de données MongoDB où une connexion peut être mis en place.',
    'mongo_username'                    => "Nom d'utilisateur",
    'mongo_username_desc'               => "Un nom d'utilisateur qui a lu des autorisations sur la collection fournie. Sécurité d'abord, assurez-vous que l'utilisateur a lu des autorisations uniquement.",
    'mongo_password'                    => 'Mot de passe',
    'mongo_password_desc'               => "Le mot de passe pour l'utilisateur qui a les autorisations de lecture.",
    'mysql_host'                        => 'Hôte',
    'mysql_host_desc'                   => "L'hôte de la base de données MySQL.",
    'mysql_port'                        => 'Port',
    'mysql_port_desc'                   => 'Le port de la base de données MySQL où une connexion peut être mis en place.',
    'mysql_database'                    => 'Base de données',
    'mysql_database_desc'               => 'Le nom de la base de données où la datatable, qui doit être publié, réside.',
    'mysql_username'                    => "Nom d'utilisateur",
    'mysql_username_desc'               => "Un nom d'utilisateur qui a lu des autorisations sur la collection fournie. Sécurité d'abord, assurez-vous que l'utilisateur a lu des autorisations uniquement.",
    'mysql_password'                    => 'Mot de passe',
    'mysql_password_desc'               => "Le mot de passe pour l'utilisateur qui a les autorisations de lecture.",
    'mysql_collation'                   => 'Collation',
    'mysql_collation_desc'              => 'La classement de la datatable',
    'mysql_pk'                          => 'Clé primaire',
    'mysql_pk_desc'                     => 'This is a shortcut to define a primary key of this dataset.
        The value must be the index of the column you want each row to be mapped on.
        The pk property will never explicitly appear in the definition, but will manifest itself as part of a column property.',
    'mysql_query'                       => 'Query',
    'mysql_query_desc'                  => 'The query of which the results will be published as open data.',
    'mysql_map_property'                => 'Carte propriété',
    'mysql_map_property_desc'           => 'The property (e.g. column name) of the dataset that will be shown when a map visualization is applicable. Non geo-graphical datasets are not affected by this property.',
    'rdf_uri'                           => 'URI',
    'rdf_uri_desc'                      => "L'URI du fichier RDF.",
    'rdf_title'                         => 'Titre',
    'rdf_title_desc'                    => 'Un nom donné à la ressource.',
    'rdf_description'                   => 'Description',
    'rdf_description_desc'              => "Le texte descriptif ou d'information qui fournit un certain contexte pour vous publié des ensembles de données.",
    'rdf_format'                        => 'Format',
    'rdf_format_desc'                   => 'Le format de votre contenu RDF, Tortle, XML, ...',
    'shp_uri'                           => 'URI',
    'shp_uri_desc'                      => "L'emplacement du fichier SHP, une URL ou un emplacement de fichier local.",
    'shp_title'                         => 'Titre',
    'shp_title_desc'                    => 'Un nom donné à la ressource.',
    'shp_description'                   => 'Description',
    'shp_description_desc'              => "Le texte descriptif ou d'information qui fournit un certain contexte pour vous publié des ensembles de données.",
    'shp_epsg'                          => 'EPSG',
    'shp_epsg_desc'                     => 'Ce paramètre contient le code EPSG dans lequel les propriétés géométriques dans le fichier de forme sont codés.',
    'sparql_endpoint'                   => 'SPARQL endpoint',
    'sparql_endpoint_desc'              => "L'URI du SPARQL endpoint (par exemple http://foobar:8890/sparql-auth).",
    'sparql_title'                      => 'Titre',
    'sparql_title_desc'                 => 'Un nom donné à la ressource.',
    'sparql_description'                => 'Description',
    'sparql_description_desc'           => "Le texte descriptif ou d'information qui fournit un certain contexte pour vous publié des ensembles de données.",
    'sparql_query'                      => 'SPARQL requête',
    'sparql_query_desc'                 => 'La requête à être exécutée.',
    'sparql_endpoint_user'              => "Nom d'utilisateur du SPARQL endpoint",
    'sparql_endpoint_user_desc'         => "Un nom d'utilisateur qui a lu des autorisations sur la collection fournie. Sécurité d'abord, assurez-vous que l'utilisateur a lu des autorisations uniquement.",
    'sparql_endpoint_password'          => "Mot de passe",
    'sparql_endpoint_password_desc'     => "Le mot de passe pour l'utilisateur qui a les autorisations de lecture.",
    'xls_uri'                           => 'URI',
    'xls_uri_desc'                      => "L'emplacement du fichier XLS, une URL ou un emplacement de fichier local.",
    'xls_title'                         => 'Titre',
    'xls_title_desc'                    => 'Un nom donné à la ressource.',
    'xls_description'                   => 'Description',
    'xls_description_desc'              => "Le texte descriptif ou d'information qui fournit un certain contexte pour vous publié des ensembles de données.",
    'xls_sheet'                         => 'Feuille de XLS',
    'xls_sheet_desc'                    => 'Le nom de la feuille dans laquelle les données de tableau réside.',
    'xls_has_header_row'                => 'Tête de rang',
    'xls_has_header_row_desc'           => "Un paramètre booléen qui définit si le fichier XLS contient une ligne d'en-tête de cette colonne contient les noms.",
    'xls_start_row'                     => 'Ligne de départ',
    'xls_start_row_desc'                => "Un paramètre booléen qui définit si le fichier CSV contient une ligne d'en-tête de cette colonne contient les noms.",
    'xls_pk'                            => 'Clé primaire',
    'xls_pk_desc'                       => 'This is a shortcut to define a primary key of this dataset. The value must be the index of the column you want each row to be mapped on. The pk property will never explicitly appear in the definition, but will manifest itself as part of a column property.',
    'xls_map_property'                  => 'Carte propriété',
    'xls_map_property_desc'             => "Ceci est un raccourci pour définir une clé primaire de cet ensemble de données.
                                 La valeur doit être l'indice de la colonne que vous voulez chaque rangée pour être plaqué.
                                 La propriété sélectionnée sera utilisée comme identifiant unique sur les objets qui seront mises en correspondance avec le format de sortie",
    'xml_uri'                           => 'URI',
    'xml_uri_desc'                      => "L'emplacement du fichier XML, une URL ou un emplacement de fichier local.",
    'xml_title'                         => 'Titre',
    'xml_title_desc'                    => 'Un nom donné à la ressource.',
    'xml_description'                   => 'Description',
    'xml_description_desc'              => "Le texte descriptif ou d'information qui fournit un certain contexte pour vous publié des ensembles de données.",
);