#!/bin/bash

phpunit

if [ "$?" -ne "0" ]; then
  # Wrapping the error code to 1, so bisect marks this build as "bad" and continues.
  exit 1
fi
