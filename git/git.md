// git config
git config --global --edit

git config --global --add user.name "test name"

git config --global --unset user.name 

git config --global --unset-all user.name

git config --global --list


 
git rm --cached file // remove newfile added from stage

git checkout file // move to before state

git reset HEAD file // unstage file chnages

git diff
git diff --stat


git reset --soft id

git reset --mixed id

git reset --hard id

git checkout id

git checkout master

git push origin tagName

git push origin --tags



 