from django import forms

class FormulaireDeConnexionUtilisateur(forms.Form):
    email = forms.EmailField(widget=forms.TextInput(attrs={'placeholder': 'Email'}), label="Email")
    mot_de_passe = forms.CharField(widget=forms.PasswordInput(attrs={'placeholder': 'Mot de passe'}), label="Mot de passe")