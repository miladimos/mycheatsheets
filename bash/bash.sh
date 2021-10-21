#!/usr/bin/bash

clear

echo "Enter name: "
read name
echo "Hello $name"


read -p "Enter age: " age

if [ "$age" == "20" ]; then
    echo "Valid"
elif [ "$age" -eq "22" ]; then # -ge gt eq lt le ne
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

[[ "one" == "one" ]]
echo $?

echo "$1 + $2 = " $(($1 + $2))

echo $# # args count
$@ # all in seperate arg
$*  # all in one args


ss="Programming"
echo ${#ss}
echo ${ss:3}
echo ${ss:3:6}
echo ${ss: -3}

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

i=1
while read f; do
    echo "Line $i: $f"
    ((i++))
done < file.txt

echo -e '\033[34;42mColor Text\033[0m'
# tput 

# touch {one,two,three}_{01..100}

echo date +"%d-%m-%Y"

printf "Name:\t%s\nID:\t%04d\n" "Ali" "20"

# declare -i integer=120
# readonly
# declare -r e=300
# declare -l lowerCase="lOweR"
# declare -u lowerCase="lOweR"
declare -A arr
arr["name"]="Name"
arr["id"]="200"
for i in "${!arr[@]}" do
    echo "$i : ${arr[$i]}"
done
# result=$(ping -c 1 google.com)

# echo $MACHTYPE

