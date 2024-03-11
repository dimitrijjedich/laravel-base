#!/bin/bash
zip ../deployment.zip -r * .[^.]* -x "vendor/*"
