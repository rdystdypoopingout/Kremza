#!/bin/bash

git symbolic-ref --short -q HEAD > version

git clone https://github.com/rok9ru/trpo-core.git core

cd core
rm -rf .git composer* .gitignore
mv core/* .
rm -rf core