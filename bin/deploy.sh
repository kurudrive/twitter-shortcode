#!/usr/bin/env bash

set -e

# if [[ "false" != "$TRAVIS_PULL_REQUEST" ]]; then
# 	echo "Not deploying pull requests."
# 	exit
# fi

# if [[ "build_test" != "$TRAVIS_BRANCH" ]]; then
# 	echo "Not on the 'build_test' branch."
# 	exit
# fi

# rm -rf .git
# rm -r .gitignore

# echo ".bowerrc
# .editorconfig
# .travis.yml
# README.md
# bin
# bower.json
# gulpfile.js
# node_modules
# package.json
# tests
# tmp" > .gitignore

git init
git config user.name "kurudrive"
git config user.email "kurudrive@gmail.com"
git add .
git commit --quiet -m "Deploy from travis"
git clean -fdx
git rm -fr .gitignore
git commit --quiet -m "Deploy from travis"
git push --force --quiet "https://${GH_TOKEN}@${GH_REF}" build_test:release > /dev/null 2>&1