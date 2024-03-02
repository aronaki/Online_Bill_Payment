# Generated by Django 5.0 on 2024-03-02 13:44

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('website', '0002_alter_mobile_table'),
    ]

    operations = [
        migrations.CreateModel(
            name='Dth',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('username', models.CharField(max_length=15)),
                ('operator', models.CharField(max_length=50)),
                ('dth_no', models.CharField(max_length=50)),
            ],
            options={
                'db_table': 'dth',
            },
        ),
    ]
