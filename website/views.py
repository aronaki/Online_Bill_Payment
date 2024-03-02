from django.shortcuts import render
from .models import Mobile,Dth


# Create your views here.
def admin(request):
   return render(request, 'home.html', {})

def home(request):
   return render(request, 'home.html', {})

def about(request):
   return render(request, 'home.html', {})

def contact(request):
   return render(request, 'home.html', {})

def signin(request):
   return render(request, 'home.html', {})

def add_record(request):


   return render(request, 'add_record.html', {})

def mobile(request):

    vphone = request.POST['phone'];
    voperator = request.POST['operator'];
    vregion = request.POST['circle'];

    us= Mobile(phone=vphone , operator=voperator, region=vregion);
    us.save();


    return render(request, 'home.html', {})

def dth(request):

    vusername = request.POST['username'];
    voperator = request.POST['operator'];
    vdth_no = request.POST['dth_number'];

    us= Dth(username=vusername , operator=voperator, dth_no=vdth_no);
    us.save();


    return render(request, 'home.html', {})

def mobile_pay(request):

   return render(request, 'add_record.html', {})

def dth_pay(request):

   return render(request, 'dth.html', {})

def gas_pay(request):

   return render(request, 'gas.html', {})

def eb_pay(request):

   return render(request, 'eb.html', {})

def water_pay(request):

   return render(request, 'water.html', {})

def cable_pay(request):

   return render(request, 'cable.html', {})
