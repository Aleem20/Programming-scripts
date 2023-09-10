#/bin/bash
echo "Welcome user! This script will help you copy some files from source directory to build directory"
firstline=$(head -n 1 source/changelog.md)
read  -a splitfirstline << $firstline
version=${splitfirstline[1]} 
echo "You are building a first version" $version
echo 'Do you want to continue? (enter "1" for yes, "0" for no)'
read versioncontinue
if [ $versioncontinue -eq 1 ]
then
echo "OK"
for filename in source/*
do 
echo $filename
done
cd build/ 
echo "build version $version contains:"
ls 
if [ "$filename" == "source/secretinfo.md" ]
then 
echo "Not copying" $filename 
else 
echo "Copying" $filename
cp $filename build/.
fi
else 
echo "Please come back when you are ready."
fi
