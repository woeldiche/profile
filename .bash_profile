# Set paths and variables
# export PATH="/usr/local/share/npm/bin:$PATH"
# export PATH="/usr/local/bin:$PATH"
# export PATH="/usr/local/sbin:$PATH"
# export PATH="./node_modules/.bin:$PATH"
# export PATH="$PATH:$HOME/.rvm/bin" # Add RVM to PATH for scripting
# export PATH="/usr/local/heroku/bin:$PATH"
# export PATH="$HOME/.yarn/bin:$PATH"
#export NVM_DIR="/Users/Jesper/.nvm"

export NVM_DIR="$HOME/.nvm"
  [ -s "/usr/local/opt/nvm/nvm.sh" ] && . "/usr/local/opt/nvm/nvm.sh"  # This loads nvm
  [ -s "/usr/local/opt/nvm/etc/bash_completion" ] && . "/usr/local/opt/nvm/etc/bash_completion"  # This loads nvm bash_completion

# Create aliases
alias flushdns='dscacheutil -flushcache && sudo killall -HUP mDNSResponder'
#alias opens='open -a Sublime\ Text'
#alias opena='open -a Atom'
alias openc='open -a Visual\ Studio\ Code'
alias ll='ls -lha'
alias untar='tar -zxvf'
#alias gsub-all='git submodule foreach git pull --rebase'
#alias gupd='git pull --rebase && git push'

# Load keys
ssh-add ~/.ssh/jesper
ssh-add ~/.ssh/jewo_designit