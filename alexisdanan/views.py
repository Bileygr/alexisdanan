from django.contrib.auth import authenticate, login, logout
from django.contrib.auth.hashers import check_password
from django.contrib.auth.models import User
from rendez_vous_web.forms import FormulaireDeConnexionUtilisateur
from django.http import HttpResponse
from django.shortcuts import render

def connexion(request):
	if request.method == 'POST':
        	form = FormulaireDeConnexionUtilisateur(request.POST)
        	if form.is_valid():
            		user = authenticate(username=form.cleaned_data['email'], password=form.cleaned_data['mot_de_passe'])
            		if user is not None:
                		login(request, user)
                		return redirect('accueil')
            		else:
                		return redirect('connexion')
        	else:
            		return redirect('connexion')
    	else:
        	form = FormulaireDeConnexionUtilisateur()
    return render(request, 'connexion.html', {'form': FormulaireDeConnexionUtilisateur})

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
