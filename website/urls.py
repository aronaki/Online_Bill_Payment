from django.urls import path
from . import views

urlpatterns = [
    path('', views.home,name='home'),

    path('add_record/', views.add_record,name='add_record'),
    path('mobile/', views.mobile,name='mobile'),
    path('dth/', views.dth,name='dth'),

    path('admin/', views.admin,name='admin'),
    path('home/', views.home,name='home'),
    path('about/', views.about,name='about'),
    path('contact/', views.contact,name='contact'),
    path('signin/', views.signin,name='signin'),

    path('mobile_pay/', views.mobile_pay,name='mobile_pay'),
    path('dth_pay/', views.dth_pay,name='dth_pay'),
    path('gas_pay/', views.gas_pay,name='gas_pay'),
    path('eb_pay/', views.eb_pay,name='eb_pay'),
    path('water_pay/', views.water_pay,name='water_pay'),
    path('cable_pay/', views.cable_pay,name='cable_pay'),
]
