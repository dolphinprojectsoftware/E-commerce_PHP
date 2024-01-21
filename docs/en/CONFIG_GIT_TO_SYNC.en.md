<link href="../css/style.css" rel="stylesheet"></link>

# Configuring Git to sync your fork with the upstream repository

## Using Github web page

When you fork a project in order to propose changes to the upstream repository, you can configure Git to pull changes from the upstream repository into the local clone fork.

1. On GitHub.com, navigate to the [dolphinprojectsoftware/E-commerce_PHP](https://github.com/dolphinprojectsoftware/E-commerce_PHP) repository.

2. Above the list of files, click __<> Code__ button.

3. Click on __SSH__ then click to __Copy URL to clipboard__ button.
   
![Copy to clipboard button using SSH](../images/ssh_copy_to_clipboard_button_1.png?raw=true "Copy to clipboard button using SSH")

4. Open your terminal.

5. Change directories to the location of the fork you cloned.

6. Type `git remote -v` and press __Enter__. You will see the current configured remote repository for your fork.

```shell
git remote -v
> origin  https://github.com/YOUR_USERNAME/E-commerce_PHP.git (fetch)
> origin  https://github.com/YOUR_USERNAME/E-commerce_PHP.git (push)
```

7. Type `git remote add upstream`, and then paste the URL you copied in Step 3 and press __Enter__. It will look like this:

```shell
git remote add upstream git@github.com:dolphinprojectsoftware/E-commerce_PHP.git
```

8. To verify the new upstream repository you have specified for your fork, type `git remote -v` again. You should see the URL for your fork as __origin__, and the URL for the upstream repository as __upstream__.

```shell
git remote -v
> origin    https://github.com/YOUR_USERNAME/E-commerce_PHP.git (fetch)
> origin    https://github.com/YOUR_USERNAME/E-commerce_PHP.git (push)
> upstream  https://github.com/dolphinprojectsoftware/E-commerce_PHP.git (fetch)
> upstream  https://github.com/dolphinprojectsoftware/E-commerce_PHP.git (push)
```

## Using Github CLI

To configure a remote repository for the forked repository, use the --remote flag.

```shell
gh repo fork git@github.com:dolphinprojectsoftware/E-commerce_PHP.git --remote=true --clone=true
```

This command will create a fork in your Github account, clone it to your local directory and sync with the original upstream repository.



