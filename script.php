<?php


// Set Variables
$LOCAL_ROOT         = "/api";
$LOCAL_REPO_NAME    = "REPO_NAME";
$LOCAL_REPO         = "{$LOCAL_ROOT}/{$LOCAL_REPO_NAME}";
$REMOTE_REPO        = "git@github.com:P3drodeSousa/testeeeeeet.git";
$BRANCH             = "master";



if (file_exists($LOCAL_ROOT)) {

    // If there is already a repo, just run a git pull to grab the latest changes
    shell_exec("cd {$LOCAL_ROOT} && git pull");
    echo (shell_exec("git status"));
    die("done ");
} else {

    // If the repo does not exist, then clone it into the parent directory
    shell_exec("cd {$LOCAL_ROOT} && git clone {$REMOTE_REPO}");
    echo (shell_exec("git status"));
    die("done ");
}
