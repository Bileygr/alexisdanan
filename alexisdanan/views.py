from django.http import HttpResponse
from django.shortcuts import render


def intro(request):
    return render(request, 'intro.html')

def accueil(request):
    return render(request, 'index.html')