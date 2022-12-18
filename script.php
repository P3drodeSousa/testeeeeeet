<?php

/**
 * This script is for easily deploying updates to Github repos to your local server. It will automatically git clone or
 * git pull in your repo directory every time an update is pushed to your $BRANCH (configured below).
 *
 * INSTRUCTIONS:
 * 1. Edit the variables below
 * 2. Upload this script to your server somewhere it can be publicly accessed
 * 3. Make sure the apache user owns this script (e.g., sudo chown www-data:www-data webhook.php)
 * 4. (optional) If the repo already exists on the server, make sure the same apache user from step 3 also owns that
 *    directory (i.e., sudo chown -R www-data:www-data)
 * 5. Go into your Github Repo > Settings > Service Hooks > WebHook URLs and add the public URL
 *    (e.g., http://example.com/webhook.php)
 *
 **/

// Set Variables
$LOCAL_ROOT         = "/home/clients/a683ce3e7f173dc4178c580ea6b4e7c3/sites/BNIDOC.studio60.ch";
$LOCAL_REPO_NAME    = "api";
$LOCAL_REPO         = "{$LOCAL_ROOT}/{$LOCAL_REPO_NAME}";
$REMOTE_REPO        = "git@github.com:P3drodeSousa/testeeeeeet.git";
$BRANCH             = "master";


if (file_exists($LOCAL_REPO)) {

    // If there is already a repo, just run a git pull to grab the latest changes
    shell_exec("cd {$LOCAL_REPO} && git pull");

    die("done 1");
} else {
    echo (shell_exec("pwd"));
    // If the repo does not exist, then clone it into the parent directory
    shell_exec("git clone https://github.com/P3drodeSousa/testeeeeeet.git");

    die("done 2");
}
