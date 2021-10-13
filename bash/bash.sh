#!/usr/bin/bash

clear

echo "Enter name: "
read name
echo "Hello $name"


read -p "Enter age: " age

if [ "$age" == "20" ]; then
    echo "Valid"
elif [ "$age" -eq "22" ]; then # -ge gt eq lt nq
    echo "Grate"
else 
    echo "Error"
fi

if [ -d "$HOME/directory" ]; then
    echo "exist"
elif [ -f "$HOME/file.txt" ]; then
    echo "file exits"
fi


case "$age" in
    "20")
        echo "Valid"
    ;;
    "22")
        echo "Grater"
    ;;
    "18")
        echo "Less"
    ;;
    *)
        echo "Error"
esac

read -s -p "Enter Password: " password
while [ "$password" != "1234" ]; do
    read -s -p "Enter Password" password
done

for number in {1..9};do
    echo $number
done

for ((i=0;i<=10;i++));do
    echo $i
done

IFS=":"
name="ali:milad:reza"
for name in name;do
    echo name
done

wget "url"
if [ "$?" == "0"]; then
    notify-send "Ok"
else 
    notify-send "Error"
fi


echo "$1 + $2 = " $(($1 + $2))

echo $# # args count
$@ # all in seperate arg
$*  # all in one args






func (){
    echo "Function"
}

func

add () {
    echo "$1 + $2 = " $(($1 + $2))
}

add 2 4

result=`add 2 4

# run exit when clearFunc run
trap clearFunc exit


while getopts "h:e:v" options ;do
    case "$options" in 
    s)
        help_option="$OPTARG"
    ;;
    v)
        echo "version : 1.0.o"
        exit
    ;;
    esac
done