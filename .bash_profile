export PATH=/usr/local/share/npm/bin:/usr/local/bin:/usr/local/sbin:$(brew --prefix homebrew/php/php56)/bin:$PATH

alias flushdns='dscacheutil -flushcache && sudo killall -HUP mDNSResponder'
alias opens='open -a Sublime\ Text'
alias ll='ls -lha'
alias untar='tar -zxvf'
alias gsub-all='git submodule foreach git pull --rebase'
alias gupd='git pull --rebase && git push'

function npmls() {
  npm ls "$@" | grep ^[└├]
}

ulimit -n 1600
ulimit -u 2048

[[ -s "$HOME/.profile" ]] && source "$HOME/.profile" # Load the default .profile
[[ -s "$HOME/.rvm/scripts/rvm" ]] && source "$HOME/.rvm/scripts/rvm" # Load RVM into a shell session *as a function*

