###############################
#Recursive extractor###########
###############################
# Shell script to run recursive extractions. 
# Handles *.gz containing *.tar loops.
# Modify based on archive type.

c=1
while [ $c -le 1500 ]
do
 	mv secret secret.gz
    gunzip secret.gz
    tar xvf ./secret
	(( c++ ))
done
