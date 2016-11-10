# Bash Killing all background process  
## Introduction
The problem here is to kill all background jobs created by a bash script.  
First run the command
```sh
./another_hello.sh
```
The above shell script contains another shell script as background process, 
the problem here is how kill the process of another_hello.sh and cause the subprocess
to be killed.
## Solution
```sh
pkill -P $$
```
