from django.http import HttpResponse
from django.shortcuts import render


def intro(request):
    return render(request, 'intro.html')

def accueil(request):
    return render(request, 'index.html')

def droits(request):
    return render(request, 'droits.html')

def actionsetobjectifs(request):
    return render(request, 'actions_objectifs.html')

def lafederation(request):
    return render(request, 'la_federation.html')

def historique(request):
    return render(request, 'historique.html')

def contact(request):
    return render(request, 'contact.html')

def liensutile(request):
    return render(request, 'liens_utile.html')

def comitesenfrance(request):
    return render(request, 'comites_en_france.html')