#!/bin/bash
cd /home/adijaya/Project/blogsorid
git add .
dt=$(date '+%Y-%m-%d %H:%M:%S')
git commit -m "Auto-commit at $dt"
git push origin master
