export PATH=/usr/local/share/npm/bin:/usr/local/bin:/usr/local/sbin:$PATH
alias flushdns='dscacheutil -flushcache && sudo killall -HUP mDNSResponder'
alias opens='open -a Sublime\ Text'
alias ll='ls -lha'
alias bstunnel='java -jar /BrowserStackTunnel.jar xChIiyYMRzKxewEbMDdR'
alias untar='tar -zxvf'
alias gpull-all='git pull --rebase && cd app/scripts/ && git pull --rebase && cd ../../test && git pull --rebase'

[[ -s "$HOME/.profile" ]] && source "$HOME/.profile" # Load the default .profile
[[ -s "$HOME/.rvm/scripts/rvm" ]] && source "$HOME/.rvm/scripts/rvm" # Load RVM into a shell session *as a function*
