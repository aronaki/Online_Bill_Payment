# Generated by Django 5.0 on 2024-02-10 14:09

from django.db import migrations, models


class Migration(migrations.Migration):

    initial = True

    dependencies = [
    ]

    operations = [
        migrations.CreateModel(
            name='Mobile',
            fields=[
                ('id', models.BigAutoField(auto_created=True, primary_key=True, serialize=False, verbose_name='ID')),
                ('phone', models.CharField(max_length=15)),
                ('operator', models.CharField(max_length=50)),
                ('region', models.CharField(max_length=50)),
            ],
            options={
                'db_table': 'mobile1232',
            },
        ),
    ]
