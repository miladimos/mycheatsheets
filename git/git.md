// git config
git config --global --edit
git config --global --add user.name "test name"
git config --global --unset user.name 
git config --global --unset-all user.name
git config --global --list
git config --list

git help verb
git verb --help

git log --oneline
git log --stat
git log -4
git log -p
git log --author="user"
git log --before="2020-06-01"  --after="2020-06-05" 

git rm --cached file // remove file from stage

git diff // un staged changes
git diff --stat

git blame file
git blame -e file
git blame -l file
git blame -L 1,3 file
git blame -L 2,+3 file

git reset HEAD file // unstage file chnages
git reset --soft id // checkout to commit and move changes to staging
git reset --hard id // checkout to commit and delete changes
git reset --mixed id // checkout to commit and move changes to working dir

git clean -n 
git clean -f // remove all un tracked files
git clean -df // remove all un tracked directories and contains files

git revert commitId

git checkout file // move to before state
git checkout commitId
git checkout master

git push origin tagName
git push origin --tags

git show commitId

git rev-list HEAD
git rev-list HEAD | wc -l
git rev-list HEAD --count
git rev-list feature ^master
git rev-list 321313..642342
git rev-list 321313..642342 -m 2


git grep word
git grep word file
git grep -c word
git grep -l word
git grep -m word
git grep -e name -e family
git grep --all-match -e name --and -e family

 