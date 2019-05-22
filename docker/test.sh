#!/bin/sh

set -e
sleep 5
status_code=$(curl --write-out %{http_code} --silent --output /dev/null http://localhost:80)

if [[ "$status_code" -ne 200 ]] ; then
  echo "Tests failed!"
  exit 1
else
  echo "Tests passed!"
  exit 0
fi