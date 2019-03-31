#!/bin/bash

# Deploy hooks are run via absolute path, so taking dirname of this script will give us the path to
# our deploy_hooks directory.

systemctl status httpd.service

if [ $? -eq 0 ]; then
    exit 0
else
    exit 1
fi