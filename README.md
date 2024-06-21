# Gestionnaire de Tâches en PHP

## Description

Ce projet est un gestionnaire de tâches développé en PHP, utilisant une architecture orientée objet (POO). Il permet aux utilisateurs de s'inscrire, de se connecter et de gérer leurs tâches (création, mise à jour, suppression). Le projet inclut un système de routing en POO pour gérer les requêtes HTTP et dispatcher les contrôleurs appropriés.

## Fonctionnalités

- **Gestion des Utilisateurs**
  - Inscription des utilisateurs
  - Connexion des utilisateurs
  - Gestion de profil (à développer)
  
- **Gestion des Tâches**
  - Création de tâches
  - Mise à jour de tâches
  - Suppression de tâches
  - Affichage des tâches

- **Système de Routing en POO**
  - Ajout de routes dynamiques
  - Dispatching des requêtes vers les contrôleurs appropriés

## Structure du Projet

/project
│
├── /config
│ └── config.php
│
├── /src
│ ├── /Controllers
│ │ └── BaseController.php
│ │ └── UserController.php
│ │ └── TaskController.php
│ │
│ ├── /Models
│ │ └── BaseModel.php
│ │ └── User.php
│ │ └── Task.php
│ │
│ ├── /Core
│ │ └── Router.php
│ │ └── Database.php
│ │
│ ├── /Views
│ │ └── header.php
│ │ └── footer.php
│ │ └── register.php
│ │ └── login.php
│ │ └── task_list.php
│ │ └── task_form.php
│ │
│ └── index.php
│
└── /public
└── index.php

Auteurs
Arnaud Simoncelli - Simhar54