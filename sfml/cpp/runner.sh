#!/bin/bash

appRunning=1

while [ $appRunning == 1 ]; do
    echo Compile and run[1], Compile[2], Exit[3]
    read user
    if [[ $user == 1 ]]; then
        echo Compiling and running ...
        g++ basic.cpp -o basic -lsfml-graphics -lsfml-window -lsfml-system -lsfml-audio -lsfml-network
        ./basic

        # g++ -c src/*.cpp -Werror 
        # g++ *.o -o bin/game -lsfml-graphics -lsfml-window -lsfml-system -lsfml-audio -lsfml-network

        read -n -1 -s
        clear
    elif [[ $user == 2 ]]; then
        echo Comping ...
        g++ basic.cpp -o basic -lsfml-graphics -lsfml-window -lsfml-system -lsfml-audio -lsfml-network
        read -n -1 -s
        clear
    elif [[ $user == 3 ]]; then
        exit
    fi
done