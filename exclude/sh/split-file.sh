#!/bin/bash

IFS=''; while read -r LINE; do
  if [[ "${LINE}" =~ "FILE::".* ]]; then
    FILE_NAME="$(echo "${LINE}" | awk -F '::' '{print $2}')";
  else
    echo "${LINE}" >> ${FILE_NAME};
  fi;
done <${1};