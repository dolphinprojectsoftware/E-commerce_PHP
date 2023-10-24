## Create SSH key access

Using the SSH protocol, you can connect and authenticate to remote servers and services. With SSH keys, you can connect to GitHub without supplying your username and personal access token at each visit. You can also use an SSH key to sign commits.

### Checking for existing SSH keys

1. Open Terminal.

2. Enter ls -al ~/.ssh to see if existing SSH keys are present.

    ```shell
    $ ls -al ~/.ssh
    # Lists the files in your .ssh directory, if they exist
    ```
3. Check the directory listing to see if you already have a public SSH key. By default, the filenames of supported public keys for GitHub are one of the following.

   * id_rsa.pub
   * id_ecdsa.pub
   * id_ed25519.pub

4. Either generate a new SSH key or upload an existing key.

   * If you don't have a supported public and private key pair, or don't wish to use any that are available, generate a new SSH key.

   * If you see an existing public and private key pair listed (for example, id_rsa.pub and id_rsa) that you would like to use to connect to GitHub, you can add the key to the ssh-agent.

### Generating a new SSH key

1. Open Terminal.

2. Paste the text below, replacing the email used in the example with your GitHub email address.

   ```shell
   ssh-keygen -t ed25519 -C "your_email@example.com"
    ```
   When you're prompted to "Enter a file in which to save the key", you can press Enter to accept the default file location. Please note that if you created SSH keys previously, ssh-keygen may ask you to rewrite another key, in which case we recommend creating a custom-named SSH key. To do so, type the default file location and replace id_ssh_keyname with your custom key name.

   ```
   > Enter a file in which to save the key (/home/YOU/.ssh/ALGORITHM):[Press enter]
    ```
3. At the prompt, type a secure passphrase.

   ```
   > Enter passphrase (empty for no passphrase): [Type a passphrase]
   > Enter same passphrase again: [Type passphrase again]
   ```
### Adding a new SSH key to your account

Adding a new SSH authentication key to your account on GitHub.com, you can reconfigure any local repositories to use SSH.

1. Copy the SSH public key to your clipboard. 

   If your SSH public key file has a different name than the example code, modify the filename to match your current setup. When copying your key, don't add any newlines or whitespace.

    ```shell
   $ cat ~/.ssh/id_ed25519.pub
   # Then select and copy the contents of the id_ed25519.pub file
   # displayed in the terminal to your clipboard
    ```
2. In the upper-right corner of any page, click your profile photo, then click __Settings__.

3. In the "Access" section of the sidebar, click  __SSH and GPG keys__.

4. Click __New SSH key__.

5. In the "Title" field, add a descriptive label for the new key. For example, if you're using a personal laptop, you might call this key "Personal laptop".

6. Select the type of key, either authentication or signing.

7. In the "Key" field, paste your public key.

8. Click __Add SSH key__.

9. If prompted, confirm access to your account on GitHub.

## Clone porject





