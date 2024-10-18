# Mise en route

1. Cloner la repo :

    ``` sh
    $ git clone https://github.com/jsn035/test-eval.git
    $ cd ./test-eval
    ```

2. Installation des dépendences PHP :

    ``` sh
    $ composer update && composer install
    ```

3. Copie du fichier d'environment :

    ``` sh
    $ cp ./.env.example ./.env
    ```

4. Génération des clés pour Laravel :

    ``` sh
    $ php artisan key:generate
    ```

5. Création du fichier de base de données (sqlite) :

    ``` sh
    $ touch ./database/database.sqlite
    ```

6. Migrations :

    ``` sh
    $ php artisan migrate
    ```

7. Récuperation des données via l'API TMDB :

    ``` sh
    $ php artisan app:fetch-trendings
    ```

8. Installation des dépendences JS et compilation des assets :

    ``` sh
    $ npm install
    $ npm run build
    ```

9. Serveur de test :

    ``` sh
    $ php artisan serve
    ```

# Paquets

* (JS) Bootstrap
* (PHP) Jetstream

# Recherches

* Documentation Laravel / Jetstream
* [Cette vidéo](https://www.youtube.com/watch?v=pyOcSEkG4Q0)