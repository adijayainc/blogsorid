#!/bin/bash
cd /var/www/blogsorid
git add .
dt=$(date '+%Y-%m-%d %H:%M:%S')
git commit -m "Auto-commit at $dt"
#git pull
#git push --force origin master
git push origin master

