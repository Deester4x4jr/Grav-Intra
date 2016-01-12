#!/bin/sh

usage()
{
cat << EOF
usage: $0 options

This is a helper script for automator.php

OPTIONS:
   -h      Show this message
   -b      The name of the Branch
   -k      Key file to use (Specify path, ie: ~/.ssh/deploy)
EOF
}

BRANCH="master"
KEYFILE=
while getopts “hr:b:k:” OPTION
do
     case $OPTION in
         h)
             usage
             exit 1
             ;;
         b)
             BRANCH=$OPTARG
             ;;
         k)
             KEYFILE=$OPTARG
             ;;
         ?)
             usage
             exit
             ;;
     esac
done

printf "Navigating to Git Root...\n"
cd $(git rev-parse --show-toplevel) 2>&1

printf "\n\nFetching $BRANCH from origin...\n"
git fetch origin $BRANCH 2>&1

printf "\n\nResetting to origin/$BRANCH...\n"
PKEY=$KEYFILE git reset --hard origin/$BRANCH 2>&1

printf "\n\nRunning Garbage Collection...\n"
PKEY=$KEYFILE git gc 2>&1