#!/bin/bash
dir = /home/espiritusanto.mx/public_html 
cd $dir
git pull 
alert "Git Pull has been executed on $dir"