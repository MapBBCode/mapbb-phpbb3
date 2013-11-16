#!/bin/sh
DISTFILE=mapbbcode-latest.zip
rm -rf root/mapbbcode
wget -nv http://mapbbcode.org/dist/$DISTFILE
unzip -q $DISTFILE
rm $DISTFILE
mv mapbbcode root/

TARGET=mapbbcode_mod.zip
DIR=dist/mapbbcode
mkdir -p $DIR
cp install.xml $DIR
cp modx.prosilver.en.xsl $DIR
cp license.txt $DIR
cp -r root $DIR
cp -r contrib $DIR
cd dist
rm -f $TARGET
zip -qr $TARGET mapbbcode
cd ..
rm -r $DIR
rm -r root/mapbbcode
