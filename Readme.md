# DataWare - Système de Gestion des Tâches Kanban
# projet_gestion_taches_DataWare

DataWare souhaite mettre en place un système numérique de gestion des tâches basé sur la méthodologie Kanban. Cette application utilise les langages PHP, JavaScript, et SQL pour répondre de manière optimale aux besoins de DataWare en matière de suivi de projets.

## Fonctionnalités

  - **Authentification et Autorisation**
    - Les utilisateurs doivent s'authentifier pour accéder à la plateforme.
    - Différents rôles sont attribués pour gérer les autorisations.

  - **Gestion de Projets**
    - Ajout, modification et suppression de projets par les utilisateurs.

  - **Gestion de Tâches dans un Projet**
    - Ajout de tâches au backlog, modification des détails et du statut, archivage des tâches.

  - **Consultation de Tâches**
    - Visualisation des tâches assignées après authentification.

  - **Validation de Formulaire**
    - Validation des saisies de formulaire pour garantir l'intégrité des données.

  - **Fonctionnalités JavaScript**
    - Ajout de plusieurs tâches en utilisant JavaScript.

  - **Recherche de Tâches**
    - Possibilité pour les utilisateurs de rechercher des tâches spécifiques.

  - **Tri des Tâches**
    - Tri des tâches en fonction de leur date limite.

  - **Affichage de Statistiques**
    - Présentation de statistiques liées à la gestion des tâches.

  - **Mesures de Sécurité**
    - Protection contre les attaques telles que l'injection SQL.
    - Hachage sécurisé des mots de passe.

  - **Compatibilité Inter-Navigateurs et Réactivité**
    - Accessible sur différents navigateurs et appareils.

  - **Accessibilité**
    - Conception adaptée aux besoins des personnes ayant des déficiences visuelles ou auditives.

## Technologies Utilisées

- HTML5
- PHP
- JavaScript
- Framework tailwind css
- SQL

## Configuration et Installation

1. **Cloner le Répertoire**
    ```bash
    git clone https://github.com/[todolist].git
    ```

2. **Importer la Base de Données**
    - Créer une base de données MySQL (ou tout autre système de gestion de base de données pris en charge).
    - Importer le fichier SQL fourni dans le fichier `db.sql`.

3. **Configurer la Connexion à la Base de Données**
    - Modifier les paramètres de connexion à la base de données dans le fichier `model/config.php`.

4. **Lancer l'Application**
    - Accéder à l'application via un navigateur web.

## Contribution

Les contributions visant à améliorer les fonctionnalités, la sécurité et l'accessibilité du système sont les bienvenues. Veuillez suivre les normes et directives de codage établies.

## Licence

Ce projet est sous licence [MIT](LICENSE.md). N'hésitez pas à utiliser, modifier et distribuer le code conformément aux termes de la licence.

## Auteur

- [Douae Sebti](https://github.com/Douaesb)
