"""alexisdanan URL Configuration

The `urlpatterns` list routes URLs to views. For more information please see:
    https://docs.djangoproject.com/en/2.2/topics/http/urls/
Examples:
Function views
    1. Add an import:  from my_app import views
    2. Add a URL to urlpatterns:  path('', views.home, name='home')
Class-based views
    1. Add an import:  from other_app.views import Home
    2. Add a URL to urlpatterns:  path('', Home.as_view(), name='home')
Including another URLconf
    1. Import the include() function: from django.urls import include, path
    2. Add a URL to urlpatterns:  path('blog/', include('blog.urls'))
"""
from django.contrib import admin
from django.urls import path

from . import views

urlpatterns = [
    path('admin/', admin.site.urls),
    path('', views.intro, name='intro'),
    path('accueil', views.accueil, name='accueil'),
    path('droits', views.droits, name='droits'),
    path('actions-et-objectifs', views.actionsetobjectifs, name='actions et objectifs'),
    path('federation', views.lafederation, name='la fédération'),
    path('historique', views.historique, name='historique'),
    path('liens-utile', views.liensutile, name='liens utile'),
    path('contact', views.contact, name='contact'),

]
