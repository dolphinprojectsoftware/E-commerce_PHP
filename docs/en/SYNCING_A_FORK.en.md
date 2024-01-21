# Syncing a fork

Sync a fork of a repository to keep it up-to-date with the upstream repository.

## Using GitHub web page

1. On GitHub, navigate to the main page of the forked repository that you want to sync with the upstream repository.

2. Above the list of files, select the __Sync fork__ dropdown menu.

3. Review the details about the commits from the upstream repository, then click __Update branch__.

> If the changes from the upstream repository cause conflicts, GitHub will prompt you to create a pull request to resolve the conflicts.

## Using GitHub CLI

To update the remote fork from its parent, use the `gh repo sync -b BRANCHNAME` subcommand and supply your fork and branch name as arguments.

```shell
# Sync local repository from remote parent
gh repo sync
```

```shell
# Sync local repository from remote parent on specific branch
$ gh repo sync -b develop
```

If the changes from the upstream repository cause conflict then the GitHub CLI can't sync. You can set the --force flag to overwrite the destination branch.

```shell
gh repo sync -b develop --force
```

## Using commad line

1. Open terminal.

2. Change the current working directory to your local project.

3. Fetch the branches and their respective commits from the upstream repository.

```shell
git fetch upstream
```

4. Check out your fork's local default branch - in this case, we use `develop`.
   
```shell
git checkout develop
```

5. Merge the changes from the upstream develop branch into your local develop branch. This brings your fork's default branch into sync with the upstream repository, without losing your local changes.

```shell
git merge upstream/develop
```


