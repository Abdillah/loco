#!/usr/bin/env bash

# Sourcing custom environment
rootdir=$(git rev-parse --show-toplevel)
source $rootdir/.env

# Validation
if [ -z "$SSH_USER" ] || [ -z $SSH_SERVER ] || [ -z $SSH_RSYNC_DEST ]; then
    echo "Error: SSH_USER or SSH_SERVER or SSH_RSYNC_DEST variable not set."
    exit
fi

# Current working directory
sourceDir=$(pwd)/
exclusions="--exclude .git --exclude script/ --exclude test/ --exclude patches/ --exclude knowledge/ --exclude docs/"

echo "RSYNC $SSH_USER@$SSH_SERVER: copying $sourceDir to $SSH_RSYNC_DEST"
sshcmd="ssh -p $SSH_PORT -o StrictHostKeyChecking=no -o UserKnownHostsFile=/dev/null -o IdentityFile=$SSH_KEY"
rsync -avz --progress $exclusions -e "$sshcmd" $sourceDir $SSH_USER@$SSH_SERVER:$SSH_RSYNC_DEST
