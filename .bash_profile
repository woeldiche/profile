# Set paths and variables
export PATH="/usr/local/share/npm/bin:$PATH"
export PATH="/usr/local/bin:$PATH"
export PATH="/usr/local/sbin:$PATH"
export PATH="./node_modules/.bin:$PATH"
export PATH="$PATH:$HOME/.rvm/bin" # Add RVM to PATH for scripting
export PATH="/usr/local/heroku/bin:$PATH"
export PATH="$HOME/.yarn/bin:$PATH"
export NVM_DIR="/Users/Jesper/.nvm"

# Create aliases
alias flushdns='dscacheutil -flushcache && sudo killall -HUP mDNSResponder'
#alias opens='open -a Sublime\ Text'
alias opena='open -a Atom'
alias openc='open -a Visual\ Studio\ Code'
alias ll='ls -lha'
alias untar='tar -zxvf'
alias gsub-all='git submodule foreach git pull --rebase'
alias gupd='git pull --rebase && git push'

function npmls() {
  npm list "$@" --depth 0
}

# Set ulimits
ulimit -n 1600
#ulimit -u 2048

# JEWO: Uninstalled NVM for now.
# Load rvm / nvm profiles
#[[ -s "$HOME/.profile" ]] && source "$HOME/.profile" # Load the default .profile
#[[ -s "$HOME/.rvm/scripts/rvm" ]] && source "$HOME/.rvm/scripts/rvm" # Load RVM into a shell session *as a function*
#[[ -s "$NVM_DIR/nvm.sh" ]] && . "$NVM_DIR/nvm.sh"  # This loads nvm

# Load keys
ssh-add ~/.ssh/jesper
ssh-add ~/.ssh/jewo_designit
