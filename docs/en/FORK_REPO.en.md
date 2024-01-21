<link href="../css/style.css" rel="stylesheet"></link>

# Fork a repo

A fork is a new repository that shares code and visibility settings with the original "upstream" repository.

## Prerequisites

If you haven't yet, first set up Git and authentication with GitHub.com from Git. For more information, see [Set up Git](SET_UP_GIT.en.md).

## Forking repository

### Using Github CLI

To create a fork of [E-commerce_PHP]("https://github.com/dolphinprojectsoftware/E-commerce_PHP") project repository, use the `gh repo fork` subcommand.

```shell
gh repo fork git@github.com:dolphinprojectsoftware/E-commerce_PHP.git
```

### Using Gihub web page

1. On GitHub.com, navigate to the [dolphinprojectsoftware/E-commerce_PHP]("https://github.com/dolphinprojectsoftware/E-commerce_PHP") repository.

2. In the top-right corner of the page, click __Fork__ button for redirect to "Create a new fork" page.

![Fork Button](../images/fork_button.png?raw=true "Fork Button")

1. By default, forks are named the same as upstream repository.

2. Optionally, in the "Description" field, type a description of your fork.

3. Optionally, select __Copy the `main` branch only__.

4. Click __Create fork__ button.





