from django.db import models
from django.contrib.auth.models import User

class Utilisateur(models.Model):
    user = models.OneToOneField(User, on_delete=models.CASCADE)
    telephone = models.CharField(max_length=10, null=True)

class Nouvelle(models.Model):
    auteur = models.ForeignKey(User, related_name='+', on_delete=models.PROTECT)
    titre = models.CharField(max_length=200, null=True)
    contenu = models.TextField()
    image = models.FileField(upload_to='uploads/')
    date_de_publication = models.DateTimeField(auto_now=True)

class Message():
    nom = models.CharField(max_length=50, null=False)
    objet = models.CharField(max_length=200, null=False)
    email = models.CharField(max_length=50, null=False)
    message = models.TextField(null=False)