# Generated by Django 2.0.5 on 2018-06-10 04:46

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('polls', '0003_user_master'),
    ]

    operations = [
        migrations.AlterField(
            model_name='user',
            name='password',
            field=models.CharField(max_length=128, verbose_name='password'),
        ),
    ]
