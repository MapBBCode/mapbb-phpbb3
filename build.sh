#!/bin/sh
TARGET=dist/mapbbcode_mod.zip
DIR=dist/mapbbcode
mkdir -p $DIR
cp install.xml $DIR
cp modx.prosilver.en.xsl $DIR
cp license.txt $DIR
cp -r root $DIR
cp -r contrib $DIR
rm $TARGET
zip -qr $TARGET $DIR
rm -r $DIR
