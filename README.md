**Pour récupérer le repository** :

**1 Soit vous faites un fork**

**ou un Clone** :

```sh
git clone https://github.com/evaluationWeb/authcda.git
```

**2 Se déplacer dans le projet**:

```sh
cd nom_projet
```

**3 Créer les variables d'environnement** .env et .env.dev :

```txt
EMAIL_USER=
EMAIL_PASSWORD=
EMAIL_SMTP=
EMAIL_PORT=
```


**4 Configurer la base de données** :

```sh
# configurer la clé DATABASE_URL dans vos fichier .env et env.dev
```

**5 installer les dépendances** :

```sh
composer install
```

**6 Créer la base de données** :

```sh
symfony console d:d:c
```

**7 Appliquer les migrations** :

```sh
symfony console d:m:m
```
