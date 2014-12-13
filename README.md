git_playground
==============

Play with git here

If you want to practice git, because you are new or you wanna test some git commands, **here is for you**.

### Quick start:
Go to your `terminal` (Linux terminal)

First clone this repository to your local computer:

`git clone https://github.com/zkytony/git_playground/`

Now do `ls`, you should see a folder called git_playground.  
Now `cd` into *git_playground*  

**Make your first commit**  
* Do any change inside the folder *git_playground/*, for example, create a file called `dum.txt`  
and write something in it
* See the current status of the repository (Because you created/edited a file, the status of the file in the repository will be different) by:  
`git status`
* Now you should see a file that is *Untracked*. Because you have not yet let Git to keep track of that file. To do this, simply add the file to the stage by `git add FILENAME`  
(stage is where files are going to be committed -- a file's destiny is to be committed, and the file certainly wants to be on the stage to show off!Ha)
* Now do `git status` again. Did you see the green text? Yea, Git has put the files on the stage
* Here comes the BIG part - **commit**. It's so big but so simple:  
`git commit`  
Now enter some thing you wanna say to this commit -- something useful and easy to understand why you are committing...
'ts it! Done!
* Now do `git status` again. The file's gone! It is fulfilling its committment
* Do `git log`. You will see the commit that you just made. It has a UNIQUE commit ID!

**Push to your remote, that is, Github**  
Well, you've done the first commit. And you are feeling great. But you are wondering...Why didn't I see it on GitHub?  
WELL, Because you are *committing* on the local computer...Of course GitHub does not know your commit because it's on the **remote** side!  
So, what you need to do is just `push` your commits to the GitHub remote:

* Now that you have committed, you should setup a default remote url - a url for your remote repository on GitHub.  
(If you cloned this repository from GitHub, you should already have the url set)  
`git remote set-url <remote name> <url>`
The default <remote name> is *origin* -- that's a convention  
* **PUSH**  
`git push origin <branch-name>`  
`<branch-name>` is the name of the branch on your remote repository. The main branch is *master*
* There you go!


### GOOD LUCK!
