###############################
#Incremental URL automator#####
###############################
# Shell script to make incremental requests for parameter $c
# Saves output to text files for each value. Search for non-empty ones by:
# $> find * -not -empty -ls

c=1
while [ $c -le 2000 ]
do
        echo "http://<server>:<port>/method/$c"
        exec `curl -b "cookie" "http://<server>:<port>/method/$c">"$c.txt"`
        (( c++ ))
done

