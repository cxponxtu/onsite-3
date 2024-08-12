#!/bin/bash

for ((i=1; i<=30; i++))
do
    curl http://localhost:7001/kailash
done

for ((i=1; i<=30; i++))
do
    curl http://localhost:7001/mm
done

for ((i=1; i<=30; i++))
do
    curl http://localhost:7001/sabari
done