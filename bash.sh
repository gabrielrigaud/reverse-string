#!/bin/bash

reverse_string() {
    local str="$1"
    local reversed=""
    local len=${#str}
    for (( i=len-1; i>=0; i-- )); do
        reversed="${reversed}${str:$i:1}"
    done
    echo "$reversed"
}

input="train"
result=$(reverse_string "$input")
echo "$result"