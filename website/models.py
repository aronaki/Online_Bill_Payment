from django.db import models

# Create your models here.
class Mobile(models.Model):

	phone = models.CharField(max_length=15)
	operator = models.CharField(max_length=50)
	region = models.CharField(max_length=50)


	class Meta:
		db_table = "mobile"

class Dth(models.Model):

    username = models.CharField(max_length=15)
    operator = models.CharField(max_length=50)
    dth_no = models.CharField(max_length=50)

    class Meta:
        db_table = "dth"
