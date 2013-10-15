#!/bin/sh
TARGET=mapbbcode_mod.zip
DIST=dist
DIR=$DIST/mapbbcode
mkdir -p $DIR
cp install.xml $DIR
cp modx.prosilver.en.xsl $DIR
cp license.txt $DIR
cp -r root $DIR
cp -r contrib $DIR
cd $DIST
rm $TARGET
zip -qr $TARGET mapbbcode
cd -
rm -r $DIR
