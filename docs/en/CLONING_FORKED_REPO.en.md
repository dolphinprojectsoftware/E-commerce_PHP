<link href="../css/style.css" rel="stylesheet"></link>

# Cloning your forked repository

## Using Github web page

Right now, you have a fork of the [E-commerce_PHP]("https://github.com/dolphinprojectsoftware/E-commerce_PHP") repository, but you do not have the files in that repository locally on your computer.

1. On GitHub.com, navigate to your fork of the E-commerce_PHP repository.

2. Above the list of files, click __<> Code__ button.

![<> Code Button](../images/code_button.png?raw=true "<> Code Button")

3. Copy the URL for the repository, to clone the repository using an SSH key, click __SSH__ tab, then click on __Copy to url clipboard__ button.

![Copy to clipboard button using SSH](../images/ssh_copy_to_clipboard_button_2.png?raw=true "Copy to clipboard button using SSH")

4. Open your terminal.

5. Change the current working directory to the location where you want the cloned directory.

6. Type git clone, and then paste the URL you copied earlier. It will look like this, with your GitHub username instead of YOUR-USERNAME:

```shell
git clone git@github.com:YOUR-USERNAME/E-commerce_PHP.git
```

7. Press Enter. Your local clone will be created.

## Using Github CLI

Right now, you have a fork of the E-commerce_PHP repository, but you do not have the files in that repository locally on your computer. To clone a repository locally, use the repo clone subcommand. 

```shell
gh repo clone git@github.com:YOUR-USERNAME/E-commerce_PHP.git
```

Replace YOUR-USERNAME text with your GitHub username.

Additionally, you can fork a repository and clone it at the same time with the clone flag with true value.

```shell
gh repo fork git@github.com:dolphinprojectsoftware/E-commerce_PHP.git --clone=true
```

This will automatically create a fork on your GitHub account and clone it locally.

By default, the new fork is set to be your __origin__ remote and origin remote is renamed to __upstream__.