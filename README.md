# Présentation du projet

Ce programme permet d’aider au quotidien les techniciens réseaux. 
En effet il permet de vérifier et consulter plusieurs informations essentielles au bon fonctionnement d’une configuration réseau.
L’objectif est donc de pouvoir gagner du temps pour la gestion de son parc informatique grâce à des  scripts en Bash. Mais on peut également gérer une base de données SQL


## Commencer lancer le projet ?

Pour lancer le projet, il faut souplement télécharger le dossier que j'ai publié dans mon GitHub et ensuite, il vous suffit d’aller directement dans le dossier myGest_IOnR via le terminal et ainsi l’exécuter avec la commande «./myGestIOnR.sh»


### Description

Je vais vous présenter les fonctionnalités du programme myGestIOnR.

Les choix durant la partie installation :

    • Création d'une base de données avec le nom de BDD de votre choix

    • Création d'un utilisateur SQL si vous le souhaitez

    • Message qui demande si vous êtes un serveur ou une machine

Les choix possibles dans gestion du parc : 

    • Consulter les données de la base de données
      - Le nom de la machine
      - Adresse Mac
      - Adresse IP
      - Masque
      - Type  ( machine, switch, serveur)
      
    • Ajouter des données de la base de données

    • Supprimer des données de la base de données

    • Modifier des données de la base de données


Les outils possibles dans Outils réseau : 

    • Tester une IP
      
    • Tester un port TCP
      
    • Consulter les IP actives
      
    • Générer un .txt depuis la base de données

    • Tester un DNS

### Répartition des tâches :

Pour pouvoir réaliser le projet nous nous sommes répartis les tâches car je n’étais pas seul, Maréchal Thonny et Tafroukte Noam m’ont accompagné sur ce projet et ensuite nous avons créé un Trello pour savoir qui devait faire quoi dans le projet.

Les tâches réparties :

    • Partie 1,4,5 : Maréchal Thonny
    • Partie 2,4,5 : Leroy Théo
    • Partie 4,5 : Tafroukte Noam

### Partie 1 – Gestion du parc

Cette mission consiste à créer une base de données pour pouvoir ainsi créer, ajouter, supprimer et modifier des informations pour gérer le parc informatique.

### Partie 2 – Outils réseau 

Cette mission avait pour but de pouvoir offrir des éléments qui seront utiles pour les techniciens réseaux. 
Ce sont donc des petits scripts en Bash qui ont été conçus afin de tester une IP, un port TCP, générer un .txt depuis la base de données et pour finir consulter les IP actives ou non de la base de données.

### Partie 3 – Installateur

Ici c’est l’installation des paquets au bon fonctionnement des scripts.
De ce fait, au lancement du MyGestIOnR.sh, il y aura une installation automatique des paquets.

### Partie 4 – Ajout de fonctionnalités

Par la suite, nous avons ajouté l'option tester un DNS dans outils réseau.

### Partie 5 – Gestion des versions et publications

Cette partie consiste à la création d'un profil GitHub afin de publier notre projet, avec une présentation complète.

Voici ma partie du projet que j'ai faite, si vous voulez voir le partie base de données du projet, une vidéo est disponible, elle montre l'entièreté du projet myGestIOnR.

Le programme commence par demander le nom de la base de données que vous voulez :

![1](https://user-images.githubusercontent.com/129506753/231970064-a2417b80-26b5-4af6-8518-56e1dec1e493.PNG)

Ensuite, il demande si vous voulez un utilisateur sql :

![2](https://user-images.githubusercontent.com/129506753/231970195-7ec2260d-18ae-4445-b5c0-f04294d19bec.PNG)

Déroulement de la création de l'utilisateur sql :

![3](https://user-images.githubusercontent.com/129506753/231970204-c04de36a-918c-4b68-9b37-08ec5fd7291c.PNG)

Et la l'installation est terminé mais avant le programme demande si vous êtes un serveur ou une machine :

![4](https://user-images.githubusercontent.com/129506753/231970209-1083a68f-e051-4e11-af05-a9fab6b447c0.PNG)

Quand vous choisissez serveur :

![5](https://user-images.githubusercontent.com/129506753/231970210-a92d6656-7724-4a8c-b361-bc76ac65fa10.PNG)

Quand vous choisissez machine :

![6](https://user-images.githubusercontent.com/129506753/231970213-878db9de-eb96-48cf-aabc-c5bdd3638fc2.PNG)

Voilà la ce que contient la partie réseau :

![7](https://user-images.githubusercontent.com/129506753/231970218-ba5b026a-492f-40a8-9659-a3887dffba7d.PNG)

Déroulement du script qui teste une IP :

![8](https://user-images.githubusercontent.com/129506753/231970472-0afe19a4-530f-4697-8f46-51bbd3df16de.PNG)

Déroulement du script qui teste un port TCP :

![9](https://user-images.githubusercontent.com/129506753/231970522-84a87433-284e-4fe1-8ea2-8c8c4d34255f.PNG)

Déroulement du script qui teste les IP actives ou non de la BDD :

![10](https://user-images.githubusercontent.com/129506753/231970530-fcaf16a7-a506-4e4c-b555-5a80ce6cdf27.PNG)

Déroulement du script qui génère un fichier avec les informations de la BDD que l'utilisateur choisit :

![11](https://user-images.githubusercontent.com/129506753/231970537-cf2808c0-d608-491c-a328-cbacc46b250b.PNG)

Déroulement du script qui teste un DNS avec la commande "dig" :

![12](https://user-images.githubusercontent.com/129506753/231970548-233671fb-0e76-4495-bcc4-979848e75f5a.PNG)
