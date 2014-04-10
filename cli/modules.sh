#!/bin/bash
# This script will take a file containing Drupal project names
# and convert it to an HTML list with the link text being the
# project's human-readable title, pulled from the module's
# Drupal.org project page.
#
# @author - R.Aubin

outputFile=moduleList.html
echo -n > $outputFile
cat $1 | while read line
do
    a="<li><a href=\"http://drupal.org/project/$line\">"
    b=$(curl https://drupal.org/project/$line 2>&1 | grep page-subtitle | sed 's|<[^>]*>||g' | sed -e 's/^ *//' -e 's/ *$//')
    c="</a></li>"
    echo $a$b$c >> $outputFile
done