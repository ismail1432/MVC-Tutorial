# MVC Demonstration
### It's just a simple demonstration of the MVC desing pattern.
[MVC definition](https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller)

Please note that in my application the router (index.php) analyse the request and invoke's the controller.

## So there is 3 characters in this architecture.
#### The Controller
###### He is in the Controller directory. He just have to call the resource requested and send it to the view.
###### So he invoke's the Model (who contains our business logic) and says: "Hi Model, could you go in the database and find all articles ?" he get's the result from the model and send it to the view.
#### The Model
###### The model is a good soldier, he goes to find the good resource in the database and sometimes he's doing some stuff with the result for example, set "Roles", truncate result... After playing with result he send it to the controller.
#### The View
###### She is in the view directory, She is at the end of the process, she just display's and show's datas ! nothing else ! No function in view, No logic... just display data !

### That's All !!

# Demonstration MVC
### Simple démonstration du design pattern MVC
<a href="https://en.wikipedia.org/wiki/Model%E2%80%93view%E2%80%93controller">MVC definition</a>

Notez que dans mon application le router (index.php) analyse la requête et appelle le controller

## Il y a dans cette architecture 3 personnages
#### Le Controller
###### Il est dans le dossier Controller. Il doit juste appeler la ressource demandée et l'envoyer à la vue
###### Il appel donc le Model (qui contient la logique métier) et lui dit : "Hé Model, Tu peux aller dans la base de données et me chercher tous les articles ?" Il récupère le résultat du model et l'envoi à la vue.
#### Le Model
###### Le model est un bon soldat, Il va trouver la bonne ressource dans la base de données et parfois il fait quelques traitement avec le résultat, par exemple, attribuer les rôles, faire un extrait d'un contenu... Après avoir jouer avec le résultat, il l'envoi à la vue.
#### La vue
###### Elle est dans le répertoire vue, Elle est la fin du processus, elle dois juste dispatcher et afficher les données ! rien d'autres ! Aucune fonction dans la vue, aucun traitement... juste afficher les informations !

### C'est tout !!