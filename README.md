# NOTICE D’UTILISATION DU SITE WEB


![image](https://lh6.googleusercontent.com/XzEsxqn-OO7Db2EbFSE4U3rVoOHsbNAFN1aHx3BB_1bLs3vIecwg-1lAOtCPdGCz16vSADYGkBMaiPw=w1920-h974-rw)




















## SOMMAIRE
| I. Configuration de la machine |
| ------------- |
|II. CONNEXION AU SITE - Creation d'un compte  |
| III. Ajouter un article dans le forum   |
|IV. integer un club|       
|V. Deconnexion|



## I. Configuration de la machine:
### Definition:
>#### Apache:
>Le projet Apache HTTP Server est un effort pour
développer et maintenir un serveur HTTP open source
pour les systèmes d'exploitation modernes, y compris
   UNIX et Windows. Le but de ce projet est de fournir un serveur sécurisé, efficace et extensible qui fournit d
   es services HTTP en synchronisation avec les normes HTTP actuelles.
#### Mysql:
>MySQL est un système de gestion de bases de données relationnelles (SGBDR). Il est distribué sous une double licence GPL et propriétaire. Il fait partie des logiciels de gestion de base de données les plus utilisés au monde3, autant par le grand public (applications web principalement) que par des professionnels, en concurrence avec Oracle, Informix et Microsoft SQL Server.

>Avant de pouvoir naviguer sur notre site `localhost/inpt`, il faut lancer les deux service `Apache` et `MySQL`.


![image](https://lh4.googleusercontent.com/FHZUJ3__IXGA_5PhhF8YjNs_WiccB76U7GVnaFekYy69C1c2sY_5EYjc1oLB-RZ-T0eQ7mSRMHUwhc4=w1920-h974-rw)



>une partie du code `PHP` du site prend la charge de cree la `la base de donnee` sous le nom `inpt` et les tables `eleves`,`admins`et`shares`

la partie responsable de cette ceartion:
```SQL
$query="CREATE DATABASE IF NOT EXISTS inpt";
$result=mysqli_query($link,$query);
```
>la variable `$link` prend la charge de se connecter avec SGBD (phpMyAdmin)

![image](https://lh6.googleusercontent.com/NIjkQ8ZZ3UoKGt6empdxZxte_LVVUsqKQ49SFki87tMod97RbEkVKP3bMNTGXTcO63iaiAAf0nVbg-E=w1920-h974-rw)

## II. Creation d'un compte - CONNEXION AU SITE :
### 1. Creation d'un compte:
>pour cree un compte il suffit juste cliquer sur `Register` dans la barre en haut puis cliquer sur **Submit**

![image](https://lh3.googleusercontent.com/7E2vfcpK3B9098QiqtQuH6BqDhYz2kiRJK4r5PeE-__j00DstPpig4oGAsQNbXTAPGbiBP2epnQhN_U=w1920-h974-rw)

### 2.Connexion au site:
>vous allez automatiquement dans la page de connexion taper vous donnee puis un clic sur **Submit**
> vous etes maintenant connecter !!
![image](https://lh6.googleusercontent.com/WDh4NkaXXJUy-dF1bYMq9MvsdTakjfnKwwSpRi8hfmGGzTM7Xc1BzvphOeBXM-f2aWANQ4VPR3gHoNM=w1920-h974-rw)

##  III. Ajouter un article dans le forum :

>cliquer sur **shares** puis sur la boton `Share Something`. vous aurez trois case d'ecriture **Title** (le titre d'article),**Body**(le contenu d'article) et **link**(lien utile en relation avec article)




```
NOTE:
>lorsque un utilisateur n'est pas un membre dans le site il n'a pas l'access pour partager des articles!
```
![image](https://lh4.googleusercontent.com/xKrI3He4diYmiCFK_MriMZ7V-QV5nHfdmxMFvVyZ9tv4gHOhaX-Pa1TBNNxuLRMfUEhahx2s3eZHQIc=w1920-h974-rw)


## IV. Integer un club:
>pour choisir un club parmet les clubs de l'ecole il suffit aller a la page `about US`

>vous aller trouver une presentation sur les clubs.en bas vous pouvez choisir au modifier votre club. quand vous choisissez un club cliquer sur **valider**.

![image](https://lh4.googleusercontent.com/urmeeE3x0xid7PWUPYSl_fAzxTAocPNAHg1o7V5tDgwKvkgcgomtt3NxA8qJmdsCjt2bsmeMZKVipRw=w1920-h974-rw)

>Si par exemple vous etes deja integrer un club vous pouvez changer :

![image](https://lh6.googleusercontent.com/OH0PqFS_2EFtmPL9ImU0MXryfwtIunAC8as_totHcY4nxdorAhnY9UFjNJAZ3kFs5QclxOSa3Tg1_DM=w1920-h974-rw)


```
NOTE:
>meme remarque que pour partage des articles dans ce cas la la partie des choix des clubs n'est pas valable pour les gens qui ne sont pas des membres!
```
>**Verification** du choix :
![image](https://lh5.googleusercontent.com/p4whWQBQyJzEd3gtaHXOCzn4F3OjBslis-Wo5T5x-PFQeIuxoUly3hj-Cr7JlrLh-9ETRcbJRzF0L0E=w1920-h974-rw)

## V. Deconnexion:
>pour se deconnecter vous cliquez sur `Logout`:

la partie du code **PHP** qui est responsable pour detruire les sessions c'est la methode quand a definit dans le fichier `users.php` qui exite dans le dossier `controllers`
````PHP
<?php  
protected function logout()
{
  unset($_SESSION['is_logged_in']);
  unset($_SESSION['user_data']);
  session_destroy();
  //Redirection
  header("Location: ".ROOT_URL);
}
?>
````

