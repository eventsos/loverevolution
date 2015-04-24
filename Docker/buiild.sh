#!/bin/bash
# copy videos to local context
mkdir resources/localcontext
cp -r ../sources/videos resources/localcontext

docker build -t sopitz/loverevolution .



# remove videos from local context
rm -rf resources/localcontext